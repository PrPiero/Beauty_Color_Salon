<?php

namespace App\Listeners;

use App\Events\WorkerWasCreated;
use App\Mail\LoginCredentials;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendLoginCredentials
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
     * @param  WorkerWasCreated  $event
     * @return void
     */
    public function handle(WorkerWasCreated $event)
    {
        Mail::to($event->worker)->queue(new LoginCredentials($event->worker, $event->password));
    }
}
