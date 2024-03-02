<!DOCTYPE html>
<html lang="en">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1" style="background-style:white; border-radius:13px;">
           <div>
            <h3 class="text-center">Poštovani,</h3>
            <div class="row">
                <div class="col-md-8 col-12"> <p>Imate novo pitanje na sajtu Šumooprema.ba <i class="fa-solid fa-circle-check px-4 fa-xl" style="color: #04ff00;"></i></p>
            </div>
                <div class="col-md-4 col-12 text-center"> <img  style=" width:120px; height:100px; " alt="" src="{{asset('images/logoSumooprema.png')}}"></div>
            </div>  
           <div class="col-12">
            <div>
            <span style="color:#f37a1f;"><b>Korisnik</b> <hr></span> 
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-user"></i>{{$name}} {{$lname}}</li>
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-location-dot"></i></i>{{$email}}</li>
            <span style="color:#f37a1f; margin-top:20px;"><b>Poruka </b><hr></span> 
            <li style="list-style-type:none;"><i style="color:#f37a1f;" class="px-3 fa-solid fa-envelope"></i>{{$messagesd}}</li>
            
            </div>
            </div>
            </div>
          
                      
            </div>
        </div>
    </div>
   
</body>
</html>