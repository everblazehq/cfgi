<?php

namespace App\Livewire;

use Livewire\Component;

class Charts extends Component
{
    public $chartData = [];
    public $chartConfig = [];
    public $gradientColors = [];
    public $chartId;
    public $data = [];

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
        $this->emit('chartDataUpdated', $this->chartData);
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
        $backgroundColors = $this->chartConfig['type'] === 'bar'
            ? $this->getBackgroundColors($dataValues)
            : $this->gradientColors;

        return view('livewire.charts', [
            'chartData' => $this->chartData,
            'chartConfig' => $this->chartConfig,
            'backgroundColors' => $backgroundColors,
        ]);
    }
}
