<?php

namespace App\Livewire\Forms;

use App\Enums\Currency;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AssetForm extends Form
{
    #[Validate('required|min:5|unique:assets,title')]
    public $title = '';

    #[Validate('required|min:5')]
    public $description = '';

    #[Validate('required|gte:100|lte:1000')]
    public $initial_value = '';

    #[Validate('required|gte:100|lte:1000')]
    public $target_funding = '';

    #[Validate('required')]
    public $currency = '';

    protected function rules()
    {
        return [
            'currency' => [
                Rule::enum(Currency::class)
            ]
        ];
    }

    public function create()
    {
        $validated = $this->validate();

        $user = Auth()->user();

        $asset = $user->assets()->create($validated);

        $this->reset();

        return $asset;
    }
}
