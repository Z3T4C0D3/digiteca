<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    /* RELACIONES ELOQUENT */
    //RELACION UNO A MUCHOS
    public function libros(){
        return $this->hasMany(Libros::class);
    }
}
