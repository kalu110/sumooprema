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
						<div class="col-lg-5 col-md-5  col-10 offset-1 offset-md-0">
							<div class="intro-excerpt">
								<h1>Pravilna Mješavina Za Trimer</h1>
                                <p style="font-style:italic;"><small>Benzinske motorne kose pogone se mješavinom benzina i motornog ulja. Tako osiguravate funkcije motora i njegov radni vijek.</small></p>

								<p><a href="{{asset('shop')}}" class="btn btn-secondary me-2">Proizvodi</a></p>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-10 offset-1 offset-md-0">
							<div class="hero-img-wrap">
								<div class="image-blurred-edgeBlog1"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
   
		<div class="container p-4 blogicPovecaj">
            <div class="row">
              
			<h5>
EVO NAŠE PREPORUKE ZA SMESU ZA VAŠ MOTORNI TRIMER</h5>
<p>Tačan odnos smeše je izuzetno bitan za vaš motor. Neodgovarajuće gorivo ili netačan odnos smeše mogu izazvati ozbiljna oštećenja motora, 
	uključujući oštećenje klipa motora i povećanu potrošnju. Za motorne trimere preporučujemo sledeći odnos smeše:</p>
			<h5>1:50 ZA STIHL DVOTAKTNO MOTORNO ULJE</h5>
			<h5>DRUGE MARKE DVOTAKTNOG MOTORNOG ULJA SA KLASIFIKACIJOM TC</h5>
			<p>Isto važi i za druge marke dvotaktnog motornog ulja sa TC klasifikacijom:</p>
			<p><b>1:50 = 1 deo ulja + 50 delova benzina</b></p>
			<img style="height:500px;" src="{{asset('images/oilBlogPhoto.jpg')}}" alt="">
			<h5 class="mt-5">EVO JEDNOG PRIMJERA ZA MJEŠAVINU ZA VAŠ MOTORNI TRIMER</h5>

<li>POTREBAN ODNOS MJEŠAVINE</li>
<p>Da biste dobili omjer mješavine 1:50, trebat će vam pet litara benzina i 0,10 litara (ili 100 mililitara) STIHL dvotaktnog ulja.</p>
<li>KOJE GORIVO JE PRIKLADNO ZA SMJESU?</li>
<p>Preporučujemo korištenje markiranog benzina s minimalnim oktanskim brojem od 90 RON, što je uobičajeno super gorivo dostupno na benzinskim stanicama.</p>
<li>KOJE MOTORNO ULJE JE PRIKLADNO ZA SMJESE?</li>
<p>Koristite visokokvalitetno dvotaktno motorno ulje koje ima TC klasifikaciju. Preporučujemo STIHL dvotaktno motorno ulje, specijalno dizajnirano za STIHL motore kako bi se osigurao dugotrajan rad motora.
</p>

<h5>VAŽNO UPOZORENJE:</h5>
<p>
Motori mogu biti oštećeni korištenjem niskokvalitetnih motornih ulja, što može dovesti do oštećenja brtvenih prstenova, vodova i spremnika goriva.</p>
<h5>NAPOMENA O PRIPREMI SMJESU:</h5>
<p>Pripremite mješavinu tako da ulje za motor prvo sipate u odgovarajući kanistar, a zatim dodate benzin. Prije upotrebe, dobro promućkajte mješavinu u kanistru kako biste osigurali homogenu smjesu. Budite oprezni prilikom otvaranja kanistra zbog mogućeg stvaranja pritiska unutar njega.
</p>











            </div>
        </div>

		

		

		@include('layouts/footermain')


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
