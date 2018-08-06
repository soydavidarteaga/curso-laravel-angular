<?php

use Illuminate\Database\Seeder;
use Faker\Factory As Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_VE');  
        for ($i=0; $i < 30; $i++) {       
            \DB::table('users')->insert(array(
                'primer_nombre' => $faker->firstName,
                'primer_apellido' => $faker->lastName,
                'email' => $faker->unique()->safeEmail(),
                'password' => \Hash::make('123456')
            ));         
        }
    }
}
