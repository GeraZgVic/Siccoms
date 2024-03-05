<?php

namespace App\Livewire;

use Livewire\Component;

class NavLink extends Component
{
    public $route;
    public $text;

    public function render()
    {
        return view('livewire.nav-link');
    }
}
