
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main" style="overflow-x: hidden;">
    <div class="sidenav-header" style="overflow-x: hidden;">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{asset('/')}}" target="_blank">
        <img src="{{asset('images/logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Šumooprema D.O.O.</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active bg-gradient-white" href="{{asset('/dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Početna</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{asset('category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">featured_play_list</i>
            </div>
            <span class="nav-link-text ms-1">Kategorije</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{asset('product')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">build</i>
              </div>
            <span class="nav-link-text ms-1">Proizvodi</span>
             
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{asset('tables')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Podaci</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{asset('/billing')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            @php
            $br = 0;
            foreach($reservations as $r){
            if($r->stanjePorudzbine == null){
              $br++;
            }}
            @endphp
            <span class="nav-link-text ms-1">Porudžbine</span>
            @if($br!=0)
            <span style="margin-left:30px;padding:1px 10px; border-radius:20px; font-size:18px; font-weight:bolder;  background-color:white"><h4 class="m-0" style="">{{$br}}</h4> </span>
            @endif
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="{{asset('/fish')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">restaurant</i>
            </div>
            <span class="nav-link-text ms-1">Ribarnica</span>
          </a>
        </li>
     
     
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Korisnik</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{asset('/profile')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
       
      </ul>
    </div>
   
  </aside>