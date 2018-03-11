<?php

use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     **/
    public function run()
    {
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'home',
            'value' => 'Home',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'services',
            'value' => 'Services',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'blog',
            'value' => 'Blog',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'track_order',
            'value' => 'Tracking order',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'contact_us',
            'value' => 'Contact us',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'choose',
            'value' => 'Why Choose Us',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'testimonial',
            'value' => 'Clients Feedback',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'faq',
            'value' => 'FAQs',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'about',
            'value' => 'About Us',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'sim_unlock_iphone',
            'value' => 'Sim Unlock Service for iPhones',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'sim_other',
            'value' => 'Sim Unlock Service for Other Devices',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'sim_unlock_others',
            'value' => 'Sim Unlock Service for all other phones',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'how_work',
            'value' => 'How We Work?',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'check_country',
            'value' => 'Check Your Country',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'icloud_unlock',
            'value' => 'iCloud Unlock Service',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'best_price',
            'value' => 'Our Best Pricing',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'blog',
            'value' => 'Latest Blog',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'contact_info',
            'value' => 'Contact Info',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'call',
            'value' => 'Call Us',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'location',
            'value' => 'Location',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'read_more',
            'value' => 'Read More',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'email',
            'value' => 'E-mail',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'message',
            'value' => 'Send us message!',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'headers',
            'language_id' => 1,
            'key' => 'download',
            'value' => 'Coming soon',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'header_sub',
            'language_id' => 1,
            'key' => 'sim_unlock_iphone_sub',
            'value' => 'Select your phone and mobile operator',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'header_sub',
            'language_id' => 1,
            'key' => 'select_country',
            'value' => 'Select Country',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'header_sub',
            'language_id' => 1,
            'key' => 'sim_other_sub',
            'value' => 'Select your phone and mobile operator',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'header_sub',
            'language_id' => 1,
            'key' => 'contact_info',
            'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting indus orem Ipsum has been the industrys.',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'header_sub',
            'language_id' => 1,
            'key' => 'iphone_sim',
            'value' => 'Select your service',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'header_sub',
            'language_id' => 1,
            'key' => 'icloud_unlock',
            'value' => 'Select your device for iCloud unlock',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'i_cloud_unlock',
            'value' => 'iCloud Unlock',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'i_cloud_unlock_rate',
            'value' => '60',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'sim_unlock',
            'value' => 'Sim Unlock',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'sim_unlock_rate',
            'value' => '70',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'happy_clients',
            'value' => 'Happy Clients',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'happy_clients_rate',
            'value' => '95 %',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'best_prices',
            'value' => 'Best Prices',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'statistic',
            'language_id' => 1,
            'key' => 'best_prices_rate',
            'value' => '10 +',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'name',
            'value' => 'Name',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'phone_model',
            'value' => 'Phone model',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'note',
            'value' => 'Notes',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'phone_number',
            'value' => 'Phone number',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'email',
            'value' => 'E-mail',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'phone',
            'value' => 'Phone',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'message',
            'value' => 'Message',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'submit',
            'value' => 'Submit',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'imei',
            'value' => 'IMEI',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'form_details',
            'language_id' => 1,
            'key' => 'agree',
            'value' => 'Your IMEI code will be checked by our service and you will be informed about results',
        ]);
    }
}
