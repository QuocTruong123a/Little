<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContact extends Controller
{

    public function index(){
        return view('Little.Contact');
    }
}
