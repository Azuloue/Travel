<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::statement('ALTER TABLE spots AUTO_INCREMENT = 1');
        DB::table('users')->insert([
        'name' => 'テストユーザー１',
        'email' => 'xxx@test.com',
        'password' => 'abcdef',
        ]);
    }
}
