<?php

namespace App\Livewire;

use Livewire\Component;

class CardComponent extends Component
{

    public function render()
    {

        // Datos de los servicios con descripciones más cortas
        $servicios = [
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Ingeniería de Sistemas',
                'descripcion' => 'Desarrollamos soluciones tecnológicas avanzadas.'
            ],
            [
                'imagen' => 'img/servicio2.webp',
                'titulo' => 'Desarrollo de Software Personalizado',
                'descripcion' => 'Creamos aplicaciones y sistemas a medida.'
            ],
            [
                'imagen' => 'img/servicio3.webp',
                'titulo' => 'Seguridad Electrónica Integral',
                'descripcion' => 'Implementamos sistemas de seguridad electrónica.'
            ],
            [
                'imagen' => 'img/servicio4.webp',
                'titulo' => 'Servicios de Integración Especializados',
                'descripcion' => 'Ofrecemos servicios especializados de integración e ingeniería.'
            ]
        ];

        return view('livewire.card-component', compact('servicios'));
    }
}
