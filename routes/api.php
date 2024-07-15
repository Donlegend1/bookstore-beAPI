<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register-api', [AuthController::class, 'register']);
Route::post('login-api', [AuthController::class, 'login']);
Route::post('logout-api', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/user/update', [AuthController::class, 'update']);
    
    Route::post('author/create', [AuthorController::class, 'store']);
    Route::get('author/list', [AuthorController::class, 'index']);
    Route::get('author/{author}', [AuthorController::class, 'show']);
    Route::post('author/{author}', [AuthorController::class, 'update']);
    Route::delete('author/{author}', [AuthorController::class, 'destroy']);

    Route::post('book/create', [BooksController::class, 'store']);
    Route::get('book/list', [BooksController::class, 'index']);
    Route::get('book/{book}', [BooksController::class, 'show']);
    Route::post('book/{book}', [BooksController::class, 'update']);
    Route::delete('book/{book}', [BooksController::class, 'destroy']);

    Route::post('/reviews', [ReviewController::class, 'store']);
    Route::put('/reviews/{review}', [ReviewController::class, 'update']);
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);
});