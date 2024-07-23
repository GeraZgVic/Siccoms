<?php

namespace App\Livewire;

use Livewire\Component;

class NavegationMenuGuest extends Component
{
    public function render()
    {
        $links = [
            // [
            //     'ruta' => 'home',
            //     'texto' => 'Inicio'
            // ],
            // [
            //     'ruta' => 'servicios.index',
            //     'texto' => 'Servicios'
            // ],
            [
                'ruta' => 'nosotros.index',
                'texto' => 'Nosotros'
            ],
            [
                'ruta' => 'blog.index',
                'texto' => 'Blog'
            ],
            [
                'ruta' => 'contacto.index',
                'texto' => 'Contáctanos'
            ],
        ];
        return view('livewire.navegation-menu-guest',[
            'links' => $links
        ]);
    }
}
