<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yeoman extends Model
{
    use HasFactory;
    protected $table = 'yeomen';
    public function yeomanTutorial(){
        return $this->belongsTo(Yeoman_Tutoriales::class, 'id_yeoman__tutoriales');
    }
}
