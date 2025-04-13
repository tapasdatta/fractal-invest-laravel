<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
