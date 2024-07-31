<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE tags AUTO_INCREMENT = 1');
        
        DB::table('tags')->insert([
            'name' => 'ショッピング',
        ]);
        DB::table('tags')->insert([
            'name' => 'グルメ',
        ]);
        DB::table('tags')->insert([
            'name' => 'アート',
        ]);
        DB::table('tags')->insert([
            'name' => '動物',
        ]);
        DB::table('tags')->insert([
            'name' => 'モニュメント',
        ]);
        DB::table('tags')->insert([
            'name' => '自然',
        ]);
        DB::table('tags')->insert([
            'name' => '歴史',
        ]);
        DB::table('tags')->insert([
            'name' => '写真映え',
        ]);
        DB::table('tags')->insert([
            'name' => 'リラクゼーション',
        ]);
    }
}
