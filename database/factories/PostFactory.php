<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence;
        return [
            'cover_image' => null,
            'category' => $this->faker->word,
            'title' => $title,
            'short_description' => $this->faker->sentence(6),
            'body' => $this->faker->paragraph(5),
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'status' => 'published',
            'published_at' => now(),
        ];
    }
}
