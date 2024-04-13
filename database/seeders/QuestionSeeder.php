<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'question_image' => 'two_plus_one.jpg',
            'question_text' => 'what is 2+1=?',
            'question_voice' => 'two_plus_one.mp3'
        ]);

        Question::create([
            'question_image' => 'one_plus_one.jpg',
            'question_text' => 'what is 1+1=?',
            'question_voice' => 'one_plus_one.mp3'
        ]);

        Question::create([
            'question_image' => null,
            'question_text' => 'which is the national animal of india?',
            'question_voice' => 'nationalAnimal.mp3'
        ]);

        Question::create([
            'question_image' => "orange_col.jpg",
            'question_text' => 'which is this color?',
            'question_voice' => 'which_color.mp3'
        ]);

        Question::create([
            'question_image' => "grape.jpg",
            'question_text' => 'which is this fruit?',
            'question_voice' => 'which_fruit.mp3'
        ]);
    }
}
