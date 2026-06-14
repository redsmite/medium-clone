<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post; // FIX: Singular model name
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Make sure you have users to assign to the posts!
        User::factory(10)->create();

        $categories = [
            'Technology',
            'Health',
            'Science',
            'Sports',
            'Politics',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name'=> $category]);
        }

        // FIX: Singular model name here as well
        Post::factory(100)->create();  
    }
}