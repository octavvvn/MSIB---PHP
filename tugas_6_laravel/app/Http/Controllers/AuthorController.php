<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read All
    public function index()
    {
        $authors = Author::paginate(10);
        return response()->json([
            'status' => 'success',
            'data' => $authors
        ]);
    }


    // Show by ID
    public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'status' => 'error',
                'message' => 'Author not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $author
        ]);
    }

    // Create (admin only)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'bio' => 'nullable|string'
        ]);

        $author = Author::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Author created successfully',
            'data' => $author
        ], 201);
    }

    // Update (admin only)
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'status' => 'error',
                'message' => 'Author not found'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'bio' => 'nullable|string'
        ]);

        $author->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Author updated successfully',
            'data' => $author
        ]);
    }

    // Delete (admin only)
    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'status' => 'error',
                'message' => 'Author not found'
            ], 404);
        }

        $author->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Author deleted successfully'
        ]);
    }
}
