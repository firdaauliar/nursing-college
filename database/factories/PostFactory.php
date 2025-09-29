<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        $title = $this->faker->sentence(5);
        $content = $this->faker->paragraphs(5, true);
        return [
            'title' => $title,
            'slug' => Str::slug($title).'-'.$this->faker->unique()->numberBetween(1000,9999),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'author_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'content' => $content,
            'excerpt' =>Str::limit($content, 200, '...')
        ];
    }
}
