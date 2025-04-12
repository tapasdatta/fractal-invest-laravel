<?php

use App\Livewire\Auth;
use App\Livewire\Otp;
use App\Models\User;
use App\Notifications\OtpCreated;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as AuthFacade;

Route::middleware(['guest', 'throttle:5,1'])->group(function() {
    Route::get("auth", Auth::class)->name('auth');
});

// https://aregsar.com/blog/2020/laravel-app-with-redis-in-docker/

Route::group(['middleware' => 'auth'], function() {
    Route::get("/", function () {
        return view("welcome");
    })->name('dashboard');
});

Route::get('users', function () {
    return User::all();
});

Route::get('/notification', function () {
    $user = User::find(1);
    $otp = "343436";

    return (new OtpCreated($user, $otp))
        ->toMail($user);
});

Route::get('/logout', function () {
    AuthFacade::logout();
    return redirect()->route('auth');
});
