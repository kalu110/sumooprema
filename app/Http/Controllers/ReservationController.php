<?php

namespace App\Http\Controllers;

use App\Mail\adminNotification;
use App\Mail\stanjeOtkazano;
use App\Mail\stanjePoslato;
use App\Mail\stanjePrimljeno;
use Session;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    
    public function reservationAdd(Request $request){


        $res = new Reservation();
        $res->name=$request['c_fname'];
        $res->email=$request['c_email_address'];
        $res->address=$request['c_address'];
        $res->phone=$request['c_phone'];
        $res->napomena=$request['c_order_notes'];
        $res->products=$request['products'];
        $res->ukupnasuma=$request['hiddenCenaTotal'];



        $name = $request['c_fname']; 
        $email = $request['c_email_address'];
        $address = $request['c_address'];
        $phone = $request['c_phone'];
        $napomena = $request['c_order_notes'];
        $products = $request['products'];
        $ukupnasuma = $request['hiddenCenaTotal'];
        Mail::to($request['c_email_address'])->send(new TestMail($name, $email, $address, $phone, $napomena, $products, $ukupnasuma));
        Mail::to('auditore654@gmail.com')->send(new adminNotification($name, $email, $address, $phone, $napomena, $products, $ukupnasuma)); 
        
        $res->save();

        
        Session::flash('message', 'Uspešno ste rezervisali porudzbinu, stanje porudzbine možete pratiti preko Vašeg profila!'); 
        Session::flash('alert-class', 'alert-success'); 
         session()->forget('cart');
        
        return redirect()->back();

    }

    public function billing(){

        $users = User::all();
        $reservation = Reservation::all();
        $reservations = Reservation::orderBy('stanjePorudzbine','ASC')->get();
        $product = Product::all();

        return view('admin/billing',compact('users','product','reservation','reservations'));
    }

    public function updateReservationStanje($id){
        $reservation = Reservation::findOrFail($id);
        $reservation->stanjePorudzbine = 'PRIMLJENO';
        Mail::to($reservation->email)->send(new stanjePrimljeno($reservation));
        $reservation->save();
        Session::flash('message', 'Uspešno ste potvrdili porudzbinu od korisnika '); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function updateReservationStanjePOSLATO($id){
        $reservation = Reservation::findOrFail($id);
        $reservation->stanjePorudzbine = 'POSLATO';
        Mail::to($reservation->email)->send(new stanjePoslato($reservation)); 
        $reservation->save();


        Session::flash('message', 'Uspešno ste poslali porudzbinu  korisniku '); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }
    function deleteReservation($id){
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
       


        Session::flash('message', 'Uspešno ste obrisali porudzbinu!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    function otkaziReservation($id){
        $reservation = Reservation::findOrFail($id);
        $reservation->stanjePorudzbine = 'OTKAZANO';
        Mail::to($reservation->email)->send(new stanjeOtkazano($reservation)); 
       $reservation->save();


        Session::flash('message', 'Uspešno ste otkazali porudzbinu!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }
    public function profile(){
        $users = User::all();
        $reservations = Reservation::all();
        return view('admin/profile',compact('users','reservations'));
    }
}
