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
		<title>Šumooprema </title>
	</head>

	<body>

	@include('layouts/navmain')
		

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Ovlašćeni Servis <span clsas="d-block"> Stihl i Husqvarna uređaja</span></h1>
								<p class="mb-4">Dobrodošli na zvanični sajt Šumooprema D.O.O. </p>
								<p><a href="{{asset('shop')}}" class="btn btn-secondary me-2">Proizvodi</a><a href="{{asset('blog')}}" class="btn btn-white-outline">Istraži</a></p>
							</div>
						</div>
						<div class="col-lg-7 text-center">
							<div style="background-color:white;border-radius:10px;  box-shadow: 0 0 8px 8px #f37a1f inset; width:70%; height:70%;margin:0 auto;" class="text-center">
								<img src="{{asset('images/logoSumooprema.png')}}" style="width:100%; height:100%;padding:30px 50px; 
								" class="img-fluid">
								</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
		
		<!-- Start Product Section -->
		<section class="section-products">
			<div class="container">
			 @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
    
    @endif
				<div class="row mb-5">
					
					<!-- Start Column 1 -->
					<div id="RazneNameneIndex" class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Proizvodi za razne namene.</h2>
						<p class="mb-4">Uverite se u kvalitet i lakoću rada!</p>
						<p><a href="shop.html" class="btn">Više</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					@if(count($products) > 3)
					@foreach ($products->random(4) as $p)
				
					@php 
					$a = explode(',',$p->images);
				@endphp
		
					
								<!-- Single Product -->
								<div class="col-6 col-sm-6 offset-sm-0 offset-md-0 col-md-5 col-lg-3 col-xl-2">
										<div id="product-1" class="single-product" >
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
    margin: auto;"  src="{{asset('public/files/'.$a[1])}}" alt="">
														<ul>
																<li><a href="{{asset('add_to_cart/'.$p->id)}}"><i class="fas fa-shopping-cart"></i></a></li>
																<li><a href="{{asset('oneproduct/'.$p->id)}}"><i class="fas fa-eye"></i></a></li>
																
														</ul>
												</div>
												<div class="part-2">
												    <a href="{{asset('oneproduct/'.$p->id)}}" style="text-decoration-line:none;">
														<h3 class="product-title text-center"><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">{{$p->name}} </span></h3>
														<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">{{$p->price}} KM </span></h4></a>
												</div>
										</div>
								</div>
								
					
				
					@endforeach
					@endif
					<!-- End Column 2 -->

					

				</div>
			</div>
		</div>

		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 id="RazneNameneIndex" class="section-title">Zašto baš mi?</h2>
						

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{asset('images/truck.svg')}}" alt="Image" class="imf-fluid">
									</div>
									<h3>Brza &amp; Besplatna Dostava</h3>
									<p>Uz našu efikasnu distribuciju putem Brze Pošte, vaši omiljeni proizvodi su vam nadohvat ruke za svega 2-3 dana.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{asset('images/bag.svg')}}" alt="Image" class="imf-fluid">
									</div>
									<h3>Jednostavno Poručivanje</h3>
									<p>Sve što treba da uradite je da odaberete proizvode koje želite, dodate ih u korpu, i pratite jednostavne korake za brzu i bezbednu kupovinu.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{asset('images/award.png')}}" style="width:46px; height:46px;" alt="Image" class="imf-fluid">
									</div>
									<h3>Garancija</h3>
									<p>Uz naše Stihl i Husqvarna uređaje pridružuje se i naša sigurnost - pružamo snažnu garanciju na svaki proizvod. Vaša pouzdanost je naša odgovornost.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{asset('images/repair-tool.png')}}" style="width:46px; height:46px;" alt="Image" class="imf-fluid">
									</div>
									<h3>Pouzdan Servis za Vaše Uređaje</h3>
									<p>Naš tim stručnjaka pruža brz i pouzdan servis za sve vrste uređaja. Bez stresa, bez čekanja - mi činimo da vaši uređaji brzo ponovno rade.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap text-center">
							<img id="muContact" src="{{asset('images/mus.jpg')}}" style="height:550px; width:70%;" alt="Image" class="img-fluid">
						</div>
						
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							
							<div class="grid grid-1"><img src="{{asset('images/poc1.jpg')}}" style="width:100%;" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="{{asset('images/poc3.jpg')}}" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="{{asset('images/poc2.jpg')}}"  alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 id="RazneNameneIndex" class="section-title mb-4">Osetite sigurnost uz Stihl uređaje.</h2>
						<p>Stihl je neizostavan partner u svetu vrhunskih alatki. Sa strašću prema perfekciji, Stihl nudi izuzetnu seriju motornih testera, ručnih alata i opreme za baštovanstvo. Pridružite se Stihlu u kreiranju jedinstvenih i izdržljivih rešenja, jer zajedno gradimo budućnost preciznosti i sigurnosti.</p>

						<ul class="list-unstyled custom-list my-4">
							@if(count($category) > 0)
						
							@foreach($category->sortBy('name') as $c)
								<li>{{$c['name']}}</li>
							@endforeach
							@endif
						</ul>
						<p><a href="{{asset('/shop')}}" class="btn">Otkrij</a></p>
					</div>
					
				</div>
			</div>
		</div>
	
<div class="container-fluid indexDownProduct py-5 px-0">
	<div class="col-11 col-sm-10 offset-sm-1 col-md-8 offset-md-2" style="margin:0 auto ;">
		<div class="row">

					
					@if(count($products) > 3)
					@foreach ($products->random(4) as $p)
				
					@php 
					$a = explode(',',$p->images);
				@endphp
		
					
								<!-- Single Product -->
								<div class="col-6  col-sm-6 offset-sm-0 offset-md-0 col-md-5 col-lg-3 col-xl-3 px-1 hoverOpacity" >
										<div id="product-1" class="single-product" >
												<div id="karticeIndexProizvodi" class="part-1" style="height:260px; background-color:white;margin-bottom:0;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;">
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
												<div class="part-2" style="background-color:white; padding:20px 5px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
														<h3 class="product-title text-center"><span style="border-bottom:0px; border-top:0px;"  class="spanCardProduct">{{$p->name}} </span></h3>
														<h4 class="product-price text-center" style="width:100%;"><span style="border-top:0px; font-weight:100;" class="spanCardProduct">{{$p->price}} KM </span></h4>
												</div>
										</div>
								</div>
					@endforeach
					@endif
					</div>
				</div>
			</div>
		</div>
		</div>


		<div class="blog-section mb-5">
			<div class="container mb-5">
				<div class="row mt-5">
					<div class="col-md-6">
						<h2 class="section-title">Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="{{asset('/blog')}}" class="more">Pogledaj sve</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="{{asset('blog1')}}" class="post-thumbnail"><img src="{{asset('images/StihlBlog1.jpg')}}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('blog1')}}">Zanimljivosti i nedoumice STIHL uređaja!</a></h3>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="{{asset('blog2')}}" class="post-thumbnail"><img src="{{asset('images/stihlBlog2.jpg')}}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('blog2')}}">Stihl Trimeri izbor, održavanje, saveti!</a></h3>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="{{asset('blog3')}}" class="post-thumbnail"><img src="{{asset('images/blog3.png')}}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('blog3')}}">Sigurnost i zaštita na radu!</a></h3>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		@include('layouts/footermain')


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
