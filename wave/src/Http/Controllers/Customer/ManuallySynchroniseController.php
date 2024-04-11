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

class ManuallySynchroniseController extends Controller
{
    //Function to get synchronise order manually
    public function synchronise_order_manually(Request $request) {
        //Login user id
        $login_user_id = Auth::id();

        //Get login user detail
        $user_detail = User::Where('id',$login_user_id)->first();
        $is_active_connection = $user_detail->is_active_connection;
        //Check connecton type
        if($is_active_connection == "Ebay"){
            //Call Ebay Connection Controller
            $EbayConnectionController = new EbayConnectionController();
            $access_token = $EbayConnectionController->handleTokenRefresh($user_detail);
          
            //Check if access token is exist
            if($access_token){
                //eBay API endpoint
                $api_endpoint = env('EBAY_API_URI');
                $endpoint = $api_endpoint.'/ws/api.dll';

                // API request headers
                $headers = array(
                    'X-EBAY-API-COMPATIBILITY-LEVEL: 967',
                    'X-EBAY-API-SITEID: 0',
                    'X-EBAY-API-CALL-NAME: GetOrders',
                    'Content-Type: text/xml',
                );

                // API request body (XML format)
                $body = '<?xml version="1.0" encoding="UTF-8"?>
                <GetOrdersRequest xmlns="urn:ebay:apis:eBLBaseComponents">
                <RequesterCredentials>
                    <eBayAuthToken>'.$access_token.'</eBayAuthToken>
                </RequesterCredentials>
                <OrderIDArray>
                    <OrderID>YOUR_ORDER_ID</OrderID>
                </OrderIDArray>
                </GetOrdersRequest>';

                // Initialize cURL session
                $ch = curl_init();

                // Set cURL options
                curl_setopt($ch, CURLOPT_URL, $endpoint);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Execute cURL request
                $response = curl_exec($ch);

                // Check for errors
                if (curl_errno($ch)) {
                    echo 'Error: ' . curl_error($ch);
                } else {
                    // Handle API response (parse JSON or XML as needed)
                    $parsedResponse = simplexml_load_string($response);
                    // Process $parsedResponse to extract order information
                    echo "<pre>"; print_r($parsedResponse); // Example: Output the parsed XML response
                }

                // Close cURL session
                curl_close($ch);
            } else {
                echo '<p style="color:Red;">Oops Something wrong with eBay authication.</p>';
            }
        } elseif($is_active_connection == "Amazon"){
            echo "Amazon";
        } elseif($is_active_connection == "Google"){ 
            echo "Google";
        } else {
            echo '<p style="color:red;">Please Set And Configure atleast one connection for synchronise order.</p>';
        }
    }
}

