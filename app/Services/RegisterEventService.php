<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 19/04/21
 * Time: 10:11
 */

namespace App\Services;

use App\Models\Event;

class RegisterEventService
{
    public function createEvent($event)
    {
        try {
            $event["executed"]=false;
            $event["payload"]=json_encode($event["payload"]);
            return  Event::create($event);

        }catch (\Throwable $e){
            throw  $e;

        }
    }
}
