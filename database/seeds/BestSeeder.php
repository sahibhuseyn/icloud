<?php

use Illuminate\Database\Seeder;

class BestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('best_sellings')->insert([
            'language_id' => 1,
            'plan' => 'premium',
            'phone' => 'iPhone 4s',
            'price' => 100
        ]);
        DB::table('best_sellings')->insert([
            'language_id' => 1,
            'plan' => 'basic',
            'phone' => 'iPhone 5s',
            'price' => 100
        ]);
        DB::table('best_sellings')->insert([
            'language_id' => 1,
            'plan' => 'basic',
            'phone' => 'iPhone 6s',
            'price' => 100
        ]);
    }
}
