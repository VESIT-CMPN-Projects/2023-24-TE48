<?php

namespace Database\Seeders;

use App\Models\Shape;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShapesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shapes = ["square", "triangle", "circle", "rectangle", "star", "heart"];

        foreach ($shapes as $shape) {
            Shape::create([
                "name" => $shape,
                "cover_image" => $shape . ".png",
                "drawing_image" => $shape . ".gif",
                "example_image_1" => $shape. "_example_1.jpg",
            ]);
        }

    }
}
