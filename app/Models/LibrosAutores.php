<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libros;

class LibrosAutores extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable=[
        'idLibro',
        'idAutor'
    ];

    public function libros(){
        return $this->belongsToMany(Libros::class);
    }
}
