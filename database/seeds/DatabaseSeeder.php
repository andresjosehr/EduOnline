<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create();


        DB::table('usuarios')->delete();
        DB::table('roles')->delete();



        DB::table("roles")->insert(["descripcion"=>"Administrador"]);
        DB::table("roles")->insert(["descripcion"=>"Profesor"]);
        DB::table("roles")->insert(["descripcion"=>"Alumno"]);

        DB::table("usuarios")->insert([
				"nombres"         =>"Pedro Perez",
				"email"           =>"demo@gmail.com",
				"password"        =>Hash::make('secret'),
				"espacio_trabajo" =>"Casa",
				"username"        =>"demo",
				"materia"         =>"Matematicas",
				"universidad"     =>"Santiago",
				"rol"             =>"3",
		]);

        foreach (range(0,9) as $index) {
            DB::table("usuarios")->insert([
                'nombres'     => $faker->name,
                'email' => $faker->email,
                'username' => $faker->userName,
                'rol' => $faker->numberBetween(1,3),
                'password' => Hash::make('secret')
            ]);
        }
    }
}
