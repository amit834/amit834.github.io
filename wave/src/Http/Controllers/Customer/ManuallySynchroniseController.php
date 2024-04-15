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
use Wave\OrderItem;

class ManuallySynchroniseController extends Controller
{
    //Function to get synchronise order manually
    public function synchronise_order_manually(Request $request) {
        //Login user id
        $login_user_id = Auth::id();

        //Get login user detail
        $user_detail = User::Where('id',$login_user_id)->first();
        $is_active_connection = $user_detail->is_active_connection;
        $ebay_marketplace = $user_detail->ebay_marketplace;
        //Check connecton type
        if($is_active_connection == "Ebay"){
            //Call Ebay Connection Controller
            $EbayConnectionController = new EbayConnectionController();
            $access_token = $EbayConnectionController->handleTokenRefresh($user_detail);

            //Check if access token is exist
            if($access_token){
                //eBay API endpoint
                $api_url = env('EBAY_API_URI');
                //eBay API endpoint
                $api_endpoint = $api_url.'/sell/fulfillment/v1/order?limit=200&offset=0';

                // Initialize cURL session
                $ch = curl_init();
                curl_setopt_array($ch, [
                    CURLOPT_URL => $api_endpoint,
                    CURLOPT_HTTPGET => true,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => [
                        'Authorization: Bearer ' . $access_token,
                        'Content-Type: application/json',
                        'X-EBAY-C-MARKETPLACE-ID: '.$ebay_marketplace,
                    ],
                ]);
                $response = curl_exec($ch);
                // Process API response
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                //check if status is Success
                if ($http_code === 200) {
                    //Store dummy order data
                    $order_data_list = '{
                      "href": "https://api.sandbox.ebay.com/sell/fulfillment/v1/order?limit=200&offset=0",
                      "total": 2190,
                      "next": "https://api.sandbox.ebay.com/sell/fulfillment/v1/order?limit=200&offset=200",
                      "limit": 200,
                      "offset": 0,
                      "orders": [
                          {
                              "orderId": "1********5",
                              "legacyOrderId": "2********5",
                              "creationDate": "2023-08-02T08:26:18.000Z",
                              "lastModifiedDate": "2023-08-02T08:35:01.000Z",
                              "orderFulfillmentStatus": "NOT_STARTED",
                              "orderPaymentStatus": "PAID",
                              "sellerId": "t********s",
                              "buyer": {
                                  "username": "e********7",
                                  "taxAddress": {
                                      "stateOrProvince": "M********d",
                                      "postalCode": "2***9",
                                      "countryCode": "ES"
                                  },
                                  "buyerRegistrationAddress": {
                                      "fullName": "q********r",
                                      "contactAddress": {
                                          "addressLine1": "S********4",
                                          "city": "A********n",
                                          "stateOrProvince": "d********t",
                                          "postalCode": "2***0",
                                          "countryCode": "BE"
                                      },
                                      "primaryPhone": {
                                          "phoneNumber": "********"
                                      },
                                      "email": "2********@********.com"
                                  }
                              },
                              "pricingSummary": {
                                  "priceSubtotal": {
                                      "value": "100.0",
                                      "currency": "EUR"
                                  },
                                  "deliveryCost": {
                                      "value": "16.26",
                                      "currency": "EUR"
                                  },
                                  "total": {
                                      "value": "116.26",
                                      "currency": "EUR"
                                  }
                              },
                              "cancelStatus": {
                                  "cancelState": "NONE_REQUESTED",
                                  "cancelRequests": []
                              },
                              "paymentSummary": {
                                  "totalDueSeller": {
                                      "value": "85.02",
                                      "currency": "GBP",
                                      "convertedFromValue": "96.43",
                                      "convertedFromCurrency": "EUR"
                                  },
                                  "refunds": [],
                                  "payments": [
                                      {
                                          "paymentMethod": "EBAY",
                                          "paymentReferenceId": "4********S",
                                          "paymentDate": "2023-08-02T08:26:17.257Z",
                                          "amount": {
                                              "value": "85.02",
                                              "currency": "GBP",
                                              "convertedFromValue": "96.43",
                                              "convertedFromCurrency": "EUR"
                                          },
                                          "paymentStatus": "PAID"
                                      }
                                  ]
                              },
                              "fulfillmentStartInstructions": [
                                  {
                                      "fulfillmentInstructionsType": "SHIP_TO",
                                      "minEstimatedDeliveryDate": "2022-02-22T23:00:00.000Z",
                                      "maxEstimatedDeliveryDate": "2022-03-01T23:00:00.000Z",
                                      "ebaySupportedFulfillment": false,
                                      "shippingStep": {
                                          "shipTo": {
                                              "fullName": "B********y",
                                              "contactAddress": {
                                                  "addressLine1": "C********7",
                                                  "city": "A********e",
                                                  "stateOrProvince": "M********d",
                                                  "postalCode": "2***9",
                                                  "countryCode": "ES"
                                              },
                                              "primaryPhone": {},
                                              "email": "2********@********.com"
                                          },
                                          "shippingCarrierCode": "Hermes",
                                          "shippingServiceCode": "DE_HermesPaketInternational"
                                      }
                                  }
                              ],
                              "fulfillmentHrefs": [],
                              "lineItems": [
                                  {
                                      "lineItemId": "1********1",
                                      "legacyItemId": "2********1",
                                      "title": "OSS:UK Bus Seller-IT Loc-Price 123-Regular-SellerVat23%",
                                      "lineItemCost": {
                                          "value": "100.0",
                                          "currency": "EUR"
                                      },
                                      "quantity": 1,
                                      "soldFormat": "FIXED_PRICE",
                                      "listingMarketplaceId": "EBAY_DE",
                                      "purchaseMarketplaceId": "EBAY_AT",
                                      "lineItemFulfillmentStatus": "NOT_STARTED",
                                      "total": {
                                          "value": "116.26",
                                          "currency": "EUR"
                                      },
                                      "deliveryCost": {
                                          "shippingCost": {
                                              "value": "16.26",
                                              "currency": "EUR"
                                          }
                                      },
                                      "appliedPromotions": [],
                                      "taxes": [],
                                      "ebayCollectAndRemitTaxes": [
                                          {
                                              "taxType": "VAT",
                                              "amount": {
                                                  "value": "24.41",
                                                  "currency": "EUR"
                                              },
                                              "collectionMethod": "NET",
                                              "ebayReference": {
                                                  "name": "OSS",
                                                  "value": "EU 123 4567 89"
                                              }
                                          }
                                      ],
                                      "properties": {
                                          "buyerProtection": true
                                      },
                                      "lineItemFulfillmentInstructions": {
                                          "minEstimatedDeliveryDate": "2022-02-22T23:00:00.000Z",
                                          "maxEstimatedDeliveryDate": "2022-03-01T23:00:00.000Z",
                                          "guaranteedDelivery": false
                                      },
                                      "itemLocation": {
                                          "location": "R********k",
                                          "countryCode": "IT",
                                          "postalCode": "2***1"
                                      }
                                  },
                                  {
                                    "lineItemId": "87********1",
                                    "legacyItemId": "95********1",
                                    "title": "New OSS:UK Bus Seller-IT Loc-Price 123-Regular-SellerVat23%",
                                    "lineItemCost": {
                                        "value": "100.0",
                                        "currency": "EUR"
                                    },
                                    "quantity": 1,
                                    "soldFormat": "FIXED_PRICE",
                                    "listingMarketplaceId": "EBAY_DE",
                                    "purchaseMarketplaceId": "EBAY_AT",
                                    "lineItemFulfillmentStatus": "NOT_STARTED",
                                    "total": {
                                        "value": "116.26",
                                        "currency": "EUR"
                                    },
                                    "deliveryCost": {
                                        "shippingCost": {
                                            "value": "16.26",
                                            "currency": "EUR"
                                        }
                                    },
                                    "appliedPromotions": [],
                                    "taxes": [],
                                    "ebayCollectAndRemitTaxes": [
                                        {
                                            "taxType": "VAT",
                                            "amount": {
                                                "value": "24.41",
                                                "currency": "EUR"
                                            },
                                            "collectionMethod": "NET",
                                            "ebayReference": {
                                                "name": "OSS",
                                                "value": "EU 123 4567 89"
                                            }
                                        }
                                    ],
                                    "properties": {
                                        "buyerProtection": true
                                    },
                                    "lineItemFulfillmentInstructions": {
                                        "minEstimatedDeliveryDate": "2022-02-22T23:00:00.000Z",
                                        "maxEstimatedDeliveryDate": "2022-03-01T23:00:00.000Z",
                                        "guaranteedDelivery": false
                                    },
                                    "itemLocation": {
                                        "location": "R********k",
                                        "countryCode": "IT",
                                        "postalCode": "2***1"
                                    }
                                }
                              ],
                              "ebayCollectAndRemitTax": true,
                              "salesRecordReference": "1***2",
                              "totalFeeBasisAmount": {
                                  "value": "140.67",
                                  "currency": "EUR"
                              },
                              "totalMarketplaceFee": {
                                  "value": "19.83",
                                  "currency": "EUR"
                              }
                          },
                          {
                              "orderId": "2********8",
                              "legacyOrderId": "2********5",
                              "creationDate": "2023-08-02T07:49:18.000Z",
                              "lastModifiedDate": "2023-08-02T07:50:52.000Z",
                              "orderFulfillmentStatus": "NOT_STARTED",
                              "orderPaymentStatus": "PAID",
                              "sellerId": "t********s",
                              "buyer": {
                                  "username": "e********4",
                                  "taxAddress": {
                                      "postalCode": "3***5",
                                      "countryCode": "NZ"
                                  },
                                  "buyerRegistrationAddress": {
                                      "fullName": "q********r",
                                      "contactAddress": {
                                          "addressLine1": "2********t",
                                          "city": "S********y",
                                          "stateOrProvince": "N********s",
                                          "postalCode": "2***0",
                                          "countryCode": "AU"
                                      },
                                      "primaryPhone": {
                                          "phoneNumber": "6********3"
                                      },
                                      "email": "0********@********.com"
                                  }
                              },
                              "pricingSummary": {
                                  "priceSubtotal": {
                                      "value": "200.0",
                                      "currency": "USD"
                                  },
                                  "deliveryCost": {
                                      "value": "18.0",
                                      "currency": "USD"
                                  },
                                  "total": {
                                      "value": "218.0",
                                      "currency": "USD"
                                  }
                              },
                              "cancelStatus": {
                                  "cancelState": "NONE_REQUESTED",
                                  "cancelRequests": []
                              },
                              "paymentSummary": {
                                  "totalDueSeller": {
                                      "value": "140.16",
                                      "currency": "GBP",
                                      "convertedFromValue": "189.18",
                                      "convertedFromCurrency": "USD"
                                  },
                                  "refunds": [],
                                  "payments": [
                                      {
                                          "paymentMethod": "EBAY",
                                          "paymentReferenceId": "4********S",
                                          "paymentDate": "2023-08-02T07:49:16.279Z",
                                          "amount": {
                                              "value": "140.16",
                                              "currency": "GBP",
                                              "convertedFromValue": "189.18",
                                              "convertedFromCurrency": "USD"
                                          },
                                          "paymentStatus": "PAID"
                                      }
                                  ]
                              },
                              "fulfillmentStartInstructions": [
                                  {
                                      "fulfillmentInstructionsType": "SHIP_TO",
                                      "minEstimatedDeliveryDate": "2023-08-23T00:00:00.000Z",
                                      "maxEstimatedDeliveryDate": "2023-09-19T00:00:00.000Z",
                                      "ebaySupportedFulfillment": false,
                                      "shippingStep": {
                                          "shipTo": {
                                              "fullName": "B********y",
                                              "contactAddress": {
                                                  "addressLine1": "1********e",
                                                  "city": "P********i",
                                                  "postalCode": "3***5",
                                                  "countryCode": "NZ"
                                              },
                                              "primaryPhone": {
                                                  "phoneNumber": "2********3"
                                              },
                                              "email": "2********@********.com"
                                          },
                                          "shippingCarrierCode": "USPS",
                                          "shippingServiceCode": "USPSFirstClassMailInternational"
                                      }
                                  }
                              ],
                              "fulfillmentHrefs": [],
                              "lineItems": [
                                  {
                                      "lineItemId": "1********6",
                                      "legacyItemId": "2********4",
                                      "title": "U********e",
                                      "lineItemCost": {
                                          "value": "200.0",
                                          "currency": "USD"
                                      },
                                      "quantity": 1,
                                      "soldFormat": "FIXED_PRICE",
                                      "listingMarketplaceId": "EBAY_US",
                                      "purchaseMarketplaceId": "EBAY_US",
                                      "lineItemFulfillmentStatus": "NOT_STARTED",
                                      "total": {
                                          "value": "218.0",
                                          "currency": "USD"
                                      },
                                      "deliveryCost": {
                                          "shippingCost": {
                                              "value": "18.0",
                                              "currency": "USD"
                                          }
                                      },
                                      "appliedPromotions": [],
                                      "taxes": [],
                                      "ebayCollectAndRemitTaxes": [
                                          {
                                              "taxType": "GST",
                                              "amount": {
                                                  "value": "32.7",
                                                  "currency": "USD"
                                              },
                                              "collectionMethod": "NET",
                                              "ebayReference": {
                                                  "name": "GST",
                                                  "value": "IRD#126-101-678"
                                              }
                                          }
                                      ],
                                      "properties": {
                                          "buyerProtection": true
                                      },
                                      "lineItemFulfillmentInstructions": {
                                          "minEstimatedDeliveryDate": "2023-08-23T00:00:00.000Z",
                                          "maxEstimatedDeliveryDate": "2023-09-19T00:00:00.000Z",
                                          "shipByDate": "2023-08-04T06:59:59.000Z",
                                          "guaranteedDelivery": false
                                      },
                                      "itemLocation": {
                                          "location": "F********a",
                                          "countryCode": "US",
                                          "postalCode": "9***6"
                                      }
                                  }
                              ],
                              "ebayCollectAndRemitTax": true,
                              "salesRecordReference": "18401",
                              "totalFeeBasisAmount": {
                                  "value": "250.7",
                                  "currency": "USD"
                              },
                              "totalMarketplaceFee": {
                                  "value": "28.82",
                                  "currency": "USD"
                              }
                          }
                      ]
                    }';
                    // Decode JSON data into an associative array
                    $array_order_data_list = json_decode($order_data_list, true);
                    //Check if order is exits or not
                    if(count($array_order_data_list['orders']) >= 1){
                      foreach ($array_order_data_list['orders'] as $key => $order_detail) {
                        //Get order id and item list
                        $order_id = $order_detail['orderId'] ?? "";
                        $order_items = $order_detail['lineItems'] ?? [];
                        //update or create order
                        $updateOrCreate = Order::updateOrCreate(
                          [
                              'user_id' => $login_user_id,
                              'order_id' => $order_id,
                              'connection_type' => 'Ebay'
                          ],
                          [
                              'user_id' => $login_user_id,
                              'order_id' => $order_id,
                              'legacy_order_id' => $order_detail['legacyOrderId'] ?? "",
                              'creation_date' => $order_detail['creationDate'] ?? "",
                              'last_modified_date' => $order_detail['lastModifiedDate'] ?? "",
                              'order_fulfillment_status' => $order_detail['orderFulfillmentStatus'] ?? "",
                              'order_payment_status' => $order_detail['orderPaymentStatus'] ?? "",
                              'seller_id' => $order_detail['sellerId'] ?? "",
                              'ebay_collect_and_remit_tax' => $order_detail['ebayCollectAndRemitTax'] ?? "",
                              'sales_record_reference' => $order_detail['salesRecordReference'] ?? "",
                              'total_fee_basis_amount_value' => $order_detail['totalFeeBasisAmount']['value'] ?? "",
                              'total_fee_basis_amount_value_currency' => $order_detail['totalFeeBasisAmount']['currency'] ?? "",
                              'total_market_place_fee_value' => $order_detail['totalMarketplaceFee']['value'] ?? "",
                              'total_market_place_fee_currency' => $order_detail['totalMarketplaceFee']['currency'] ?? "",
                              'connection_type' => 'Ebay',
                          ]
                        );

                        //Call Create Order Line Items Function
                        $table_order_id = $updateOrCreate->id;
                        $this->ebay_create_line_items($table_order_id,$order_id,$order_items);
                      }
                    }
                    //echo "<pre>"; print_r($array_order_data_list);
                    echo '<p style="color:green;">Order list fetched successfully.</p>';
                    echo '<script>setTimeout(function() { window.location.href = ""; }, 3000);</script>';
              } else {
                  echo '<p style="color:red;">Oops Something wrong with eBay.</p>';
              }
              //echo "<pre>"; print_r($parsedResponse); 
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
            echo '<p style="color:red;">Please Set And Configure Atleast one connection for synchronise order.</p>';
        }
    }

