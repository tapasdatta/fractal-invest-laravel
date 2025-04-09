<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todo = "";

    public $name = "";

    public $todos = [];

    public function updatedName($value)
    {
        dd($value);
    }

    public function mount()
    {
        $this->todos = ["Learn Laravel", "Learn Livewire", "Learn Blade"];
    }

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset("todo");
    }

    public function render()
    {
        return view("livewire.todo");
    }
}
