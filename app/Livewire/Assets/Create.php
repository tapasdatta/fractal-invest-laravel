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
        $this->asset->create();

        $this->reset();

        session()->flash('status', 'Asset successfully created.');
    }
}
