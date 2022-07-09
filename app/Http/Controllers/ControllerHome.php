<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_pack;

class ControllerHome extends Controller
{
    private $service;
    public function __construct(Service_pack $service)
    {
      $this -> service = $service;
    }
    public function index(){
        $select = $this -> service ->all();
        return view('Little.Home',compact('select'));
    }
    public function show(){
        return view('Little.Payment');
    }
    public function notification(){
        return view('Little.notification_payment');
    }
}
