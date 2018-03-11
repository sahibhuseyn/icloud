<?php

use Illuminate\Database\Seeder;

class SelectIphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('select_iphones')->insert([
            'language_id' => 1,
            'image' => 'how-it-works-screen2.png',
            'phone_name' => 'iPhone 4s',
            'country_name' => 'USA_France_Europe_Germany',
            'service_type' => 'iCloud Clean remove USA Sold to Sprint 99%_iCloud Clean Removal France IMEI All iPhone Models (Sold By Carrier Only) 95%_iCloud Clean Remove Europe IMEI All iPhone Models (Sold By Carrier Only) 95%_iCloud Clean Remove Germany IMEI All iPhone Models (Sold By Carrier Only) 95%',
            'estimate_day' => '3–7_3–15_3-15_3-15',
            'price' => '160,140,190,140'
        ]);
    }
}
