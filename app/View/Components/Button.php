<?php
 
namespace App\View\Components;
 
use Illuminate\View\Component;
use Illuminate\View\View;
 
class Button extends Component
{
    public function __construct(
        public string $variant,
        public bool $link = false
    ) {}
 
    public function render(): View
    {
        return view('components.button');
    }
}