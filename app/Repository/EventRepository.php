<?php


namespace App\Repository;


use App\Models\Event;

class EventRepository{
    static  function getEventToexecut(){
        return Event::where('executed',false)->get();
    }
}
