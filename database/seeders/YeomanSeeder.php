<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Yeoman;

class YeomanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yeoman = new Yeoman();
        $yeoman->version='1.0.0';
        $yeoman->save();
    }
}
