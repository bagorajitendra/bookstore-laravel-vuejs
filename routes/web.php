<?php


use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::prefix('admin')->group(function () {
    Route::get('addbook', [App\Http\Controllers\Api\BookController::class, 'addbook'])->middleware('auth');
    Route::get('editbook/{id}', [App\Http\Controllers\Api\BookController::class, 'editbook'])->middleware('auth');
    Route::get('deletebook/{id}', [App\Http\Controllers\Api\BookController::class, 'deletebook'])->middleware('auth');
});

Route::get('book/{id}', [App\Http\Controllers\Api\BookController::class, 'showbook']);
