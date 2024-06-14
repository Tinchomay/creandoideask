<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasManualidade extends Model
{
    use HasFactory;

    public function manualidades()
    {
        return $this->hasMany(Manualidade::class);
    }
}
