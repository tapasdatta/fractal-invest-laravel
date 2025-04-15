<?php

namespace App\Livewire\Assets;

use App\Models\Asset;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListAssets extends Component
{
    public $assets;

    public function mount()
    {
        $this->assets = Asset::with('user:id,email')->latest()->get();
    }

    #[Title("All Assets")]
    public function render()
    {
        return view('livewire.assets.all');
    }
}
