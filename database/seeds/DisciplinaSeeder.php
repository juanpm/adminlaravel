<?php

use Illuminate\Database\Seeder;
use App\Disciplina;
use App\Olimpiada;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $olimpiadaId = Olimpiada::where('nombre', 'Copa America Conti')->value('id');
        Disciplina::create([
            'nombre' => 'Futbol 8',
            'participantes' => 16,
            'olimpiada_id' => $olimpiadaId,
            'visible' => true
        ]);
        Disciplina::create([
            'nombre' => 'Voley',
            'participantes' => 12,
            'olimpiada_id' => $olimpiadaId,
            'visible' => true
        ]);
        Disciplina::create([
            'nombre' => 'Basquet',
            'participantes' => 10,
            'olimpiada_id' => $olimpiadaId,
            'visible' => true
        ]);
        Disciplina::create([
            'nombre' => 'Futsal Varones',
            'participantes' => 10,
            'olimpiada_id' => $olimpiadaId,
            'visible' => true
        ]);
    }
}
