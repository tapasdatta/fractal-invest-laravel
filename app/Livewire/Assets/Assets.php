<?php

namespace App\Livewire\Assets;

use App\Models\Asset;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Assets extends Component
{
    public $showNewAssetNotification = false;

    #[Computed]
    public function assets()
    {
        return Asset::with('user:id,email')->latest()->get();
    }

    #[On('echo-private:assets,.assets.published')]
    public function notifyNewAsset($event)
    {
        if($event['assetIds']) {
            $assets = Asset::with('user:id,email')->whereIn('id', $event['assetIds'])->get();

            $this->assets->merge($assets);

            $this->showNewAssetNotification = true;
        }
    }

    #[Title("All Assets")]
    public function render()
    {
        return view('livewire.assets.all');
    }
}
