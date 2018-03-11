<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(LanguageSeeder::class);
         $this->call(TranslationSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(ChooseSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(IphoneSimSeeder::class);
        $this->call(HowWorkSeeder::class);
        $this->call(SelectIphoneSeeder::class);
        $this->call(BestSeeder::class);
    }
}
