<?php

use Illuminate\Database\Seeder;

class ChooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chooses')->insert([
            'language_id' => 1,
            'icon' => 'fa-users',
            'title' => 'Absolutely safe',
            'text' => 'Completely safe no risk 
            to your phone or hardware. No
            software downloads are required.
            Alongside unlocks, your money are
            completely secure as well.',
        ]);

        DB::table('chooses')->insert([
            'language_id' => 1,
            'icon' => 'fa-film',
            'title' => 'Unbeatable Price Guarantee',
            'text' => 'We offer the lowest prices with the
            most reliable services one can 
            easily trust. Whatever price you 
            are currently paying, we will MEET or 
            BEAT any competitors\' price.',
        ]);
        DB::table('chooses')->insert([
            'language_id' => 1,
            'icon' => 'fa-clock-o',
            'title' => '14/7 Reliable Support',
            'text' => 'We really make a difference in
            providing support to our
            customers. We ensure the 
            availability of our staff, 14x7.
            E-mail, Live Chat or Text 
            Message, we\'re here to help',
        ]);
        DB::table('chooses')->insert([
            'language_id' => 1,
            'icon' => 'fa-file-o',
            'title' => 'Permanent Factory Unlock',
            'text' => 'Official Factory Unlock for any
            iPhone, regarless of IOS version.
            Basehand version or model.
            Permanent Hassle free Factory
            unlock your iPhone without voiding
            warranty or difficult procedures.
            No need to run any complicated
            softwares.',
        ]);
        DB::table('chooses')->insert([
            'language_id' => 1,
            'icon' => 'fa-check',
            'title' => 'Money Back Guarantee',
            'text' => 'All of the services on our websites
            are covered by our 100% Money
            Back Guarantee. We provide such a
            guarantee to give honest
            customers the reassurance that the
            unlock service they are ordering
            will be delivered in good faith.',
        ]);
        DB::table('chooses')->insert([
            'language_id' => 1,
            'icon' => 'fa-desktop',
            'title' => 'Expeditious Delivery',
            'text' => 'All unlock codes and unlock
            confirmations are sent by e-mail to
            the e-mail address that the
            customer provides on the order
            from. We make sure the delivery of
            unlock codes is time-efficient. If delayed, we\'ll inform our client / resellers
            via e-mail.',
        ]);
    }
}
