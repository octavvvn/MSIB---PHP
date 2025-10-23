<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GenreController extends Controller
{
    // READ ALL 
    public function index(): JsonResponse
    {
        return response()->json(['success' => true, 'data' => Genre::all()]);
    }

    // CREATE 
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate(['name' => 'required|string|max:255']);
        $genre = Genre::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Genre created',
            'data' => $genre
        ], 201);
    }

    // SHOW 
    public function show($id): JsonResponse
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found'
            ], 404);
        }

        return response()->json(['success' => true, 'data' => $genre]);
    }

    // UPDATE 
    public function update(Request $request, $id): JsonResponse
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found'
            ], 404);
        }

        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255'
        ]);

        $genre->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Genre updated',
            'data' => $genre
        ]);
    }

    // DESTROY 
    public function destroy($id): JsonResponse
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre not found'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre deleted'
        ]);
    }
}
