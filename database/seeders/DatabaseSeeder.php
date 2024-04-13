<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'sumeet',
            'email' => 'sumeet@gmail.com',
            'password' => Hash::make("abcd1234"),
        ]);

        $this->call([
            AlphabetSeeder::class,
            NumbersSeeder::class,
            ShapesSeeder::class,
            PoemSeeder::class,
            QuestionSeeder::class,
            OptionSeeder::class,
            AnimalSeeder::class,
            VegetableSeeder::class,
            ARSeeder::class,
        ]);
    }
}
