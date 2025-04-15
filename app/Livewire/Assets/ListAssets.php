<?php

namespace App\Livewire\Assets;

use App\Models\Asset;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListAssets extends Component
{

    public $assets;

    public function mount()
    {
        $this->assets = Asset::with('user:id,email')->get();
    }

    #[On('asset-created')]
    public function assetCreated(Asset $asset)
    {
        $this->assets->prepend($asset);

        session()->flash('status', 'Asset successfully created.');
    }

    #[Title("All Assets")]
    public function render()
    {
        return view('livewire.assets.all')->with([
            'assets' => Asset::with('user:id,email')->get()
        ]);
    }
}
