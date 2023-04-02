<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// view page route
Route::get('bulk', [TestController::class, 'bulk']);

// delete
Route::post('delete-users', [TestController::class, 'deleteUsers'])->name('deleteUsers');
