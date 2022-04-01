<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Andaminaje;

class AndaminajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $andaminaje= new Andaminaje();
        $andaminaje->nombre = 'yo';
        $andaminaje->save();
    }
}
