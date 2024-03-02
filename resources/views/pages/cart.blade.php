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
		<title>Šumooprema - Korpa</title>
	</head>

	<body>

	
	@include('layouts/navmain')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Korpa</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Slika</th>
                          <th class="product-name">Ime</th>
                          <th class="product-price">Cena</th>
                          <th class="product-quantity">Količina</th>
                          <th class="product-total">Ukupno</th>
                          <th class="product-remove">Obrisi</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                          @if(session('cart'))
                          @foreach (session('cart') as $c)
                          @foreach ($products as $p)
                            @if($p->name == $c['product_name'])
                          <tr>
                          <td class="product-thumbnail">
                            <img style="height:80px; width:130px;" src="{{asset('files/'.$c['product_image'])}}" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">{{$c['product_name']}}</h2>
                          </td>
                          <td id="cenaProizvoda{{$c['product_price']}}">{{$c['product_price']}} KM</td>
                          <td  id="{{$c['product_price']}}">
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px; margin-left:auto;margin-right:auto;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button"><a class="btn" style="padding:0 !important;"  href="{{asset('minusFromCart/'.$p->id)}}">&minus;</a></button>
                              </div>
                              <input    type="text" class="form-control text-center quantity-amount" value="{{$c['quantity']}}" oninput="promeniUkupno(this.value,'{{$c['product_price']}}','{{$c['product_name']}}')" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">  <a class="btn" style="padding:0 !important;" href="{{asset('add_to_cart/'.$p->id)}}">&plus;</a></button>
                              </div>
                            </div>
        
                          </td>
                          <td class="ceneZaTotal" id="ukupnoSaKolicinom{{$c['product_price']}}">{{$c['product_price'] * $c['quantity']}} KM</td>
                          <td><a href="{{asset('deletecartproduct/'.$c['product_name'])}}" class="btn btn-black btn-sm"><i class="fa-solid fa-trash fa-lg"></i></a></td>
                        </tr>
                        @endif
                          @endforeach
                          @endforeach
                          @endif
                         
                       
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row mb-5">
                <div class="col-md-6 mb-5">
                  <div class="row mb-5">
                    
                    <div class="col-md-6">
                      <a class="btn btn-outline-black btn-sm btn-block" href="{{asset('/shop')}}">Nastavi sa kupovinom</a>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-6 pl-5 mb-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">KORPA UKUPNO </h3>
                          
                          
                        </div>
                      </div>
                   
                      <div class="row mb-5" style="border-bottom:2px solid black;">
                        <div class="col-md-6" style="width:60%;font-size:17px;";>
                          <span class="text-black">Ukupno</span>
                        </div>
                        <div class="col-md-6 text-right" style="width:auto;">
                          <strong class="text-black" id="cenaTotal"></strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <a class="btn btn-black btn-lg py-3 btn-block" href="{{asset('checkout')}}">Poruči</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		

	
		  @include('layouts/footermain')


		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>

</html>
