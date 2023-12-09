<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PopulateAwardsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Award::create([
            'name' => '',
            'descption' => 'local',
            'value' => '',
            'amount' => '',
            'date' => '',
        ]);
    }
}
