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
        //Login user id
        $login_user_id = Auth::id();
        
        //update user token
        $update_user = User::Where('id',$login_user_id)->update(['is_ebay_connection' => 'enable', 'ebay_username' => $request->ebay_user_name, 'ebay_marketplace' => $request->ebay_user_marketplace]);
        
        //Call Api Perameters
        $api_endpoint = env('EBAY_API_AUTH_URI');
        $clientId = env('EBAY_APP_ID');
        $redirectUri = url('/').'/customer/get-ebay-connection';
        $scope = 'https://auth.sandbox.ebay.com/oauth2/authorize?client_id=Christia-SO-SBX-f9732910e-519415a1&response_type=code&redirect_uri=Christian_David-Christia-SO-SBX-numyggpf&scope=https://api.ebay.com/oauth/api_scope https://api.ebay.com/oauth/api_scope/buy.order.readonly https://api.ebay.com/oauth/api_scope/buy.guest.order https://api.ebay.com/oauth/api_scope/sell.marketing.readonly https://api.ebay.com/oauth/api_scope/sell.marketing https://api.ebay.com/oauth/api_scope/sell.inventory.readonly https://api.ebay.com/oauth/api_scope/sell.inventory https://api.ebay.com/oauth/api_scope/sell.account.readonly https://api.ebay.com/oauth/api_scope/sell.account https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly https://api.ebay.com/oauth/api_scope/sell.fulfillment https://api.ebay.com/oauth/api_scope/sell.analytics.readonly https://api.ebay.com/oauth/api_scope/sell.marketplace.insights.readonly https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly https://api.ebay.com/oauth/api_scope/buy.shopping.cart https://api.ebay.com/oauth/api_scope/buy.offer.auction https://api.ebay.com/oauth/api_scope/commerce.identity.readonly https://api.ebay.com/oauth/api_scope/commerce.identity.email.readonly https://api.ebay.com/oauth/api_scope/commerce.identity.phone.readonly https://api.ebay.com/oauth/api_scope/commerce.identity.address.readonly https://api.ebay.com/oauth/api_scope/commerce.identity.name.readonly https://api.ebay.com/oauth/api_scope/commerce.identity.status.readonly https://api.ebay.com/oauth/api_scope/sell.finances https://api.ebay.com/oauth/api_scope/sell.payment.dispute https://api.ebay.com/oauth/api_scope/sell.item.draft https://api.ebay.com/oauth/api_scope/sell.item https://api.ebay.com/oauth/api_scope/sell.reputation https://api.ebay.com/oauth/api_scope/sell.reputation.readonly https://api.ebay.com/oauth/api_scope/commerce.notification.subscription https://api.ebay.com/oauth/api_scope/commerce.notification.subscription.readonly https://api.ebay.com/oauth/api_scope/sell.stores https://api.ebay.com/oauth/api_scope/sell.stores.readonly';

        //Api Url
        $authUrl = $api_endpoint."/oauth2/authorize?client_id=".$clientId."&response_type=code&redirect_uri=".$redirectUri."&scope=".$scope;

        // Redirect user to eBay sign-in page
        echo '<p style="color:green;">You will be redirected to eBay. Please Wait...</p>';
        echo '<script>setTimeout(function() { window.location.href = "' . $authUrl . '"; }, 3000);</script>';
    }

    // Function to handle eBay authorization callback
    public function ebay_authorization_callback(Request $request) {
        //Login user id
        $login_user_id = Auth::id();

        // Authorization code received from eBay
        $code = $_GET['code']; 
        $api_endpoint = env('EBAY_API_AUTH_URI');
        $tokenUrl =  "https://api.sandbox.ebay.com/identity/v1/oauth2/token";
        $clientId = env('EBAY_APP_ID');
        $clientSecret = env('EBAY_CLIENT_SECRET');
        $redirectUri = url('/').'/customer/get-ebay-connection';

        //Data for passing
        $data = [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $redirectUri,
        ];
        $authHeader = base64_encode("$clientId:$clientSecret");

        //Curl call
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
        if($access_token){
            //update user token
            $update_user = User::Where('id',$login_user_id)->update(['ebay_token' => $access_token, 'ebay_expires_in' => $expires_in, 'ebay_refresh_token' => $refresh_token, 'ebay_refresh_token_expires_in' => $refresh_token_expires_in, 'is_active_connection' => 'Ebay']);

            // Redirect after successful authentication
            return redirect('customer/my-account')->with('success', 'eBay Authentication Successfully Done.');
        } else { 
            // Redirect after successful authentication
            return redirect('customer/my-account')->with('unsuccess', 'Oops Something Wrong With eBay Authentication.');
        }
    }

    //Function to check if access token is expired
    public function accessTokenExpired($expiresIn){
        // Assume the token is expired if expiresIn is not set
        if (!$expiresIn) {
            return true;
        }

        // Check if token expires soon (e.g., 30 seconds buffer)
        return $expiresIn <= 30;
    }

    //Function to refresh access token using the refresh token
    public function refreshEbayTokens($ebayRefreshToken){
        // Your eBay API endpoint for token refresh
        $tokenUrl = "https://api.sandbox.ebay.com/identity/v1/oauth2/token";
        $clientId = env('EBAY_APP_ID');
        $clientSecret = env('EBAY_CLIENT_SECRET');

        // Data for passing
        $data = [
            'grant_type' => 'refresh_token',
            'refresh_token' => $ebayRefreshToken,
        ];
        $authHeader = base64_encode("$clientId:$clientSecret");

        // Curl call
        $ch = curl_init($tokenUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Basic ' . $authHeader,
            'Content-Type: application/x-www-form-urlencoded',
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        // Response handling
        $responseData = json_decode($response, true);
        $access_token = $responseData['access_token'] ?? null;
        $expires_in = $responseData['expires_in'] ?? null;

        // Check if token is not null and update user token
        if($access_token){
            $login_user_id = Auth::id();
            $update_user = User::where('id',$login_user_id)->update([
                'ebay_token' => $access_token,
                'ebay_expires_in' => $expires_in,
                'is_active_connection' => 'Ebay'
            ]);

            return $access_token; // Return the new access token
        } else {
            return null; // Token refresh failed
        }
    }

    //Handle token refresh
    public function handleTokenRefresh($user_detail){
        $existingAccessToken = $user_detail->ebay_token;
        $ebayRefreshToken = $user_detail->ebay_refresh_token;
        $ebayExpiresIn = $user_detail->ebay_expires_in;

        //Check if access token is expired
        if($this->accessTokenExpired($ebayExpiresIn)) {
            // Call function to refresh tokens
            $newAccessToken = $this->refreshEbayTokens($ebayRefreshToken);

            if ($newAccessToken) {
                return $newAccessToken;
            } else {
                return null;
            }
        } else {
            // Access token is still valid, but we want a new token
            $newAccessToken = $this->refreshEbayTokens($ebayRefreshToken);
            
            if ($newAccessToken) {
                return $newAccessToken;
            } else {
                return null;
            }
        }
    }
}

