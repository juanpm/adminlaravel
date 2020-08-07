<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre' => 'administrador',
        ]);
        Rol::create([
            'nombre' => 'delegado',
        ]);
        Rol::create([
            'nombre' => 'estudiante',
        ]);
        Rol::create([
            'nombre' => 'jurado',
        ]);
        //
    }
}
