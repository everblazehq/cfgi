<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class Charts extends Component
{
    public $chartData = [];
    public $chartConfig = [];
    public $gradientColors = [];
    public $backgroundColors = [];
    public $chartId;
    public $dataValues = [];
    public $dataType = '';

    #[Reactive]
    public $data;

    public function mount($chartData = [], $chartConfig = [], $chartId = null)
    {
        $this->chartData = $chartData;
        $this->chartConfig = $chartConfig;
        $this->chartId = $chartId;
        $this->gradientColors = [
            'start' => 'rgba(0, 255, 255, 0.5)',
            'end' => 'rgba(0, 255, 255, 0)',
        ];
    }

    public function updatedChartData($value)
    {
        // This will be called when chartData is updated
        switch ($this->dataType) {
            case "scoreTimeData":
                $this->chartData = [
                    'labels' => collect($this->data)->pluck('time')->all(),
                    'datasets' => [
                        [
                            'label' => 'My First Dataset',
                            'data' => collect($this->data)->pluck('score')->all(),
                            'borderWidth' => 0,
                            'borderRadius' => [
                                'topLeft' => 8,
                                'topRight' => 8,
                            ],
                        ],
                    ],
                ];
                break;
            case "price":
                $this->chartData = [
                    'labels' => collect($this->data)->map(fn($item) => $item['time'])->all(),
                    'datasets' => [
                        [
                            'label' => 'My First Dataset',
                            'data' => collect($this->data)->map(fn($item) => $item['cfgi'])->all(),
                            'borderWidth' => 2,
                            'tension' => 0.4,
                            'pointRadius' => 0,
                            'fill' => true,
                            'borderColor' => '#00FFFF',
                        ],
                    ],
                ];
                break;
            case "historical":
                $this->chartData = [
                    'labels' => collect($this->data)->map(function($item) {
                            return $item['time'];
                        })->all(),
                    'datasets' => [
                        [
                            'label' => 'My First Dataset',
                            'data' => collect($this->data)->map(function($item) {
                                return $item['cfgi'];
                            })->all(),
                            'borderWidth' => 0,
                            'borderRadius' => [
                                'topLeft' => 8,
                                'topRight' => 8,
                            ],
                        ],
                    ],
                ];
                break;
            default:
                $this->chartData = [];
        }
        

        $this->dispatch('updateChartCanvas');
    }

    public function getBackgroundColors($dataValues)
    {
        $colors = [
            'red' => '#FF004D',
            'orange' => '#FF540B',
            'yellow' => '#FFD600',
            'green' => '#90FF00',
            'blue' => '#03EBF3',
            'default' => '#333333'
        ];

        return array_map(function($value) use ($colors) {
            if ($value < 20) return $colors['red'];
            if ($value < 40) return $colors['orange'];
            if ($value < 60) return $colors['yellow'];
            if ($value < 80) return $colors['green'];
            if ($value <= 100) return $colors['blue'];
            return $colors['default'];
        }, $dataValues);
    }

    public function render()
    {
        $dataValues = collect($this->chartData['datasets'][0]['data'])->all();
        $this->backgroundColors = $this->chartConfig['type'] === 'bar'
            ? $this->getBackgroundColors($dataValues)
            : $this->gradientColors;

        return view('livewire.charts');
    }
}
