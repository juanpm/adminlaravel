<?php

use Illuminate\Database\Seeder;
use App\Desafio;
use App\Disciplina;
use App\Equipo;

class DesafioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplina1 = Disciplina::where('nombre', 'Futbol 8')->value('id');
        $invitado1 = Equipo::where('nombre', 'Anonymous')->value('id');
        $retador1 = Equipo::where('nombre', 'Monkycoins')->value('id');
        $invitado2 = Equipo::where('nombre', 'Cuentaseguro')->value('id');
        $retador2 = Equipo::where('nombre', 'Designerstyle')->value('id');
        $invitado3 = Equipo::where('nombre', 'Donatoss')->value('id');
        Desafio::create([
            'disciplina_id' => $disciplina1,
            'invitado_id' => $invitado1,
            'retador_id' => $retador1,
            'invitado_puntaje' => 1,
            'retador_puntaje' => 1,
            'ganador' => '',
            'parent_id' => 1,
            'fecha' => new DateTime,
            'fase' => '1',
            'estado' => 'no iniciado',
            'grupo izquierda'
        ]);
        Desafio::create([
            'disciplina_id' => $disciplina1,
            'invitado_id' => $invitado2,
            'retador_id' => $retador2,
            'invitado_puntaje' => 1,
            'retador_puntaje' => 1,
            'ganador' => '',
            'parent_id' => 1,
            'fecha' => new DateTime,
            'fase' => '1',
            'estado' => 'no iniciado',
            'grupo izquierda'
        ]);
        Desafio::create([
            'disciplina_id' => $disciplina1,
            'invitado_id' => $invitado1,
            'retador_id' => $retador2,
            'invitado_puntaje' => 1,
            'retador_puntaje' => 1,
            'ganador' => '',
            'parent_id' => 1,
            'fecha' => new DateTime,
            'grupo' => 'B',
        ]);
        Desafio::create([
            'disciplina_id' => $disciplina1,
            'invitado_id' => $invitado3,
            'retador_id' => $retador1,
            'invitado_puntaje' => 1,
            'retador_puntaje' => 1,
            'ganador' => '',
            'parent_id' => 1,
            'fecha' => new DateTime,
            'grupo' => 'B',
        ]);
        Desafio::create([
            'disciplina_id' => $disciplina1,
            'invitado_id' => $invitado3,
            'retador_id' => $retador2,
            'invitado_puntaje' => 1,
            'retador_puntaje' => 1,
            'ganador' => '',
            'parent_id' => 1,
            'fecha' => new DateTime,
            'grupo' => 'B',
        ]);
    }
}
