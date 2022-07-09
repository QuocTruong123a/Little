<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class ControllerEvent extends Controller
{
    
    public function index(){
        return view('Little.Event');
    }
    public function show(){
        return view('Little.DetailEvent');
    }
}
