<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return response()->json($characters);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'clan' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        $character = Character::create($validatedData);

        return response()->json([
            'message' => 'Character created successfully!',
            'character' => $character,
        ], 201);
    }

    public function show($id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['message' => 'Character not found.'], 404);
        }

        return response()->json($character);
    }

    public function update(Request $request, $id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['message' => 'Character not found.'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'clan' => 'sometimes|string|max:255',
            'age' => 'sometimes|integer|min:0',
        ]);

        $character->update($validatedData);

        return response()->json([
            'message' => 'Character updated successfully!',
            'character' => $character,
        ]);
    }

    public function destroy($id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['message' => 'Character not found.'], 404);
        }

        $character->delete();

        return response()->json(['message' => 'Character deleted successfully!']);
    }
}