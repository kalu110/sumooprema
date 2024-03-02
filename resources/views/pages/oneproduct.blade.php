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
		<title>Šumooprema - {{$product->name}}</title>
	</head>

	<body>
<style>
    .icon-hover:hover {
  border-color: #3b71ca !important;
  background-color: white !important;
  color: #3b71ca !important;
}

.icon-hover:hover i {
  color: #3b71ca !important;
}
</style>
<header>
  @include('layouts/navmain')
  @php
    $a = explode(',',$product->images);
  @endphp
  
  <section class="py-5">
    <div class="container">
      <!-- content -->
  @if(Session::has('message'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
  
  @endif
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center" style="height:400px;width:100%; background-color:white; position:relative;">
            <a data-fslightbox="mygalley"  class="rounded-4"  data-type="image" href="{{asset('public/files/'.$a[1])}}">
              <img id="MainPhotoOneProduct" style=" max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="{{asset('public/files/'.$a[1])}}" />
            </a>
          </div>
          <div class="d-flex justify-content-center mb-3">
            @foreach ($a as $aa)
              @if($loop->iteration>1)
              <a data-fslightbox="mygalley" style="cursor:pointer;" class="border mx-1 rounded-2" data-type="image" onclick="promeniSliku('{{$aa}}')" class="item-thumb">
                <img width="60" height="60" class="rounded-2" src="{{asset('public/files/'.$aa)}}" />
              </a>
              @endif
            @endforeach
          
        
          </div>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
             {{$product->name}}
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-success ms-2">  Dostupno <i class="fa-solid fa-check"></i></span>
            </div>
  
            <div class="mb-3">
              <h5 class="h5">   {{$product->price}} KM</h5>
            </div>
  
            <p>
              {{$product->description}}
            </p>
  
            <div class="row">
              <dt class="col-3">Kategorija:</dt>
              <dd class="col-9">{{$product->category}}</dd>
  
              
             @foreach ($table as $t)
             @if(($loop->iteration <= count($table)-2) && ($loop->iteration >=7))
               @if($product->$t != null)
               @php  $a = explode('0',$t);
               @endphp
               @if ($a)
                 
               @foreach ($a as $aa)
               @if(Str::ucfirst($aa) != 'Price' && Str::ucfirst($aa) != 'Kosnje')
                <dt class="col-3 {{Str::ucfirst($aa)}}">
               @if($loop->iteration != count($a))
                @if(Str::ucfirst($aa) != 'Kosnje')
                {{Str::ucfirst($aa)}} Kosnje:
                @else
                 {{Str::ucfirst($aa)}}
                @endif
               @else
                 {{Str::ucfirst($aa)}}:
                
       
               @endif
          
                  @endif
                       </dt> 
               @endforeach
               
               @else
               
               <dt class="col-3 {{Str::ucfirst($aa)}}">{{ucfirst($t)}}:</dt> 
          
               @endif
               @if($product->$t != $product->price)
                @if($product->$t == 'Da')
                 <dd class="col-9" id="{{Str::ucfirst($aa)}}"><span class="text-success"><i class="fa-solid fa-check-double"></i></span></dd>
                 @else
                   <dd class="col-9" id="{{Str::ucfirst($aa)}}">{{$product->$t}}</dd>
                @endif
             
               @endif
               
               @endif
              @endif
             @endforeach

            </div>
            <hr />
            <a onclick="setTimeout(CenaTotalKupiOdmah, 1000);"  class="btn btn-warning shadow-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Kupi odmah</a>
            <a href="{{asset('add_to_cart/'.$product->id)}}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Dodaj u korpu </a>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->
  
  <section class="bg-light border-top py-4">
    <div class="container">
      <div class="row gx-4">
        <div class="col-lg-8 mb-4">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button style="background-color:transparent; color:#f37a1f; border:none;" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Garancija
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <h4>Opšti garantni uslovi </h4>
Prema Zakonu o zaštiti potrošača, garancijom se smatra svaka izjava, kojom se daje obećanje u vezi sa proizvodom i pravno je obavezujuća, pod uslovima koji su navedeni u izjavi, kao i prilikom oglašavanja tog proizvoda. Uz svaki kupljeni proizvod potrošač dobija garanciju. Dužina i uslovi garancije zavise isključivo od ovlašćenog uvoznika (servisa). Garancija je validna od dana overe potpisom i pečatom garantnog lista, računa ili otpremnice. Preporučujemo da se potrošač dobro upozna sa uslovima garancije koje pruža proizvođač i sa uslovima i načinima servisiranja kod ovlašćenih servisa.

Garantni list može biti u pisanom ili elektronskom obliku i sadrži sve podatke iz garancije. Garancija se odnosi isključivo na ispravnost proizvoda, ali ne i na njihovu funkcionalnost ili kompatibilnost sa drugim proizvodima, jer se podrazumeva da je potrošač upoznat sa tehničkim karakteristikama proizvoda, pa se garancija odnosi na činjenicu da će izabrani proizvodi zadovoljiti zahteve potrošača u okviru deklarisanih tehničkih mogućnosti propisanih od strane proizvođača. Podsećamo da svako nepravilno i nestručno rukovanje, nepropisno održavanje, korišćenje neodgovarajućeg potrošnog materijala i intervencije od strane neovlašćenih lica ili servisa znače gubitak garancije.

Takođe, potrošaču se preporučuje da sačuva originalnu ambalažu kupljenog prizvoda i da je koristi pri svakoj vrsti transporta i u slučaju eventualne reklamacije.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button style="background-color:transparent; color:#f37a1f; border:none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   Dostava
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Sumooprema vrši dostavu proizvoda, preko partnerske kurirske službe, u roku od 3 – 5 radnih dana. Izuzetak su proizvodi koji se posebno naručuju ili trenutno nisu na zalihama. Rok dostave za takve artikle je uglavnom 30 dana ili prema dogovoru sa kupcem. Ukoliko dostava nije moguća u predviđenom roku, o tome ćemo vas obavestiti i navesti očekivani datum. Dostava se vrši na adresu, koju je kupac ostavio prilikom online porudžbine. Ukoliko u trenutku dostave, kupac nije kod kuće, sa kurirom se dogovora o novom terminu. Subotom i nedeljom se dostava ne vrši.                 </div>
              </div>
            </div>
           
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="px-0 border rounded-2 shadow-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ostali proizvodi</h5>
               
                @if(count($products) > 4)
					@foreach ($products->random(4) as $p)
                  
                
                  <div class="d-flex mb-3">
                    <a href="{{asset('oneproduct/'.$p['id'])}}" class="me-3">
                      <img src="{{asset('public/files/'.explode(',',$p->images)[1])}}" style="min-width: 96px; height: 96px; width:120px; height:90px;" class="img-md img-thumbnail" />
                    </a>
                    <div class="info">
                      <a href="{{asset('oneproduct/'.$p['id'])}}" class="nav-link mb-1 text-dark" style="font-weight: 400;padding:10px 0px;">
                        {{$p->name}}
                      </a>
                      <strong class="text-dark"> {{$p->price}} KM</strong>
                    </div>
                  </div>
                  
                  
                  
                @endforeach
               @endif
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <form action="{{asset('reservationAdd')}}" method="POST">
      @csrf
      <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$product->category}} - {{$product->name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="untree_co-section">
          <div class="container">
           
            <div class="row">
              <div class="col-12 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black"><small> <i class="fa-solid fa-pen px-3 fa-sm" style="opacity:0.5;"></i></small> Unesite Vaše podatke </h2>
                <div class="p-3 p-lg-5 border bg-white">
                 
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_fname" class="text-black">Ime <span class="text-danger">*</span></label>
                      @if(auth()->check())
                      <input type="text" class="form-control" required id="c_fnamem" value="{{ auth()->user()->name}}" name="c_fname">
                      @else
                      <input type="text" class="form-control" required id="c_fnamem" name="c_fname">
                      @endif
                    </div>
                   
                  </div>
  
                
  
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_address" class="text-black">Adresa <span class="text-danger">*</span></label>
                      @if(auth()->check())
                      <input type="text" class="form-control" required id="c_addressm" value="{{ auth()->user()->address}}" name="c_address">
                      @else
                      <input type="text" class="form-control" required id="c_addressm" name="c_address">
                      @endif
                    </div>
                  </div>
  
  
                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_email_address" class="text-black">Email  <span class="text-danger">*</span></label>
                      @if(auth()->check())
                      <input type="text" class="form-control" required id="c_email_addressm" value="{{ auth()->user()->email}}" name="c_email_address">
                      @else
                      <input type="text" class="form-control" required id="c_email_addressm" name="c_email_address">
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="c_phone" class="text-black">Telefon <span class="text-danger">*</span></label>
                      @if(auth()->check())
                      <input type="text" class="form-control" required id="c_phonem" value="{{ auth()->user()->phone}}" name="c_phone" >
                      @else
                      <input type="text" class="form-control" required id="c_phonem" name="c_phone" >
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="c_order_notes" class="text-black">Napomena</label>
                    <textarea name="c_order_notes" id="c_order_notesm" cols="30" rows="5" class="form-control" ></textarea>
                  </div>
  
                </div>
              </div>
              <div class="col-md-12">
  
              
  
                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="h3 mb-3 mt-5 text-black"><small><i class="fa-solid fa-basket-shopping px-3" style="opacity: 0.5;"></i></small> Korpa</h2>
                    <div class="p-3 p-lg-5 border bg-white">
                      <table class="table site-block-order-table mb-5">
                        <thead>
                          <th>Proizvod</th>
                          <th>Ukupno</th>
                        </thead>
                        <tbody class="productsDataReservation">
                @if(session('cart'))
                @foreach (session('cart') as $c)
                @if($product->name == $c['product_name'] && $product->category == $c['product_category'])
                <tr>
                  <td>{{$c['product_name']}} <strong class="mx-2">x</strong> {{$c['quantity']+1}} x {{$c['product_price']}} KM</td>
                  <td> {{$c['product_category']}} </td>
                  <td class="cenaProd">{{$c['product_price'] * ($c['quantity']+1)}} KM</td>
                  </tr>
                  @elseif($product->name != $c['product_name'] && $product->category != $c['product_category'])
                <tr>
                  <td>{{$product->name}} <strong class="mx-2">x</strong> {{$c['quantity']}} x {{$product->price}} KM</td>
                  <td> {{$c['product_category']}} </td>
                  <td class="cenaProd">{{$product->price}} KM</td>
                  </tr>
                 
                  @else
                  <tr>
                  <td>{{$c['product_name']}} <strong class="mx-2">x</strong> {{$c['quantity']}} x {{$c['product_price']}} KM</td>
                  <td> {{$c['product_category']}} </td>
                  <td class="cenaProd">{{$c['product_price'] * $c['quantity']}} KM</td>
                  </tr>
                  @endif
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
                        <button class="btn btn-black btn-lg py-3 btn-block">Poručite</button>
                      </div>

                    </div>
                  </div>
                </div>
  
              </div>
            </div>
      </div>
    
      </div>
    </div>
    </div>
    </div>
    </form>
   
  </div>

  @if(auth()->check())
    @php
						$ad = auth()->user()->id;
       @endphp
       @else
       @php
       $ad = null;
   		@endphp				 
       @endif

	@include('layouts/footermain')

  
		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
    <script>productsAllPoruci();
    
    </script>
    <script> 
      let users = @json($users);
      if(@json($ad)){
      let idUsers = @json($ad);
      }
    </script>
    <script>
    let snaga = document.querySelector('#Snaga');
     if(snaga){
   let ksa =  snaga.innerHTML.replace(",",".");
    let ks = (parseFloat(ksa) * 1.34).toFixed(1);
   
    snaga.innerHTML += ` kW / ${ks} Ks`;
    }
     let tezina = document.querySelector('#Tezina');
      if(tezina){
     tezina.innerHTML += ' Kg';
      }
       let kosenje = document.querySelector('#Kosnje');
        if(kosenje){
     kosenje.innerHTML += ' cm';
        }
          let eletkr = document.querySelector('.Elektricna');
        if(eletkr){
     eletkr.innerHTML = 'Električna';
        }
        
          let tezina2 = document.querySelector('.Tezina');
        if(tezina2){
     tezina2.innerHTML = 'Težina';
        }
        
         
        
    </script>
  
  </body>

</html>
  