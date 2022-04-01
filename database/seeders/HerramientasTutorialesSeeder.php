<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Herramientas_Tutoriales;

class HerramientasTutorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $herramientas_tutoriales = new Herramientas_Tutoriales();
        $herramientas_tutoriales->id_herramientas = 1;
        $herramientas_tutoriales->id_tutoriales = 1;
        $herramientas_tutoriales->comentarios = 'Hola mama estoy en un examen';
        $herramientas_tutoriales->save();
    }
}
