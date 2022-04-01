<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Yeoman_Tutoriales;

class YeomanTutorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yeoman_tutoriales = new Yeoman_Tutoriales();
        $yeoman_tutoriales->id_yeoman = 1;
        $yeoman_tutoriales->id_tutoriales = 1;
        $yeoman_tutoriales->comentarios = 'Hola que hace';
        $yeoman_tutoriales->save();
    }
}
