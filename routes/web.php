<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\User;

Route::get('/dashboard', function () {
    return view('dashboard', [
        'totalUsers' => User::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', fn () => view('profile.show'))->name('profile');
});

require __DIR__.'/auth.php';
