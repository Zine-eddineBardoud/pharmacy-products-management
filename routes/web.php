<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;

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

Route::get('/drugs', [DrugsController::class, 'index']);

Route::get('/drugs/{id}', [DrugsController::class, 'show']);

Route::get('/drugs/create/product', [DrugsController::class, 'create']);
Route::post('/drugs/create/product', [DrugsController::class, 'store']);

Route::get('/drugs/{id}/edit', [DrugsController::class, 'edit']);
Route::put('/drugs/{id}/edit', [DrugsController::class, 'update']);

Route::delete('/drugs/{id}' ,[DrugsController::class, 'destroy']);