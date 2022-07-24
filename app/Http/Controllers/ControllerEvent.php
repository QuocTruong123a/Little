<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class ControllerEvent extends Controller
{
    private $event;
    public function __construct(event $event)
    {
        $this -> event = $event;
    }
    public function index(){
        $events = $this -> event ->paginate(4);
        return view('Little.Event',compact('events'));
    }
    public function show($slug,$id){
        $events = $this -> event::where('id',$id)->get();
        return view('Little.DetailEvent',compact('events'));
    }
}
