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

    #[On('echo-private:assets,.asset.created')]
    public function notifyNewAsset($event)
    {
        if($event['id']) {
            $asset = Asset::with('user:id,email')->whereId($event['id'])->first();

            $this->assets->prepend($asset);

            $this->showNewAssetNotification = true;
        }
    }

    #[Title("All Assets")]
    public function render()
    {
        return view('livewire.assets.all');
    }
}
