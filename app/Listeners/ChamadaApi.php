<?php

namespace App\Listeners;

use App\Log;
use Carbon\Carbon;

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

        $log = new Log();
        $log->data_hora = Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s');
        $log->car_id = $event->getCar()->_id;
        $log->save();

    }
}
