@extends('layouts.app')
	<!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/style2.css')}}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('KORISNIK') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
            
                </div>
                @if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
				
				@endif
                <div class="col-12 m-4">
                    <h4 style="display:inline-block; width:80%;"><span style="width:auto; padding:5px 10px; background-color:#f37a1f; border-radius:8px; color:white;">Profil </span></h4> <button onclick="editUser({{auth()->user()->id}},this)" class="btn" style="background-color:transparent;border:none; color:black; padding:0; width:10%;"> <i  class="fa-solid fa-pen-to-square fa-lg"></i></button>
                   <form action="{{asset('updateUser/'.auth()->user()->id)}}" method="POST">
                    @csrf
                    <div class="row smanjiInpute m-3">
                    <div id="editDivUser">
                   <li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-user" ></i> {{auth()->user()->name}}</li>
                   <li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-envelope"></i> {{auth()->user()->email}}</li>
                   <li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-phone"></i> {{auth()->user()->phone}}</li>
                   <li class="mt-3"><i  class="fa-solid fa-lg px-2 fa-location-dot"></i> {{auth()->user()->address}}</li>
                   </div>
                   </div>
                </form> 
                </div>

                <div class="col-12 m-4">
                    <h4> <span style="width:auto; padding:5px 10px; background-color:#f37a1f; border-radius:8px; color:white;">Istorija kupovine </span></h4>
                    <div class="row mt-3">
                        @php
                    $br = 0;
                    @endphp
                    @foreach ($reservation as $r)
                   
                        @if($r['email'] == auth()->user()->email)
                        @php
                        $br++;
                        @endphp
                        <div class="col-11 mb-5">
                  <h5>  <span style="width:auto; padding:5px 10px; background-color:grey; border-radius:8px; color:white;">{{explode(' ',$r['created_at'])[0]}}</span></h5> <hr>
                    @php
                        $a = explode('&',$r['products']);
                      
                       $a2 = explode('x',$a[0]);
                     
                    @endphp
                       
                            @foreach ($a as $asa)
                          
                            @foreach ($product as $p)
                                @if (trim($p['name']) == trim(explode("x",$asa)[0]))
                                <div class="row mt-2">
                                    <div class="col-4">
                                    {{$p['category']}}
                                </div>
                                    <div class="col-4">
                                        {{$p['name']}} x  {{explode("x",$asa)[1]}}
                                    </div>
                                    <div class="col-4">
                                        {{$r['address']}}
                                    </div>
                                   
                                  
                                </div>
                                @endif
                                
                            @endforeach
                            @endforeach
                            <div class="col-5 offset-7 text-center">
                                    <p>Ukupna suma: <span style="font-size:18px; font-weight:bolder;">{{$r['ukupnasuma']}} KM</span></p>
                                    </div>
                             <div class="col-12">
                                       @if ($r['stanjePorudzbine'] == null)
                                           <h5 class=" p-3 text-center stanjePOSLATO">Porudzbina je poslata.</h5>
                                          <a href="{{asset('otkaziReservation/'.$r['id'])}}" class="btn stanjebtn ">OTKAŽI</a>
                                        @elseif($r['stanjePorudzbine'] == 'PRIMLJENO')
                                        <h5 class=" p-3 text-center stanjePRIMLJENO">Porudzbina se obradjuje. <i class="fa-solid fa-box-open fa-lg px-2"  style="opacity:0.6;"></i></h5>
                                          @elseif($r['stanjePorudzbine'] == 'POSLATO')
                                        <h5 class=" p-3 text-center stanjePOSLATOKOR">Porudzbina je isporučena kurirskoj službi. <i class="fa-solid fa-truck fa-lg px-2" style="opacity:0.6;"></i></h5>
                                        @elseif($r['stanjePorudzbine'] == 'OTKAZANO')
                                        <h5 class=" p-3 text-center text-white bg-secondary stanjeOTKAZANO">Porudzbina je otkazana. <i class="fa-solid fa-phone-slash fa-lg px-2 " style="opacity:0.6;"></i> </h5> <span class="fon"> </span><small><b>(066 216 990 za više informacija)</b></small>
                                       @endif
                                    </div>
                        </div>
                        @endif
                    @endforeach
                @if($br==0)
                 
                 <p style="color:grey;" class="m-2">Nemate porucenih proizvoda!</p>

                
                @endif
                </div>
                </div>
            </div>
           
        </div>
      
        
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>
<script>
    let users = @json($users);
</script>