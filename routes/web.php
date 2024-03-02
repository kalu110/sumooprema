<?php

use Illuminate\Support\Facades\Route;
use IIluminta\Http\Controllers\LogOutController;
use IIluminta\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Middleware\IsAdminMiddleware;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\kontaktForma;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('kontakFormaPitanje', function (Request $request) {
     Mail::to('lukaeric8@gmail.com')->send(new kontaktForma($request['name'], $request['lname'],$request['email'],$request['messagesd']));
       Session::flash('message', 'Uspešno ste poslali poruku, očekujte brz odgovor!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
});
Route::get('/', [App\Http\Controllers\ProductController::class, 'indexFront' ]);

Route::get('shop', [App\Http\Controllers\ProductController::class, 'shop' ]);
Route::get('checkout', [App\Http\Controllers\ProductController::class, 'checkout' ]);
Route::get('cart', [App\Http\Controllers\ProductController::class, 'cart' ]);
Route::get('oneproduct/{id}', [App\Http\Controllers\ProductController::class, 'oneproduct' ]);
Route::get('services', function(){
    return view('pages/services');
});
Route::get('contact', function(){
    return view('pages/contact');
});
Route::get('checkout', function(){
    return view('pages/checkout');
});
Route::get('blog', function(){
    return view('pages/blog');
});
Route::get('about', function(){
    return view('pages/about');
});
Route::get('thankyou', function(){
    return view('pages/thankyou');
});

Route::get('confirm', function(){
    return view('auth/passwords/confirm');
});
Route::get('reset', function(){
    return view('auth/passwords/reset');
});


Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::post('reservationAdd', [App\Http\Controllers\ReservationController::class, 'reservationAdd' ])->middleware('auth');
Route::get('add_to_cart/{id}', [App\Http\Controllers\ProductController::class, 'add_to_cart' ]);
Route::get('deletecartproduct/{name}', [App\Http\Controllers\ProductController::class, 'deletecartproduct' ]);
Route::get('minusFromCart/{id}', [App\Http\Controllers\ProductController::class, 'minusFromCart' ]);
Route::get('billing/', [App\Http\Controllers\ReservationController::class, 'billing' ])->middleware('auth');



Auth::routes();
    Route::get('admin', 'UserController@adminDashboard');
   
   
  
    Route::get('virtual-reality', function(){
        return view('admin/virtual-reality');
    });
   
    Route::get('rtl', function(){
        return view('admin/rtl');
    });
    Route::get('notifications', function(){
        return view('admin/notifications');
    });
    Route::get('blog1', function(){
        return view('pages/blog1');
    });
    Route::get('blog2', function(){
        return view('pages/blog2');
    });
     Route::get('blog3', function(){
        return view('pages/blog3');
    });
    Route::get('blog4', function(){
        return view('pages/blog4');
    });
    Route::get('blog5', function(){
        return view('pages/blog5');
    });
    Route::get('blog6', function(){
        return view('pages/blog6');
    });

    Route::get('blog6', function(){
        return view('pages/blog6');
    });

   

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index' ]);

   
    Route::get('dashboard', [App\Http\Controllers\CategoryController::class, 'dashboard' ])->middleware('auth');
    Route::get('fish', [App\Http\Controllers\FishController::class, 'fish' ])->middleware('auth');
    Route::post('fishAdd', [App\Http\Controllers\FishController::class, 'fishAdd' ])->middleware('auth');
    Route::get('category', [App\Http\Controllers\CategoryController::class, 'index' ])->middleware('auth');
    Route::post('addCategory', [App\Http\Controllers\CategoryController::class, 'addCategory' ])->middleware('auth');
    Route::get('product', [App\Http\Controllers\ProductController::class, 'index' ])->middleware('auth');
    Route::post('addProduct', [App\Http\Controllers\ProductController::class, 'addProduct' ])->middleware('auth');
    Route::get('tables', [App\Http\Controllers\TablesController::class, 'index' ])->middleware('auth');
    Route::post('updateUser/{id}', [App\Http\Controllers\UserController::class, 'updateUser' ])->middleware('auth');
    Route::get('deleteFish/{id}', [App\Http\Controllers\FishController::class, 'deleteFish' ])->middleware('auth');
    Route::post('updateFish/{id}', [App\Http\Controllers\FishController::class, 'updateFish' ])->middleware('auth');
    Route::get('deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory' ])->middleware('auth');
    Route::get('deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct' ])->middleware('auth');
    Route::get('updateProduct/{id}/{price}', [App\Http\Controllers\ProductController::class, 'updateProduct' ])->middleware('auth');
    Route::get('updateReservationStanje/{id}', [App\Http\Controllers\ReservationController::class, 'updateReservationStanje' ])->middleware('auth');
    Route::get('updateReservationStanjePOSLATO/{id}', [App\Http\Controllers\ReservationController::class, 'updateReservationStanjePOSLATO' ])->middleware('auth');
    Route::get('deleteReservation/{id}', [App\Http\Controllers\ReservationController::class, 'deleteReservation' ])->middleware('auth');
    Route::get('otkaziReservation/{id}', [App\Http\Controllers\ReservationController::class, 'otkaziReservation' ])->middleware('auth');
    Route::get('profile', [App\Http\Controllers\ReservationController::class, 'profile' ])->middleware('auth');

    
    
    
    



Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

    

