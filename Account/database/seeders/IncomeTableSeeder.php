<?php

namespace Database\Seeders;

use App\Models\Income;
use Faker\Factory as Faker;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class IncomeTableSeeder extends Seeder
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
            Income::create([
                'user_id' => $faker->numberBetween(1, 99),
                'name' => $faker->text(),
                'value' => $faker->numberBetween(1000, 999999),
                'date' => $faker->date(),
            ]);
        }
    }
}
