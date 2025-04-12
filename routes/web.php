<?php

use App\Livewire\Auth;
use App\Livewire\Otp;
use App\Models\User;
use App\Notifications\OtpCreated;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as AuthFacade;
use Illuminate\Support\Facades\Hash;

Route::middleware(['guest', 'throttle:50,1'])->group(function() {
    Route::get("auth", Auth::class)->name('auth');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get("/", function () {
        return view("welcome");
    })->name('dashboard');

    Route::get('logout', function () {
        AuthFacade::logout();
        return redirect()->route('auth');
    });
});

Route::get('users', function () {
    return User::all();
});



//Email OTP Preview
Route::get('browseremail/{email}/{otp}', function ($email, $otp) {

    $user = User::where('email', $email)->first();

    if ($user && Hash::check($otp, $user->otp) && $user->otp_expired_at >= now()) {

        return (new OtpCreated($user, $otp))
            ->toMail($user);
    }
    return abort(404);
})->name('browseremail');
