<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', \App\Http\Controllers\ProductsController::class);
Route::resource('categories', \App\Http\Controllers\CategoriesController::class);
Route::resource('tickets', \App\Http\Controllers\TicketsController::class);
Route::resource('vedutes', \App\Http\Controllers\VedutesController::class);
Route::resource('artists', \App\Http\Controllers\ArtistsController::class);
Route::get('/artists/{id}', 'ArtistController@show')->name('artists.show');
//Route::get('/artists', [\App\Http\Controllers\ArtistsController::class, 'index'])->name('artists.index');


require __DIR__ . '/auth.php';
