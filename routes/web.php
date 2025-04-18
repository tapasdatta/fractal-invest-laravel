<?php

use App\Livewire\Users\Auth;
use App\Livewire\Assets\{Dashboard, Create, Assets, Show};
use Illuminate\Support\Facades\Route;

Route::middleware(['guest', 'throttle:50,1'])->group(function() {
    Route::get("auth", Auth::class)->name('auth');
});

Route::group(['middleware' => ['auth', 'throttle:50,1']], function() {
    Route::get("/", Dashboard::class)->name('dashboard');

    Route::get("/assets/create", Create::class)->name('assets.create');
    Route::get("/assets/{asset}", Show::class)->name('assets.show');
});


//Mocking: Email OTP Preview

Route::get('browseremail/{email}/{otp}', function ($email, $otp) {

    $user = App\Models\User::where('email', $email)->first();

    if ($user && Illuminate\Support\Facades\Hash::check($otp, $user->otp) && $user->otp_expired_at >= now()) {

        return (new App\Notifications\OtpCreated($user, $otp))
            ->toMail($user);
    }
    return abort(404);
})->name('browseremail');
