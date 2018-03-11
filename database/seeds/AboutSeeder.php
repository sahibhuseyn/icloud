<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'language_id' => 1,
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cupiditate inventore quae. <strong class="bold-color">Amazing Smart app landing page</strong> Ad deleniti dolorem doloribus illum natus necessitatibus nesciunt officia officiis, quidem quo repellat sint sunt tempore tenetur, unde.',
            'image' => 'about.png'
        ]);
    }
}
