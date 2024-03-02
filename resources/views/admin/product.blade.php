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
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
@include('../includes/cdnadmin')
</head>
<style>
*:focus {
    outline: none;
}
</style>
<body class="g-sidenav-show  bg-gray-200">
 @include('../layouts/asideadmin')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('../layouts/navadmin')
    <div class="bg-gradient border-radius-lg pt-4 pb-3 m-5" style="background-color:#f37a1f;">
                <h3 class="text-white text-capitalize ps-3">Proizvodi</h3>
              </div>    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
    
    @endif
    <form id="AddProductForm" action="{{url('addProduct')}}" method="POST"  enctype="multipart/form-data" onsubmit="return proveraProduktIsti()">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="row">
            <div class="col-10 offset-1 col-lg-3 col-md-3 col-sm-4  offset-sm-0">
            <input id="nameProductReturn" placeholder="Ime" class="form-control" type="text" name="name" required> 
            </div>
            <div class="col-10 offset-1 col-lg-3 col-md-3 col-sm-4  offset-sm-0">
            <input placeholder="Cena" class="form-control" type="text" name="price" required> 
            </div>
            <div class="col-10 offset-1 col-lg-3 col-md-3 col-sm-4  offset-sm-0">
            <select onchange="changeCategory(this)" class="form-select" required name="category" id="katProdukt" required>
                <option selected value="Izaberite" disabled>--Izaberite neku kategoriju--</option>
                @foreach($category as $c)
                <option value="{{$c->name}}">{{$c->name}}</option>
                @endforeach
            </select>
          </div> 
          <div class="col-10 offset-1 col-lg-3 col-md-3 col-sm-4  offset-sm-0">
  
  <input class="form-control" type="file" id="files" name="images[]" multiple required><br><br>
</div>
            <div class="col-10 offset-1 col-lg-3 col-md-3 col-sm-4  offset-sm-0">
            <select class="form-select" name="brend" id="">

              <option value="Stihl">Stihl</option>
              <option value="Husqvarna">Husqvarna</option>
              <option value="Ostalo">Ostalo</option>
            </select>
           </div>
           <div class="col-10 offset-1 col-lg-3 col-md-3 col-sm-4  offset-sm-0">
            <textarea placeholder="Opis" class="form-control" name="description" id="" style="width:100%; height:80px;"></textarea>
            </div>
          
</div>
        </div>
        <div class="row showColumnInputs">
            <div class="row">
          
          </div>
           
        </div>
      
    </div>


    <div class="col-5 mt-3">
      <button type="submit" class="btn btn-primary">Dodaj Proizvod</button>
</div>
    </div>
</form>



<div class="container mb-5 mt-5">
  <h3 class="text-center">Lista Proizvoda</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Ime</th>
      <th scope="col">Kategorija</th>
      <th style="text-align:right;" scope="col">Cena</th>
      <th style="width:4%;"></th>
      <th></th>
    </tr>
  </thead>
  <form method="GET" id="adsss">
    @csrf
  </form>
  <tbody id="pretraziProizvod">
    <tr>
      <input onchange="pretraziProzivode(this)" class="form-control searchInput mb-3" placeholder="Unesite pojam za pretragu..."  type="text" name="city" list="cityname">
<datalist id="cityname">
    @foreach ($product as $p)
    <option value="{{$p['name']}} / {{$p['category']}}">
      
    @endforeach
</datalist>
    </tr>
    @foreach($product as $p)
    
    @php
       $string = explode(',',$p->images);
    @endphp
  
    <tr style="border-bottom:1px solid grey;">
      <th scope="row">{{$loop->iteration}}</th>
      <td style="width:150px;"><img src="{{ asset('public/files/'.$string[1]) }}" style="width:60%;height:60px;" alt=""></td>
      <td>{{$p->name}}</td>
      <td>{{$p->category}}</td>
      <td style="text-align:right;">{{$p->price}} KM</td>
      
      <th><a style="cursor:pointer;"  onclick="editProduct(this,{{$p['id']}})"><i class="fa-solid fa-pen-to-square"></i></a></th>
      <th><a href="{{asset('deleteProduct/'.$p['id'])}}" ><i class="fa-solid fa-trash"></i></a></th>
    
    </tr>
    
    @endforeach
 
  </tbody>

</table>

</div>


@include('../layouts/footeradmin')
   

  </main>
 
  <!--   Core JS Files   -->

  
  <script>
   
let category = @json($category);
let product = @json($product);
  </script>
  <script> 
 
      document.querySelector("#elektricna").value="Da";
  
  </script>
<script src="{{asset('/js/category.js')}}"></script>
<script src="js/custom.js"></script>
</body>

</html>