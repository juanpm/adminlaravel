<?php

use Illuminate\Database\Seeder;
use App\Olimpiada;

class OlimpiadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Olimpiada::create([
            'nombre' => 'Copa America Conti',
            'descripcion' => 'Vive al maximo',
            'fecha_inicio' => '2019-12-01',
            'fecha_fin_inscripcion' => '2020-12-05',
            'fecha_fin' => '2019-12-07',
            'visible' => true
        ]);
        Olimpiada::create([
            'nombre' => 'Copa Libertadores Conti',
            'descripcion' => 'Descubre tu potencial',
            'fecha_inicio' => '2020-12-01',
            'fecha_fin_inscripcion' => '2020-12-05',
            'fecha_fin' => '2020-12-08',
            'visible' => true
        ]);
    }
}
