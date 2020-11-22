<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use \App\Http\Controllers\UserController;
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

Route::get('/', IndexController::class);

Route::prefix('users/')->group(function () {

    Route::get('', [UserController::class, 'index'])->name('users.index');

    Route::get('create', [UserController::class, 'create'])->name("users.create");

    Route::post('', [UserController::class, 'store'])->name('users.store');

    Route::get('show/{user}', [UserController::class, 'show'])->name("users.show");

    Route::get('edit/{user}', [UserController::class, 'edit'])->name('users.edit');

    Route::put('{id}', [UserController::class, 'update'])->name('users.update');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
