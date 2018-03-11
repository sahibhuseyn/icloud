<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'language_id' => 1,
            'image' => 'testimonial-user.png',
            'feedback' => 'Lorem Ipsum is simply dummy text of the printing and typeseing industry Lorem Ipsum has been the industry standard dummy text Lorem is simply.',
            'name' => 'Devil Shohe'
        ]);
        DB::table('testimonials')->insert([
            'language_id' => 1,
            'image' => '1.png',
            'feedback' => 'Lorem Ipsum is simply dummy text of the printing and typeseing industry Lorem Ipsum has been the industry standard dummy text Lorem is simply.',
            'name' => 'Mr. Jhon Due'
        ]);
        DB::table('testimonials')->insert([
            'language_id' => 1,
            'image' => 'testimonial-user2.png',
            'feedback' => 'Lorem Ipsum is simply dummy text of the printing and typeseing industry Lorem Ipsum has been the industry standard dummy text Lorem is simply.',
            'name' => 'Devil Shohe'
        ]);
    }
}
