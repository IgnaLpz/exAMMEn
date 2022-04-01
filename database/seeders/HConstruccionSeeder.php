<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\H_Construccion;
class HConstruccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $h_construccion= new H_Construccion();
        $h_construccion->nombre = 'yo';
        $h_construccion->save();
    }
}
