<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Prueba Empleado",
            "email" => "example@example.com",
            "username" => "Prueba",
            "email_verified_at" => now(),
            "password" => Hash::make("123"),
            "id_rol" => 1,
        ]);

        DB::table('users')->insert([
            "name" => "Prueba Empleado 2",
            "email" => "example2@example.com",
            "username" => "Prueba2",
            "email_verified_at" => now(),
            "password" => Hash::make("123"),
            "id_rol" => 2,
        ]);


    }
}
