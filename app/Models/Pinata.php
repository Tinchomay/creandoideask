<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinata extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagen',
        'titulo',
        'precio',
        'descripcion',
        'categorias_pinata_id'
    ];

    public function categoriasPinata() 
    {
        return $this->belongsTo(CategoriasPinata::class);
    }
}
