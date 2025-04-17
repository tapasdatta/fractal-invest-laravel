<?php

use App\Livewire\Auth;
use App\Livewire\Assets\CreateAsset;
use App\Livewire\Assets\Assets;
use App\Livewire\Assets\Show;
use App\Livewire\Dashboard;
use App\Models\Asset;
use App\Models\User;
use App\Notifications\AssetStatusUpdated;
use App\Notifications\OtpCreated;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

Route::middleware(['guest', 'throttle:50,1'])->group(function() {
    Route::get("auth", Auth::class)->name('auth');
});

Route::group(['middleware' => ['auth', 'throttle:50,1']], function() {
    Route::get("/", Dashboard::class)->name('dashboard');

    Route::get("/assets/create", CreateAsset::class)->name('assets.create');
    Route::get("/assets/{asset}", Show::class)->name('assets.show');
    Route::get("/assets", Assets::class)->name('assets.all');
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

Route::get('notify', function () {

    $user = User::first();

    $asset = Asset::first();

    return (new AssetStatusUpdated($asset))->toMail($user);
});
