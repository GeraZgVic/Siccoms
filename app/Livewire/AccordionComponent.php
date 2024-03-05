<?php

namespace App\Livewire;

use Livewire\Component;

class AccordionComponent extends Component
{
    public $texto;
    
    public function render()
    {
        return view('livewire.accordion-component');
    }
}
