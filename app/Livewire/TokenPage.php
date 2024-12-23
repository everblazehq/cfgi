<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CFGIService;
use App\Services\TestDataService;
use App\Traits\TimeCalculations;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class TokenPage extends Component
{
    use TimeCalculations;

    public $coin = 'BTC';
    public $cfgData = [];
    public $values = 20;
    public $currentIndex = 0;
    public $count = 2;
    public $period = 1;
    public $useTestData = false;
    public $timeRemaining;
    public $countdownPercentage;
    public $nextStartTime;
    private $apiCalled = false;
    public $timeData = [];
    public $testMode;
    public $selectedOptions;
    public $options = [
        1 => [
            ['id' => 1, 'label' => '4 months', 'value' => 122],
            ['id' => 2, 'label' => '2 months', 'value' => 61],
            ['id' => 3, 'label' => '1 month', 'value' => 30],
            ['id' => 4, 'label' => '7 days', 'value' => 7]
        ],
        2 => [
            ['id' => 1, 'label' => '20 days', 'value' => 120],
            ['id' => 2, 'label' => '11 days', 'value' => 66],
            ['id' => 3, 'label' => '5 days', 'value' => 30],
            ['id' => 4, 'label' => '1 day', 'value' => 6]
        ],
        3 => [
            ['id' => 1, 'label' => '5 days', 'value' => 120],
            ['id' => 2, 'label' => '2 days', 'value' => 48],
            ['id' => 3, 'label' => '24 hours', 'value' => 24],
            ['id' => 4, 'label' => '7 hour', 'value' => 7]
        ],
        4 => [
            ['id' => 1, 'label' => '30 hours', 'value' => 120],
            ['id' => 2, 'label' => '16 hours', 'value' => 64],
            ['id' => 3, 'label' => '4 hours', 'value' => 16],
            ['id' => 4, 'label' => '1 hour', 'value' => 4]
        ]
    ];

    public function mount($coin = 'BTC', $values = 20, $period = 1)
    {
        $this->coin = $coin;
        $this->values = $values;
        $this->period = $period;
        $this->testMode = env('TEST_MODE', false);

        $this->selectedOptions = $this->options[$this->period] ?? [];
        // Fetch data on page load
        $this->fetchNextDataPoint();


        // Update time remaining for display purposes, but not for controlling data fetch
        // $this->updateTimeRemaining();

        // Clear the cache on page refresh
        // Cache::forget('last_api_call_time');
    }

    public function updatedPeriod($value)
    {
        if (in_array($value, [1, 2, 3, 4])) {
            $this->period = $value;
            $this->selectedOptions = $this->options[$value] ?? [];
            $this->fetchNextDataPoint();
            // $this->updateTimeRemaining();

            // Clear the cache when the period changes
            // Cache::forget('last_api_call_time');

            // $this->dispatch('periodUpdated', $value);
        }
    }

    public function updatedValues($value)
    {
        $this->values = $value;
        // dd($this->values);
        $this->fetchNextDataPoint();
    }

    public function poll()
    {
        $this->updateTimeRemaining();

        // Check if the countdown percentage is 0
        if ($this->countdownPercentage <= 0) {
            // Get the last API call time from the cache
            $lastApiCallTime = Cache::get('last_api_call_time');

            // Check if 1 minute has passed since the last API call
            if (!$lastApiCallTime || Carbon::now()->diffInMinutes($lastApiCallTime) >= 1) {
                logger()->info('Countdown percentage reached zero, fetching next data point.');

                $this->fetchNextDataPoint();

                // Cache the current time as the last API call time
                Cache::put('last_api_call_time', Carbon::now(), now()->addMinutes(5));
            }
        }
    }

    private function updateTimeRemaining()
    {
        $this->timeData = $this->calculateTimeRemaining($this->period, $this->testMode);
        $this->timeRemaining = $this->timeData['timeRemaining'];
        $this->countdownPercentage = $this->timeData['countdownPercentage'];
        $this->nextStartTime = $this->timeData['nextStartTime'];

        // Use the trait method to determine if the flag should be reset
        if (!$this->hasTimeReachedNextStart($this->timeData['currentTime'], $this->timeData['nextStartTime'])) {
            $this->apiCalled = false;
        }
    }

    private function fetchCFGI()
    {
        $service = new CFGIService();
        $data = $service->fetchCFGI($this->coin, $this->values, $this->period);

        if ($data) {
            logger()->info('API Response:', ['data' => $data]);
            if (is_array($data) && count($data) > 0) {
                $data = array_slice($data, 1);
            }
            $this->cfgData = $this->transform($data);
        } else {
            $this->cfgData = null;
        }
    }

    private function transform(array $data): array
    {
        return array_map(function ($item) {
            $transformed = [];
            foreach ($item as $key => $value) {
                $parts = explode('_', $key);
                if (count($parts) === 2) {
                    $transformed[$parts[1]] = $value;
                } elseif (count($parts) === 1) {
                    $transformed[$parts[0]] = $value;
                }

                // Check if the key is 'date' and transform it to 'HH:MM' format in UTC
                if ($key === 'date') {
                    $dateTime = new \DateTime($value);
                    $dateTime->setTimezone(new \DateTimeZone('UTC')); // Set timezone to UTC
                    $transformed['time'] = $dateTime->format('H:i');
                }
            }
            return $transformed;
        }, $data);
    }

    public function fetchNextDataPoint()
    {
        if ($this->useTestData) {
            $this->useTestData();
        } else {
            $this->fetchCFGI();
        }
    }

    private function useTestData()
    {
        $testDataService = new TestDataService();
        $numbers = $testDataService->getTestDataArray();

        // Ensure numbers is an array and has elements
        if (is_array($numbers) && count($numbers) > 0) {
            // Use currentIndex to cycle through test data
            if ($this->currentIndex < count($numbers)) {
                $this->cfgData = $this->transform([$numbers[$this->currentIndex]]);
                $this->currentIndex++;
            } else {
                $this->currentIndex = 0; // Reset index if it exceeds the test data length
            }
        } else {
            logger()->error('Test data is not valid or empty.');
        }
    }

    public function render()
    {
        return view('livewire.token-page')
            ->extends('layout.app')
            ->section('body')
            ->with('timeRemaining', $this->timeRemaining)
            ->with('countdownPercentage', $this->countdownPercentage)
            ->with('cfgData', $this->cfgData);
    }
}