    //Function for insert order line items
    public static function ebay_create_line_items($table_order_id,$order_id,$order_items){
      //Check if order items is exists or not
      if(count($order_items) >= 1){
        foreach($order_items as $key => $item_detail) {
          //Create line item
          OrderItem::updateOrCreate(
            [
                'table_order_id' => $table_order_id,
                'order_id' => $order_id,
                'line_item_id' => $item_detail['lineItemId']
            ],
            [
                'table_order_id' => $table_order_id ?? "",
                'order_id' => $order_id ?? "",
                'line_item_id' => $item_detail['lineItemId'] ?? "",
                'legacy_item_id' => $item_detail['legacyItemId'] ?? "",
                'title' => $item_detail['title'] ?? "",
                'line_item_cost_value' => $item_detail['lineItemCost']['value'] ?? "",
                'line_item_cost_currency' => $item_detail['lineItemCost']['currency'] ?? "",
                'quantity' => $item_detail['quantity'] ?? "",
                'sold_format' => $item_detail['soldFormat'] ?? "",
                'listing_market_place_id' => $item_detail['listingMarketplaceId'] ?? "",
                'purchase_market_place_id' => $item_detail['purchaseMarketplaceId'] ?? "",
                'line_item_fulfillment_status' => $item_detail['lineItemFulfillmentStatus'] ?? "",
                'total_value' => $item_detail['total']['value'] ?? "",
                'total_currency' => $item_detail['total']['currency'] ?? "",
                'shipping_cost_value' => $item_detail['deliveryCost']['shippingCost']['value'] ?? "",
                'shipping_cost_currency' => $item_detail['deliveryCost']['shippingCost']['currency'] ?? "",
                'item_location' => $item_detail['itemLocation']['location'] ?? "",
                'item_location_country_code' => $item_detail['itemLocation']['countryCode'] ?? "",
                'item_location_postal_code' => $item_detail['itemLocation']['postalCode'] ?? "",
            ]
          );
        }
      }
    }
}

