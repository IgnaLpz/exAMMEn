<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class A_Paquetes extends Model
{
    use HasFactory;
    protected $table = 'a__paquetes';
    public function pasarHerramientas(){
        return $this->belongsTo(Tutoriales::class, 'id_herramientas__tutoriales');
    }
}
