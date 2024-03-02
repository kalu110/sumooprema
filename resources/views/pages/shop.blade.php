<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('css/style2.css')}}" rel="stylesheet">
		<title>Šumooprema - Proizvodi</title>
	</head>

	<body>

	<style>
		 .inputs {
      position: absolute;
      width: 100%;
      height: 5px;
      background: none;
      pointer-events: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      top: 50%;
      transform: translateY(-50%);
    }
    input::-webkit-slider-thumb {
      height: 25px;
      width: 25px;
      border-radius: 50%;
      border: 3px solid #f37a1f;
      background-color: white;
      pointer-events: auto;
      -webkit-appearance: none;
      cursor: pointer;
      margin-bottom: 1px;
    }
    input::-moz-range-thumb {
      height: 18px;
      width: 18px;
      border-radius: 50%;
      border: 3px solid #f37a1f;
      background-color: white;
      pointer-events: auto;
      -moz-appearance: none;
      cursor: pointer;
      margin-top: 30%;
    }
	</style>
	@include('layouts/navmain')
	
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Proizvodi</h1>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
							
								<img style="width:90%;"  src="images/stihlSve.png" class="img-fluid">
							
							</div>
						
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		
		
		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
				@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
				
				@endif
		<section class="section-products">
			<div class="container">
					
				
		      	<div class="row">
					<div class="col-12 col-md-3">
						<img src="{{asset('images/logoSumooprema.png')}}" class="m-4" style="width:85%; height:85%;" alt="">
					</div>
					<div class="col-12 col-md-6">
						
						
						<div class="double_range_slider_box mt-5">
							<div class="double_range_slider">
							  <span class="range_track" id="range_track"></span>
					
								<input oninput="showVal()"
								onchange="showVal()" type="range" class="min inputs" min="{{$productpriceMin}}" max="{{$productpriceMax+100}}" value="0" step="10">
								<input oninput="showVal()"
								onchange="showVal()" type="range" class="max inputs" min="0" max="{{$productpriceMax+100}}" value="{{$productpriceMax/2}}" step="0">
							
							  <div class="minvalue"></div>
							  <div class="maxvalue"></div>
							</div>
						</div> 
						
					</div>
					<div class="col-12 col-md-3 mt-5">
						<span  class="filterBrendKnow" onclick="promeniBrenduPretrazi(this)" value="Stihl" onmouseleave="opacityBrend2(this)" onmouseover="opacityBrend(this)" style="opacity:1;"><img  for="rdbtn1" style=" width:60%; height:50px;" src="{{asset('images/logo.png')}}" alt=""> </span>
						<span class="filterBrendKnow" onclick="promeniBrenduPretrazi(this)" value="Husqvarna" onmouseleave="opacityBrend2(this)" onmouseover="opacityBrend(this)" style="opacity:0.3;"><img style=" width:60%; height:50px;" src="{{asset('images/logohus.png')}}" alt="">  </span>
						<span class="filterBrendKnow" onclick="promeniBrenduPretrazi(this)" value="Ostalo" onmouseleave="opacityBrend2(this)" onmouseover="opacityBrend(this)" style="opacity:0.3; "><button id="btnSljastiOstalo" class="btn btn-light"><h4 style="margin:0;">OSTALO</h4></button></span>
						
						<select onchange="selectShopFilter(this)"  class="form-select mt-2 optionShopFilter" name="" id="">
						<option value="Sve kategorije"  selected>Sve kategorije</option>
						@foreach ($category as $c)
						<option  value="{{$c['name']}}">{{$c['name']}}</option>
							
						@endforeach	
					</select>
					
				</div>
				<div class="col-12 mt-5"><input id="pretragaIdSearch" placeholder="Pretraga po imenu"  type="text" class="form-control" onkeyup="pretraziImenaShopFilter(this)"></div>
					<div class="row" id="JSispisShopFilter">
						@if(count($category) > 1 || count($products) > 0)
					@foreach ($category as $c)
						@php
						$brIma = 0;
						foreach ($products as $p){
							if($p['category'] == $c['name']){
								$brIma++;
							}
						}
						@endphp
						@if($brIma != 0)
					 	<h3 id="{{$c['name']}}cat" class="mt-5">{{$c['name']}}</h3> <hr>
						@endif
						

					@foreach ($products as $p)
					@if($p['category'] == $c['name'] && $p['brend'] == 'Stihl')
					@php 
					$a = explode(',',$p->images);
				@endphp
		
					
								<!-- Single Product -->
								<div class="col-6 col-sm-6 col-md-4 col-lg-3">
										<div id="product-1" class="single-product singlPr px-3">
												<div class="part-1">
													<img style="max-height: 100%;
    max-width: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;" src="{{asset('public/files/'.$a[1])}}" alt="">
														<ul>
																<li><a href="{{asset('add_to_cart/'.$p->id)}}"><i class="fas fa-shopping-cart"></i></a></li>
																<li><a href="{{asset('oneproduct/'.$p->id)}}"><i class="fas fa-eye"></i></a></li>
																
														</ul>
												</div>
												<div class="part-2">
														<h3 class="product-title text-center" ><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">{{$p->name}} </span></h3> 
														<h4 class="product-price text-center" style="width:100%;" ><span style="border-top:0px; font-weight:100;" class="spanCardProduct">{{$p->price}}  KM </span></h4>
												</div>
										</div>
								</div>
					@endif
					@endforeach
					@endforeach
					@else
					    <h4 class="m-4">Trenutno nema aktivnih proizvoda!</h4>
					@endif
							</div>
				</div>
			</div>
	</section>
					<!-- End Column 4 -->

		      	</div>
		    </div>
		</div>


		
		@include('layouts/footermain')


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
		<script> let category = @json($category);
		let product = @json($products);</script>
		<script>
			let minRangeValueGap = 6;
			 const range = document.getElementById("range_track");
			 const minval = document.querySelector(".minvalue");
			 const maxval = document.querySelector(".maxvalue");
			 const rangeInput = document.querySelectorAll(".inputs");
		 
			 let minRange, maxRange, minPercentage, maxPercentage;
		 
			 const minRangeFill = () => {
			   range.style.left = ((rangeInput[0].value / rangeInput[0].max) - 0.050) * 100 + "%";
			 }
			 const maxRangeFill = () => {
			   range.style.right = 100-(rangeInput[1].value / rangeInput[1].max) * 100 + "%";
			 }
			 const MinVlaueBubbleStyle = () => {
			   minPercentage = (minRange / rangeInput[0].max) * 100
			   minval.style.left = minPercentage + "%"
			   minval.style.transform = `translate(-${minPercentage /2}%, -100%)`
			 }
			 const MaxVlaueBubbleStyle = () => {
			   maxPercentage = 100-(maxRange / rangeInput[1].max) * 100
			   maxval.style.right = maxPercentage + "%"
			   maxval.style.transform = `translate(${maxPercentage / 2}%, 100%)`
			 }
		 
			 const setMinValueOutput = () => {
			   minRange = parseInt(rangeInput[0].value);
			   minval.innerHTML = rangeInput[0].value + ' KM';
			 }
			 const setMaxValueOutput = () => {
			   maxRange = parseInt(rangeInput[1].value);
			   maxval.innerHTML = rangeInput[1].value + ' KM';
			 }
		 
		 
			 setMinValueOutput()
			 setMaxValueOutput()
			 minRangeFill()
			 maxRangeFill()
			 MinVlaueBubbleStyle()
			 MaxVlaueBubbleStyle()
		 
		 rangeInput.forEach((input) => {
		   input.addEventListener("input", (e) => {
			 setMinValueOutput();
			 setMaxValueOutput();
		 
			 minRangeFill();
			 maxRangeFill();
		 
			 MinVlaueBubbleStyle();
			 MaxVlaueBubbleStyle();
		 
			 if (maxRange - minRange < minRangeValueGap) {     
			   if (e.target.className === "min") {
				 rangeInput[0].value = maxRange - minRangeValueGap;
				 setMinValueOutput();
				 minRangeFill();
				 MinVlaueBubbleStyle();
				 e.target.style.zIndex = "2"
			   } 
			   else {
				 rangeInput[1].value = minRange + minRangeValueGap;
				 e.target.style.zIndex = "2"
				 setMaxValueOutput();
				 maxRangeFill();
				 MaxVlaueBubbleStyle();
			   }
			 } 
		 
		   });
		 });
		 </script>
	</body>

</html>
