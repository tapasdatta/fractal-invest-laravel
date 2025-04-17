<?php

namespace App\Console\Commands;

use App\Events\NewAssetsBroadcast;
use App\Models\Asset;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\Command;

class BroadcastNewAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:broadcast-new-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a broadcast to all users when new assets are published';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Check if there are new assets since the last broadcast
        $lastBroadcastedAt = Cache::get('last_broadcasted_at', now()->subMinutes(5));

        $newAssetsIds = Asset::select(['id'])->where('created_at', '>', $lastBroadcastedAt)->pluck('id');

        if ($newAssetsIds->isNotEmpty()) {

            // Broadcast the new assets
            broadcast(new NewAssetsBroadcast($newAssetsIds));

            // Update the last broadcasted time
            Cache::put('last_broadcasted_at', now());

            $this->info('New assets broadcasted successfully.');

        } else {
            $this->info('No new assets to broadcast.');
        }
    }
}
