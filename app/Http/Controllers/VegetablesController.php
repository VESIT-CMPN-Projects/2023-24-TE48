<?php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;

class VegetablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vegetables = Vegetable::all();
        // dd($animals);
        return view("frontend.vegetables.index", compact(['vegetables']));
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
    public function show(string $id)
    {
        $vegetable = Vegetable::findOrFail($id);
        // dd($animal);
        return view("frontend.vegetables.show", compact(['vegetable']));
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
