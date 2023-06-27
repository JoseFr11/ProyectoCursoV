<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BicicletaContoller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Fr',[BicicletaContoller::class,'index']);
Route::post('/Fr',[BicicletaContoller::class,'store']);
Route::get('/Fr/{id}',[BicicletaContoller::class,'show']);
Route::put('/Fr/{id}',[BicicletaContoller::class,'update']);
Route::delete('/Fr/{id}',[BicicletaContoller::class,'destroy']);