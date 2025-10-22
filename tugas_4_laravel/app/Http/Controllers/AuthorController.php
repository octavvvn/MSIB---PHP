<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //READ ALL
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'status' => 'success',
            'data' => $authors
        ]);
    }

    //CREATE
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
}
