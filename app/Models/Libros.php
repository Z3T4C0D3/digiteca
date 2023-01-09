<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    protected $fillable=[
        'Titulo',
        'Codigo',
        'idCategoria',
        'idEditorial',
    ];
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
    //RELACION POLIMORFICA UNO A UNO
    public function image(){
        return $this->morphOne(images::class, 'imageable');
    }
}
