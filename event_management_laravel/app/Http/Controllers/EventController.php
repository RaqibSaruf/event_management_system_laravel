<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class EventController extends Controller
{
    public function index(){
    	$sliders = Slider::all();
        return view('welcome')->with('Sliders',$sliders);
    }

    public function dashboard(){
    	return view('dashboard');   
    }

    
    


}
