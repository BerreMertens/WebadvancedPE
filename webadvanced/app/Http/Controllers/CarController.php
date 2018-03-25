<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    public function index()
    {
        $cars = car::all();
        return view('welcome',['cars' => $cars]);
    }

    public function  home(){
        return view('home');
    }
    public function create()
    {
        $car= new Car();
        $car->merk= request('merk');
        $car->model=request('model');
        $car->prijs=request('prijs');
        $car->save();
        return Redirect::back();

    }
}
