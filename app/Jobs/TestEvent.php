<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TestMailNotification;

class TestEvent extends Job
{
    private $event;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $payload=json_decode($this->event->payload,true);
        Log::channel('teams')->error('Error Test' );
        Notification::route('mail', 'nmardones.fabre.21@gmail.com')
                    ->notify(new TestMailNotification($payload));
    }
}
