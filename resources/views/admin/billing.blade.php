<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logoSumooprema.png')}}">
  <link rel="icon" type="image/png" href="{{asset('images/logoSumooprema.png')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <title>
    Sumooprema Porudzbine
  </title>
  <!--     Fonts and icons     -->
 @include('../includes/cdnadmin')
</head>

<body class="g-sidenav-show  bg-gray-200">
 @include('../layouts/asideadmin')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('../layouts/navadmin')
    <!-- End Navbar -->
    <div class="container py-4">
     

      <h4 class="text-center m-4">Stanje porudzbine</h4>
      <input class="form-control mb-5 searchInput" placeholder="Unesite pojam za pretragu..."  onchange="pretrazi(this)" type="text" name="city" list="cityname">
      <datalist id="cityname">
        @foreach ($reservation as $r)
          <option value="{{explode(' ',$r['created_at'])[0]}} / {{$r['name']}} / {{$r['email']}}">
        @endforeach
        
      </datalist>
       @if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
				
				@endif
      <div id="sveIspisRacuni">
          @if(count($reservation) > 0)
      @foreach ($reservations as $r)
      <div class="col-11 mb-3">
     <span class="spanDateNone" id="{{$r['email']}}" style="width:90%;"><h5> {{Str::substr($r['created_at'],0,(strlen($r['created_at'])-3))}}  -  {{$r['name']}} /  {{$r['email']}} /  {{$r['phone']}} /   {{$r['address']}}</span>  <hr> </h5> 
      @php
          $a = explode('&',$r['products']);
        
         $a2 = explode('x',$a[0]);
       
      @endphp
         
              @foreach ($a as $asa)
            
              @foreach ($product as $p)
                  @if (trim($p['name']) == trim(explode("x",$asa)[0]))
                  <div class="row mt-2">
                      <div class="col-md-6 col-sm-6 col-10 offset-1 offset-sm-0">
                      {{$p['category']}}
                  </div>
                      <div class="col-md-6 col-sm-6 col-10 offset-1 offset-sm-0">
                          {{explode($p['category'],$asa)[0]}} = <b>{{explode($p['category'],$asa)[1]}}</b>
                      </div>
                     
                  </div>
                  <hr>
                  @endif
              @endforeach
              @endforeach
              <div  class="col-11 m-3">
              <div class="row">
              <div class="col-sm-6 col-10 offset-1 offset-sm-0">

              @if($r->napomena != null)
                <span style="font-weight:bolder;width:auto;">* {{$r->napomena}}</span>
                @else
                  <span>Napomena je prazna!</span>
                
              @endif
              </div>
              <div class="col-sm-6 col-10 offset-1 offset-sm-0">

            <p style="text-align:right;">  Ukupan iznos porudzbine <span style="font-weight:bolder; font-size:22px;"> {{$r->ukupnasuma}} KM</span> </p>
          </div>
          </div>
          </div>
          </div>
          <div class="row mb-5" style="width:93%;">
            
            
            @if($r['stanjePorudzbine'] == null)
            <div class="col-6 col-sm-6  mb-3">
            <a href="{{asset('updateReservationStanje/'.$r['id'])}}" class="btn btn-warning" >PRIMLJENO </a>
            </div>
            @elseif($r['stanjePorudzbine'] == 'PRIMLJENO')
            <div class="col-10 offset-1  mb-3">
             <a href="{{asset('updateReservationStanjePOSLATO/'.$r['id'])}}" class="btn btn-success" >POSLATO </a>
             </div>
            @elseif($r['stanjePorudzbine'] == 'POSLATO')
            <div class="col-10 offset-1  mb-3">

             <span class="p-3" style="background-color:#f37a1f; color:white; border-radius:7px;">Porudzbina je poslata korisniku. <i class="fa-solid fa-truck fa-lg px-2" style="opacity:0.6;"></i></span>
             </div>
             @elseif($r['stanjePorudzbine'] == 'OTKAZANO')
             <div class="col-10 offset-1  mb-3">
             <span class="p-3 bg-secondary" style=" color:white; border-radius:7px;">Porudzbina je otkazana.  <i class="fa-solid fa-phone-slash fa-lg px-2 " style="opacity:0.6;"></i>   </span>
             </div>
            @endif

           
       
            <div style="position: relative;" class="col-6 col-sm-6  mb-3">
            @if($r['stanjePorudzbine'] == 'PRIMLJENO' || $r['stanjePorudzbine'] == 'POSLATO' || $r['stanjePorudzbine'] == 'OTKAZANO')
            @else
            <a href="{{asset('deleteReservation/'.$r['id'])}}" style="position: absolute; right:20px;" class="btn btn-danger">OBRISI</a>
            <a href="{{asset('otkaziReservation/'.$r['id'])}}" style="position: absolute; right:120px;" class="btn btn-danger">OTKAZI</a>
            @endif
          </div>
          </div>
      @endforeach
      @else
      <h4 class="m-4">Trenutno nema aktivnih porudzbina!</h4>
      @endif
    </div>


     
  </div>
  <!--   Core JS Files   -->

  <script>
    

    let users= @json($users);
    let product= @json($product);
    let reservation= @json($reservations);
  </script>
  <!-- Github buttons -->
 
  <script src="js/custom.js"></script>


</body>

</html>