<!-- Start Header/Navigation -->
<p id="divParentSpanGornji" style="text-align:right;margin:0; background-color:white;"><span style="text-align:right;margin:0 23%;" id="spanGornjeHeader"><i class="fa-solid fa-envelope px-1"></i> sumooprema@gmail.com | 0666 216 990 <i class="fa-solid fa-phone px-1"></i></span></p>
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container">
    <a class="navbar-brand" href="{{asset('/')}}"><img style="width:24%;" src="{{asset('/images/logo.png')}}"/><small>Šumooprema</small><span>.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li value="{{url()->current()}}" class="nav-item">
                <a class="nav-link" href="{{asset('/')}}">Početna</a>
            </li>
            <li value="shop" class="nav-item"><a class="nav-link" href="{{asset('shop')}}">Proizvodi</a></li>
          <!--   <li value="about" class="nav-item"><a class="nav-link" href="{{asset('about')}}">O nama</a></li>
            <li value="services" class="nav-item"><a class="nav-link" href="{{asset('services')}}">Usluge</a></li> -->
            <li value="blog" class="nav-item"><a class="nav-link" href="{{asset('blog')}}">Blog</a></li>
            <li value="contact" class="nav-item"><a class="nav-link" href="{{asset('contact')}}">Kontakt</a></li>
        </ul>

       
        <div class="dropdown">
            <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{asset('images/cart.svg')}}" alt="">
              <span style="color:black;background-color:white; padding:5px 8px; font-size:13px;" class="badge badge-light">{{count((array) session('cart'))}}</span>
            </a>
            
            <div id="korpaDropMenu" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              
                @if(session('cart'))
                @foreach (session('cart') as $c)
                <div class="row cart-detail">
                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                        <img style="width:80px; height:60px; margin:10px;" src="{{asset('public/files/'.$c['product_image'])}}" alt=""> 
                    </div>
                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p style="margin:0;">{{$c['product_name']}}</p>
                        <div style="background-color:#f37a1f;" class="badge text-wrap" >
                           <span class="price text-succes">{{$c['product_price']}} KM</span>
                        </div>
                           <span class="count"><small>kol:</small> <div style="background-color:#f37a1f;" class="badge text-wrap" > {{$c['quantity']}}   </div></span> <span style="float:right; margin-right:15px;"><a href="{{asset('deletecartproduct/'.$c['product_name'])}}" class="btn-sm"><i class="fa-solid fa-xmark"></i></a></span>
                          
                    </div>
                    <hr style="width:80%; margin:auto;"> 
                </div>
                @endforeach
                @endif
                <div class="row total-fotter-section">
                    @php $total = 0 @endphp
                    @foreach ((array) session('cart') as $id => $details)
                        @php $total +=$details['product_price'] * $details['quantity'] @endphp
                    @endforeach
                 
                    @if (session('cart') == null)
                        <p class="py-2 text-center text-secondary">Korpa je prazna! <br><small>(Dodajte proizvode)</small></p>
                    @endif
                    
                    <div class="col-lg-12 col-sm-12 col-12 checkout">
                        <p  class="text-end px-3" style="font-size:11px; font-weight:bold;">UKUPNO: &nbsp; <span style="background-color:#f37a1f;font-size:13px;" class="badge text-wrap">{{$total}} KM</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 text-center">
                        <a style="padding:5px 30px; border-radius:10px;" href="{{asset('cart')}}" class="btn btn-primary btn-small">Pogledaj sve</a>
                    </div>
                </div>
            </div>
          </div>
          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li><a class="nav-link" href="{{asset('login')}}"><img src="{{asset('images/user.svg')}}"></a></li>
        </ul>
    </div>
</div>
    
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c5062bbd89.js" crossorigin="anonymous"></script>
<!-- End Header/Navigation -->