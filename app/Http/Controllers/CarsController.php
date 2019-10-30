<?php

namespace App\Http\Controllers;

use App\Repositories\Cars;
use App\Events\CreateCar;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    protected $cars;

    public function __construct(Cars $cars){
        $this->cars = $cars;
    }

    public function index(){

        $cars = $this->cars->all();
    
        return response()->json($cars);
    }

    public function show($id){

        $car = $this->cars->find($id);
    
        return response()->json($car);
    }

    public function store(Request $request){
        
        $car = $this->cars->store($request);

        return response()->json($car);
    }

}
