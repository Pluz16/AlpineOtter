<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PostController;
use App\Models\Dog;
use App\Models\Owner;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $totalDogs = Dog::count();
        $totalOwners = Owner::count();
    
        return view('dashboard', compact('totalDogs', 'totalOwners'));
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotte CRUD per le risorse Dogs
    Route::get('/dogs', [DogController::class, 'index'])->name('dogs.index');
    Route::get('/dogs/create', [DogController::class, 'create'])->name('dogs.create');
    Route::post('/dogs', [DogController::class, 'store'])->name('dogs.store');
    Route::get('/dogs/{dog}', [DogController::class, 'show'])->name('dogs.show');
    Route::get('/dogs/{dog}/edit', [DogController::class, 'edit'])->name('dogs.edit');
    Route::put('/dogs/{dog}', [DogController::class, 'update'])->name('dogs.update');
    Route::delete('/dogs/{dog}', [DogController::class, 'destroy'])->name('dogs.destroy');

    // Rotte CRUD per le risorse Owners
    Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
    Route::get('/owners/create', [OwnerController::class, 'create'])->name('owners.create');
    Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
    Route::get('/owners/{owner}', [OwnerController::class, 'show'])->name('owners.show');
    Route::get('/owners/{owner}/edit', [OwnerController::class, 'edit'])->name('owners.edit');
    Route::put('/owners/{owner}', [OwnerController::class, 'update'])->name('owners.update');
    Route::delete('/owners/{owner}', [OwnerController::class, 'destroy'])->name('owners.destroy');

    
    // Rotte CRUD per le risorse Posts
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


});



require __DIR__.'/auth.php';
