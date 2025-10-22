<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Read All
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'status' => 'success',
            'data' => $genres
        ]);
    }

    // Show by ID
    public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'status' => 'error',
                'message' => 'Genre not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $genre
        ]);
    }

    // Create (admin only)
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

    // Update (admin only)
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'status' => 'error',
                'message' => 'Genre not found'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $genre->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Genre updated successfully',
            'data' => $genre
        ]);
    }

    // Delete (admin only)
    public function destroy($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'status' => 'error',
                'message' => 'Genre not found'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Genre deleted successfully'
        ]);
    }
}
