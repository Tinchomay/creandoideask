<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\CategoriasPinata;
use App\Models\Pinata;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CrearPinata extends Component
{
    public $titulo;
    public $precio;
    public $descripcion;
    public $categoria_id;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required',
        'precio' => 'required|numeric',
        'descripcion' => 'required',
        'categoria_id' => 'required',
        'imagen' => 'required|image'
    ];

    public function render()
    {
        $categorias = CategoriasPinata::all();
        return view('livewire.crear-pinata', [
            'categorias' => $categorias
        ]); 
    }

    public function crearPinata() 
    {
        if(!Auth::user()) {
            return redirect()->route('dashboard');
        }
        $errors = $this->validate();

        $imagen = $this->imagen;
        $nombreImagen = Str::uuid() . "." . $imagen->extension();
        $manager = new ImageManager(new Driver());
        $imagenServidor = $manager::imagick()->read($imagen);
        $imagenServidor->scale(height: 1000);;
        $imagenPath = public_path('storage/pinatas') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        Pinata::create([
            'titulo' => $errors['titulo'],
            'precio' => $errors['precio'],
            'descripcion' => $errors['descripcion'],
            'categorias_pinata_id' => $errors['categoria_id'],
            'imagen' => $nombreImagen,
        ]);

        session()->flash('mensaje', 'Piñata Agregada Correctamente');

        return redirect()->route('admin.pinatas');

    }
}
