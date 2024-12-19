<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layout.app')]
class TestPage extends Component
{
    public $counter = 1;

    public function increment()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.test-page');
    }
}
