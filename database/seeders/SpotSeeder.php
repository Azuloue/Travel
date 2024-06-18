<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE spots AUTO_INCREMENT = 1');
        
        DB::table('spots')->insert([
            'name' => '台北101',
            'body' => '高さ509mの超高層ビル',
            'address' => '台北市信義区信義路5段7号',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 1,
            'country_id' => 3,
        ]);
    }
}
