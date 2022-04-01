<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Herramientas;

class HerramientasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $herramientas = new Herramientas();
        $herramientas->id_andaminajes = 1;
        $herramientas->id_h_construccions = 1;
        $herramientas->id_a__paquetes = 1;
        $herramientas->save();
    }
}
