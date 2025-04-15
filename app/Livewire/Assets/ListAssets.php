<?php

namespace App\Livewire\Assets;

use App\Models\Asset;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListAssets extends Component
{
    public $showNewAssetNotification = false;

    public $assets;

    #[On('echo-private:assets,.asset.created')]
    public function notifyNewAsset($event)
    {
        if($event['id']) {
            $asset = Asset::with('user:id,email')->whereId($event['id'])->first();

            $this->assets->prepend($asset);

            $this->showNewAssetNotification = true;
        }
    }

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
