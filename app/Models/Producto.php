<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // relacion de uno a muchos cagtegoria (inversa)
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
    // relacion de uno a muchos marca (inversa)
    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }

    // relacion de uno a muchos caracterisitcas
    public function caracteristicas(){
        return $this->hasOne('App\Models\Caracteristicas');
    }

    // relacion de uno a muchos imagen
    public function imagen(){
        return $this->hasMany('App\Models\Imagen');
    }



    
}
