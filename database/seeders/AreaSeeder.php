<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE areas AUTO_INCREMENT = 1');
        
        DB::table('areas')->insert([
            'areas' => 'アジア',
        ]);
        DB::table('areas')->insert([
            'areas' => 'ヨーロッパ',
        ]);
    }
}
