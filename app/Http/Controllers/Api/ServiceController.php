<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Resources\ServiceResource;


class ServiceController extends Controller
{
    public function index(Request $request){
        $services = Service::all();
        return new ServiceResource(true, 'List Services Data', $services);
    }

    public function create(){
   
    }

    public function store(Request $request){
        $car = Service::create([
            'name'          => $request->name,
            'price'         => $request->price,
        ]); 
        return "success";
    }

    public function show($id){
        $service = Service::find($id);
        return $service;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        $event = Service::find($id);
        $result = $event->delete();
    }
}
