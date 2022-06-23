<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
                'country' => $faker->country(),
                'adress' => $faker->address(),
                'city' => $faker->city(),
                'company' =>  $faker->text(),
                'nip' => $faker->numberBetween(100000000, 999999999),
                'role' => 'user',
                'login' => "user_$i",
                'password' => Hash::make('password')

            ]);
        }

    }
}
