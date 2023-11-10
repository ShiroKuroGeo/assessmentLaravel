<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookletController;

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

Route::get('/books', [bookletController::class,'showAllStocks']);
Route::get('/showBooks', [bookletController::class,'showBook']);
Route::post('/addBooks', [bookletController::class,'addBooklet']);
Route::post('/updateBooks', [bookletController::class,'updateBooklet']);
Route::post('/deleteBooks', [bookletController::class,'deleteBooklet']);