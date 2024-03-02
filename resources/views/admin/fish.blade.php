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
   Sumooprema Ribarnica
  </title>
@include('../includes/cdnadmin')
</head>

<body class="g-sidenav-show  bg-gray-200">
 @include('../layouts/asideadmin')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('../layouts/navadmin')
    <!-- End Navbar -->
    <div class="container py-4">
        @if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
				
				@endif
      <div class="row">
        <h4>Proizvodi</h4>
        <div class="col-12 m-3 addFish">
            <h5>Dodajte novi proizvod</h5>
            <form action="{{asset('fishAdd')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-10 col-sm-5 offset-sm-0 offset-1 col-md-3 offset-md-0 col-lg-2">
            <input type="text" name="nameFish" class="form-control" style=" border:1px solid grey;" placeholder="Ime">
            </div>
               <div class="col-10 col-sm-5 offset-sm-0 offset-1 col-md-3 offset-md-0 col-lg-2">
            <input type="text" name="kolFish" placeholder="Količina" class="form-control" style=" border:1px solid grey; ">
            </div>
               <div class="col-10 col-sm-2 offset-sm-0 offset-1 col-md-3 offset-md-0 col-lg-2">
            <button class="btn btn-primary">Dodaj
            </button>
            </div>
            </div>
        </form>
        </div>
      
        <div class="col-12 m-3 ispisFishProizvoda">
           @if($fish)
           <div class="row">
       
           <div class="col-6"><h4>Ime</h4></div>
           <div class="col-6"><h4>Kolicina</h4></div><hr>
            
            @foreach($fish as $f)
            <form method="POST" action="updateFish/{{$f['id']}}">
                @csrf
                <div class="row">
            <div class="col-6">  <span> {{$f['name']}} </span> </div> <div class="col-6"><p style="display:inline-block; width:20%;"><span> {{$f['kol']}} KG</span></p>  <button onclick="izmeniFish(this,{{$f['id']}})" class="btn"><i class="fa-solid fa-pen-to-square"></i></button> 
                
                 
                <a href="{{asset('deleteFish/'.$f['id'])}}" class="btn fishdelete"><i class="fa-solid fa-trash"></i></a>
               </div>
            </div>
            </form>
            @endforeach
        </div>
            @else
            <h4>Nema proizvoda za prikaz!</h4>
            @endif
        </div>
    </div>
  </div>
 
<script src="js/custom.js"></script>
<script>
    let fish = @json($fish);
</script>
</body>

</html>