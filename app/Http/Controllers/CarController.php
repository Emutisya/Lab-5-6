<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function allcars(){
        $cars=Car::all();
        return view('car.allcars',['cars'=>$cars]);
    }

    public function particularcar($id){
        //read a particualr car identified by id
    }

    public function newcar(){

        //create a new car
    }
}
