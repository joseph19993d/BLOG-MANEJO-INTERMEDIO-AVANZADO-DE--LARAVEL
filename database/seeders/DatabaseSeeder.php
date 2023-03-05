<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\article;
use App\Models\category;
use App\Models\coment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Storage::deleteDirectory('articles');
        Storage::deleteDirectory('categories');

        Storage::makeDirectory('articles');
        Storage::makeDirectory('categories');

        $this->call(UserSeeder::class);

        category::factory(8)->create();
        article::factory(20)->create();
        coment::factory(20)->create();

    }
}
