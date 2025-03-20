<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => 'How this Specialist Luxury car workshop came to be',
                'slug' => Str::slug('How To Improve Fuel Efficiency'),
                'content' => 'We all know that a “heavy foot on the gas” means that you burn more fuel when you drive.',
                'author' => 'Gargash',
                'is_featured' => true,
                'status' => 'published',
                'image' => 'assets/user/img/blog-img-5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How To Improve Fuel Efficiency',
                'slug' => Str::slug('How To Improve Fuel Efficiency'),
                'content' => 'We all know that a “heavy foot on the gas” means that you burn more fuel when you drive.',
                'author' => 'Gargash',
                'is_featured' => false,
                'status' => 'published',
                'image' => 'assets/user/img/blog-img-5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Top 5 Car Maintenance Tips',
                'slug' => Str::slug('Top 5 Car Maintenance Tips'),
                'content' => 'Regular maintenance keeps your car in top condition and prevents costly repairs.',
                'author' => 'John Doe',
                'is_featured' => false,
                'status' => 'published',
                'image' => 'assets/user/img/blog-img-5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Electric vs. Gasoline Cars',
                'slug' => Str::slug('Electric vs. Gasoline Cars'),
                'content' => 'Electric cars are becoming more popular, but how do they compare to gasoline cars?',
                'author' => 'Jane Smith',
                'is_featured' => true,
                'status' => 'published',
                'image' => 'assets/user/img/blog-img-5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
