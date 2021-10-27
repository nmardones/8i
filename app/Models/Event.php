<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
    use Notifiable;

    public $table = 'events';
    public $fillable = [
        'name',
        'type_event',
        'source',
        'payload',
        'executed',
    ];

}
