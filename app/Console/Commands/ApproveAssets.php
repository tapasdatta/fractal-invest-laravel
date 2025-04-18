<?php

namespace App\Console\Commands;

use App\Enums\AssetStatus;
use App\Models\Asset;
use Illuminate\Console\Command;

class ApproveAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:approved-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mock: Admin approves assets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Mock: Admin approves assets. In real life, this would be done by an admin panel.
        Asset::where('status', AssetStatus::PROPOSED)
            ->update(['status' => AssetStatus::VOTING]);

        $this->info('New assets approved successfully.');

    }
}
