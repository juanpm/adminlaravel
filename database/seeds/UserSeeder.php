<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        User::create([
            'name' => 'Jhon',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456')
            /*'password' => Hash::make('123456'),*/
        ]);
        
        /* User::create([
            'name' => 'Jose',
            'email' => 'jose@gmail.com',
            'password' => bcrypt('123456')
            /*'password' => Hash::make('123456'),*/
        //]); */
        //factory(User::class)->create();
    }
}
