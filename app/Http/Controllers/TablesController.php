<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Images;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\DB;
class TablesController extends Controller
{
    public function index(){
        $products = new Product;
        $producta = Product::all();
        $category = Category::all();
        $user = User::all();
        $reservations = Reservation::all();

        $nonNullProducts = DB::table('products','reservations')
        ->get();
    
    $newArray = [];
    
    foreach ($nonNullProducts as $product) {
        $newRow = [];
        
        foreach ($product as $columnName => $columnValue) {
            if ($columnValue !== null) {
                $newRow[$columnName] = $columnValue;
            }
        }
        
        $newArray[] = $newRow;
    }
    
    

    $table = $products->getTableColumns();
        return view('admin/tables',compact('producta','category','user','newArray','table','reservations'));
    }
}
