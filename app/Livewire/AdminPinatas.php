<?php

namespace App\Livewire;

use App\Models\Pinata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AdminPinatas extends Component
{
    public $nombre;
    public $categoria;

    protected $listeners = [
        'terminosBusqueda' => 'buscar',
        'eliminarPinata' => 'eliminarPinata'
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
        ->paginate(10);

        return view('livewire.admin-pinatas',[
            'pinatas' => $pinatas
        ]);
    }

    public function eliminarPinata(Pinata $pinata){
        if(!Auth::user()) {
            return redirect()->route('dashboard');
        }
        Storage::delete('public/pinatas/' . $pinata->imagen);
        $pinata->delete();
        return redirect()->route('admin.pinatas');
    }
}
