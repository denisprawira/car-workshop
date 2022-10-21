<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Resources\CarResource;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return new CarResource(true, 'List Cars Data', $car);
    }

    public function create(){

    }

    public function store(Request $request){
        $car = Car::create([
            'name'          => $request->name,
            'user_id'       => $request->user_id,
            'arrival_date'  => $request->arrival_date,
            'repair_status' => $request->user_status,
        ]); 
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
