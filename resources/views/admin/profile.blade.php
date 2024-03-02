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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <title>
    Sumooprema Profil
  </title>
  @include('../includes/cdnadmin')
</head>
<style>
  .form-control{
    margin-top:5px;
    border:none;
    border-radius: 0;
    border-bottom:1px solid grey;
  }
  .btn{
    margin-top:10px;
    background-color: #f37a1f;
    color:white;
  }
</style>
<body class="g-sidenav-show bg-gray-200">
@include('../layouts/asideadmin')
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    @include('../layouts/navadmin')
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6" id="ProfilCard" style="width:40%; left:23%;">
        <div class="container mt-5 px-5" id="downPaddingCard" style="width:100%;">
       
          <h3 style="display:inline-block; width:90%; margin-bottom:20px;"><span style=" padding:5px 10px; background-color:#f37a1f; border-radius:8px; color:white;">Profil</span></h3><button onclick="editUser('{{auth()->user()->id}}',this)" class="btn" style="background-color:transparent;border:none; color:black; padding:0; width:20px; height:20px;"> <i class="fa-solid fa-pen-to-square fa-lg"></i></button>
          <form action="{{asset('updateUser/'.auth()->user()->id)}}" method="POST" class="mb-5">
            @csrf
          <div id="editDivUser">
          <li class="mt-3"><i  class="fa-solid fa-user" ></i> {{auth()->user()->name}}</li>
<li class="mt-3"><i  class="fa-solid fa-envelope"></i> {{auth()->user()->email}}</li>
<li class="mt-3"><i  class="fa-solid fa-phone"></i> {{auth()->user()->phone}}</li>
<li class="mt-3"><i  class="fa-solid fa-location-dot"></i> {{auth()->user()->address}}</li>

         
          </div>
          
        </form>
      </div>
      </div>
    </div>
  </div>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>
<script>
    let users = @json($users);
</script>
</body>

</html>