<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Fish;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
class CategoryController extends Controller
{
    public function index(){
        $products = Product::all();
        $product = new Product;
        $reservations = Reservation::all();
        $category =  Category::all();
        $niz = $product->getTableColumns();
        foreach($niz as $t){
            if (strpos($t, '0') !== false) {
                $a = explode('0',$t);
                $t='';
                foreach($a as $d){
                    $t =$t.' '.$d;
                }
                $table []=$t;
            }
            else{
                $table []=$t;
            }
        }
        return view('admin/category',compact('table','category','products','reservations'));
    }

    public function getTableColumns($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);
    
        // OR
    
        return Schema::getColumnListing($table);
    
}

    public function addCategory(Request $request){

        $category = new Category();
        $all  = '';
        $column = $request->input('checkeboxtrue');
        foreach($column as $c){
            $all =$all.','.$c;
        }
        $category->name = $request->input('name');
        $category->column = $all;
        $category->save();
        
        Session::flash('message', 'Uspešno ste dodali kategoriju!'); 
        Session::flash('alert-class', 'alert-success'); 
       
      return  redirect()->back();


    }
    public function dashboard(){
        $users = User::all();
        $products = Product::all();
        $category = Category::all();
       $reservationGroup = Reservation::where('stanjePorudzbine', 'POSLATO')
       ->groupBy('email')
      ->selectRaw('email, sum(ukupnasuma) as sss')->orderBy('ukupnasuma','DESC')->get();
    
        $reservation = Reservation::all()->where('stanjePorudzbine','POSLATO')->sum('ukupnasuma');
        $reservations = Reservation::all();
        $fish = Fish::all();
        return view('admin/dashboard',compact('users','products','category','fish','reservation','reservations','reservationGroup'));
    }

    public function deleteCategory($id){
        $c = Category::findOrFail($id);
        $c->delete();

        Session::flash('message', 'Uspešno ste obrisali kategoriju!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();

    }
}
