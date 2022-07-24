<?php

namespace App\Http\Controllers;

use App\Mail\sendemail;
use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
class ControllerContact extends Controller
{

    public function index(){
        return view('Little.Contact');
    }
    public function send(Request $request){
       Email::create([
        'id'=> 0,
        'name'=> $request -> name,
        'email' => $request -> email,
        'Phone' => $request -> phone,
        'address' => $request -> address,
        'content' => $request -> content
       ]);
      Mail::to('truongp321321@gmail.com')->send(new sendemail(''));
       Email::destroy(0);
       return redirect()->back();
    }

}
