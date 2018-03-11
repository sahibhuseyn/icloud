<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'code' => 'en',
            'name' => 'English',
            'image' => 'en.png',
            'status' => 1,
            'position' => 1,
        ]);

        DB::table('languages')->insert([
            'code' => 'az',
            'name' => 'Azeri',
            'image' => 'az.png',
            'status' => 1,
            'position' => 2,
        ]);

        DB::table('languages')->insert([
            'code' => 'ru',
            'name' => 'Russian',
            'image' => 'ru.png',
            'status' => 1,
            'position' => 3,
        ]);
    }
}
