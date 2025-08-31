<?php
use App\Models\Puzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\PuzzleController;
use App\Http\Controllers\Api\UserPuzzleAttemptController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    // ... tus otras rutas
    Route::get('/profile-header', [ProfileController::class, 'getHeaderData']);
    Route::get('/puzzles', [PuzzleController::class, 'index']);
    // 2. Obtiene los datos de un puzzle específico para empezar a jugar.
    Route::get('/puzzles/{puzzle}', [PuzzleController::class, 'show']);
    
    // 3. Inicia un nuevo intento para un puzzle.
    Route::post('/puzzles/{puzzle}/attempts', [UserPuzzleAttemptController::class, 'store']);
    
    // 4. Actualiza y finaliza un intento existente.
    Route::patch('/attempts/{attempt}', [UserPuzzleAttemptController::class, 'update']);
});