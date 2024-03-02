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
								<h1>SIGURNOST I ZAŠTITA NA RADU</h1>
                                <p style="font-style:italic;"><small>Bezbednost na radu je od suštinskog značaja za STIHL. Kao vodeći proizvođač motornih testera širom sveta, STIHL je posvećen pružanju širokog spektra opreme i lične zaštitne odeće kako bi se osigurala sigurnost tokom rada. Ovde možete pronaći više informacija o našem asortimanu zaštitne opreme, uključujući odeću za zaštitu od sečenja, kao i druge korisne savete za siguran rad.</small></p>

								<p><a href="{{asset('shop')}}" class="btn btn-secondary me-2">Proizvodi</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<div class="image-blurred-edgeBlog3"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
            
		<!-- End Hero Section -->
		<div class="container p-4 blogicPovecaj">
            <div class="row">
                <h4>PRAVILNA ZAŠTITA SLUHA KOD RADOVA SA STIHL UREĐAJIMA</h4> 
             <p>   Rad s motornim uređajima poput duvač lišća, motornih testera ili makaza/trimera za živicu može biti izuzetno bučan, stoga je zaštita <b>sluha</b> od presudnog značaja.
Da biste zaštitili svoj <b>sluh</b> od dugotrajne izloženosti buci i sprečili trajna oštećenja <b>sluha</b>, važno je nositi zaštitu <b>sluha</b> prilikom rada s bučnim motornim uređajima. Bez obzira radite li u vrtu ili na gradilištima, u tvornicama ili sličnim okruženjima, zaštita <b>sluha</b> je neophodna.
Važno je napomenuti da nije svaka buka ista. Osim jačine zvuka, bitna je i udaljenost od izvora buke. Na primer, kod rada s makazama/trimerima za živicu, motor može biti neposredno uz uho ili udaljen više od jednog metra, kao što je slučaj s kosačicom. Stoga je važno razumeti koliko buke 
od motornog uređaja zapravo dopire do vašeg uha kako biste odabrali odgovarajuću zaštitu.
U uputama za upotrebu STIHL motornih uređaja, obično su prikazane dvije vrednosti: razina zvučne snage, koja označava izravnu glasnoću na samom uređaju, i razina zvučnog tlaka, koja predstavlja vrednost koja doseže do korisnika. Obe vrednosti su izražene u decibelima (dB).
             </p>
                <img  src="{{asset('images/stihlBlog3.1.jfif')}}" alt="">
                <p>STIHL nudi dva osnovna tipa zaštite sluha: čepići za uši i zaštitne slušalice, pri čemu je nivo zaštite isti u oba slučaja. Oba tipa zaštite su dostupna u različitim modelima prilagođenim različitim potrebama korisnika i mogu se kombinovati s drugom ličnom zaštitnom opremom poput kaciga ili zaštitnih vizira.
Odabir između čepića za uši i zaštitnih slušalica zavisi isključivo od preferencija korisnika. Važno je odabrati zaštitu sluha s kojom se osećate najudobnije.
            </p>

            <h5>ČEPIĆI ZA UŠI</h5>
            <p>Čepići za uši često se koriste u industrijskim postrojenjima gde je potrebno duže vreme nošenja zaštite sluha. Oni su udobniji za nošenje jer ne izazivaju znojenje ušiju i ne zahtevaju često skidanje i ponovno stavljanje. Izrađeni su od konusnog oblika od PU pene koja se lako umetne u ušni kanal, pružajući efikasnu izolaciju od buke.</p>
            <h5>ZAŠTITNE SLUŠALICE</h5>
            <p>Zaštitne slušalice su pričvršćene na traku oko glave ili na kacigu i pružaju istu zaštitu kao i čepići za uši. One su pogodne za različite vrste poslova kako unutar zatvorenih prostora, tako i na otvorenom, a mogu se koristiti i u različitim vremenskim uslovima. Zaštitne slušalice su posebno praktične kod poslova gde je često potrebno skidati i stavljati zaštitu, ili kada radite u nečistim okruženjima.

Općenito, zaštita slušalice preporučuje se kod poslova gde je potrebno često skidati i stavljati zaštitu ili kada radite u prljavim uslovima. Takođe su bolji izbor u smolastim uslovima, kao što su radovi u šumi, zbog bolje higijenske zaštite u poređenju s čepićima za uši.</p>
 
            <h4>SAZNAJ KAKO OD ONIH KOJI ZNAJU: POSJETITE VAŠEG LOKALNOG STIHL PRODAVCA</h4>
            <p>Informativni posjet vašem uslužnom lokalnom STIHL distributeru pružit će vam povjerenje da upravo vi alati koje birate najbolje odgovaraju vašim potrebama.</p>
            </div>
        </div>
           
		

		

		

		@include('layouts/footermain')


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
