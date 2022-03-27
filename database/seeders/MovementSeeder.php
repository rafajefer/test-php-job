<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movements')->insert(['name' => 'Deadlift']);
        DB::table('movements')->insert(['name' => 'Back Squat']);
        DB::table('movements')->insert(['name' => 'Bench Press']);
    }
}
