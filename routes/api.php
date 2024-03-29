<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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


Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);

Route::get('/logout',[UserController::class,'logout']);
Route::middleware('auth:sanctum','admin')->get('/show',[UserController::class,'index']);

?>
