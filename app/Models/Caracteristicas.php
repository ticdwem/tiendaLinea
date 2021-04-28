<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
    use HasFactory;

    // relacion de uno a muchos (inversa)
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }

}
