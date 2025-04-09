<div>

    <form wire:submit.prevent="add">
        <input type="text" wire:model="todo">

        <input type="tezt" wire:model="name">

        <button type="submit">Add Todo</button>
    </form
    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
