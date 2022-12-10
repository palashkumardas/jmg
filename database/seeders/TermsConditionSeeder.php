<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TermsCondition;

class TermsConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms_conditions = [
            [
                'title' => 'Terms & Conditions', 
                'description' => 'This is the test descriptions', 
                'created_at' => now(),  
                'updated_at' => now(),
            ]

        ];

        TermsCondition::insert($terms_conditions);
    }
}
