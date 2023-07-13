<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route :: get('/home',[TinController::class,'getHome']);
Route :: get('/chitiet/{id}',[TinController::class,'chitiet']);
Route :: get('/tintrongloai/{idLT}',[TinController::class,'getTintrongloai']);