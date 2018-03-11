<?php

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'language_id' => 1,
            'title' => 'What is the Start App ?',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto autem dolores explicabo laboriosam laudantium magni maxime molestias nulla odit porro quae quidem ratione rem, repellendus similique suscipit ullam voluptas!'
        ]);
        DB::table('faqs')->insert([
            'language_id' => 1,
            'title' => 'Where can I download this App ?',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto autem dolores explicabo laboriosam laudantium magni maxime molestias nulla odit porro quae quidem ratione rem, repellendus similique suscipit ullam voluptas!'
        ]);
    }
}
