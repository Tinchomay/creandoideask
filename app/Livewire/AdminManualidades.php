<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Manualidade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminManualidades extends Component
{
    public $nombre;
    public $categoria;

    protected $listeners = [
        'terminosBusqueda' => 'buscar',
        'eliminarManualidade' => 'eliminarManualidade'
    ];

    public function buscar($nombre, $categoria) 
    {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
    }

    public function render()
    {
        $manualidades = Manualidade::when($this->nombre, function($query){
            $query->where('titulo', 'LIKE', '%' . $this->nombre . '%');
        })
        ->when($this->nombre, function($query){
            $query->orWhere('descripcion', 'LIKE', '%' . $this->nombre . '%');
        })
        ->when($this->categoria, function($query){
            $query->where('categorias_manualidade_id', $this->categoria);
        })
        ->paginate(4);

        return view('livewire.admin-manualidades',[
            'manualidades' => $manualidades
        ]);
    }

    public function eliminarManualidade(Manualidade $manualidade){
        if(!Auth::user()) {
            return redirect()->route('dashboard');
        }
        Storage::delete('public/manualidades/' . $manualidade->imagen);
        $manualidade->delete();
        return redirect()->route('admin.manualidades');
    }
}
