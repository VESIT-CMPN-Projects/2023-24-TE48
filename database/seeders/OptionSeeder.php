<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Option::create([
            'option_image' => '1.png',
            'option_text' => '1',
            'is_correct' => 0,
            'question_id' => 1,
        ]);

        Option::create([
            'option_image' => '3.png',
            'option_text' => '3',
            'is_correct' => 1,
            'question_id' => 1
        ]);

        Option::create([
            'option_image' => '5.png',
            'option_text' => '5',
            'is_correct' => 0,
            'question_id' => 1
        ]);

        Option::create([
            'option_image' => '7.png',
            'option_text' => '7',
            'is_correct' => 0,
            'question_id' => 1
        ]);





        Option::create([
            'option_image' => '2.png',
            'option_text' => '2',
            'is_correct' => 1,
            'question_id' => 2,
        ]);

        Option::create([
            'option_image' => '3.png',
            'option_text' => '3',
            'is_correct' => 0,
            'question_id' => 2
        ]);

        Option::create([
            'option_image' => '5.png',
            'option_text' => '5',
            'is_correct' => 0,
            'question_id' => 2
        ]);

        Option::create([
            'option_image' => '1.png',
            'option_text' => '2',
            'is_correct' => 0,
            'question_id' => 2
        ]);



        Option::create([
            'option_image' => 'elephant.jpg',
            'option_text' => 'elephant',
            'is_correct' => 0,
            'question_id' => 3,
        ]);

        Option::create([
            'option_image' => 'cheeta.jpg',
            'option_text' => 'cheeta',
            'is_correct' => 0,
            'question_id' => 3
        ]);

        Option::create([
            'option_image' => 'wolf.jpg',
            'option_text' => 'wolf',
            'is_correct' => 0,
            'question_id' => 3
        ]);

        Option::create([
            'option_image' => 'tiger.jpg',
            'option_text' => 'tiger',
            'is_correct' => 1,
            'question_id' => 3
        ]);


        Option::create([
            'option_image' => null,
            'option_text' => 'orange',
            'is_correct' => 1,
            'question_id' => 4,
        ]);

        Option::create([
            'option_image' => null,
            'option_text' => 'red',
            'is_correct' => 0,
            'question_id' => 4
        ]);

        Option::create([
            'option_image' => null,
            'option_text' => 'pink',
            'is_correct' => 0,
            'question_id' => 4
        ]);

        Option::create([
            'option_image' => null,
            'option_text' => 'green',
            'is_correct' => 0,
            'question_id' => 4
        ]);



        Option::create([
            'option_image' => null,
            'option_text' => 'apple',
            'is_correct' => 0,
            'question_id' => 5,
        ]);

        Option::create([
            'option_image' => null,
            'option_text' => 'bannana',
            'is_correct' => 0,
            'question_id' => 5
        ]);

        Option::create([
            'option_image' => null,
            'option_text' => 'grapes',
            'is_correct' => 1,
            'question_id' => 5
        ]);

        Option::create([
            'option_image' => null,
            'option_text' => 'orange',
            'is_correct' => 0,
            'question_id' => 5
        ]);
    }
}
