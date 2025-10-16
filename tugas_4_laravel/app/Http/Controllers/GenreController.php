<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'success' => true,
            'message' => 'List of Genres',
            'data' => $genres
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        $genre = Genre::create($request->only(['name']));

        return response()->json([
            'success' => true,
            'message' => 'Genre created successfully',
            'data' => $genre
        ]);
    }
}
