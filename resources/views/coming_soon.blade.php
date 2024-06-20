
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="Poland Tamil Sangam">
	<meta name="robots" content="">
	<meta name="description" content="Poland Tamil Sangam">
	<meta property="og:title" content="Poland Tamil Sangam">
	<meta property="og:description" content="Poland Tamil Sangam">
	<meta property="og:image" content="https://polandtamilsangam.org/images/tamil_logo1.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title>TSAP - Coming soon</title>
	
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{asset('images/tamil_logo2.jpg')}}">
    
	<!-- Stylesheet -->
    <link href="{{asset('vendor/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
	
	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
		
	<link rel="stylesheet" href="{{asset('vendor/switcher/switcher.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/rangeslider/rangeslider.css')}}">
	
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	
</head>
<body id="bg1">
<!-- <div id="loading-area" class="loading-page-1">
	<div class="loading-inner">
		<div class="item-wrapper">
			<img class="item1" src="images/hand1.png" alt="">
			<img class="item2" src="images/hand2.png" alt="">
			<img class="item3" src="images/heart.png" alt="">
		</div>
		<div class="load-text">
			<span data-text="A" class="text-load">A</span>
			<span data-text="k" class="text-load">k</span>
			<span data-text="C" class="text-load">C</span>
			<span data-text="E" class="text-load">E</span>
			<span data-text="L" class="text-load">L</span>
		</div>
	</div>
</div> -->
<div id="loading-area" class="loading-page-2">
	<div class="loading-inner">
		<img src="{{asset('images/lodaer2.gif')}}" alt="">
	</div>
</div>
<div class="page-wraper">

	<!-- Coming Soon Start -->
	<div class="coming-soon background-luminosity" data-text="TSAP" style="background-image: url(images/background/bg20.jpg)">
		<div class="inner-content">
			<div class="logo-header logo-light">
				<a href="{{route('home')}}"><img src="{{asset('images/tamil_logo3.png')}}" alt=""></a>
			</div>
			<h1 class="dz-head">We Are Coming <span class="text-secondary">Soon !</span></h1>
			<p>We`ll be here soon with our new awesome site</p>
			<!--<a href="route{{asset('contact_us')}}" class="btn btn-light btn-skew m-r15"> <span>GET IN TOUCH</span></a>-->
			<!--<a href="route{{asset('home')}}" data-bs-toggle="modal" data-bs-target="#SubscribeModal" class="btn btn-skew btn-secondary"><span>Visit Website</span></a>-->
		</div>
		<div class="countdown-timer countdown-container" data-date="June 14, 2024 00:00:00">
			<div class="clock">
				<div class="clock-item clock-days countdown-time-value">
					<div id="canvas-days" class="clock-canvas"></div>
					<div class="text">
						<p class="val">0</p>
						<p class="type-days type-time" data-border-color="#fff">Days</p>
					</div>
				</div>
				<div class="clock-item clock-hours countdown-time-value">
					<div id="canvas-hours" class="clock-canvas"></div>
					<div class="text">
						<p class="val">0</p>
						<p class="type-hours type-time" data-border-color="#fff">Hours</p>
					</div>
				</div>
				<div class="clock-item clock-minutes countdown-time-value">
					<div id="canvas-minutes" class="clock-canvas"></div>
					<div class="text">
						<p class="val">0</p>
						<p class="type-minutes type-time" data-border-color="#fff">Minutes</p>
					</div>
				</div>
				<div class="clock-item clock-seconds countdown-time-value">
					<div id="canvas-seconds" class="clock-canvas"></div>
					<div class="text">
						<p class="val">0</p>
						<p class="type-seconds type-time" data-border-color="#fff">Seconds</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Coming Soon End -->
	
	<div class="modal fade inquiry-modal" id="SubscribeModal" tabindex="-1" aria-labelledby="SubscribeModal" aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="inquiry-adv">
				<img src="{{asset('images/banner/bnr3.jpg')}}" alt="Image">
			</div>
			<div class="modal-content">
				<div class="modal-header">
					<i class="fa-solid fa-envelope"></i>
					<h5 class="modal-title" id="exampleModalLongTitle">Subscribe To Our Newsletter</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
				</div>
				<div class="modal-body">
					<form action="script/mailchamp.php" method="post" class="dz-subscription dzSubscribe">
						<div class="dzSubscribeMsg"></div>
						<div class="input-group mb-3">
							<input name="dzName" required type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="input-group mb-3">
							<input name="dzEmail" required type="email" class="form-control" placeholder="Your Email Address">
						</div>
						<div class="text-center">
							<button name="submit" type="submit" value="Submit" class="btn btn-primary">SUBSCRIBE NOW </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('vendor/wow/wow.js')}}')}}"></script><!-- WOW JS -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('vendor/countdown/kinetic.js')}}"></script><!-- COUNTDOWN JS -->
<script src="{{asset('vendor/countdown/jquery.final-countdown.js')}}"></script><!-- COUNTDOWN JS -->
<script src="{{asset('js/dz.ajax.js')}}"></script><!-- AJAX -->
<script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM JS -->
<script src="{{asset('js/dznav-init.js')}}"></script><!-- DZNAV INIT -->

<script src="{{asset('vendor/rangeslider/rangeslider.js')}}"></script><!-- RANGESLIDER -->
</body>
</html>