<!DOCTYPE html>
<html lang="en">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1" style="background-style:white; border-radius:13px;">
           <div>
            <h3 class="text-center">Poštovani {{$reservation->name}}!</h3>
            <div class="row">
                <div class="col-md-8 col-12"> <p>Porudžbina je prihvaćena i od ovog trenutka spremamo Vaš paket! <i class="fa-solid fa-circle-check px-4 fa-xl" style="color: #04ff00;"></i></p>
            <p>U najkraćem roku isporučujemo paket kurirskoj službi a istog momenta bićete obavješteni putem mejla!</p></div>
                <div class="col-md-4 col-12 text-center"> <img src="{{asset('images/logoSumooprema.png')}}" style=" width:120px; height:100px; " alt=""></div>
            </div>  
           <div class="col-12">
            <div>
            <pstyle="color:#f37a1f;"><b>Korisnik</b></p>
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-user"></i>{{$reservation->name}}</li>
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-location-dot"></i></i>{{$reservation->address}}</li>
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-envelope"></i>{{$reservation->email}}</li>
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-phone"></i>{{$reservation->phone}}</li>
            @if($reservation->napomena == '')
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-message"></i>Nema napomene.</li>
            @else
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-message"></i>{{$reservation->napomena}}</li>
            @endif
            </div>
            </div>
            </div>
            @php
                        $a = explode('&',$reservation->products);
                      
                       $a2 = explode('x',$a[0]);
                    @endphp
<div>
                    <h4 style="color:#f37a1f;">Korpa <hr></h4>
            <table>
                <thead>
                <tr>
                    <th>Proizvod x Kolicina x Cena Kategorija Ukupno</th>
                    <th class="px-4">Cena(ukupno)</th>
                </tr>
            </thead>
                <tbody>
                @foreach ($a as $asa)
                <tr>
                                <td>  {{$asa}} </td>
                                @if($loop->iteration == count($a))
                                <td  class="px-4">{{$reservation->ukupnasuma}} KM</td>
                                @endif
                                </tr>
                            @endforeach
                </tbody>
            </table>
            </div>
            <a href="{{asset('/')}}"><h5 class="text-center mt-5">Sumooprema.ba</h5></a>
            <p class="text-center"><i>Hvala Vam na ukazanom poverenju!</i></p>
                </div>
                      
            </div>
        </div>
    </div>
   
</body>
</html>