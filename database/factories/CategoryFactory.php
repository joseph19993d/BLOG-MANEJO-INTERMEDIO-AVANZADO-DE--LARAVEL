<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name= $this->faker->unique()->word(10);
        return [
            //
            'name'=> $name,
            'slug'=> Str::slug($name),
            'image' => 'articles/'. fake()->image('public/storage/categories',640,480, null, false),
            'is_featured' => fake()->boolean(),
            'status' => fake()->boolean()
        ];


    }
}
