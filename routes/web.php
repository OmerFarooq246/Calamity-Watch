<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orgController;
use App\Http\Controllers\save_visit;
use App\Http\Controllers\DisasterController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [orgController::class, 'start'])->name('index');
Route::get('org', [orgController::class, 'org'])->middleware('auth')->name('org');
Route::get('visits', [orgController::class, 'visits'])->name('visits');

Route::get('visit/{org}', [save_visit::class, 'save'])->middleware('auth')->name('visit');

//natural disasters routes
Route::get('earthquake/{mediaType}',
        [DisasterController::class, 'earthquakes'])->name('disaster.earthquakes');

Route::get('tsunami/{mediaType}',
        [DisasterController::class, 'tsunamis'])->name('disaster.tsunamis');

Route::get('flood/{mediaType}',
        [DisasterController::class, 'floods'])->name('disaster.floods');

Route::get('storm/{mediaType}',
        [DisasterController::class, 'storms'])->name('disaster.storms');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
