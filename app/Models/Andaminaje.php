<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Andaminaje extends Model
{
    use HasFactory;
    protected $table = 'andaminajes';
    public function pasarHerramientas(){
        return $this->belongsTo(Tutoriales::class, 'id_herramientas__tutoriales');
    }
}
