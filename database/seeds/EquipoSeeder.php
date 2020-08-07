<?php

use Illuminate\Database\Seeder;
use App\Equipo;
use App\Disciplina;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplinaId = Disciplina::where('nombre', 'Futbol 8')->value('id');
        Equipo::create([
            'nombre' => 'Los Titanes',
            'descripcion' => 'El poder del Conocimiento',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_captain_hero_comic-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Destructores',
            'descripcion' => 'Creando Delicias',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_robin_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Banca Tercero',
            'descripcion' => 'Pensando en Grande',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_batman_hero_comic-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Juventud Emprendedora',
            'descripcion' => 'Buscamos tu Seguridad',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_flash_hero_comic-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Vencedores',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Fitness',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Snorlax',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Banca Soccer',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Judas',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Conta-Dinamita2',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'La liga de la Administracion',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Club Dalí',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Fuerza H',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Campeones Imparables',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Red Hat',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Guerreros',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Cinco Polvos',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Super Amigos',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Fenix',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Unity',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los diamantes negros',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Ades',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Sporting Cristal',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Dinamita Diseño',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Generacion Z',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Oleada Divergente',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'DeportBanca',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los pilis',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'ContiBank',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Tigres Administracion',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Tigres Bancaria',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Fortaleza Administrativa',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Juventud ADM',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Conta Dinamita',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los Triunfadores',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Bancaria Segundo',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Administracion 6E',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'SUSE',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Surf',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Mandriva',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Super Campeones',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Los indestructibles-gestion',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Dinamitas',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Kali Linux',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Las bolas furiosas - Las girls',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Promcion 2019 6"C',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Cincomentarios',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Mandrake',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Genios de la administracion',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Real Conti',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
        Equipo::create([
            'nombre' => 'Debian',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => 4,
            'image' => 'https://cdn2.iconfinder.com/data/icons/heroes/128/superhero_ironman_comic_hero-512.png',
            'visible' => true
        ]);
    }
}
