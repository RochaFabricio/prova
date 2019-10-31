<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class LogController extends Controller
{
    public function show(){

        $log = Log::get();

        return response()->json($log);

    }
}
