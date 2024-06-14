<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use App\Models\CategoriasManualidade;
use App\Models\Manualidade;
use Intervention\Image\Drivers\Gd\Driver;

class CrearManualidad extends Component
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
        $categorias = CategoriasManualidade::all();
        return view('livewire.crear-manualidad', [
            'categorias' => $categorias
        ]); 
    }

    public function crearManualidad() 
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
        $imagenPath = public_path('storage/manualidades') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        Manualidade::create([
            'titulo' => $errors['titulo'],
            'precio' => $errors['precio'],
            'descripcion' => $errors['descripcion'],
            'categorias_manualidade_id' => $errors['categoria_id'],
            'imagen' => $nombreImagen,
        ]);

        session()->flash('mensaje', 'Manualidad Agregada Correctamente');

        return redirect()->route('admin.manualidades');
    }
}
