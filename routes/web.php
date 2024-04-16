<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
// s’assure que seul l’user connecté peut accéder au dashboard en vérifiant l’email
})->middleware(['auth', 'verified'])->name('dashboard');

// s’assure que seul l’user connecté peut accéder à la route pour éditer, mettre à jour et supprimer un post
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//la route post.update accepte la data edepuis le formulaire et met à jour le modèle
Route::resource('post', PostController::class)

     ->only(['index', 'store', 'edit', 'update', 'destroy'])
    // s’assure que seul l’user connecté peut poster en vérifiant l’email
    ->middleware(['auth', 'verified']);

//upload photo de profil

//route edition de profil
Route::resource('users', UserController::class)->only('show','edit','update')->middleware('auth');


require __DIR__.'/auth.php';
