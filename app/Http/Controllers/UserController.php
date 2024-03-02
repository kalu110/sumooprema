<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Reservation;

class UserController extends Controller
{
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function updateUser(Request $request, $id){

        $user = User::findOrFail($id);
        $updateData = [
            'name' => $request['inputName'],
            'email' => $request['inputEmail'],
            'phone' => $request['inputPhone'],
            'address' => $request['inputAddress'],
        ];
        $user->name = $request['inputName'];
        $user->email = $request['inputEmail'];
        $user->phone = $request['inputPhone'];
        $user->address = $request['inputAddress'];
        $reservation = Reservation::where('email', $user->email)->update($updateData);
        $user->save();
       
      
        Session::flash('message', 'Uspešno ste izmenili podatke o korisniku!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

   
}
