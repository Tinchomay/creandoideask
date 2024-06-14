<?php

namespace App\Livewire;

use App\Models\CategoriasPinata;
use Livewire\Component;

class FiltrarPinatas extends Component
{
    public $nombre;
    public $categoria;

    public function leerFormulario()
    {
        $this->dispatch('terminosBusqueda', $this->nombre, $this->categoria);
    }

    public function render()
    {
        $categorias = CategoriasPinata::all();
        return view('livewire.filtrar-pinatas', [
            'categorias' => $categorias
        ]);
    }
}
