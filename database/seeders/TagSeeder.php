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
            'tags' => 'ショッピング',
        ]);
        DB::table('tags')->insert([
            'tags' => 'グルメ',
        ]);
        DB::table('tags')->insert([
            'tags' => 'アート',
        ]);
        DB::table('tags')->insert([
            'tags' => '動物',
        ]);
        DB::table('tags')->insert([
            'tags' => 'モニュメント',
        ]);
        DB::table('tags')->insert([
            'tags' => '自然',
        ]);
        DB::table('tags')->insert([
            'tags' => '歴史',
        ]);
        DB::table('tags')->insert([
            'tags' => '写真映え',
        ]);
        DB::table('tags')->insert([
            'tags' => 'リラクゼーション',
        ]);
    }
}
