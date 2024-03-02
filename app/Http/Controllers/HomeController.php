<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Reservation;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $reservation = Reservation::all()->sortBy('stanjePorudzbine');
       $product = Product::all();
        $user = Auth::user();
        $users = User::all();
        if($user->status == 1)
        {
            return (new CategoryController)->dashboard();
         
        }
        else{
      
        Session::put('userID', $user->id); 
        return view('pages/home',compact('users','reservation','product'));
       
        }
    }

}
