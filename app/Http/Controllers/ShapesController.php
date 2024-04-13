<?php

namespace App\Http\Controllers;

use App\Models\Shape;
use Illuminate\Http\Request;

class ShapesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shapes = Shape::all();
        return view("frontend.shapes.index", compact(["shapes"]));
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
    public function show(Shape $shape)
    {
        return view("frontend.shapes.show", compact(["shape"]));
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
