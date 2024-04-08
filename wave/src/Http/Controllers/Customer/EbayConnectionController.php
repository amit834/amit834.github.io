<?php

namespace Wave\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use Wave\User;

class EbayConnectionController extends Controller
{
    //Function to handle eBay connection and authorization
    public function submit_ebay_connection(Request $request) {
        //Call Api Perameters
        $api_endpoint = env('EBAY_API_URI');
        $clientId = env('EBAY_APP_ID');
        $redirectUri = url('/').'/customer/get-ebay-connection';
        $scope = 'https://api.ebay.com/oauth/api_scope';

        //Api Url
        $authUrl = $api_endpoint."/oauth2/authorize?client_id=".$clientId."&response_type=code&redirect_uri=".$redirectUri."&scope=".$scope;

        // Redirect user to eBay sign-in page
        echo '<p style="color:green;">Please Wait..</p>';
        echo '<script>setTimeout(function() { window.location.href = "' . $authUrl . '"; }, 3000);</script>';
    }

    // Function to handle eBay authorization callback
    public function ebay_authorization_callback(Request $request) {
        //Login user id
        $login_user_id = Auth::id();
        //update user token
        $update_user = User::Where('id',$login_user_id)->update(['is_ebay_connection' => 'enable', 'ebay_username' => $request->ebay_user_name, 'ebay_marketplace' => $request->ebay_user_marketplace]);

        // Authorization code received from eBay
        $code = $_GET['code']; 
        $api_endpoint = env('EBAY_API_URI');
        $tokenUrl =  $api_endpoint."/identity/v1/oauth2/token";
        $clientId = env('EBAY_APP_ID');
        $clientSecret = env('EBAY_CLIENT_SECRET');
        $redirectUri = url('/').'/customer/get-ebay-connection';; 

        //Data for passing
        $data = [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $redirectUri,
        ];
        $authHeader = base64_encode("$clientId:$clientSecret");

        //Curl Api call
        $ch = curl_init($tokenUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Basic ' . $authHeader,
            'Content-Type: application/x-www-form-urlencoded',
        ]);
        //Responce
        $response = curl_exec($ch);
        curl_close($ch);
        //Responce json to array decode
        $responseData = json_decode($response, true);
        $access_token = $responseData['access_token'] ?? null;
        $expires_in = $responseData['expires_in'] ?? null;
        $refresh_token = $responseData['refresh_token'] ?? null;
        $refresh_token_expires_in = $responseData['refresh_token_expires_in'] ?? null;
        //Check if token is not null
        if($access_token != null){
            //update user token
            $update_user = User::Where('id',$login_user_id)->update(['ebay_token' => $access_token, 'ebay_expires_in' => $expires_in, 'ebay_refresh_token' => $refresh_token, 'ebay_refresh_token_expires_in' => $refresh_token_expires_in]);

            // Redirect after successful authentication
            return redirect('customer/my-account')->with('success', 'eBay Authentication Successfully Done.');
        } else { 
            // Redirect after successful authentication
            return redirect('customer/my-account')->with('unsuccess', 'Oops Something Wrong With eBay Authentication.');
        }
    }
}

