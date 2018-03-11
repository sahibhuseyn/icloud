<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Icloud',
            'slug' => 'icloud',
            'parent_id' => 2,
            'language_id' => 1
        ]);
        DB::table('types')->insert([
            'name' => 'sim',
            'slug' => 'sim',
            'parent_id' => 2,
            'language_id' => 1
        ]);
    }
}
