<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(
            [
                'full_name'=>'lian garcia',
                'email'=>'ejemplo@ejemplo.ej',
                'password'=> Hash::make('12345678'),

            ]
            );

        User::create(
            [
                'full_name'=>'Andres garcia',
                'email'=>'ej@ejemplo.ej',
                'password'=> Hash::make('12345678'),

            ]
            );

        User::factory(10)->create();
    }
}
