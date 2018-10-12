<?php

namespace App\Listeners;

use App\Events\UserWasBanned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class EmailBanNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */


    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UserWasBanned  $event
     * @return void
     */
    public function handle(UserWasBanned $event)
    {
        var_dump("notify" .$event->user->name ." have been banned!");
//        $this->mailer->sendBanNotification($event->user->email);
    }
}
