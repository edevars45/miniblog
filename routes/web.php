<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemoController;

//Protéger une route d'administration par rôle
>>>>>>> 05aaa84 (Initial commit: Laravel + Breeze + Spatie (miniblog))
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
=======
// Dashboard (protégé)
>>>>>>> 05aaa84 (Initial commit: Laravel + Breeze + Spatie (miniblog))
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

<<<<<<< HEAD
=======
// Profil (protégé)
>>>>>>> 05aaa84 (Initial commit: Laravel + Breeze + Spatie (miniblog))
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
// Démo du trait Logger (public — à protéger si besoin)
Route::get('/demo-log', [DemoController::class, 'test'])->name('demo.log');

//Protéger une route d'administration par rôle

Route::get('/admin', function () {
    return 'Zone admin : accès réservé';
})->middleware(['auth', 'role:admin'])->name('admin.home');

require __DIR__ . '/auth.php';


>>>>>>> 05aaa84 (Initial commit: Laravel + Breeze + Spatie (miniblog))
