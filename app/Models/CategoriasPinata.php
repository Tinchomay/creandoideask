<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasPinata extends Model
{
    use HasFactory;

    public function pinatas()
    {
        return $this->hasMany(Pinata::class);
    }
}
