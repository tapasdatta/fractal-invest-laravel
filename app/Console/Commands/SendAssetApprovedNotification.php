<?php

namespace App\Console\Commands;

use App\Enums\AssetStatus;
use App\Models\User;
use App\Notifications\AssetApproved;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class SendAssetApprovedNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notify-new-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify the user about assets that have been approved.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Check if there are new assets since the last broadcast
        $lastNotificatoinedAt = Cache::get('last_notification_at', now()->subMinutes(5));

        // Get all users of the new assets
        $users = User::join('assets', 'users.id', '=', 'assets.user_id')
            ->where('assets.status', AssetStatus::VOTING)
            ->where('assets.created_at', '>', $lastNotificatoinedAt)
            ->select('users.email', 'assets.id as asset_id', 'assets.title as asset_title')
            ->get();

        if ($users->isNotEmpty()) {
            // Send notification
            Notification::send($users, new AssetApproved);

            // Update the last broadcasted time
            Cache::put('last_notification_at', now());

            $this->info('New assets notification sent successfully.');

        } else {
            $this->info('No new notfication to send.');
        }
    }
}
