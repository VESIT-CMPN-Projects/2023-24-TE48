<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numbers = Number::all();
        // dd($numbers);
        return view("frontend.numbers.index", compact(["numbers"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Number $number)
    {
        return view("frontend.numbers.show", compact(["number"]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
