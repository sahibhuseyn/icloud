<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'language_id' => 1,
            'image' => "header-slide-1.png",
            'header' => 'ICloud Unlock',
            'title' => 'Ready to showcase your app',
            'overlay' => 'Lorem Ipsum is simply dummy text of the printing and typesetting
                    indus orem Ipsum has been the industry\'s standard dummy text
                    ever since the when an own printer took a galley',
            'btn_url' => 'test.html',
            'btn_sec_url' => 'test1.html',
            'btn_name' => 'download',
            'btn_sec_name' => 'Learn more',
        ]);
        DB::table('sliders')->insert([
            'language_id' => 1,
            'image' => "header-slide-1.png",
            'header' => 'ICloud Unlock',
            'title' => 'Ready to showcase your app',
            'overlay' => 'Lorem Ipsum is simply dummy text of the printing and typesetting
                    indus orem Ipsum has been the industry\'s standard dummy text
                    ever since the when an own printer took a galley',
            'btn_url' => 'test.html',
            'btn_sec_url' => 'test1.html',
            'btn_name' => 'Test',
            'btn_sec_name' => 'Test more',
        ]);
    }
}
