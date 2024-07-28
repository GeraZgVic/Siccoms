<div>
    <h1>Realizar búsqueda</h1>

    <form wire:submit.prevent="buscar">
        <input type="text" wire:model="termino" placeholder="Buscar...">
        <select wire:model="filtro">
            <option value="nombre">Nombre</option>
            <option value="descripcion">Descripción</option>
        </select>
        <button type="submit">Buscar</button>
    </form>

    @if(count($resultados) > 0)
        <h2>Resultados de búsqueda para "{{ $termino }}" en "{{ $filtro }}"</h2>
        <ul>
            @foreach($resultados as $resultado)
                <li>{{ $resultado['nombre'] }} - {{ $resultado['descripcion'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron resultados para "{{ $termino }}" en "{{ $filtro }}".</p>
    @endif
</div>
