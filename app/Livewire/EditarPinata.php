<?php

namespace App\Livewire;

use App\Models\Pinata;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\CategoriasPinata;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class EditarPinata extends Component
{
    public $id;
    public $titulo;
    public $precio;
    public $descripcion;
    public $categoria_id;
    public $imagen_anterior;

    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required',
        'precio' => 'required|numeric',
        'descripcion' => 'required',
        'categoria_id' => 'required',
        'imagen_nueva' => 'nullable|image'
    ];
    
    public function mount(Pinata $pinata)
    {
        $this->id = $pinata->id;
        $this->titulo = $pinata->titulo;
        $this->precio = $pinata->precio;
        $this->descripcion = $pinata->descripcion;
        $this->categoria_id = $pinata->categorias_pinata_id;
        $this->imagen_anterior = $pinata->imagen;
    }

    public function render()
    {
        $categorias = CategoriasPinata::all();
        return view('livewire.editar-pinata', [
            'categorias' => $categorias
        ]);
    }

    public function editarPinata()
    {
        if(!Auth::user()) {
            return redirect()->route('dashboard');
        }
        $errors = $this->validate();

        $pinata = Pinata::find($this->id);

        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva;
            $nombreImagen = Str::uuid() . "." . $imagen->extension();
            $manager = new ImageManager(new Driver());
            $imagenServidor = $manager::imagick()->read($imagen);
            $imagenServidor->scale(height: 1000);;
            $imagenPath = public_path('storage/pinatas') . '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
            Storage::delete('public/pinatas/' . $pinata->imagen);
            $pinata->imagen = $nombreImagen;
        }
        $pinata->titulo = $errors['titulo'];
        $pinata->precio = $errors['precio'];
        $pinata->descripcion = $errors['descripcion'];
        $pinata->categorias_pinata_id = $errors['categoria_id'];

        $pinata->save();

        session()->flash('mensaje', 'Piñata Actualizada Correctamente');

        return redirect()->route('admin.pinatas', $pinata);
    }
}
