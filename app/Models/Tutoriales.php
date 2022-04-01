<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutoriales extends Model
{
    use HasFactory;
    protected $table = 'tutoriales';
    public function heramientasTutorial()
    {
        return $this->belongsTo(Herramientas_Tutoriales::class, 'id_herramientas__tutoriales');
    }
    public function yeomanTutorial()
    {
        return $this->belongsTo(Yeoman_Tutoriales::class, 'id_yeoman__tutoriales');
    }
}
