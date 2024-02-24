<?php

namespace App\Livewire;

use Livewire\Component;

class CardComponent extends Component
{

    public function render()
    {

        // Simulando datos de servicios
        $servicios = [
            [
                'imagen' => 'img/imagen1.webp',
                'titulo' => 'Servicio 1',
                'descripcion' => 'SERVICIOS DE INGENIERÍA TI'
            ],
            [
                'imagen' => 'img/imagen2.webp',
                'titulo' => 'Servicio 2',
                'descripcion' => 'INGENIERIA DE SOFTWARE'
            ],
            [
                'imagen' => 'img/imagen3.webp',
                'titulo' => 'Servicio 3',
                'descripcion' => 'SEGURIDAD ELECTRÓNICA Y AUTOMATIZACIÓN'
            ]
        ];

        return view('livewire.card-component', compact('servicios'));
    }
}
