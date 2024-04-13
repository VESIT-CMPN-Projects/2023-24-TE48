<?php

namespace Database\Seeders;

use App\Models\Alphabet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlphabetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i='a'; $i <= 'y'; $i++) {
            Alphabet::create([
                "alphabet" => $i,
                "cover_image" => "$i.png",
                "drawing_image" => "$i.gif",
                "learning_image_1" => "$i"."_learn_image_1.png",
                "learning_image_audio_1" => "$i"."_learn_audio_1.mp3",
                "learning_image_2" => "$i"."_learn_image_2.png",
                "learning_image_audio_2" => "$i"."_learn_audio_2.mp3",
                "learning_image_3" => "$i"."_learn_image_3.png",
                "learning_image_audio_3" => "$i"."_learn_audio_3.mp3",
            ]);
        }

        Alphabet::create([
            "alphabet" => "z",
            "cover_image" => "z.png",
            "drawing_image" => "z.gif",
            "learning_image_1" => "z_learn_image_1.png",
            "learning_image_audio_1" => "z_learn_audio_1.mp3",
            "learning_image_2" => "z_learn_image_2.png",
            "learning_image_audio_2" => "z_learn_audio_2.mp3",
            "learning_image_3" => "z_learn_image_3.png",
            "learning_image_audio_3" => "z_learn_audio_3.mp3",
        ]);
    }
}
