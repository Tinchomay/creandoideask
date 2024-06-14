<?php

namespace App\Livewire;

use App\Models\Pinata;
use Livewire\Component;

class HomePinatas extends Component
{
    public $nombre;
    public $categoria;

    protected $listeners = [
        'terminosBusqueda' => 'buscar'
    ];

    public function buscar($nombre, $categoria) 
    {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
    }

    public function render()
    {
        $pinatas = Pinata::when($this->nombre, function($query){
            $query->where('titulo', 'LIKE', '%' . $this->nombre . '%');
        })
        ->when($this->nombre, function($query){
            $query->orWhere('descripcion', 'LIKE', '%' . $this->nombre . '%');
        })
        ->when($this->categoria, function($query){
            $query->where('categorias_pinata_id', $this->categoria);
        })
        ->paginate(8);

        return view('livewire.home-pinatas',[
            'pinatas' => $pinatas
        ]);
    }
}
