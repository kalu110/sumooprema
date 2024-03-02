<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
     public function index()
    {
        $reservations = Reservation::all();
        $category = Category::all();
        $product = Product::all();
       
      
    return view('admin/product',compact('product','category','reservations'));
}

    public function addProduct(Request $request){
        $products = Product::all();
        $product = new Product();
        $image = new Images();
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'image'
    ]);

    $files = [];
    if($request->hasfile('images'))
     {
        foreach($request->file('images') as $file)
        {
            $name = $file->getClientOriginalName();
            $file->move(public_path('files'), $name);  
            $files[] = ','.$name;
           
        }
     }

     $string ='';
    foreach($files as $f){
        $string=$string.$f;
    }
     $file= new Images();
     $file->name = $string;
     $file->id_product= $products->count()+1;
     $file->src = 'asdasd';
     $file->save();

  
       

        
     /*    $array = array();
        $b  = array();
        $a =  $request->all();
        */
      /*  $k='';
        $product = new Product();
        foreach( $a as $i){
            if( str_contains($i[1],' ')){
                $d = explode(' ',$i[1]);
                foreach($d as $j){
                    Str::lower($j);
                    $k = $k.$j;
                    $array=$k;
                }
            }else{
                Str::lower($i[1]);
                $array=$i[1];
            }
        }
        $column = $request->input('checkeboxtrue'); */
        
    $product->name = $request->input('name');
    $product->category = $request->input('category');
    $product->description = $request->input('description');
    $product->brend = $request->input('brend');
    $product->price = $request->input('price');
    $product->zapremina0cm3 = $request->input('zapremina-cm3');
    $product->snaga = $request->input('snaga');
    $product->tezina = $request->input('tezina');
    $product->napon = $request->input('napon');
    $product->aku0tehnologija = $request->input('aku-tehnologija');
    $product->rezna0dubina = $request->input('rezna-dubina');
    $product->optimalna0povrsina0travnjaka = $request->input('optimalna-povrsina-travnjaka');
    $product->sirina0kosnje = $request->input('sirina-kosnje');
    $product->visina0kosnje = $request->input('visina-kosnje');
    $product->jacina0zvucnog0pritiska = $request->input('jacina-zvucnog-pritiska');
    $product->radni0pritisak = $request->input('radni-pritisak');
    $product->maks0pritisak = $request->input('maks-pritisak');
    $product->maks0temperatura0vode = $request->input('maks-temp-vode');
    $product->kolicina0usisanog0zraka = $request->input('kolicinausisanogzraka');
    $product->duzina0usisnog0creva = $request->input('duzinausisnogcreva');
      
    $product->elektricna = $request->input('elektricna');
    $product->Trajanje0baterije = $request->input('trajanje-baterije');
    $product->images = $string;
 
    $product->save();


    Session::flash('message', 'Uspešno ste dodali proizvod!'); 
    Session::flash('alert-class', 'alert-success'); 
        return   redirect()->back();

 


    }
    public function indexFront()
    {
        $category = Category::all();
        $products = Product::all();
        return view('pages/index',compact('products','category'));
    }
    public function shop()
    {
        $category = Category::all();
        $products = Product::all();
        $productpriceMax = Product::max('price');
        $productpriceMin = Product::min('price');

        return view('pages/shop',compact('products','category','productpriceMax','productpriceMin'));
    }

    public function add_to_cart($id){
        $product = Product::findOrFail($id);
        $cart = session()->get('cart',[]);
        $a = explode(',',$product->images);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "product_name" => $product->name,
                "product_category" => $product->category,
                "product_image" => $a[1],
                "product_price" => $product->price,
                "quantity" => 1
            ];
        }
        session()->put('cart',$cart);
        Session::flash('message', 'Uspešno ste dodali proizvod u korpu!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
       }


      public function deletecartproduct($name){
        $cart = session()->get('cart',[]);
        
        foreach($cart as $key => $c)
            if($cart[$key]['product_name']==$name){
                unset($cart[$key]);
            }    
          
      
        session()->put('cart', $cart);
        Session::flash('message', 'Uspešno ste obrisali proizvod iz korpe!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
       }

    public function checkout(){
      
         
     
            $cart = session()->get('cart', []);
           
            return view('pages.checkout', compact('cart'));
        } 


    public function cart(){
        $products = Product::all();

        return view('pages/cart',compact('products'));
    }
    public function minusFromCart($id){
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            if($cart[$id]['quantity']>1){
            $cart[$id]['quantity']--;
            }
            else {
                Session::flash('message','Ne možete smanjiti količinu jer je količina 1');
                Session::flash('alert-class','alert-warning');
                return back(); 
            }
            }
            session()->put('cart',$cart);
        return back();
    }

    public function oneproduct($id){
        $products = Product::all();
        $product = Product::findOrFail($id);
        $pr = new Product;
        $table = $product->getTableColumns();
        $users = User::all();
        return view('pages/oneproduct',compact('product','table','products','users'));
    }

    public function deleteProduct($id){
        $prod = Product::findOrFail($id);
        $prod->delete();

        Session::flash('message','Uspesno ste obrisali proizvod!');
        Session::flash('alert-class','alert-success');
        return redirect()->back(); 
    }

    public function updateProduct($id,$price){

        $p = Product::findOrFail($id);
        $p->price = $price;
        $p->save();

        Session::flash('message','Uspesno ste izmenili cenu proizvoda!');
        Session::flash('alert-class','alert-success');
        return redirect()->back(); 
    }
}

