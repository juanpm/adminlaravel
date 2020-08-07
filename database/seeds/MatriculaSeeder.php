<?php

use Illuminate\Database\Seeder;
use App\Matricula;
use App\Persona;
use App\Carrera;
use App\Seccionperiodo;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personaId1 = Persona::where('codigo', '1457859')->value('id');
        $personaId2 = Persona::where('codigo', '1427163')->value('id');
        $personaId3 = Persona::where('codigo', '1417789')->value('id');
        $personaId4 = Persona::where('codigo', '1821025')->value('id');
        $carreraId = Carrera::where('nombre', 'Computacion e Informatica')->value('id');
        $seccionperiodoId = Seccionperiodo::where('nombre', 'C06AN1-2020-2',)->value('id');
        Matricula::create([
            'persona_id' => $personaId1,
            'carrera_id' => $carreraId,
            'seccionperiodo_id' => $seccionperiodoId,
            'visible' => true
        ]);
        Matricula::create([
            'persona_id' => $personaId2,
            'carrera_id' => $carreraId,
            'seccionperiodo_id' => $seccionperiodoId,
            'visible' => true
        ]);
        Matricula::create([
            'persona_id' => $personaId3,
            'carrera_id' => $carreraId,
            'seccionperiodo_id' => $seccionperiodoId,
            'visible' => true
        ]);
        Matricula::create([
            'persona_id' => $personaId4,
            'carrera_id' => $carreraId,
            'seccionperiodo_id' => $seccionperiodoId,
            'visible' => true
        ]);
    }
}
