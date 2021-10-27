<?php

namespace App\Console\Commands;

use App\Repository\EventRepository;
use App\Jobs\TestEvent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Queue;


class ManagerEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:manager';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Event Manager';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $events=EventRepository::getEventToexecut();
        // Desenrolar alumnos
        $events->each(function ($item, $key)  {

            switch ($item->name){
                case 'test':
                    Queue::push( new TestEvent($item));
                    break;
                default:
                    var_dump($item);
                    break;
            }
            $item->executed=true;
            $item->save();
        });

    }
}
