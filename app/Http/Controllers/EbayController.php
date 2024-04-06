<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EbayController extends Controller
{
    public function auth()
    {
        $clientId = env('EBAY_CLIENT_ID');
        $redirectUri = env('EBAY_REDIRECT_URI');
        
        $authUrl = "https://auth.sandbox.ebay.com/oauth2/authorize?client_id={$clientId}&redirect_uri=" . urlencode($redirectUri) . "&response_type=code&scope=https://api.ebay.com/oauth/api_scope";
        
        // Redirect the user to eBay authorization page
        return redirect()->away($authUrl);
    }
  
    public function callback(Request $request)
{
    $clientId = env('EBAY_CLIENT_ID');
    $clientSecret = env('EBAY_CLIENT_SECRET');
    $redirectUri = env('EBAY_REDIRECT_URI');

    $code = $request->query('code');

    $response = Http::asForm()->post('https://api.sandbox.ebay.com/identity/v1/oauth2/token', [
        'grant_type' => 'authorization_code',
        'code' => $code,
        'redirect_uri' => $redirectUri,
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
    ]);

    // Check if the request was successful
    if ($response->successful()) {
        // Decode the JSON response
        $responseData = $response->json();

        // Check if the response contains the access_token
        if (isset($responseData['access_token'])) {
            $accessToken = $responseData['access_token'];
            // You can store $accessToken in the session or database for future use.
            // For example, you might want to save it to the user's session or associate it with their account.
            return "Access Token: $accessToken";
        } else {
            // If access_token is not present in the response, log the response for debugging
            Log::error("Access token not found in eBay OAuth response: " . json_encode($responseData));
            return "Error: Access token not found in response. Please check logs for details.";
        }
    } else {
        // If the request was not successful, log the error response for debugging
        Log::error("Error occurred during eBay OAuth request: " . $response->body());
        return "Error: Failed to retrieve access token from eBay. Please check logs for details.";
    }
}

}
 