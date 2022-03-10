<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => env('INITIAL_USER_LOGIN'),
            'name' => env('INITIAL_USER_NAME'),
            'surename' => env('INITIAL_USER_SURENAME'),
            'password' => env('INITIAL_USER_PASSWORDHASH'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
