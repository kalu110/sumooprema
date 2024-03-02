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
		<title>D.O.O. Šumooprema - Blog</title>
	</head>

	<body>

		
	@include('layouts/navmain')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Blog</h1>
								<p class="mb-4">Zanimljivosti i nedoumice STIHL uređaja!</p>
								<p><a href="" class="btn btn-secondary me-2">Proizvodi</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<div class="image-blurred-edge"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				
				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="{{asset('/blog1')}}" class="post-thumbnail"><img src="images/stihlblog1card.jpg" style="height:290px;" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('/blog1')}}">Pravilna Mješavina Za Motornu Kosu</a></h3>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="{{asset('/blog2')}}" class="post-thumbnail"><img src="images/blog2.jpg" style="height:290px;" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('/blog2')}}">Trimer za travu sa silukom, kružnom testerom ili zvezda?</a></h3>
							
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="{{asset('/blog3')}}" class="post-thumbnail"><img src="images/blog3.png" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('/blog3')}}">Sigurnost i zaštita na radu</a></h3>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="{{asset('/blog4')}}" class="post-thumbnail"><img src="images/blog4.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('/blog4')}}">STIHL Rezne Ploče, Precizne I Pouzdane</a></h3>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="{{asset('/blog5')}}" class="post-thumbnail"><img src="images/blog5.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('/blog5')}}">Pravilno Oštrenje Lanca Motorne Testere</a></h3>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="{{asset('/blog6')}}" class="post-thumbnail"><img src="images/blog6.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="{{asset('/blog6')}}">Pravilno Odlaganje Kosačice Tokom Zime</a></h3>
								
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
