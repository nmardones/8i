<?php

namespace App\Http\Controllers;

use App\Services\RegisterEventService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Notifications;
use App\Notifications\TestMailNotification;

class EventController extends Controller
{
    private $eventService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterEventService $eventService)
    {
        $this->eventService = $eventService;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function register(Request $request)
    {
        $result = $this->eventService->createEvent($request->all());
        return $this->successResponse($result);
    }

}
