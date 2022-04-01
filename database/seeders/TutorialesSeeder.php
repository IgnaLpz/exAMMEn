<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tutoriales;

class TutorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tutoriales = new Tutoriales();
        $tutoriales->link = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
        $tutoriales->instrucciones = 'Este es uno de nuestros videos infromativos';
        $tutoriales->save();
    }
    
}
