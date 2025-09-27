<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Users\User;
use App\Livewire\Users\CreateUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
});

Route::middleware(['auth', 'role:admin|manager'])->group(function () {
    Route::get('users', User::class)->name('users.index');
    Route::get('users/create', CreateUser::class)->name('users.create');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard.index');

    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');
});


// Halaman Template Statis
Route::group([], function () {
    Route::get('/home', function () {
        return view('static.landing-page');
    })->name('home');

//     Route::get('/login', function () {
//         return view('static.login');
//     })->name('login');

//     Route::get('/dashboard', function () {
//         return view('static.dashboard');
//     })->name('dashboard');
});