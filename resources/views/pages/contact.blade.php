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
		<title>Šumooprema Kontakt</title>
	</head>

	<body>

		
	@include('layouts/navmain')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Kontakt</h1>
								<p class="mb-4">Imate neko pitanje? Kontaktirajte nas preko kontakt forme i veoma brzo očekujte odgovor!</p>
								<p><a href="{{asset('shop')}}" class="btn btn-secondary me-2">Proizvodi</a></p>
							</div>
						</div>
						<div class="col-lg-7 text-center">
							
								<img src="images/logo.png" class="">
                                <img id="logoHusContact" src="images/logohus.png" alt="">
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

    
		<div class="why-choose-section">
			<div class="container">
      <div class="col-10 offset-1">
				<div class="row justify-content-between">
       	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <button type="button" class="btn-close" onclick="iskljuciPoruku(this)" aria-label="Close"></button></p>
				
				@endif
					<div class="col-lg-6">
						<h2 class="section-title">Zašto baš mi?</h2>
					
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
									<p>Naš tim stručnjaka pruža brz i pouzdan servis za sve vrste uređaja. Bez stresa, bez čekanja - mi činimo da vaši uređaji brzo ponovno radel.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap text-center">
							<img id="muContact" src="{{asset('images/logoSumooprema.png')}}" style="height:350px; width:100%; margin-top:16%;" alt="Image" class="img-fluid">
						</div>
						
					</div>
          </div>
				</div>
			</div>
		</div>



    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11402.266078218714!2d19.1135829!3d44.4010194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475968e4d89b7abb%3A0x56b04c9acf64cd8a!2s%C5%A0umooprema!5e0!3m2!1ssr!2srs!4v1706562068998!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




		<!-- Start Contact Form -->
		<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">


            <div class="col-md-8 col-lg-8 pb-4">


              <div class="row mb-5">
                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>Meterize 22, Karakaj, Zvornik, Bosna i Hercegovina</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>sumooprema@gmail.com</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>+387 66 216-990</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>
              </div>

              <form action="kontakFormaPitanje" method="POST">
                  @csrf
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="fname">Ime</label>
                      <input type="text" name="name" class="form-control" id="fname">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="lname">Prezime</label>
                      <input type="text" name="lname" class="form-control" id="lname">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="text-black" for="email">Email adresa</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="form-group mb-5">
                  <label class="text-black" for="message">Poruka</label>
                  <textarea name="messagesd" class="form-control" id="message" cols="30" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary-hover-outline">Pošalji</button>
              </form>

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>

  <!-- End Contact Form -->
  

  @include('layouts/footermain')


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
