<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/support', function () {
    return view('pages.support');
});
Route::get('/register', function () {
    return view('pages.inscrire');
});
Route::get('/login', function () {
    return view('pages.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(UserController::class)->group(function(){
    Route::get('utilisateurs','index');
    Route::get('modifier-utilisateur/{id}','editUser');
    Route::put('updateProfile','updateProfile');
    Route::delete('deleteProfile','deleteProfile');
    Route::delete('utilisateurs','deleteUser')->name('delete.user');
    Route::put('utilisateurs','updateUser')->name('update.user');
    Route::post('utilisateurs','createUser')->name('create.user');
});



require __DIR__.'/auth.php';
