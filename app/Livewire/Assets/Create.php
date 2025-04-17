<?php

namespace App\Livewire\Assets;

use App\Livewire\Forms\AssetForm;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Create your asset!")]
class Create extends Component
{
    public AssetForm $asset;

    public function save()
    {
        // Validate the data and create the asset
        $this->asset->create();

        // Reset the form
        $this->reset();

        // Flash the session with a success message
        session()->flash('status', 'Asset successfully created.');
    }
}
