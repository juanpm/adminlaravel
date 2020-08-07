<?php

use Illuminate\Database\Seeder;
use App\Competidorequipo;
use App\Matricula;
use App\Equipo;

class CompetidorequipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matriculaId1 = Matricula::where('id', '1')->value('id');
        $matriculaId2 = Matricula::where('id', '2')->value('id');
        $matriculaId3 = Matricula::where('id', '3')->value('id');
        $matriculaId4 = Matricula::where('id', '4')->value('id');
        $equipoId = Equipo::where('nombre', 'Anonymous',)->value('id');
        Competidorequipo::create([
            'matricula_id' => $matriculaId1,
            'equipo_id' => $equipoId,
            'visible' => true
        ]);
        Competidorequipo::create([
            'matricula_id' => $matriculaId2,
            'equipo_id' => $equipoId,
            'visible' => true
        ]);
        Competidorequipo::create([
            'matricula_id' => $matriculaId3,
            'equipo_id' => $equipoId,
            'visible' => true
        ]);
        Competidorequipo::create([
            'matricula_id' => $matriculaId4,
            'equipo_id' => $equipoId,
            'visible' => true
        ]);
    }
}
