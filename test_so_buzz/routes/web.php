<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/score", [UserController::class,"voir"])->name("score");
Route::get("/inscription", [UserController::class,"inscription"])->name("inscription_user");
Route::post("/inscription", [UserController::class,"inscription"])->name("inscription_user");


Route::get('/inscription', function () {
    return view('inscription');
});


// Route::get('/name', 'SignupController');*