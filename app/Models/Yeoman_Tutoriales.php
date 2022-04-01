<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yeoman_Tutoriales extends Model
{
    use HasFactory;
    protected $table = 'yeoman__tutoriales';
    public function yeoman(){
        return $this->hasMany(Yeoman::class, 'id_yeoman');
    }
    public function pasarTurotial(){
        return $this->hasMany(Tutoriales::class, 'id_tutoriales');
    }
}
