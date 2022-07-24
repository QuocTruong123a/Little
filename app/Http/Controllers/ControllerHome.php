<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_pack;
use App\Models\Book_ticket;
use App\Models\payment;
use PDF;
class ControllerHome extends Controller
{
    private $service;
    private $book;
    private $payment;
    public function __construct(Service_pack $service,Book_ticket $book,payment $payment)
    {
      $this -> service = $service;
      $this -> book = $book;
      $this -> payment = $payment;
    }
    public function index(){
        $select = $this -> service ->all();
        return view('Little.Home',compact('select'));
    }
    public function book(Request $request){
        $carts =  session()->get('cart');
        $carts=[
            'quantity' => $request -> quantity,
            'use_date' => $request -> use_date,
            'name' => $request -> name,
            'Phone' => $request -> Phone,
            'Email' => $request -> Email,
            'service_id' => $request -> service_id
         ];
         session()->put('cart',$carts);
        $data = $request -> all();
     $this -> book ->create( $data );
     return redirect()->route('payment');
    }
    public function show(){
        $orders = session() ->get('cart');
        $book = $this -> service -> where('id', $orders['service_id'])->get();
        return view('Little.Payment',compact('orders','book'));
    }
    public function post_show(Request $request){

        $book =  $this -> book ->orderBy('id', 'desc')->value('id');
        $this -> payment ->create([
            'ticket_id' =>   $book,
            'total' => $request -> total,
            'status'=>'thanh toán thành công'
        ]);
        $payments =  $this -> payment ->orderBy('id', 'desc')->value('id');
        $carts1 =  session()->get('cart1');
        $carts1=[
            'ticket_id' => $book,
            'payment_id' => $payments
         ];
         session()->put('cart1',$carts1);
        return redirect()->route('notification');
    }
    public function notification(){
         $notification = session() ->get('cart1');
         $books = $this -> book -> where('id',$notification['ticket_id'])->get();

            return view('Little.notification_payment',compact('books'));


    }
    public function pdf(){
          $pdf = PDF::class::loadView('Little.Pdf');
         return $pdf->download('notification_payment.pdf');
    }

}
