<?php

namespace App\Broadcasting;

use App\Models\User;

class CustomeNotificationChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user): array|bool
    {
        return false; // @todo ( change the code, arash wrotted it )
    }
}
