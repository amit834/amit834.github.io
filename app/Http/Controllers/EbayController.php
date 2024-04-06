<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class EbayController extends Controller
{
    private $clientId = 'Amitkuma-moon-SBX-f972032de-2f170469';
    private $clientSecret = 'SBX-ac328802bbb4-f074-4aca-ac7e-ecfd';
    private $redirectUri = 'https://pixxeluclients.com/php-dev/ebay-connection/ebay/callback';
    private $authUrl = 'https://auth.sandbox.ebay.com/oauth2/authorize?client_id={$clientId}&redirect_uri=" . urlencode($redirectUri) . "&response_type=code&scope=https://api.ebay.com/oauth/api_scope';
    private $tokenUrl = 'https://api.sandbox.ebay.com/identity/v1/oauth2/token';
    public function auth(Request $request)
    {
     
        $code = $request->input('code');

        // Make a request to exchange the authorization code for an access token
        $client = new Client();
        $response = $client->post($this->tokenUrl, [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => $this->redirectUri,
            ],
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret),
            ],
        ]);

        // Decode the response body
        $tokenData = json_decode((string)$response->getBody(), true);

        // Handle the token response (save to database, etc.)
        // For example:
        $accessToken = $tokenData['access_token'];
        $refreshToken = $tokenData['refresh_token'];
        // Save these tokens to your database or session for later use

        // Optionally, redirect the user or return some response
        return redirect()->route('home')->with('success', 'Token acquired successfully!');
    }

    // Method to initiate the authentication flow
    public function authenticate()
    {
        $queryParams = http_build_query([
            'client_id' => $this->clientId,
            'response_type' => 'code',
            'redirect_uri' => $this->redirectUri,
            'scope' => 'https://api.ebay.com/oauth/api_scope',
        ]);

        // Redirect user to eBay's authorization endpoint
        return redirect()->away($this->authUrl . '?' . $queryParams);
    }
    
}
 