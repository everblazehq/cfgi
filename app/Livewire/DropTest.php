<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('layout.app')]
class DropTest extends Component
{
    public $period = 1;

    #[On('periodUpdated')]
    public function updatePeriod()
    {
        $this->period++;
    }

    public function render()
    {
        return view('livewire.drop-test')
            ->layout('layout.app')
            ->section('body');
    }
}
