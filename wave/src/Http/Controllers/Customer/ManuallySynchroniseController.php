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
    //Function to get synchronise orders manually
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
          
       
// eBay sandbox API endpoint
$api_endpoint = 'https://api.sandbox.ebay.com/sell/fulfillment/v1/order';

// Replace 'YourSandboxUserToken' with your actual eBay sandbox user token

// Construct the XML request (example order data)
$xml_request = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<AddOrderRequest xmlns="urn:ebay:apis:eBLBaseComponents">
  <RequesterCredentials>
    <eBayAuthToken>$access_token</eBayAuthToken>
  </RequesterCredentials>
  <Order>
    <!-- Call-specific Input Fields -->
    <OrderType>Place</OrderType>
    <CreatingUserRole>Buyer</CreatingUserRole>
    <PaymentMethods>PayPal</PaymentMethods>
    <SellerEmail>seller@example.com</SellerEmail>
    <ShippingDetails>
      <InternationalShippingServiceOption>
        <ShippingService>USPSPriorityMailInternational</ShippingService>
        <ShippingServiceAdditionalCost>2.50</ShippingServiceAdditionalCost>
        <ShippingServiceCost>12.00</ShippingServiceCost>
        <ShippingServicePriority>1</ShippingServicePriority>
        <ShipToLocation>Worldwide</ShipToLocation>
      </InternationalShippingServiceOption>
      <SalesTax>
        <SalesTaxPercent>8.5</SalesTaxPercent>
        <SalesTaxState>CA</SalesTaxState>
        <ShippingIncludedInTax>true</ShippingIncludedInTax>
      </SalesTax>
      <ShippingServiceOptions>
        <ShippingService>USPSFirstClass</ShippingService>
        <ShippingServiceAdditionalCost>1.00</ShippingServiceAdditionalCost>
        <ShippingServiceCost>5.00</ShippingServiceCost>
        <ShippingServicePriority>2</ShippingServicePriority>
      </ShippingServiceOptions>
      <ThirdPartyCheckout>false</ThirdPartyCheckout>
    </ShippingDetails>
    <Total currencyID="USD">25.00</Total>
    <TransactionArray>
      <Transaction>
        <Item>
          <ItemID>1234567890</ItemID>
          <!-- Add other item details here -->
        </Item>
        <TransactionID>9876543210</TransactionID>
      </Transaction>
      <!-- Add more Transaction nodes for multiple items -->
    </TransactionArray>
  </Order>
  <!-- Standard Input Fields -->
  <ErrorLanguage>en_US</ErrorLanguage>
  <InvocationID>UUID1234567890</InvocationID>
  <MessageID>4567890</MessageID>
  <Version>1.0</Version>
  <WarningLevel>High</WarningLevel>
</AddOrderRequest>
XML;

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt_array($ch, [
    CURLOPT_URL => $api_endpoint,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $xml_request,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/xml',
        'X-EBAY-C-MARKETPLACE-ID: ebay.com', // eBay marketplace ID
        'Authorization: Bearer '.$access_token, // Authorization header with your access token
    ],
    CURLOPT_RETURNTRANSFER => true,
]);

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Process API response (handle success or error responses)
    $parsed_response = htmlspecialchars($response);
    // Handle $parsed_response according to your needs
    echo "<pre>";
    print_r($parsed_response);
}

// Close cURL session
curl_close($ch);

exit;

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
                    'X-EBAY-API-SANDBOX-REQUEST: true',
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
                curl_setopt($ch, CURLOPT_URL, $endpoint);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                // Handle API response (parse JSON or XML as needed)
                $parsedResponse = simplexml_load_string($response);
                //check if status is Success
                if($parsedResponse->Ack == "Success"){
                    echo '<p style="color:green;">Order list fetched successfully.</p>';
                } else {
                    echo '<p style="color:green;">Order list fetched successfully.</p>';
                }
                echo "<pre>"; print_r($parsedResponse); 
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

