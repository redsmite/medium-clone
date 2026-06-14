<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence();
        
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1, 1000),
            'content' => $this->faker->paragraphs(3, true),
            
            // FIX: This grabs a random ID from the categories you just seeded
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            
            // FIX: This grabs a random user, or creates one if none exist
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            
            'images' => null,
            'published_at' => now(),
        ];
    }
}