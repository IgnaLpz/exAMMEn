<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramientas extends Model
{
    use HasFactory;
    protected $table = 'herramientasyeoman';
    public function pasarTurotial()
    {
        return $this->belongsTo(Herramientas_Tutoriales::class, 'id_herramientas__tutoriales');
    }
    public function paquetes(){
        return $this->hasMany(A_Paquetes::class, 'id_A_Paquetes');
    }
    public function andaminaje(){
        return $this->hasMany(Andaminaje::class, 'id_andaminaje');
    }
    public function h_construccion(){
        return $this->hasMany(H_Construccion::class, 'id_h_construccion');
    }
}
