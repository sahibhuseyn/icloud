<?php

use Illuminate\Database\Seeder;

class HowWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('how_works')->insert([
            'language_id' => 1,
            'text' => 'Lorem Ipsum is simply dummy text of the printing and typeseing indury Lorem Ipsum has been the industry\'s standard dummy text ever since the when an Lorem Ipsum is simply dummy text of the dummy text of the printing anprinting Amazing Smart app landing page Lorem Ipsum has been the industry\'s standard dummy text ever since the when.Lorem Ipsum is simply text of the y Lorem Ipsum has been the indushe industry\'s stry\'s standard dummy text ever since the when an Lorem Ipsum.',
            'image' => 'right-image1.png'
        ]);
    }
}
