<?php

namespace App\Livewire\Assets;

use App\Models\Asset;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListAssets extends Component
{
    #[Title("All Assets")]
    public function render()
    {
        return view('livewire.assets.all')->with([
            'assets' => Asset::with('user:id,email')->get()
        ]);
    }
}
