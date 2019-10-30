<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    public $timestamps = false;
    
    protected $fillable = [
        "car_id",
        "data_hora"
    ];

    protected $table = "log";

}
