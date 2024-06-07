<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'test 1',
            'email' => 'test@test.com',
            'password' => 'abc123',
        ]);

        DB::table('users')->insert([
          'name' => 'test 2',
          'email' => 'test2@test.com',
          'password' => 'abc123',
        ]);
    }
}
