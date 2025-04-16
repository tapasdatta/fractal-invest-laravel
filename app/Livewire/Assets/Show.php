<?php

namespace App\Livewire\Assets;

use App\Models\Asset;
use Livewire\Component;

class Show extends Component
{
    public Asset $asset;

    public function mount(Asset $asset)
    {
        $this->asset = $asset;
    }

    public function render()
    {
        return view('livewire.assets.show');
    }
}
