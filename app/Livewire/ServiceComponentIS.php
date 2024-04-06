<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceComponentIS extends Component
{
    public function render()
    {
        $serviciosIS = [

            [
                'imagen' => 'img/desarrollo_software.jpg',
                'titulo' => 'Desarrollo de sistemas de software',
                'lista' => [
                    'Sistemas ERP personalizados y soporte técnico integral, incluyendo integración en la nube y mantenimiento de software.',
                    'Respaldo, migración y procesamiento
                    de datos.',
                    'Mantenimiento y soporte de software'
                ]
            ],
            [
                'imagen' => 'img/desarrollo_web.jpg',
                'titulo' => 'Desarrollo de Sitios Web',
                'lista' => [
                    'Diseño y desarrollo de página web
                    dinámica o estática',
                    'Dominio web propio',
                    'Hosting/ Alojamiento web',
                    'Correos electrónicos empresariales',
                    'Integración de redes sociales',
                    'Posicionamiento de marca',

                ]
            ],
            [
                'imagen' => 'img/database.jpg',
                'titulo' => 'Administración de Bases de Datos',
                'lista' => [
                    'Oracle',
                    'MySQL',
                ]
            ],

            [
                'imagen' => 'img/digitalizacion.jpg',
                'titulo' => 'Digitalización empresarial',
                'lista' => [
                    'Implementación de herramientas de
                    colaboración:
                    Microsoft,
                    Google,
                    Genéricos',
                ]
            ],

            [
                'imagen' => 'img/consultoria.jpg',
                'titulo' => 'Consultoría tecnológica',
                'lista' => [
                    'Evaluación técnica especializada',
                ]
            ],
            [
                'imagen' => 'img/modelado.jpg',
                'titulo' => 'Modelado de Datos',
                'lista' => [
                    'Arquitectura de datos'
                ]
            ],
        ];
        return view('livewire.service-component-i-s', [
            'serviciosIS' => $serviciosIS
        ]);
    }
}
