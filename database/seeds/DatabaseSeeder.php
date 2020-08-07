<?php

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
        $this->truncateTables([
            'users',
            'olimpiadas',
            'disciplinas',
            'equipos',
            'competidorequipos',
            'desafios',
            'carreras',
            'personas',
            'rols',
            'matriculas',
            'seccionperiodos',
            'usuariorols'
        ]);
        //$this->call(UserSeeder::class);
        $this->call(OlimpiadaSeeder::class);
        $this->call(DisciplinaSeeder::class);
        //$this->call(EquipoSeeder::class);
        //$this->call(DesafioSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(SeccionperiodoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(MatriculaSeeder::class);
        //$this->call(CompetidorequipoSeeder::class);
        $this->call(RolSeeder::class);
         
        //$this->call(UsuariorolSeeder::class);

    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
 
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
 
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
