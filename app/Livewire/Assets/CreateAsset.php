<?php

namespace App\Livewire\Assets;

use App\Events\AssetCreated;
use App\Livewire\Forms\AssetForm;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateAsset extends Component
{
    public AssetForm $asset;

    public function save()
    {
        $asset = $this->asset->create();

        AssetCreated::dispatch($asset);

        //after asset creation, it will go for admin approval.
        //admin will aprove or reject the asset.
        //the user will get notification about the approval or rejection.
        //broadcast the event to users(frontend)

        $this->reset();

        session()->flash('status', 'Asset successfully created.');
    }

    #[Title("Create your asset!")]
    public function render()
    {
        return view('livewire.assets.create');
    }
}
