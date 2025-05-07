<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIs\APIsController;

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



Route::get('/ambulancecars', [APIsController::class, 'ambulancecars']);
Route::get('/bloodbanks', [APIsController::class, 'bloodbanks']);
Route::get('/Donor', [APIsController::class, 'Donor']);
Route::get('/Employee', [APIsController::class, 'Employee']);
Route::get('/Hospital', [APIsController::class, 'Hospital']);
Route::get('/Patient', [APIsController::class, 'Patient']);
