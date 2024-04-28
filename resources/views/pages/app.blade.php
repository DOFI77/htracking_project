<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>
		
		<!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="assets/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="assets/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="assets/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="{{url('home')}}"><img src="assets/img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#"> Accueil <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{url('home')}}"> Page 1</a></li>
												</ul>
											</li>
											<li><a href="{{url('support')}}">Support </a></li>
											<li><a href="{{url('services')}}">Services </a></li>
											<li><a href="#">Langue <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="blog-single.html">Anglais</a></li>
													<li><a href="blog-single.html">français</a></li>
												</ul>
											</li>
											@if(!auth()->user())
											<li><a href="{{url('login')}}">connectez vous</a></li>
											@endif
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									@if(auth()->user())
										<a href="{{url('utilisateurs')}}" class="btn">Tableau de board</a>
									@else
										<a href="{{url('register')}}" class="btn">Commencer le suivi</a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		



        @yield('content')
		
		
		
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>À propos de nous</h2>
								<p>Notre application web utilise l'Internet des Objets (IoT) pour le suivi médical. elle recueille en temps réel des données vitales telles que la fréquence cardiaque, la pression artérielle et d'autres paramètres physiologiques.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Liens rapides</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="{{url('home')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Accueil</a></li>
											<li><a href="{{url('support')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Support</a></li>
											<li><a href="{{url('services')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Language </a></li>
											<li><a href="{{url('login')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Contactez Nous</a></li>	
										</ul>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Horaires D'ouvertures</h2>
								<p>Journée de travail</p>
								<ul class="time-sidual">
									<li class="day">Lundi - Vendredi <span>8.00-20.00</span></li>
									<li class="day">Samedi <span>9.00-18.30</span></li>
									<li class="day">Dimanche <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Entreprise</h2>
								<p>abonnez-vous à notre entreprise pour recevoir toutes nos actualités dans votre boîte de réception. </p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Votre adresse e-mail'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="assets/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="assets/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="assets/js/easing.js"></script>
		<!-- Color JS -->
		<script src="assets/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="assets/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="assets/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="assets/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="assets/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="assets/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="assets/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="assets/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="assets/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="assets/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="assets/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="assets/js/main.js"></script>
    </body>
</html>