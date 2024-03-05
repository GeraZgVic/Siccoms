<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceComponentEA extends Component
{
    public function render()
    {
        $serviciosEA = [
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Soluciones de CCTV videovigilancia',
                'lista' => [
                    'CCTV Turbo, IP 4K',
                    'Integraciones cableadas en cobre y fibra óptica',
                    'Integraciones inalámbricas',
                    'Software para Videoanálisis e Inteligencia Artificial',
                    'Almacenamiento Físico y en la Nube',
                    'Soluciones de Grado industrial',
                    'CCTV Móvil y Portátil',
                    'Cámaras tipo bala, domo, turret, PTZ, ocultas,
                    móviles, antiexplosión, anticorrosión y temperaturas
                    extremas'
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Alarmas residenciales y comerciales
                Sistemas de emergencia',
                'lista' => [
                    'Barras de pánico',
                    'Estaciones de emergencias',
                    'Luces LEDs de emergencia',
                    'Alarmas de zona',
                    'Pulsadores de emergencia'
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Controles de acceso y asistencia personal',
                'lista' => [
                    'Reloj checador facial / huella dactilar / tarjeta /
                    teclado',
                    'Videoporteros',
                    'Interfonos',
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Controles de acceso vehicular',
                'lista' => [
                    'Barreras vehiculares por medio de LPR',
                    'Barreras vehiculares por medio de RFID',
                    'Portones eléctricos (Abatibles, Elevados y Corredizos)',
                    'Digitalizacion de portones',
                    'Mantenimiento y refacciones',
                    'Picos ponchallantas',
                    'Señalizacion'
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Rastreo GPS',
                'lista' => [
                    'Monitoreo para flotillas y vehiculos particulares de
                    uso pesado o ligeros con gestion de geocerca,
                    reportes de combustible, inmovilizador remoto,
                    alertas SOS',
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Energía & UPS',
                'lista' => [
                   'Venta y mantenimiento de equipos No-Break de
                   oficina / hogar y área médica',
                ]
            ],
            [
                'imagen' => 'img/servicio1.webp',
                'titulo' => 'Cercos eléctricos',
                'lista' => [
                   'Soluciones de cercas eléctricas de alta y máxima
                   seguridad',
                   'Concertinas, alambres de púas y mallas',
                   'Aplicaciones industriales, residenciales, comerciales
                   y ganaderas',
                   'Integraciones con alarmas control remoto y Wi-Fi'
                ]
            ],
        ];
        return view('livewire.service-component-e-a', [
            'serviciosEA' => $serviciosEA
        ]);
    }
}
