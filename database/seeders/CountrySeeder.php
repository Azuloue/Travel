<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        DB::statement('ALTER TABLE countries AUTO_INCREMENT = 1');

        DB::table('countries')->insert([
                'name' => '韓国',
                'area_id' => 1,
        ]);
        DB::table('countries')->insert([
                'name' => '中国',
                'area_id' => 1,
        ]);
        DB::table('countries')->insert([
                'name' => '台湾',
                'area_id' => 1,
        ]);
        DB::table('countries')->insert([
                'name' => 'タイ',
                'area_id' => 1,
        ]);
        DB::table('countries')->insert([
                'name' => 'フィリピン',
                'area_id' => 1,
        ]);
        DB::table('countries')->insert([
                'name' => 'ベトナム',
                'area_id' => 1,
        ]);
        DB::table('countries')->insert([
                'name' => 'インド',
                'area_id' => 1,
        ]);
        DB::table('countries')->insert([
                'name' => 'フランス',
                'area_id' => 2,
        ]);
        DB::table('countries')->insert([
                'name' => '英国',
                'area_id' => 2,
        ]);
        DB::table('countries')->insert([
                'name' => 'イタリア',
                'area_id' => 2,
        ]);
        DB::table('countries')->insert([
                'name' => 'スペイン',
                'area_id' => 2,
        ]);
        DB::table('countries')->insert([
                'name' => 'ドイツ',
                'area_id' => 2,
        ]);
        DB::table('countries')->insert([
                'name' => 'スイス',
                'area_id' => 2,
        ]);
        DB::table('countries')->insert([
                'name' => 'ポルトガル',
                'area_id' => 2,
        ]);
    }
}
