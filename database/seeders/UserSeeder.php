<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(['name' => 'Joao', 'email' => 'joao@email.com']);
        DB::table('users')->insert(['name' => 'Jose', 'email' => 'jose@email.com']);
        DB::table('users')->insert(['name' => 'Paulo', 'email' => 'paulo@email.com']);
    }
}
