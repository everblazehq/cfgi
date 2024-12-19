<?php

namespace App\Livewire;

use Livewire\Component;

class TestPage extends Component
{
    public $counter = 1;

    public function increment()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.test-page')
            ->extends('layout.app')
            ->section('body');
    }
}
