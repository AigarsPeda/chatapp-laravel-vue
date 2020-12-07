<?php

namespace App\Listener;

use App\Events\NewChatMessage;
use App\Models\ChatMessage;

class SendChatMessageNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewChatMessage  $event
     * @return void
     */
    public function handle(NewChatMessage $event)
    {
        //
    }
}
