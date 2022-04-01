<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\A_Paquetes;

class APaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paquetes = new A_Paquetes();
        $paquetes->nombre = 'Gulp';
        $paquetes->save();
    }
}
