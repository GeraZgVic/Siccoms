<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceComponentIS extends Component
{
    public function render()
    {
        $serviciosIS = [
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Consultoría tecnológica',
                'lista' => [
                    'Evaluación técnica especializada',
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Desarrollo de sistemas de software',
                'lista' => [
                    'Soluciones ERP adaptadas a las
                    necesidades y presupuestos con
                    funciones esenciales como
                    contabilidad, inventario, recursos
                    humanos y gestión de clientes,
                    desarrollado en diferentes tecnologías
                    (JavaScript, PHP, HTML, CSS).',
                    'Integración de sistemas en la nube',
                    'Respaldo, migración y procesamiento
                    de datos.',
                    'Mantenimiento y soporte de software'
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
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
                'imagen' => 'img/servicio1.webp',
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
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Administración de Bases de Datos',
                'lista' => [
                    'Oracle',
                    'MySQL',
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
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
