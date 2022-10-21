<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicePlanController extends Controller
{
    public function index(){
        return "tai";
    }

    public function create(){

    }

    public function store(ServiceRequest $request){
        $service = $request->validate();
        return $service;
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
