<?php

namespace App\Livewire;

use App\Models\User;
use App\Notifications\OtpCreated;
use Livewire\Component;
use Illuminate\Support\Facades\Auth as AuthFacade;

class Auth extends Component
{
    public $login_form = true;
    public $email;
    public $otp;

    /**
    * Render the component view.
    *
    * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('livewire.auth');
    }

    /**
    * Handle the login form submission.
    *
    * @return void
    */
    public function login()
    {
        $this->validate([
            'email' => 'required|email'
        ]);

        User::generateOtp($this->email);

        $this->login_form = false;
    }

    /**
     * Handle the OTP verification.
     *
     * @return void
     */
    public function verify_otp()
    {
        $this->validate([
            'otp' => ['required', 'numeric', 'digits:6'],
        ]);

        $user = User::getUserByEmailOtp($this->email, $this->otp);

        if (! $user) {
            return $this->addError('otp', 'Invalid OTP');
        }

        AuthFacade::loginUsingId($user, remember: true);

        $this->redirect(route('dashboard'), navigate: true);
    }
}
