<?php

namespace App\Livewire;

use Livewire\Component;

class Otp extends Component
{

    public $otp;

    public function verify_otp()
    {
        $this->validate([
            'otp' => 'required|numeric|digits:6',
        ]);


    }
}
