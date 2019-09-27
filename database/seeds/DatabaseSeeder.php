<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'name' => Str::random(10),
            
        ]);

        DB::table('pages')->insert([
            'name' => Str::random(10),
            
        ]);

        DB::table('pages')->insert([
            'name' => Str::random(10),
            
        ]);

        DB::table('pages')->insert([
            'name' => Str::random(10),
            
        ]);
    }
}
