<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
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
        $title = fake()->sentence();
        return [
            //
            'images' => fake()->imageUrl(640, 480, 'cats', true, 'Faker'),
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->paragraphs(3, true),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => 3, // Assuming user with ID 1 exists
            'published_at' => fake()->optional()->dateTime()
        ];
    }
}
