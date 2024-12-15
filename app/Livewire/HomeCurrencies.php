<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Number;
use Livewire\Component;
use Livewire\Attributes\On;

class HomeCurrencies extends Component
{
    public array $currencies;

    public function mount()
    {
        $this->currencies = array(
            'bitcoin' => ['ticker' => 'BTC', 'name' => 'Bitcoin'],
            'ethereum' => ['ticker' => 'ETH', 'name' => 'Ethereum'],
            'ripple' => ['ticker' => 'XRP', 'name' => 'Ripple'],
            'doge' => ['ticker' => 'DOGE', 'name' => 'Doge'],
            'cardano' => ['ticker' => 'ADA', 'name' => 'Cardano'],
            'tron' => ['ticker' => 'TRX', 'name' => 'Tron'],
            'avalanche-2' => ['ticker' => 'AVAX', 'name' => 'Avalanche'],
            'chainlink' => ['ticker' => 'LINK', 'name' => 'Chainlink'],
            'shiba-inu' => ['ticker' => 'SHIB', 'name' => 'Shiba Inu'],
            'the-open-network' => ['ticker' => 'TON', 'name' => 'Toncoin'],

        );

        $this->getPrices();
    }

    private function getPrices()
    {
        $ids = [];
        foreach ($this->currencies as $currency => $ticker) {
            $ids[] = $currency;
        }

        try {
            $response = Http::acceptJson()->withHeaders([
                'x-cg-demo-api-key' => env('CG_API_KEY')
            ])->withQueryParameters([
                'ids' => implode(',', $ids),
                'vs_currencies' => 'usd'
            ])->get('https://api.coingecko.com/api/v3/simple/price');
            
            if ($response->ok()) {
                $currenciesWithPrice = json_decode($response->body(), true);

                foreach ($currenciesWithPrice as $currency => $price) {
                    $this->currencies[$currency]['price'] = $price['usd'];
                }
            }
        } catch (Throwable $e) {
            // Error
        }
    }

    private function getCFGI($token, $values, $period)
    {
        try {
            $response = Http::acceptJson()->withQueryParameters([
                'api_key' => env('CFGI_API_KEY'),
                'token' => $token,
                'values' => $values,
                'period' => $period
            ])->get('https://cfgi.io/api/api_request.php');
            
            if ($response->ok()) {
                $data = $response->json();
                return $data[0]['cfgi'];
            }
        } catch (Throwable $e) {
            // Error
        }
    }

    #[On('getScores')]
    public function getScores()
    {
        foreach ($this->currencies as $currency => $currencyDetails) {
            sleep(1);
            $this->currencies[$currency]['cfgi'] = $this->getCFGI($this->currencies[$currency]['ticker'], 1, 4);
        }
    }

    public function render()
    {
        return view('livewire.home-currencies');
    }
}
