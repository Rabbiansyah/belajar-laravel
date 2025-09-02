<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => Str::slug(fake()->sentence()),
            'title' => fake()->sentence(),
            'author_id' => User::factory(),
            'body' => fake()->realTextBetween(minNbChars:600, maxNbChars:1800),
            'tags' => fake()->word()
        ];
    }

    public function withCategories($min = 1, $max = 3): static{
        return $this->afterCreating(function(Post $post) use ($min, $max){
            $count = rand($min, $max);
            $categories = Category::inRandomOrder()->take($count)->pluck('id');

            $post->categories()->attach($categories);
        });
    }
}
