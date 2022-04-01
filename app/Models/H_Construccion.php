<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class H_Construccion extends Model
{
    use HasFactory;
    protected $table = 'h__construccions';
    public function pasarHerramientas(){
        return $this->belongsTo(Tutoriales::class, 'id_herramientas__tutoriales');
    }
}
