<div>
    The current time is {{ now()->format('H:i:s') }}

    <button wire:click="$refresh">
        Refresh Time
    </button>
</div>
