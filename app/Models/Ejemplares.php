<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplares extends Model
{
    use HasFactory;
    protected $fillable=[
        'libros_id','num_copia'
    ];
    public function libros(){
        return $this->hasMany(libros::class);
    }
}
