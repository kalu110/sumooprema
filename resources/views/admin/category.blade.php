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
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logosumooprema.png')}}">
  <link rel="icon" type="image/png" href="{{asset('images/logoSumooprema.png')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <title>
   Sumooprema Kategorija
  </title>
@include('../includes/cdnadmin')
</head>

<body class="g-sidenav-show  bg-gray-200">
 @include('../layouts/asideadmin')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('../layouts/navadmin')
    <div class="bg-gradient border-radius-lg pt-4 pb-3 m-5" style="background-color:#f37a1f;">
                <h3 class="text-white text-capitalize ps-3">Kategorije</h3>
              </div>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
    
    @endif
    <form action="{{url('addCategory')}}" method="POST">
    @csrf
    <div class="container-fluid categoryContainer">
    <div class="row" style="position:relative;">
   
        <div class="col-12 text-center" ><input onclick="addCategory(this)" id="VratiPrvoKategorijaAdd" value="Nova Kategorija" class="btn btn-primary"></div>
        <div class="col-12" id="categoryFirst">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6" >
        <ul class="categoryList">
        @foreach($table as $t)
        @if($loop->iteration > 7 && $loop->iteration < count($table)-1)
       
            <li><input type="checkbox" class="largeCheckbox" value="{{Str::title($t)}}" name="checkeboxtrue[]"> <span>{{Str::title($t)}}</span></li>
      
        @endif
        @if($loop->iteration == count($table)/2 + 2 || ($loop->iteration == count($table)/2 + 2.5 ))
        </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
       
            <ul class="categoryList">
        @endif

    @endforeach
    </ul>
   
</div>

<div class="text-center">
    <input value="Dalje" class="btn btn-primary NextCategoryBtn" onclick="categoryClickTwo(this)">
    </div>
    
</div>

</div>
<a onclick="iskljuciAddKategoriju()" class="xCategoryAdd"><i class="fa-solid fa-xmark fa-xl"></i></a>
        <div class="col-10 offset-1 col-sm-4 offset-sm-4" id="categoryTwo"><div class="mb-5 text-center"><h5>Naziv</h5> &nbsp;<input  type="text" required class="form-control" name="name"> </div><div class="text-center"><input type="button" onclick="addCategory(this)" class="btn btn-primary backButton m-3" value="Nazad"><button type="submit" class="btn btn-primary">Kraj</button></div></div>
    </div>
    </div>
    </form>



<div class="container mb-5 mt-5">
  <h3>Lista kategorija</h3>
  <div class="col-12">
  <input onchange="pretraziKategorije(this)" class="form-control searchInput mb-3" placeholder="Unesite pojam za pretragu..."  type="text" name="city" list="cityname">
<datalist id="cityname">
    @foreach ($category as $p)
    <option value="{{$p['name']}}">
    @endforeach
</datalist>
  </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv</th>
      <th scope="col">Atributi</th>
      <th scope="col">Broj Proizvoda</th>
    </tr>
  </thead>
  <tbody id="ispisKategorija">
    @foreach($category as $c)
    <tr style="border-bottom:1px solid grey;">
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$c->name}}</td>
      <td>{{substr($c->column,1)}}</td>
    
     @php
     $suma = 0;
     foreach($products as $p)
     if($c->name == $p->category)
        $suma++;
    @endphp
     <td>{{$suma}}</td>
     <td><a href="{{asset('deleteCategory/'.$c['id'])}}"> <i class="fa-solid fa-trash"></i></a></td>
    </tr>

    @endforeach
    
  </tbody>
</table>

</div>



   
@include('../layouts/footeradmin')
    </div>
  </main>
 
  <!--   Core JS Files   -->

  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    function switchActiveLink(){
   let allNav = document.querySelectorAll('.nav-link');
   for(let i of allNav){
      if(i.classList.contains('active')){
        i.classList.remove('active');
      }
      let a = i.getAttribute('href').split('/')
      if(a[3]=='category'){
        i.classList.add('active');
      } 
   }
  }

switchActiveLink();
let product = @json($products);
let category = @json($category);

  </script>
<script src="{{asset('/js/category.js')}}"></script>
<script src="{{asset('/js/custom.js')}}"></script>

</body>

</html>