<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //READ ALL
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'status' => 'success',
            'data' => $genres
        ]);
    }

    //CREATE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Genre created successfully',
            'data' => $genre
        ], 201);
    }
}
