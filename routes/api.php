<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductPurchaseController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\PuzzleController;
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
    Route::apiResource('/products', ProductController::class);
    Route::post('/purchase', ProductPurchaseController::class);
    Route::get('/puzzles', [PuzzleController::class, 'index']);
    Route::get('/puzzles/{id}', [PuzzleController::class, 'show']);
});