<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title= $this->faker->unique()->realText(55);
        return [
            //
            'title'=> $title,
            'slug'=> Str::slug($title),
            'introduction'=> fake()->realText(255),
            'image' => 'articles/'. fake()->image('public/storage/articles',640,480, null, false),
            'body'=> fake()->text(2000),
            'status'=> fake()->boolean(),
            'user_id' => User::all()->random()->id,
            'category_id' => category::all()->random()->id
        ];
    }
}
