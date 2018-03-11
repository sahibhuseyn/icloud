<?php

use Illuminate\Database\Seeder;

class IphoneSimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'AT&T USA - Clean and out of contract All iPhone models',
            'delivery_time' => '24 – 72 hours',
            'price' => 40
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'AT&T USA iPhone 4S/5/5S/5C/6/6+/6S/6S+/7/7+ (Semi Premium) (Unpaid Bills + In contract)',
            'delivery_time' => '24 – 72 hours',
            'price' => 75
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'AT&T USA iPhone 8/8+/X (Semi Premium) (Unpaid Bills + In contract)',
            'delivery_time' => '1-4 days',
            'price' => 125
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'Sprint - USA iPhone 5S/5C/6/6+/6S/6S+SE/7/7+/SE Clean ',
            'delivery_time' => '3-12 days',
            'price' => 160
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'Sprint USA iPhone 8/8+/X Clean (15 day Warranty)',
            'delivery_time' => '3-12 days',
            'price' => 195
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'Sprint USA Unbarring/Cleaning',
            'delivery_time' => '1-5 days',
            'price' => 60
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'T-Mobile - USA Unbarring cleaning service (Fraud)',
            'delivery_time' => '1-5 days',
            'price' => 50
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'T-Mobile - USA - iPhone 3G/3GS/4/4S/5/5S/5C/5S/6/6+/6S/6S+7/7+ (Premium Service) (Except Fraud)',
            'delivery_time' => '3-10 days',
            'price' => 160
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'T-Mobile - USA iPhone 4/4S/5/5S/5C/6/6+6S,6SE (Clean only)',
            'delivery_time' => '3-10 days',
            'price' => 109
        ]);
        DB::table('iphone_sims')->insert([
            'language_id' => 1,
            'name' => 'T-Mobile - USA iPhone 7 and 7+ (Clean only)',
            'delivery_time' => '3-7 days',
            'price' => 120
        ]);
    }
}
