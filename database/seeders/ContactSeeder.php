<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = [
            [
                'title' => 'About Us', 
                'description' => 'Here at Worldwide, were passionate about serving our customers every step of the way. If you wish to contact order or need information start by filling out the form on the left.', 
                'address' => '92A Plumstead High Street London – SE18 1SL, United Kingdom', 
                'office_hours' => 'From 9:00 AM to 6:00 PM', 
                'phone_one' => '+44 20 3325 2905', 
                'phone_two' => '+44 (0) 77 7777 7777', 
                'phone_three' => '+44 (0) 77 7777 7777', 
                'email_one' => 'contact@jmg.com', 
                'email_two' => 'info@jmg.com', 
                'email_three' => 'example@gmail.com', 
                'facebook' => 'www.facebook.com', 
                'twitter' => 'www.twitter.com', 
                'linkedin' => 'www.linkedin.com', 
                'youtube' => 'www.youtube.com', 
                'instagram' => 'www.instagram.com', 
                'map_location' => 'www.google.com', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ]

        ];

        Contact::insert($contact);
    }
}
