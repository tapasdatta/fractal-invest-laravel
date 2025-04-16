<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;



Broadcast::channel('assets', function (User $user) {
    return $user->id;
});
