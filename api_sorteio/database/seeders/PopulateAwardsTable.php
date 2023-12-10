<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PopulateAwardsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Factory::create();

        for($i = 0; $i < 10; $i++) {

            Award::create([
                'descrption' => $faker->text(),
                'local' => $faker->text(),
                'value' => $faker->randomFloat(2, 100, 1000),
                'amount' => $faker->numberBetween(1, 5),
                'date' => $faker->date,
            ]);
        }
    }
}
