<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editoriales extends Model
{
    use HasFactory;
     protected $fillable=['nombreEditorial'];
    /* RELACIONES ELOQUENT */
    //RELACION UNO A MUCHOS
    public function libros(){
        return $this->hasMany(libros::class);
    }
}
