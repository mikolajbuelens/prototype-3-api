<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motivations = Motivation::all();
         return response()->json($motivations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motivation = new Motivation();
        $motivation->quote = $request->quote;
        $motivation->author = $request->author;
        $motivation->save();
        return response()->json($motivation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Motivation $motivation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motivation $motivation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {http://127.0.0.1:8000/api/motivation
        $motivation = Motivation::find($id);
        $motivation->delete();
        return response()->json(null, 204);
    }
}
