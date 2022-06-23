<?php

namespace Database\Seeders;

use App\Models\Expense;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ExpenseTableSeeder extends Seeder
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
            Expense::create([
                'user_id' => $faker->numberBetween(1, 99),
                'name' => $faker->text(),
                'value' => $faker->numberBetween(1000, 999999),
                'date' => $faker->date(),
                'category' => $faker->text(),
            ]);
        }
    }
}
