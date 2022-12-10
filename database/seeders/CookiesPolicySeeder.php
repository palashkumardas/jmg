<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CookiesPolicy;

class CookiesPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CookiesPolicy = [
            [
                'title' => 'Cookies Policy', 
                'description' => 'This is the test descriptions', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ]

        ];

        CookiesPolicy::insert($CookiesPolicy);
    }
}
