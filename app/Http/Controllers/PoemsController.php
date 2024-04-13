<?php

namespace App\Http\Controllers;

use App\Models\Poem;
use Illuminate\Http\Request;

class PoemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poems = Poem::all();
        return view("frontend.poems.index" , compact(["poems"]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Poem $poem)
    {
        // dd($poem);
        return view("frontend.poems.show", compact(["poem"]));
    }
}
