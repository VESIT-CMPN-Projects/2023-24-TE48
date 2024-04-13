<?php

namespace Database\Seeders;

use App\Models\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<10; $i++) {
            Number::create([
                "number" => $i,
                "cover_image" => "$i.png",
                "drawing_image" => "$i.gif",
            ]);
        }
    }
}
