<?php

namespace App\Listeners;

use App\Events\CreateCar;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChamadaApi
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
     * @param  CreateCar  $event
     * @return void
     */
    public function handle(CreateCar $event)
    {
        dd($event->getCar()->_id);
    }
}
