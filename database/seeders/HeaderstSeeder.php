<?php

namespace Database\Seeders;

use App\Models\Advice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Advice::create([
            'title1'=>"Let's make your life happier",
            'advices1'=>"Healthy Living",
            'title2'=>"Aenean luctus lobortis tellus",
            'advices2'=>"New Lifestyle",
            'title3'=>"Pellentesque nec libero nisi",
            'advices3'=>"Your Health Benefits",
        ]);
    }
}
