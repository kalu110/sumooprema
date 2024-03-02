<?php

namespace App\Http\Controllers;
use App\Models\Fish;
use App\Models\Reservation;
use Session;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function fish(){
        $fish = Fish::all();
        $reservations = Reservation::all();
        return view('admin/fish',compact('fish','reservations'));
    }

    public function fishAdd(Request $request){
        $fish = new Fish();
        $fish->name = $request['nameFish'];
        $fish->kol = $request['kolFish'];
        $fish->save();

        Session::flash('message', 'Uspešno ste dodali proizvod!'); 
        Session::flash('alert-class', 'alert-success'); 

        return redirect()->back();
    }

    public function deleteFish($id){
        $fish = Fish::findOrFail($id);
        $fish->delete();

        Session::flash('message', 'Uspešno ste obrisali proizvod!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();

    }

    public function updateFish(Request $request, $id){

        $fish = Fish::findOrFail($id);
        $fish->kol = $request['izmenaFish'];
        $fish->save();

        Session::flash('message', 'Uspešno ste izmenili proizvod!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }
}
