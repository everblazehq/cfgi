<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Http;
use Throwable;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise;

#[Layout('layout.app')]
#[Title('Token Page')]
class TokenPage extends Component
{
    public $coin;
    public $cfgData;
    public $values = 2;
    public $period = 1;

    public function mount($coin, $values = 2, $period = 1)
    {
        $this->coin = $coin;
        $this->values = $values;
        $this->period = $period;
        $this->fetchCFGI();
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'coin') {
            $this->fetchCFGI();
        }
    }

    private function transformData($data)
    {
        return array_map(function ($item) {
            $transformedItem = [];
            foreach ($item as $key => $value) {
                $parts = explode('_', $key);
                if (count($parts) === 1) {
                    $newKey = $parts[0];
                } elseif (count($parts) === 2) {
                    $newKey = $parts[1];
                } else {
                    $newKey = $key; // Fallback to original key if not 1 or 2 parts
                }
                $transformedItem[$newKey] = $value;
            }
            return $transformedItem;
        }, $data);
    }

    private function fetchCFGI()
    {
        $client = new Client();

        $promise = $client->getAsync('https://cfgi.io/api/api_request.php', [
            'query' => [
                'api_key' => env('CFGI_API_KEY'),
                'token' => $this->coin,
                'values' => $this->values,
                'period' => $this->period
            ],
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        $promise->then(
            function ($response) {
                if ($response->getStatusCode() === 200) {
                    $data = json_decode($response->getBody(), true);
                    logger()->info('API Response:', ['data' => $data]);
                    if (is_array($data) && count($data) > 0) {
                        $data = array_slice($data, 1);
                    }
                    $this->cfgData = $this->transformData($data);
                } else {
                    $this->cfgData = null;
                    logger()->error('Error fetching CFGI: Non-OK response', ['status' => $response->getStatusCode()]);
                }
            },
            function (RequestException $e) {
                $this->cfgData = null;
                logger()->error('Error in fetchCFGI method:', ['error' => $e->getMessage()]);
            }
        );

        $promise->wait();
    }

    public function render()
    {
        return view('livewire.token-page', [
            'coin' => $this->coin,
            'cfgData' => $this->cfgData,
        ]);
    }
}


