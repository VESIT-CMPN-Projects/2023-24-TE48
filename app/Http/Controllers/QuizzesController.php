<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
     /**
     * Display the specified resource.
     */
    public function show(string $quiz)
    {
        $question = Question::find($quiz);
        // dd($question);
        return view("frontend.quiz.show", compact(["question"]));
    }
}
