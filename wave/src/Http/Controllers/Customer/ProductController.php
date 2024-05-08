<?php

namespace Wave\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Wave\Http\Controllers\Customer\EbayConnectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;

use Wave\User;
use Wave\Order;
use Wave\ShippinDetail;
use Wave\BuyerDetail;
use Wave\OrderItem;
use Wave\Listing;
use Wave\ListingItem;

class ProductController extends Controller
{

    //Function for add new product page
    public function add_new_product(){
        //Login user id
        $login_user_id = Auth::id();

        //Get Listing
        $all_listing = Listing::Where('user_id',$login_user_id)->get()->toArray();

        return view('theme::customer.add-new-prodcut',compact('all_listing'));
    }

    //Function for submit product
    public function submit_product(Request $request){
        //Login user id
        $login_user_id = Auth::id();
      
        //Get login user detail
        $user_detail = User::Where('id',$login_user_id)->first();
        $is_active_connection = $user_detail->is_active_connection;
        $ebay_marketplace = $user_detail->ebay_marketplace;
        //Check connecton type
        if($is_active_connection == "Ebay"){
            //Call Ebay connection details
            $ebay_connection_detail = is_active_ebay_connection_api_detail();
            //Check if Active or not
            if(count($ebay_connection_detail) >= 1){
                //Call Ebay Connection Controller
                $EbayConnectionController = new EbayConnectionController();
                $access_token = $EbayConnectionController->handleTokenRefresh($user_detail);

                //Check if access token is exist
                if($access_token){ 
                    //Store product payload
                    $product_data_payload = [
                        "availability" => [
                            "shipToLocationAvailability" => [
                                "quantity" => 50
                            ]
                        ],
                        "condition" => "NEW",
                        "product" => [
                            "title" => "GoPro Hero4 Helmet Cam",
                            "description" => "New GoPro Hero4 Helmet Cam. Unopened box.",
                            "aspects" => [
                                "Brand" => [
                                    "GoPro"
                                ],
                                "Type" => [
                                    "Helmet/Action"
                                ],
                                "Storage Type" => [
                                    "Removable"
                                ],
                                "Recording Definition" => [
                                    "High Definition"
                                ],
                                "Media Format" => [
                                    "Flash Drive (SSD)"
                                ],
                                "Optical Zoom" => [
                                    "10x"
                                ]
                            ],
                            "brand" => "GoPro",
                            "mpn" => "CHDHX-401",
                            "imageUrls" => [
                                "https://i*****g.com/0**********/**********1.jpg",
                                "https://i*****g.com/0**********/**********2.jpg",
                                "https://i*****g.com/0**********/**********3.jpg"
                            ]
                        ]
                    ]; 
                    
                    // Initialize cURL session
                    $product_ch = curl_init();
                    curl_setopt_array($product_ch, [
                        CURLOPT_URL => 'https://api.sandbox.ebay.com/sell/inventory/v1/inventory_item/G********1',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_CUSTOMREQUEST => 'PUT', // Use PUT method
                        CURLOPT_POSTFIELDS => '{
                            "availability": {
                                "shipToLocationAvailability": {
                                    "quantity": 50
                                }
                            },
                            "condition": "NEW",
                            "product": {
                                "title": "GoPro Hero4 Helmet Cam",
                                "description": "New GoPro Hero4 Helmet Cam. Unopened box.",
                                "aspects": {
                                    "Brand": [
                                        "GoPro"
                                    ],
                                    "Type": [
                                        "Helmet/Action"
                                    ],
                                    "Storage Type": [
                                        "Removable"
                                    ],
                                    "Recording Definition": [
                                        "High Definition"
                                    ],
                                    "Media Format": [
                                        "Flash Drive (SSD)"
                                    ],
                                    "Optical Zoom": [
                                        "10x"
                                    ]
                                },
                                "brand": "GoPro",
                                "mpn": "CHDHX-401",
                                "imageUrls": [
                                    "https://i*****g.com/0**********/**********1.jpg",
                                    "https://i*****g.com/0**********/**********2.jpg",
                                    "https://i*****g.com/0**********/**********3.jpg"
                                ]
                            }
                        }', // Set the data to be sent
                        CURLOPT_HTTPHEADER => [
                            'Authorization: Bearer ' . $access_token,
                            'Content-Type: application/json',
                            'X-EBAY-C-MARKETPLACE-ID: ' . $ebay_marketplace,
                            'Content-Language: en-US' // Add Content-Language header
                        ],
                    ]);

                    $response = curl_exec($product_ch);
                    $httpCode = curl_getinfo($product_ch, CURLINFO_HTTP_CODE);
                    echo $httpCode;
                    exit;
                    // Check HTTP response code and process response
                    if ($httpCode >= 200 && $httpCode < 300) {
                        // Success
                        echo "Inventory item updated successfully.";
                        echo "Response: " . $response; // Print response for debugging
                        print_r($response);
                    } else {
                        // Error handling
                        echo "Error updating inventory item. HTTP Code: " . $httpCode;
                        echo "Response: " . $response; // Print response for debugging
                    }

                    // Close cURL session
                    curl_close($product_ch);
                    exit;


                    return back()->with('success', 'connection for synchronise order');
                } else {
                    return back()->with('unsuccess', 'Oops Something wrong with eBay authication.');
                }
            } else {
                return back()->with('unsuccess', 'eBay Connection Not Enabled. Please Contact With Support.');
            }
        } elseif($is_active_connection == "Amazon"){
            echo "Amazon";
        } elseif($is_active_connection == "Google"){ 
            echo "Google";
        } else {
            return back()->with('unsuccess', 'Please Set And Configure Atleast one connection for synchronise order');
        }
    }
}