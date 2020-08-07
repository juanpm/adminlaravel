<?php

use Illuminate\Database\Seeder;
use App\Seccionperiodo;

class SeccionperiodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seccionperiodo::create([
            'nombre' => 'C06AN1-2020-2',
            'visible' => true
        ]);
    }
}
