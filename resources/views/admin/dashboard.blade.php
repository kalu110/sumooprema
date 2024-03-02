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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <title>
   Sumooprema D.O.O.
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
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-tools"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Proizvodi</p>
                <h4 class="mb-0">{{count($products)}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div style="background-color:#f37a1f;" class="icon icon-lg icon-shape  shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-user" style="color: #ffffff;"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Korisnici</p>
                <h4 class="mb-0">{{count($users)}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
          
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-bars" style="color: #ffffff;"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Kategorije</p>
                <h4 class="mb-0">{{count($category)}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div style="background-color:#f37a1f;" class="icon icon-lg icon-shape  shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-shopping-bag" style="color: #ffffff;"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Porudzbine</p>
                <h4 class="mb-0 cenaTotalDash">{{$reservation}} KM</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           
          </div>
        </div>
      </div>
      
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
          
            <div class="card-body px-0 pb-2 m-4">
              <div class="table-responsive m-4">
                <table class="table align-items-center mb-0 ">
                  <thead>
                    <h5 class="m-2">KLIJENTI</h5>
                    <tr class="text-center">
                      <th style="color:#f37a1f;" class="text-uppercase text-s font-weight-bolder opacity-7">IME</th>
                      <th style="color:#f37a1f;" class="text-uppercase text-s font-weight-bolder opacity-7 ps-2">ADRESA</th>
                      <th style="color:#f37a1f;" class="text-center text-uppercase text-s font-weight-bolder opacity-7">EMAIL</th>
                      <th style="color:#f37a1f;" class="text-center text-uppercase text-s font-weight-bolder opacity-7">TELEFON</th>
                       <th style="color:#f37a1f;" class="text-center text-uppercase text-s font-weight-bolder opacity-7">SVE PORUDŽBINE</th>
                    </tr>
                    @php
                    $userssAll = array();
                  
                    foreach($users as $u)
                    {
                        $suma = 0;
                      for($r = 0; $r < count($reservations); $r++)
                       {
                      if($u->email == $reservations[$r]->email && $reservations[$r]->stanjePorudzbine == "POSLATO")
                    {
                      $suma += $reservations[$r]->ukupnasuma;                  
                      $userssAll[$r] = [$u->name,$u->address,$u->email,$u->phone,$suma];
                      
                    }                   
                  }
                }
                       @endphp
                  </thead>
                  <tbody>
                @foreach($reservationGroup as $rG)
                @foreach($users as $rs)
                  @if($rG['email'] == $rs['email'])
                  <tr>
                  <td style="font-weight:bolder;">{{$rs['name']}}</td>
                  <td >{{$rs['email']}}</td>
                  <td>{{$rs['address']}}</td>
                  <td>{{$rs['phone']}}</td>
                  <td class='cenaTotalDash2 text-center'>{{$rG['sss']}} KM</td>
                  </tr>
                  @endif
                @endforeach
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h4>Ribarnica</h4>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
               
                @foreach ($fish as $f)
                @if($f['kol'] < 600 && $f['kol'] > 300)
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-fish"></i>
                  </span>
                  <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-4 col-6"> 
                      <div class="timeline-content">
                    <h6 class="text-warning text-sm font-weight-bold mb-0">{{$f['name']}}</h6>
                 
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$f['kol']}} KG</p></div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-5 col-sm-6"><img src="{{asset('images/warning.png')}}" style="width:40px; height:40px"alt=""></div>
                  </div>
                  </div>
                
                @elseif($f['kol'] < 300)
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-fish"></i>
                  </span>
                  <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-4 col-6"> 
                      <div class="timeline-content">
                    <h6 class="text-danger text-s font-weight-bolder mb-0">{{$f['name']}}</h6>
                 
                    <p class="text-secondary font-weight-bolder text-s mt-1 mb-0">{{$f['kol']}} KG</p>
                  </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-5 col-sm-6"><img src="{{asset('images/exclamation.png')}}" style="width:35px; height:35px"alt=""></div>
                  </div>
                  </div>
                  
                @else
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="fas fa-fish"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-success text-sm font-weight-bold mb-0">{{$f['name']}}</h6>
                 
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$f['kol']}} KG</p>
               
                   
                  </div>
                </div>
                @endif

                @endforeach
               
              
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
     @include('layouts/footeradmin')
    </div>
  </main>
 
 
<script>




  function sumaZarez(sumaneka){
    if(sumaneka){
  let suma = sumaneka.innerHTML.split(" ")[0];
  let newSuma ='';
  if(parseFloat(suma) > 999){
    for(let i = 0; i < suma.length; i++){
      newSuma += suma[i];
      if(i==0){
      newSuma += ',';
      }
    }
  }

  if(parseFloat(suma) > 9999){
    for(let i = 0; i < suma.length; i++){
      newSuma += suma[i];
      if(i==1){d
      
      newSuma += ',';
      }
    }
  }

  return sumaneka.innerHTML = `${newSuma} KM`;
    }
}

document.querySelector('.cenaTotalDash').innerHTML = sumaZarez(document.querySelector('.cenaTotalDash'));

let a2 = sumaZarez(document.querySelector('.cenaTotalDash2'));
document.querySelector('.cenaTotalDash2').innerHTML = `${a2}`;


</script>
</body>

</html>