<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Puzzle;
use Illuminate\Http\Request;
use App\Http\Resources\PuzzleResource;


class PuzzleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $puzzles = $user->puzzles()
                        ->with(['crossword_words', 'word_search_words'])
                        ->where('is_enabled', true)
                        ->get();

        return PuzzleResource::collection($puzzles);
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
    public function show(Request $request, Puzzle $puzzle)
    {
        if ($request->user()->id !== $puzzle->user_id) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $puzzle->load(['crossword_words', 'word_search_words']);

        return new PuzzleResource($puzzle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puzzle $puzzle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puzzle $puzzle)
    {
        //
    }
}
