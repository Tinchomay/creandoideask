<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manualidade extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'imagen',
        'titulo',
        'precio',
        'descripcion',
        'categorias_manualidade_id'
    ];

    public function categoriasManualidade() 
    {
        return $this->belongsTo(CategoriasManualidade::class);
    }
}
