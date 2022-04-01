<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AndaminajeSeeder::class);
        $this->call(APaquetesSeeder::class);
        $this->call(HConstruccionSeeder::class);
        $this->call(HerramientasSeeder::class);
        $this->call(HerramientasTutorialesSeeder::class);
        $this->call(TutorialesSeeder::class);
        $this->call(YeomanSeeder::class);
        $this->call(YeomanTutorialesSeeder::class);      
    }
}
