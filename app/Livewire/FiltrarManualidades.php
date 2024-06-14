<?php

namespace App\Livewire;

use App\Models\CategoriasManualidade;
use Livewire\Component;

class FiltrarManualidades extends Component
{
    public $nombre;
    public $categoria;

    public function leerFormulario()
    {
        $this->dispatch('terminosBusqueda', $this->nombre, $this->categoria);
    }

    public function render()
    {
        $categorias = CategoriasManualidade::all();
        return view('livewire.filtrar-manualidades', [
            'categorias' => $categorias
        ]);
    }
}
