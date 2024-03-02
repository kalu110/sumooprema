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
  <title>
    Sumooprema Tabele
  </title>
  @include('../includes/cdnadmin')
</head>

<body class="g-sidenav-show  bg-gray-200">
@include('../layouts/asideadmin')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('../layouts/navadmin')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
      
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient border-radius-lg pt-4 pb-3" style="background-color:#f37a1f;">
                <h3 class="text-white text-capitalize ps-3">Kategorije</h3>
              </div>
            </div>
           
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-4">
                <table class="table align-items-center mb-0 p-2">
                  <thead>
                    <tr>
                    
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ime</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Atributi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Broj proizvoda</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($category as $c)
                    <tr>
                      <td>
                    
                            <h6 class="mb-0 text-sm">{{$c->name}}</h6>
                     
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{str_replace(',', ', ', substr($c->column, 1))}}</p>
                      
                      </td>
                      <td class="align-middle text-center text-lg">
                        <span class="badge badge-sm bg-gradient" style="background-color:orange;">

                  @php
                    $count=0;
                    for($i=0;$i< count($producta); $i++){
                      if($producta[$i]['category'] == $c->name){
                        $count++;
                      }
                    }
                  @endphp
                    <b> {{$count}}</b>
                        </span>
                      </td>
                    
                    
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            
            </div>

          </div>
        </div>
        </div>
        </div>
                    <div class="container text-center">
                      <h4>Pregled proizvoda</h4>
                      <p class="text-secondary text-xs">Koristite navigacioni meni radi lakseš pretraživanja!</p>
                    </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin:0 auto;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
      @foreach($category as $c)
      <li class="nav-item">
        <a class="nav-link text-lg"  href="#{{$c->name}}">{{$c->name}}</a>
      </li>
      @endforeach
    </ul>
  </div>
</nav>

       

<div class="row">
        @foreach($category as $c)
       
      <div class="col-12 mt-5">
      <div class=" z-index-2">
            <div class="text-center border-radius-lg mb-4" style="" id="{{$c->name}}">
              <h6 style="letter-spacing:1.5px; background-color:#f37a1f; width:27%; margin:0 auto; padding:10px 20px;" class="text-white text-uppercase">{{$c->name}}</h6>
            </div>
          </div>
        <div class="card mb-3">
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-">
              <table class="table align-items-center mb-0 p-4">
                <thead>
                  <tr>
                    <th style="width:152px;"></th>
                    <th style="width:20%; text-align:center;" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ime</th>
                    <th style="width:50%;" class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2" >Atributi</th>
                    <th style="width:20%;" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cena</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($producta as $p)
                @if($p->category == $c->name)
                  <tr>
                 
                    <td>
                     
                       
                          @php
                            $string = explode(',',$p->images);
                          @endphp
                          <img src="{{ asset('public/files/'.$string[1]) }}" style="width:120px; height:120px;" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        
                      
                      </td>
                      <td class="align-middle text-center text-lg">
                      
                       
                          <h6 class="mb-0 text-sm">{{$p->name}}</h6>
                       
                       
                    </td>
                  
                    <td class="align-middle text-center text-lg">
                      <p class="text-xs font-weight-bold mb-0">

                        @foreach ($table as $t)
                        @if(($loop->iteration <= count($table)-2) && ($loop->iteration >=8))
                          @if($p->$t != null)
                          @php  $a = explode('0',$t);
                          @endphp
                          @if ($a)
                          <span><br>
                          @foreach ($a as $aa)
                          @if($loop->iteration != count($a))
                          {{ucfirst($aa)}}
                          @else
                          {{Str::ucfirst($aa)}}:
                          </span> 
                          @endif
                          @endforeach
                         
                          @else
                          <span>{{ucfirst($t)}}:</span><br>
                          @endif
                          
                          <span>{{$p->$t}}, </span>
                          
                          @endif
                         @endif
                        @endforeach



                      </p>
                    
                    </td>
                    <td class="align-middle text-center text-lg">
                      <span class="badge badge-sm bg-gradient" style="background-color:orange;">{{$p->price}} KM</span>
                    </td>
                  
                  
                    </tr>
                  @endif
              
                @endforeach
                </tbody>
              </table>
              </div>
              </div>
            </div>
            </div>
          
      @endforeach
      </div>
     
      @include('../layouts/footeradmin')
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
      if(a[3]=='tables'){
        i.classList.add('active');
      } 
   }
  }

switchActiveLink();
  </script>
  <!-- Github buttons -->

</body>

</html>