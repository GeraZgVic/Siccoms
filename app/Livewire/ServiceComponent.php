<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceComponent extends Component
{
    
    public function render()
    {
        $serviciosTI = [
            [
                'imagen' => 'img/mantenimiento_equipo.jpg',
                'titulo' => 'Mantenimiento de equipo de cómputo y servidores',
                'lista' => [
                    'Diagnóstico y soporte correctivo a nivel hardware',
                    'Mantenimiento preventivo',
                    'Reemplazo de componentes',
                    'Respaldo y formateo',
                ]
            ],
            [
                'imagen' => 'img/cableado_estructurado.jpg',
                'titulo' => 'Cableado Estructurado',
                'lista' => [
                    'Distribución de Cableado Horizontal Interior y
                    Exterior',
                    'Distribución de Cableado Vertical Interior y
                    Exterior',
                    'Tendido aéreo exterior',
                    'Canalización subterránea'
                ]
            ],
            [
                'imagen' => 'img/redes_inalambricas.jpg',
                'titulo' => 'Redes Inalámbricas',
                'lista' => [
                    'Módems',
                    'Tarjetas de red',
                    'Access Point',
                    'Routers',
                    'Puentes Wifi',
                    'Repetidores Wifi',
                    'Extensores Wifi',
                ]
            ],
            [
                'imagen' => 'img/celular.jpg',
                'titulo' => 'Amplificador para Señal Celular',
                'lista' => [
                    'Kit amplificador celular 4G LTE',
                    'Kit amplificador celular 4G, 3G, 2G y VOZ',
                ]
            ],
            [
                'imagen' => 'img/telefonia.jpg',
                'titulo' => 'Telefonía y Conmutadores',
                'lista' => [
                    'Teléfonia Análoga',
                    'Telefonía IP Híbrida',
                    'Telefonía en la Nube'
                ]
            ],
            [
                'imagen' => 'img/ciberseguridad.jpg',
                'titulo' => 'Ciber Seguridad',
                'lista' => [
                   'Antivirus Kaspersky'
                ]
            ],
        ];
        return view('livewire.service-component', [
            'serviciosTI' => $serviciosTI
        ]);
    }
}
