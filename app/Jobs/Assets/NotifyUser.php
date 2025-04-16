<?php

namespace App\Jobs\Assets;

use App\Notifications\AssetStatusUpdated;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class NotifyUser implements ShouldQueue
{
    use Queueable, Batchable;

    public $asset;

    /**
     * Create a new job instance.
     */
    public function __construct($asset)
    {
        $this->asset = $asset;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->batch()->cancelled()) {
            // Determine if the batch has been cancelled...

            return;
        }

        $this->asset->user->notify(new AssetStatusUpdated($this->asset));

        Log::info('User notified', [
            'user_id' => $this->asset->user->id,
            'asset_id' => $this->asset->id,
        ]);
    }
}
