<?php

use Illuminate\Database\Seeder;
use App\Usuariorol; 
use App\User; 
use App\Rol; 

class UsuariorolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //
        $userId = User::where('email', 'admin@admin.com')->value('id');
        $rolId = Rol::where('nombre', 'administrador')->value('id');

        Usuariorol::create([
            'user_id' => $userId,
            'rol_id' => $rolId
        ]);

        /*factory(Usuariorol::class)->create([
            'user_id' => $userId,
            'rol_id' => $rolId
        ]);*/
    }
}
