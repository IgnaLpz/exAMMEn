<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramientas_Tutoriales extends Model
{
    use HasFactory;
    protected $table = 'herramientas__tutoriales';
    public function pasarID(){
        return $this->hasMany(Herramientas::class, 'id_herramientas');
    }
    public function pasarTurotial(){
        return $this->hasMany(Tutoriales::class, 'id_tutoriales');
    }    
}