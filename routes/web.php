<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideogameController;
use App\Http\Controllers\ConsoleController;
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
    return view('guest.guest');
});


Route::prefix('/admin')->middleware(['auth'])->name('admin.')->group(function () {

    Route::get('/', [VideogameController::class, 'index'])->name('admin');
    Route::resource('videogames', VideogameController::class);
    Route::resource('consoles', ConsoleController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::resource('admin/publishers', App\Http\Controllers\Admin\PublisherController::class, ['as' => 'admin']);
