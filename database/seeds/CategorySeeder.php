<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'home',
            'slug' => '#',
            'parent_id' => 0,
            'language_id' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'services',
            'slug' => '#1',
            'parent_id' => 0,
            'language_id' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'tracking id',
            'slug' => 'tracking_id',
            'parent_id' => 0,
            'language_id' => 1
        ]);
    }
}
