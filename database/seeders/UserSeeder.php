<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $name = $faker->name;
            $email = $faker->freeEmail;
            $password = $faker->password;

            Modelname::create([
                'name'     => $name,
                'email'    => $email,
                'password' => $password,
            ]);
        }
    }
}
