<?php

use Illuminate\Database\Seeder;
use formacion\Empresa;
use Faker\Factory as Faker;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_VE');
        for ($i=0; $i < 10; $i++) { 
            \DB::table('empresa')->insert([
                "razon_social" => $faker->company,
                "rif" => $faker->rifId,
                "direccion" => $faker->address,
                'telefono' => $faker->phoneNumber,
                "email" => $faker->unique()->safeEmail
            ]);
        }
    }
}
