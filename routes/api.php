<?php
use App\Models\Puzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\PuzzleController;
use App\Http\Controllers\Api\UserPuzzleAttemptController;
use App\Http\Controllers\Api\ScheduleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile-header', [ProfileController::class, 'getHeaderData']);
    Route::get('/schedule', [ScheduleController::class, 'index']);
    Route::get('/puzzles', [PuzzleController::class, 'index']);
    Route::get('/puzzles/{id}', [PuzzleController::class, 'show']);
});