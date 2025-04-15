<?php

namespace App\Livewire\Assets;

use App\Livewire\Forms\AssetForm;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreateAsset extends Component
{
    public AssetForm $asset;

    public function save()
    {
        $asset = $this->asset->create();

        session()->flash('status', 'Asset successfully created.');

        $this->dispatch('asset-created', asset: $asset->id);

        $this->redirect(route('assets.create'), navigate: true);
    }

    #[Title("Create your asset!")]
    public function render()
    {
        return view('livewire.assets.create');
    }


}
