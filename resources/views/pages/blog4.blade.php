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
								<h1>STIHL Rezne Ploče, Precizne I Pouzdane</h1>
                                <p style="font-style:italic;"><small>Kvalitetne rezne ploče igraju ključnu ulogu u efikasnosti motornih sekača prilikom obrade izuzetno tvrdih materijala. Više informacija o tome možete pronaći ovde.</small></p>

                                <p><a href="{{asset('shop')}}" class="btn btn-secondary me-2">Proizvodi</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<div class="image-blurred-edgeBlog4"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
            
		<!-- End Hero Section -->
		<div class="container p-4 blogicPovecaj">
            <div class="row">
           <h4>STIHL REZNE PLOČE – SEKU NAJTVRĐE MATERIJALE </h4> 
<p>Pravilne rezne ploče prenose snagu motornih sekača u materijal koji treba obraditi. Veliki izazovi prilikom rada sa motornim sekačima zahtevaju visok standard rezne ploče. Da biste mogli da se pouzdate u precizan rez i bezbedan rad mašine na gradilištu, pri radovima na putu ili spasavanju, naše rezne ploče ispunjavaju najviše standarde kvaliteta. Inovativne tehnike izrade i optimalno usklađivanje reznih ploča i motornih sekača kompanije STIHL doprinose tome.
</p>
<img src="{{asset('images/blog4.1.jpg')}}" alt="">
<h4>RAZLIČITE VRSTE REZNIH PLOČA</h4>
<p>U suštini, STIHL rezne ploče mogu biti podeljene u dve kategorije: Rezne ploče sa vezivom od sintetičke smole i dijamantske rezne ploče. Evo kako se međusobno razlikuju:</p>
<li>Rezne ploče sa vezivom od sintetičke smole</li>

<p>STIHL rezne ploče sa vezivom od sintetičke smole sastoje se od staklenih vlakana, sintetičke smole kao veziva i brusnog korunda. Ovi materijali se mešaju, oblikuju i kale u gotove rezne ploče. Tako se postiže optimalno vezivanje komponenti. Trostruka podloga od staklenih vlakana i posebno tretirani diskovi omogućavaju stabilnost pri kasnijoj primeni, čak i pri najvišim brzinama. Rezne ploče sa vezivom od sintetičke smole pokazuju povoljne karakteristike pri obradi metala i livenih cevi.
</p>

<li>Dijamantske rezne ploče</li>
<p>Dijamantske rezne ploče su univerzalne i pogodne za obradu različitih materijala. One pokazuju bolje karakteristike nego druge rezne ploče, naročito pri obradi prirodnog kamena, betona i asfalta.</p>
<p>Osnovni list rezne ploče sastoji se od posebnog čelika koji se dodatno otvrdnjava, temperuje i prednapreže. Na ovaj način se osigurava stabilnost i pouzdanost rezne ploče čak i pri visokim opterećenjima – pri maksimalnoj brzini od 360 km/č.
</p>

<p>Dijamanti se putem postupka sinterovanja pod visokim pritiskom ne samo umeću na odgovarajuća mesta na reznom segmentu rezne ploče, već se i optimalno spajaju sa segmentom. Sinterovanje ovog obratka na ultravisokim temperaturama stvara izuzetno otporan spoj bez praznina, što omogućava optimalne performanse rezanja. Izrađeni rezni segment se zavaruje o osnovni list. Ovaj postupak omogućava izuzetno opterećiv spoj, pri čemu se snaga motornog sekača optimalno koristi za rezanje najtvrđih materijala.
</p>

<h4>STIHL REZNE PLOČE</h4>
<p>STIHL rezne ploče su usklađene sa našim motornim sekačima na najbolji način – zajedno obezbeđuju efikasan, udoban i bezbedan rad. Dug radni vek i precizno rezanje postignuti su zajedničkim razvojem komponenti. Specijalni postupci proizvodnje i obrade naših reznih ploča dovode do smanjenja vibracija pri rezanju i optimalne iskorišćenja snage motornog sekača. U našem širokom asortimanu dijamantskih rezni ploča i rezni ploča sa vezivom od sintetičke smole pronaći ćete odgovarajuće rezne ploče za specifičnu primenu i uslove rada.
</p>

            </div>
        </div>

		@include('layouts/footermain')


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
