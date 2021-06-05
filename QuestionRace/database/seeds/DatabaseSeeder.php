<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            DB::table('users')->insert([
                'nombre' => 'administrador',
                'email' => 'administrador@questionrace.com',
                'user' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('questionrace1234')
            ]);



    }
}
