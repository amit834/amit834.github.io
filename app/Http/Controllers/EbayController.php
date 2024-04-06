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
          $response = Http::asForm()->post('https://api.ebay.com/identity/v1/oauth2/token', [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $redirectUri,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ]);
        
        $accessToken = $response->json()['access_token'];

        // You can store $accessToken in the session or database for future use.

        return "Access Token: $accessToken";
    }
}
 