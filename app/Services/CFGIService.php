<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class CFGIService
{
    public function fetchCFGI($coin, $values, $period)
    {
        $client = new Client();
        try {
            $response = $client->get('https://cfgi.io/api/api_request.php', [
                'query' => [
                    'api_key' => env('CFGI_API_KEY'),
                    'token' => $coin,
                    'values' => $values,
                    'period' => $period
                ],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if ($response->getStatusCode() === 200) {
                return json_decode($response->getBody(), true);
            }
        } catch (RequestException $e) {
            logger()->error('Error in CFGIService:', ['error' => $e->getMessage()]);
            return null;
        }
    }
}
