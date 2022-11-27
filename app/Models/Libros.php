<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    /* RELACIONES ELOQUENT */
    //RELACION UNO A MUCHOS INVERSA
    public function categorias(){
        return $this->belongsTo(Categorias::class);
    }
    public function editoriales(){
        return $this->belognsTo(Editoriales::class);
    }
    //RELACION MUCHOS A MUCHOS
    public function autores(){
        return $this->belongsToMany(Autores::class);
    }
}
