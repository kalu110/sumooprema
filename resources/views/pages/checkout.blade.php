<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('css/style2.css')}}" rel="stylesheet">
		<title>Šumooprema - Račun</title>
	</head>
	<body>

	
	@include('layouts/navmain')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row   checkOutLogoStyleCale">
						<div class="col-lg-12 checkOutLogoStyle">
							
						</div>
						
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
		
		<div class="untree_co-section">
		    <div class="container">
		      <div class="row mb-5">
				@if(!auth()->check())
		        <div class="col-md-12">
		          <div class="border p-4 rounded" role="alert">
		            Već imate nalog? <a href="{{asset('login')}}">Klikni</a> da se ulogujes
		          </div>
		        </div>
				@endif
		      </div>
		      <div class="row">
				@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
				
				@endif
		        <div class="col-md-6 mb-5 mb-md-0">
		          <h2 class="h3 mb-3 text-black">Račun</h2>
		          <div class="p-3 p-lg-5 border bg-white">
		           <form action="{{asset('reservationAdd')}}" method="POST">
					@csrf
		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_fname" class="text-black">Ime <span class="text-danger">*</span></label>
						@if(auth()->check())
						
						<input type="text" class="form-control" id="c_fname" value="{{ auth()->user()->name }}" name="c_fname" required>
						@else
						<input type="text" class="form-control" id="c_fname" name="c_fname" required>
   						 @endif
						
		              </div>
		             
		            </div>

		          

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_address" class="text-black">Adresa <span class="text-danger">*</span></label>
						@if(auth()->check())
						
						<input  type="text" class="form-control" id="c_address" value="{{ auth()->user()->address }}" name="c_address" required>
						@else
		                <input  type="text" class="form-control" id="c_address" name="c_address" required>
						@endif
		              </div>
		            </div>


		            <div class="form-group row mb-5">
		              <div class="col-md-6">
		                <label for="c_email_address" class="text-black">Email  <span class="text-danger">*</span></label>
						@if(auth()->check())
						
						<input  type="text" class="form-control" id="c_email_address" value="{{ auth()->user()->email }}" name="c_email_address" required>
						@else
		                <input  type="text" class="form-control" id="c_email_address" name="c_email_address" required>
						@endif
		              </div>
		              <div class="col-md-6">
		                <label for="c_phone" class="text-black">Telefon <span class="text-danger">*</span></label>
						@if(auth()->check())
						
						<input  type="text" class="form-control" id="c_phone" value="{{ auth()->user()->phone }}" name="c_phone" required>
						@else
		                <input  type="text" class="form-control" id="c_phone" name="c_phone"  required>
						@endif
		              </div>
		            </div>
				

		        


		         

		            <div class="form-group">
		              <label for="c_order_notes" class="text-black">Napomena</label>
		              <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" ></textarea>
		            </div>

		          </div>
		        </div>
		        <div class="col-md-6">

		        

		          <div class="row mb-5">
		            <div class="col-md-12">
		              <h2 class="h3 mb-3 text-black">Korpa</h2>
		              <div class="p-3 p-lg-5 border bg-white">
		                <table class="table site-block-order-table mb-5">
		                  <thead>
		                    <th>Proizvod</th>
							<td></td>
		                    <th>Ukupno</th>
		                  </thead>
		                  <tbody class="productsDataReservation">
							@if(session('cart'))
							@foreach (session('cart') as $c)
							<tr>
								<td> {{$c['product_name']}} <strong class="mx-2">x</strong> {{$c['quantity']}} x {{$c['product_price']}} KM</td>
							 	<td> {{$c['product_category']}} </td>
								<td class="cenaProd">{{$c['product_price'] * $c['quantity']}} KM</td>
							  </tr>
							@endforeach
							@endif
		                    <tr>
		                      <td class="text-black font-weight-bold"><strong>Cena porudžbine</strong></td>
							  <td></td>
		                      <td class="text-black font-weight-bold"><strong id="cenaTotalCheckout"> KM</strong></td>
		                    </tr>
		                  </tbody>
		                </table>

		               

		                <div class="border p-3 mb-3" style="pointer-events:none; background-color:#EBEBE4;">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Kartica</a></h3>

		                  <div class="collapse" id="collapsecheque">
		                    <div class="py-2">
		                      <p class="mb-0">
							  Plaćanje pouzećem predstavlja praktičnu opciju za naše cijenjene kupce. Kada izaberete ovu opciju, proizvodi će vam biti isporučeni na željenu adresu, a plaćanje će se izvršiti prilikom same dostave. 
							  Dostavljaču ćete platiti u gotovini ili drugim prihvaćenim sredstvima plaćanja na licu mjesta. Ova sigurna opcija omogućava vam jednostavnu i povjerljivu transakciju, bez potrebe za online plaćanjem.
							  </p>
		                    </div>
		                  </div>
		                </div>

		                <div class="border  mb-5">
		                  <h3 class="h6 mb-0 p-3"  style="background-color:#4BB543; color:white;"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Gotovina</a></h3>

		                  <div class="collapse" id="collapsepaypal">
		                    <div class="py-2 m-3">
		                      <p class="mb-0">
							    Plaćanje pouzećem predstavlja praktičnu opciju za naše cijenjene kupce. Kada izaberete ovu opciju, proizvodi će vam biti isporučeni na željenu adresu, a plaćanje će se izvršiti prilikom same dostave. 
							  Dostavljaču ćete platiti u gotovini ili drugim prihvaćenim sredstvima plaćanja na licu mjesta. Ova sigurna opcija omogućava vam jednostavnu i povjerljivu transakciju, bez potrebe za online plaćanjem.
							  </p>
		                    </div>
		                  </div>
		                </div>
						<input type="hidden" id="hiddenCenaTotal" name="hiddenCenaTotal">
						<input type="hidden" id="addProd" name="products">
		                <div class="form-group">
		                  <button class="btn btn-black btn-lg py-3 btn-block btnOnemoguciti">Poručite</button>
		                </div>
					</form>
		              </div>
		            </div>
		          </div>

		        </div>
		      </div>
		      <!-- </form> -->
		    </div>
		  </div>

		 
		  @include('layouts/footermain')


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
		<script>productsAllPoruci(); </script>
	</body>

</html>
