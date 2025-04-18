<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth as AuthFacade;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;

class Auth extends Component
{
    public $login_form = true;
    public $email;
    public $otp;

    // Mock OTP for local environment
    #[Locked]
    public $email_otp;

    /**
    * Render the component view.
    *
    * @return \Illuminate\View\View
    */

    #[Title("Get started")]
    #[Layout('components.layouts.auth')]
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
        $this->rateLimit('login');

        $this->validate([
            'email' => 'required|email'
        ]);

        $otp = User::generateOtp($this->email);

        if(env('APP_ENV') == 'local')
        {
            $this->email_otp = $otp;
        }

        $this->login_form = false;
    }

    /**
     * Handle the OTP verification.
     *
     * @return void
     */
    public function verify_otp()
    {
        $this->rateLimit('verify_otp');

        $this->validate([
            'otp' => ['required', 'numeric', 'digits:6'],
        ]);

        $user = User::getUserByEmailOtp($this->email, $this->otp);

        if (! $user) {
            return $this->addError('otp', 'Invalid OTP');
        }

        AuthFacade::loginUsingId($user->id, remember: true);

        $this->redirect(route('dashboard'), navigate: true);
    }

    protected function rateLimit(string $action)
    {
        $key = $action . '.' . request()->ip();

        if (RateLimiter::tooManyAttempts($key, $perMinute = 5)) {
            throw ValidationException::withMessages([
                $action => "Too many attempts."
            ]);
        }

        RateLimiter::increment($key);
    }
}
