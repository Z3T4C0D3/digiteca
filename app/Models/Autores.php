<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    use HasFactory;
    /* RELACIONES ELOQUENT */
    //RELACION MUCHOS A MUCHOS
    public function libros(){
        return $this->belongsToMany(Libros::class);
    }
}
