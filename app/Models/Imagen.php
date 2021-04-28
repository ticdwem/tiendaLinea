<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'rutaImagen',
        'altImagen',
    ];
    // relacion de uno a muchos Productos (inversa)
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }
}
