<?php

namespace App\Livewire;

use Livewire\Component;

class EjemploComponente extends Component
{

    public $termino;
    public $filtro;
    public $resultados = [];

    public function buscar()
    {
        // Implementa aquí la lógica de búsqueda
        $datos = [
            ['id' => 1, 'nombre' => 'Producto 1', 'descripcion' => 'Descripción del producto 1'],
            ['id' => 2, 'nombre' => 'Producto 2', 'descripcion' => 'Descripción del producto 2'],
            // Más datos aquí...
        ];

        $this->resultados = array_filter($datos, function($dato) {
            // Filtrar por término y filtro seleccionado
            $resultado = true;
            if (!empty($this->termino)) {
                $resultado = strpos(strtolower($dato[$this->filtro]), strtolower($this->termino)) !== false;
            }
            return $resultado;
        });
    }

    public function render()
    {
        return view('livewire.ejemplo-componente',[
            'filtros' => ['nombre', 'descripcion'] // Opciones de filtro
        ]);
    }
}
