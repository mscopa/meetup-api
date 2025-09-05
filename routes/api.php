<?php

use App\Http\Controllers\Api\AnnouncementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\CounselorAuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductPurchaseController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\PuzzleController;
use App\Http\Controllers\Api\RankingController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\TransactionHistoryController;
use App\Http\Controllers\Api\TransactionRetrievalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile-header', [ProfileController::class, 'getHeaderData']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/announcements', [AnnouncementController::class, 'index']);
    Route::post('/announcements', [AnnouncementController::class, 'store']);
    Route::post('/counselor/identify', [CounselorAuthController::class, 'identify']);
    Route::get('/companies/{company}', [CompanyController::class, 'show']);
    Route::get('/schedule', [ScheduleController::class, 'index']);
    Route::apiResource('/products', ProductController::class);
    Route::post('/purchase', ProductPurchaseController::class);
    Route::get('/my-transactions', TransactionHistoryController::class);
    Route::middleware(['ability:manage-store'])->group(function () {
        Route::get('/transactions/verify/{code}', [TransactionRetrievalController::class, 'verify']);
        Route::post('/transactions/redeem/{code}', [TransactionRetrievalController::class, 'redeem']);
    });
    Route::get('/ranking', [RankingController::class, 'index']);
    Route::get('/puzzles', [PuzzleController::class, 'index']);
    Route::get('/puzzles/{puzzle}', [PuzzleController::class, 'show']);
    Route::patch('/puzzles/{puzzle}/toggle-status', [PuzzleController::class, 'toggleStatus'])
    ->middleware('ability:toggle-puzzles');
    Route::post('/logout', [AuthController::class, 'logout']);
});