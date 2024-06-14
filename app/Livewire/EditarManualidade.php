<?php

namespace App\Livewire;

use App\Models\CategoriasManualidade;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Manualidade;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class EditarManualidade extends Component
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
    
    public function mount(Manualidade $manualidade)
    {
        $this->id = $manualidade->id;
        $this->titulo = $manualidade->titulo;
        $this->precio = $manualidade->precio;
        $this->descripcion = $manualidade->descripcion;
        $this->categoria_id = $manualidade->categorias_manualidade_id;
        $this->imagen_anterior = $manualidade->imagen;
    }

    public function render()
    {
        $categorias = CategoriasManualidade::all();
        return view('livewire.editar-manualidade', [
            'categorias' => $categorias
        ]);
    }

    public function editarManualidade()
    {
        if(!Auth::user()) {
            return redirect()->route('dashboard');
        }
        $errors = $this->validate();

        $manualidade = Manualidade::find($this->id);

        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva;
            $nombreImagen = Str::uuid() . "." . $imagen->extension();
            $manager = new ImageManager(new Driver());
            $imagenServidor = $manager::imagick()->read($imagen);
            $imagenServidor->scale(height: 1000);;
            $imagenPath = public_path('storage/manualidades') . '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
            Storage::delete('public/manualidades/' . $manualidade->imagen);
            $manualidade->imagen = $nombreImagen;
        }
        $manualidade->titulo = $errors['titulo'];
        $manualidade->precio = $errors['precio'];
        $manualidade->descripcion = $errors['descripcion'];
        $manualidade->categorias_manualidade_id = $errors['categoria_id'];

        $manualidade->save();

        session()->flash('mensaje', 'Manualidad Actualizada Correctamente');

        return redirect()->route('admin.manualidades', $manualidade);
    }
}
