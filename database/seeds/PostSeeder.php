<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'language_id' => 1,
            'slug' => 'a-process-behind-app',
            'title' => 'A process behind app',
            'image' => 'blog-post1.jpg',
            'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typeseg indury Lorem Ipsum e printing and has been the industry\'s standard dummy text ever since the. ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => '2018-03-03 00:00:00',
        ]);
        DB::table('posts')->insert([
            'language_id' => 1,
            'slug' => 'blog-title-goes-here',
            'title' => 'Blog title goes here ',
            'image' => 'blog-post1.jpg',
            'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typeseg indury Lorem Ipsum e printing and has been the industry\'s standard dummy text ever since the. ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => '2018-02-03 00:00:00',
        ]);
    }
}
