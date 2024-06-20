<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="description" content="Poland Tamil Sangam">
	<meta property="og:title" content="Poland Tamil Sangam">
	<meta property="og:description" content="Poland Tamil Sangam">
	<meta property="og:image" content="https://polandtamilsangam.org/images/tamil_logo1.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

	<!-- Title -->
	<title>TSPA - Tamil Sangam Association of Poland</title>

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="{{asset('images/tamil_logo2.jpg')}}">

	<!-- Stylesheet -->
	<link href="{{asset('vendor/animate/animate.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('vendor/switcher/switcher.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/rangeslider/rangeslider.css')}}">

	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

</head>

<body id="bg" class="data-typography-1 data-theme-1">
	<!-- <div id="loading-area" class="loading-page-3">
	<div class="loading-inner">
		<div class="item1"></div>
		<div class="item2"></div>
		<div class="item3"></div>
		<div class="item4"></div>
	</div>
</div> -->
	<!-- <div id="loading-area" class="loading-page-2">
		<div class="loading-inner">
			<img src="{{asset('images/lodaer2.gif')}}" alt="">
		</div>
	</div> -->
	<div class="page-wraper">

		<!-- Header -->
		<header class="site-header mo-left header style-2">
			<!-- Main Header -->
			<div class="sticky-header main-bar-wraper navbar-expand-lg">
				<div class="main-bar clearfix ">
					<div class="container-fluid clearfix">
						<!-- Website Logo -->
						<div class="logo-header mostion logo-dark">
							<a href="{{route('home')}}"><img src="{{asset('images/tamil_logo1.png')}}" alt=""></a>
						</div>

						<!-- Nav Toggle Button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button"
							data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
							aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>

						<!-- Extra Nav -->
						<div class="extra-nav">
							<div class="extra-cell d-flex align-items-center">
								<ul class="nav-link-list">
									<li><a href="javascript:void(0);" class="btn-login text-primary"
											data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a></li>
									<li><a href="javascript:void(0);" class="btn-login" data-bs-toggle="modal"
											data-bs-target="#modalLogin">Sign Up</a></li>
								</ul>
								<a class="btn btn-primary btnhover1" href="javascript:void(0);" data-bs-toggle="modal"
									data-bs-target="#modalDonate">
									<span>Donate Now</span>
									<i class="flaticon-heart text-secondary ms-3"></i>
								</a>
								<a href="javascript:void(0);" class="menu-btn">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<rect x="22" y="11" width="4" height="4" rx="2" fill="#003B4A" />
										<rect x="11" width="4" height="4" rx="2" fill="#003B4A" />
										<rect x="22" width="4" height="4" rx="2" fill="#003B4A" />
										<rect x="11" y="11" width="4" height="4" rx="2" fill="#003B4A" />
										<rect x="11" y="22" width="4" height="4" rx="2" fill="#003B4A" />
										<rect width="4" height="4" rx="2" fill="#003B4A" />
										<rect y="11" width="4" height="4" rx="2" fill="#003B4A" />
										<rect x="22" y="22" width="4" height="4" rx="2" fill="#003B4A" />
										<rect y="22" width="4" height="4" rx="2" fill="#003B4A" />
									</svg>
								</a>
							</div>
						</div>

						<!-- Header Nav -->
						<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
							<!-- <div class="logo-header logo-dark">
							<a href="{{route('home')}}"><img src="{{asset('images/tamil_final_logo.jpg')}}" alt=""></a>
						</div> -->
							<ul class="nav navbar-nav navbar navbar-left">
								<li class=""><a href="{{route('home')}}">Home</a>

									<!-- <ul class="sub-menu">
									<li><a href="index.html">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
									<li><a href="index-3.html">Home 3</a></li>
								</ul> -->
								</li>
								<li class="sub-menu-down"><a href="javascript:void(0);">TSAP</a>
									<ul class="sub-menu">
										<li><a href="{{route('about_us')}}">About Us</a></li>
										<li><a href="{{route('become_volunteer')}}">Become A Volunteer</a></li>
										<!-- <li><a href="javascript:void(0);">Volunteer <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="{{route('volunteer')}}">Volunteer</a></li>
											<li><a href="{{route('become_volunteer')}}">Become A Volunteer</a></li>
											
											
										</ul>
									</li> -->
										<li><a href="{{route('commercial')}}">Commercial</a></li>
										<li><a href="{{route('gallery')}}">Gallery</a></li>
										<li><a href="{{route('blog')}}">Blog</a></li>
										<!--<li><a href="{{route('faq')}}">Faq</a></li>-->
										<li><a href="{{route('coming_soon')}}">Coming Soon</a></li>
									</ul>


									<!-- <li class="sub-menu-down"><a href="javascript:void(0);">Projects<i class="fa fa-angle-right"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('project')}}">Project</a> </li>
									<li><a href="{{route('project_categories')}}">Project Categories</a></li>
									<li><a href="{{route('project_sidebar')}}">Project Sidebar</a></li>
									<li><a href="{{route('project_story')}}">Project Story</a></li>
									<li><a href="javascript:void(0);">Blog <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
										<li><a href="{{route('blog')}}">Blog</a></li>
									<li><a href="{{route('blog_grid')}}">Blog Grid</a></li>
									<li><a href="{{route('blog_list')}}">Blog List</a></li>
									<li><a href="{{route('blog_details')}}">Blog Details</a></li>
										</ul>
									</li>
								</ul>

								
							</li> -->
									<!-- <li class="sub-menu-down"><a href="javascript:void(0);">Others<i class="fa fa-angle-right"></i></a> 
								<ul class="sub-menu">
								<li><a href="{{route('certificates')}}">Certificates</a></li>
									<li><a href="{{route('ask_qn')}}">Ask A Question</a></li>
									<li><a href="{{route('happy_clients')}}">Happy Clients</a></li>
									<li><a href="{{route('how_work')}}">How It Works</a></li>
									<li><a href="{{route('mission')}}">Mission</a></li>
									<li><a href="{{route('terms_condition')}}">Terms And Condition</a></li>
									<li><a href="{{route('coming_soon')}}">Coming Soon</a></li>
									<li><a href="{{route('maintenance')}}">Under Maintenance</a></li>
									<li><a href="{{route('error')}}">Error 404</a></li>
								</ul>
							</li> 
							
									
								</ul>
							</li> -->
									<!-- <li class="sub-menu-down"><a href="javascript:void(0);">Fundraiser</a>
								<ul class="sub-menu">
									<li><a href="{{route('browse_fundraiser')}}">Browse Fundraiser</a></li>
									<li><a href="{{route('become_fundraiser')}}">Become A Fundraiser</a></li>
									<li><a href="{{route('fundraiser_detail')}}">Fundraiser Detail</a></li>
								</ul>
							</li> -->
								<li><a href="{{route('tamilnadu')}}">Welcome<br> Tamilnadu</a></li>
								<li class="sub-menu-down"><a href="javascript:void(0);">Membership</a>
									<ul class="sub-menu">
										<li><a href="{{route('become_member')}}">Get A Membership</a></li>
										<li><a href="{{route('offers')}}">Offers</a></li>

									</ul>
								</li>
								<li class="sub-menu-down"><a href="javascript:void(0);">News</a>
									<ul class="sub-menu">
										<li><a href="{{route('notice_board')}}">Notice Board</a></li>
										<li><a href="{{route('annual_report')}}">Annual Report</a></li>

									</ul>
								</li>



								<li><a href="{{route('contact')}}">Contact Us</a></li>
							</ul>
							<div class="header-bottom">
								<a href="javascript:void(0);" class="btn btn-light btn-login btn-sm"
									data-bs-toggle="modal" data-bs-target="#modalLogin">
									<i class="flaticon-logout me-3"></i>Login / Sign Up
								</a>
								<div class="dz-social-icon">
									<ul>
										<li><a class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
										<li><a class="fab fa-twitter" href="https://twitter.com/"></a></li>
										<li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
										<li><a class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Header End -->
		</header>
		<!-- Header End -->
		<!-- Contact Sidebar -->
		<div class="contact-sidebar">
			<div class="contact-box">
				<div class="logo-contact logo-dark">
					<a href="{{route('home')}}l"><img src="{{asset('images/tamil_final_logo.jpg')}}" alt=""></a>
				</div>
				<div class="m-b50 contact-text">
					<div class="dz-title">
						<h4>About us</h4>
						<div class="dz-separator style-1 text-primary mb-0"></div>
					</div>
					<p>Tamil Sangam Association of Poland is the first ever Tamil Association started in Poland in 2008
						by a community of people from the Tamilnadu,India. It is a non-profit association in promoting
						Culture, Art, Literature and Tamil language in Poland.</p>
					<a href="{{route('about_us')}}" class="btn btn-primary btn-sm">READ MORE</a>
				</div>
				<div class="dz-title">
					<h4>Contact Info</h4>
					<div class="dz-separator style-1 text-primary mb-0"></div>
				</div>
				<div class="icon-bx-wraper left">
					<div class="icon-md m-r20">
						<span class="icon-cell"><i class="las la-phone-volume"></i></span>
					</div>
					<div class="icon-content">
						<h5 class="tilte">Call Now</h5>
						<p class="m-b0"> +48 577 410 288</p>
					</div>
				</div>
				<div class="icon-bx-wraper left">
					<div class="icon-md m-r20">
						<span class="icon-cell"><i class="las la-envelope-open"></i></span>
					</div>
					<div class="icon-content">
						<h5 class="tilte">Email Now</h5>
						<p class="m-b0">info@tamilsangam.pl</p>
					</div>
				</div>
				<div class="icon-bx-wraper left">
					<div class="icon-md m-r20">
						<span class="icon-cell"><i class="las la-map-marker"></i></span>
					</div>
					<div class="icon-content">
						<h5 class="tilte">Location</h5>
						<p class="m-b0">STOWARZYSZENIE TAMIL SANGAM W POLSCE<br>UL. Sielska 136/1, 05-510 Chylice Polska
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-close"></div>

		<div class="page-content bg-white">



			<div class="">
				@yield('content')
			</div>



			<!-- Footer -->
			<footer class="site-footer style-2" id="footer">
				<div class="footer-top footer-feature background-luminosity"
					style="background-image: url({{asset('images/main-slider/slider1/slide_bg4.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
								<div class="widget widget_about">
									<div class="footer-logo logo-white">
										<a href="{{route('home')}}"><img src="{{asset('images/tamil_logo3.png')}}"
												alt=""></a>
									</div>
									<p>TSAP is the first ever Tamil Association started in Poland, dedicated to
										preserving and promoting Tamil culture and language, and providing essential
										support to Tamil people in Poland and those coming from Tamil Nadu.</p>
									<div class="dz-social-icon style-3">
										<ul>
											<li><a target="_blank" class="fab fa-facebook-f"
													href="https://www.facebook.com/polandtamilsangam/"></a></li>
											<li><a target="_blank" class="fab fa-instagram"
													href="https://www.instagram.com/tamilsangam.pl/"></a></li>
											<!-- <li><a target="_blank" class="fab fa-twitter" href="https://twitter.com/"></a></li> -->
											<li><a target="_blank" class="fab fa-youtube"
													href="https://www.youtube.com/@polandtamilsangam8133/"></a></li>

										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
								<div class="widget widget_services">
									<h4 class="widget-title">Resources</h4>
									<div class="separator-2 bg-secondary m-b30"></div>
									<ul>
										<li><a href="{{route('home')}}">Home</a></li>
										<li><a href="{{route('about_us')}}">About Us</a></li>
										<li><a href="{{route('tamilnadu')}}">Tamilnadu</a></li>
										<li><a href="{{route('become_member')}}">Members</a></li>
										<li><a href="{{route('volunteer')}}">Volunteer</a></li>
										<li><a href="{{route('commercial')}}">Commercial</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
								<div class="widget recent-posts-entry">
									<h4 class="widget-title">Blog Posts</h4>
									<div class="separator-2 bg-secondary m-b30"></div>
									<div class="widget-post-bx">
										<div class="widget-post clearfix">
											<div class="dz-info">
												<h6 class="title"><a href="{{route('blog_details')}}">Simple Condition
														for all Around.</a></h6>
												<span class="post-date"> JUNE 18, 2024</span>
											</div>
										</div>
										<div class="post-separator"></div>
										<div class="widget-post clearfix">
											<div class="dz-info">
												<h6 class="title"><a href="{{route('blog_details')}}">Simple Condition
														for all Around.</a></h6>
												<span class="post-date"> AUGUST 22, 2024</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">
								<div class="widget widget_locations">
									<h4 class="widget-title">Locations</h4>
									<div class="separator-2 bg-secondary m-b30"></div>
									<div class="clearfix">
										<h6 class="title">STOWARZYSZENIE TAMIL SANGAM W POLSCE</h6>
										<p>UL. Sielska 136/1, 05-510 Chylice Polska</p>
										<div class="footer-logo2 logo-white">
											<a href="{{route('home')}}"><img src="{{asset('images/footer_logo.png')}}"
													alt=""></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<svg class="shape1" width="194" height="418" viewBox="0 0 194 418" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M172 183.598C107.617 168.098 16.5071 110.075 -21 83V371.381C125.65 399.399 168.771 257.867 172 183.598Z"
							fill="var(--primary)" />
						<path
							d="M-30 2C45.2503 142.152 272.249 -9.14019 160.733 180.171C94.4237 292.74 123.481 394.872 -20.3143 415"
							stroke="var(--secondary)" stroke-width="6" />
					</svg>
					<svg class="shape4" viewBox="0 0 482 279" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M4 3C53.9035 88.8689 116.283 185.582 247.28 195.034C333.831 201.279 435.198 155.222 489 277"
							stroke="var(--secondary)" stroke-width="8" />
						<path
							d="M343.949 87.7759C238.291 82.6 232.707 40.9079 204 3H483V202C463.517 120.839 430.681 92.0248 343.949 87.7759Z"
							fill="var(--primary)" />
					</svg>
				</div>
				<!-- Footer Bottom Part -->
				<div class="footer-bottom text-center">
					<div class="container">
						<span class="copyright-text">TSAP - Tamil Sangam Association of Poland - © 2024 <a
								href="https://dexignzone.com/" target="_blank"></a></span>
					</div>
				</div>
			</footer>
			<!-- Footer End -->

			<!-- read more -->
			<div class="modal fade modal-wrapper" id="read" tabindex="-1" role="dialog" aria-labelledby="read"
				aria-hidden="true">
				<div class="modal-dialog1" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
								has been the industry's standard dummy text ever since the 1500s, when an unknown
								printer took a galley of type and scrambled it to make a type specimen book. It has
								survived not only five centuries, but also the leap into electronic typesetting,
								remaining essentially unchanged. It was popularised in the 1960s with the release of
								Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
								publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Choose a donation amount -->
			<div class="modal fade modal-wrapper" id="modalDonate" tabindex="-1" role="dialog"
				aria-labelledby="modalDonate" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Choose a donation amount</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
									class="flaticon-close"></i></button>
						</div>
						<div class="modal-body">
							<!--<form action="">-->
							<div class="row">
								<div class="col-lg-12">
									<div class="tag-donate style-1">
										<div class="donate-categories">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault"
													id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">
													zł 50
												</label>
											</div>
										</div>
										<div class="donate-categories">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault"
													id="flexRadioDefault2" checked>
												<label class="form-check-label" for="flexRadioDefault2">
													zł 100
												</label>
											</div>
										</div>
										<div class="donate-categories">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault"
													id="flexRadioDefault3" checked>
												<label class="form-check-label" for="flexRadioDefault3">
													zł 500
												</label>
											</div>
										</div>
										<div class="donate-categories">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault"
													id="flexRadioDefault4" checked>
												<label class="form-check-label" for="flexRadioDefault4">
													zł 1000
												</label>
											</div>
										</div>
										<p>Most Donors donate approx <span>zł 500</span> to this Fundraiser</p>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Other Amount</label>
										<div class="input-group">
											<input type="" class="form-control" placeholder="Other Amount">
										</div>
									</div>
								</div>

								<style>
									/* Hide the increment buttons for Firefox */
									input[type=number] {
										-moz-appearance: textfield;
									}

									/* Hide the increment buttons for Chrome, Safari, Edge, and Opera */
									input[type=number]::-webkit-outer-spin-button,
									input[type=number]::-webkit-inner-spin-button {
										-webkit-appearance: none;
										margin: 0;
									}

									/* For Internet Explorer 10+ */
									input[type=number] {
										-ms-appearance: textfield;
									}
								</style>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Name & Surname</label>
										<div class="input-group">
											<input name="dzName" required="" type="text" class="form-control"
												placeholder="Jakob Bothman">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Email address</label>
										<div class="input-group">
											<input name="dzEmail" required type="text" class="form-control"
												placeholder="info@mail.com">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Phone Number</label>
										<div class="input-group">
											<input type="number" class="form-control" placeholder="Phone Number">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Address</label>
										<div class="input-group">
											<input required type="text" class="form-control" placeholder="Address">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Select ID Type</label>
										<div class="input-group">
											<select id="idTypeSelect" class="option" onchange="updatePlaceholder()">
												<option value="PESEL">PESEL</option>
												<option value="NIP">NIP</option>
											</select>
											<input type="text" id="idInput" class="form-control"
												placeholder="Enter PESEL" />
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mb-0 text-center">
										<!--<button name="submit" type="submit" value="Submit" class="btn btn-primary btn-block">Proceed To Pay</button>-->
										<button class="btn btn-primary btn-block">Proceed To Pay</button>
									</div>
								</div>
							</div>
							<!--</form>-->
						</div>
					</div>
				</div>
			</div>




			<!-- package selection -->
<div class="membership">
<div class="modal fade " id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select your packages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="buttonOptions">
	  		<a class="btn  btnhover1" onclick="showForm('1')" href="javascript:void(0);" >
            	<span>Individual</span></a>
			<a class="btn btnhover1" onclick="showForm('2')" href="javascript:void(0);" >
                <span>Student</span></a>
			<a class="btn  btnhover1" onclick="showForm('3')" href="javascript:void(0);" >
                <span>Family</span></a>
			
		</div>
		 <div class="packageforms">
		 <form id="1" class="form" style="display: block;">
			<div class="formhead">
				<h2>Individual Package</h2>
			</div>
			<div class="forminput">
			<label class="form-label">Name</label>
				<input type="text" name='name' placeholder="Ron Weasley">
			</div>
			<div class="forminput">
			<label class="form-label">Email</label>
				<input type="email" placeholder="ron@gmail.com">
			</div>
			<div class="forminput">
			<label class="form-label">Address</label>
				<input type="text" placeholder="Address">
			</div>
			<div class="forminput">
			<label class="form-label">Select package</label>
			<select id="formSelector">
				<option>Yearly package</option>
				<option >Monthly package</option>
				<option selected >--select--</option>
			</select>
			</div>
			
		</form>

		<form id="2" class="form" style="display: none;">
		<div class="formhead">
				<h2>Student Package</h2>
			</div>
			<div class="forminput">
			<label class="form-label">Name</label>
				<input type="text" placeholder="Ron Weasley">
			</div>
			<div class="forminput">
			<label class="form-label">Name</label>
				<input type="email" placeholder="ron@gmail.com">
			</div>
			<div class="forminput">
			<label class="form-label">Student Id</label>
				<input type="text" placeholder="PU89239">
			</div>
			
			<div class="forminput">
			<label class="form-label">Address</label>
				<input type="text" placeholder="Warsaw">
			</div>
			<div class="forminput">
			<label class="form-label">Select package</label>
			<select id="formSelector">
				<option>Yearly package</option>
				<option >Monthly package</option>
				<option selected >--select--</option>
				
			</select>
			</div>
		
		</form>

		<form id="3" class="form" style="display: none;">
		<div class="formhead">
				<h2>Family Package</h2>
			</div>
		<div class="forminput">
		<label class="form-label">Name</label>
				<input type="text" placeholder="Ron Weasley">
			</div>
			<div class="forminput">
			<label class="form-label">Email</label>
				<input type="email" placeholder="ron@gmail.com">
			</div>
			<div class="forminput">
			<label class="form-label">Spouse Name</label>
				<input type="text" placeholder="Hermione Granger">
			</div>
			<div class="forminput">
			<label class="form-label">No.of Children</label>
				<input type="text" placeholder="1 (max-2)">
			</div>
			<div class="forminput">
			<label class="form-label">Address</label>
				<input type="text" placeholder="Warsaw">
			</div>
			<div class="forminput">
			<label class="form-label">Select package</label>
			<select id="formSelector">
				<option>Yearly package</option>
				<option >Monthly package</option>
				<option selected >--select--</option>
				
			</select>
			</div>
		
		</form>
		 </div>

		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
       
      </div>
	  <script>
		function showForm(formId) {
	// Hide all forms
	var forms = document.querySelectorAll('.form');
	forms.forEach(function(form) {
		form.style.display = 'none';
	});

	// Show the selected form
	var selectedForm = document.getElementById(formId);
	if (selectedForm) {
		selectedForm.style.display = 'block';
	}
	}

	// Display the first form by default
	document.addEventListener('DOMContentLoaded', function() {
	showForm('1');
	});
	  </script>
    </div>
  </div>
</div>
</div>
			
			<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Choose your package</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div class="packageformdiv">

								<div class="packages">
								<button type="button" onclick="showForm('individual')" class="btn btn-primary">individual</button>
								<button type="button" onclick="showForm('student')" class="btn btn-primary">Student</button>
								<button type="button" onclick="showForm('family')" class="btn btn-primary">family</button>
								</div>
								<div class="packageform" id="individual" style="display: block;">
									<form>
										<div class="row sp15">
											<div class="col-md-12">
												<label class="form-label">Full Name</label>
												<div class="input-group">
													<input name="text" required type="text" class="form-control"
														placeholder="Marchelo Queque" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Email</label>
												<div class="input-group">
													<input name="email" required type="text" class="form-control"
														placeholder="marchelo@gmail.com" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Address</label>
												<div class="input-group">
													<input name="address" required type="text" class="form-control"
														placeholder="Warsaw" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Packages</label>
												<div class="input-group">
													<select required class="form-control" aria-label="Package">
														<option value="" disabled selected>Choose your package</option>
														<option value="monthly">Monthly Package</option>
														<option value="yearly">Yearly Package</option>
													</select>
												</div>
											</div>
											<button type="">Coming Soon</button>
										</div>
									</form>
								</div>
								<div class="packageform " id="student" style="display: none;">
									<form>
										<div class="row sp15">
											<div class="col-md-12">
												<label class="form-label">Full Name</label>
												<div class="input-group">
													<input name="text" required type="text" class="form-control"
														placeholder="Marchelo Queque" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Full Name</label>
												<div class="input-group">
													<input name="email" required type="text" class="form-control"
														placeholder="marchelo@gmail.com" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Student Id</label>
												<div class="input-group">
													<input name="text" required type="text" class="form-control"
														placeholder="PSH243971" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Institute name</label>
												<div class="input-group">
													<input name="text" required type="text" class="form-control"
														placeholder="University of Poland" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Address</label>
												<div class="input-group">
													<input name="address" required type="text" class="form-control"
														placeholder="Warsaw" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Packages</label>
												<div class="input-group">
													<select required class="form-control" aria-label="Package">
														<option value="" disabled selected>Choose your package</option>
														<option value="monthly">Monthly Package</option>
														<option value="yearly">Yearly Package</option>
													</select>
												</div>
											</div>

											<button type="">Coming Soon</button>
										</div>
									</form>
								</div>
								<div class="packageform " id="family" style="display: none;">
									<form>
										<div class="row sp15">
											<div class="col-md-12">
												<label class="form-label">Full Name</label>
												<div class="input-group">
													<input name="text" required type="text" class="form-control"
														placeholder="Marchelo Queque" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Email</label>
												<div class="input-group">
													<input name="email" required type="text" class="form-control"
														placeholder="marchelo@gmail.com" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Spouse Name</label>
												<div class="input-group">
													<input name="text" required type="text" class="form-control"
														placeholder="Hermione Granger" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Childern</label>
												<div class="input-group">
													<input name="text" required type="text" class="form-control"
														placeholder="2 (max)" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Address</label>
												<div class="input-group">
													<input name="address" required type="text" class="form-control"
														placeholder="Warsaw" />
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Packages</label>
												<div class="input-group">
													<select required class="form-control" aria-label="Package">
														<option value="" disabled selected>Choose your package</option>
														<option value="monthly">Monthly Package</option>
														<option value="yearly">Yearly Package</option>
													</select>
												</div>
											</div>

											<button type="">Coming Soon</button>
										</div>
									</form>
								</div>


								<script>
									function showForm(formId) {
										// Hide all forms
										var forms = document.querySelectorAll('.packageform');
										forms.forEach(function(form) {
											form.style.display = 'none';
										});

										// Show the selected form
										var selectedForm = document.getElementById(formId);
										if (selectedForm) {
											selectedForm.style.display = 'block';
										}
										}

										// Display the first form by default
										document.addEventListener('DOMContentLoaded', function() {
										showForm('individual');
										});
								</script>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>
			</div> -->



			<!-- Authentication Modal -->
			<div class="modal fade modal-wrapper auth-modal" id="modalLogin" tabindex="-1" role="dialog"
				aria-labelledby="modalLogin" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!-- Login Your Account -->
					<div class="modal-content">
						<h2 class="title">Login Your Account</h2>
						<form action="index.html">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password">
								<div class="reset-password">
									<a class="btn-link collapsed" data-bs-toggle="collapse" href="#reset-password"
										role="button" aria-expanded="false" aria-controls="reset-password">Reset
										password?</a>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-outline-primary btn-block">Login</button>
							</div>
							<div class="form-group">
								<a href="javascript:void(0);" class="btn btn-sm facebook btn-block"><i
										class="fa-brands fa-facebook-f m-r10"></i>Log in with
									Facebook</a>
							</div>
							<div class="form-group">
								<a href="javascript:void(0);" class="btn btn-sm google-plus btn-block"><i
										class="fa-brands fa-google m-r10"></i>Log in with Google</a>
							</div>
							<div class="sign-text">
								<span>Don't have a Crowdfunding account? <a class="btn-link collapsed"
										data-bs-toggle="collapse" href="#sign-up" role="button" aria-expanded="false"
										aria-controls="sign-up">Sign up</a></span>
							</div>
						</form>
					</div>

					<!-- Reset Password -->
					<div class="modal-content collapse reset-password" id="reset-password">
						<h2 class="title">Reset password?</h2>
						<form>
							<div class="form-group password-icon-bx">
								<i class="fa fa-lock"></i>
								<p>Enter your email address associated with your account, and we'll
									email you a link to reset your password...</p>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Enter email address">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-outline-primary btn-block">Send reset
									link</button>
							</div>
							<a data-bs-toggle="collapse" href="#reset-password" class="sign-text" role="button"
								aria-expanded="false" aria-controls="reset-password">Back</a>
						</form>
					</div>

					<!-- Sign Up Your Account -->
					<div class="modal-content collapse sign-up" id="sign-up">
						<h2 class="title">Sign Up Your Account</h2>
						<form action="index.html">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-outline-primary btn-block">Sign Up</button>
							</div>
							<div class="form-group">
								<a href="javascript:void(0);" class="btn btn-sm facebook btn-block"><i
										class="fa-brands fa-facebook-f m-r10"></i>Log in with
									Facebook</a>
							</div>
							<div class="form-group">
								<a href="javascript:void(0);" class="btn btn-sm google-plus btn-block"><i
										class="fa-brands fa-google m-r10"></i>Log in with Google</a>
							</div>
							<div class="sign-text">
								<span>Don't have a Crowdfunding account? <a class="btn-link collapsed"
										data-bs-toggle="collapse" href="#sign-up" role="button" aria-expanded="false"
										aria-controls="sign-up">Login</a></span>
							</div>
						</form>
					</div>
				</div>
			</div>

			<button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
		</div>
		<!-- JAVASCRIPT FILES ========================================= -->
		<script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
		<script src="{{asset('vendor/wow/wow.js')}}"></script><!-- WOW JS -->
		<script src="{{asset('vendor/wow/wow.js')}}"></script><!-- WOW JS -->
		<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- BOOTSTRAP.MIN JS -->
		<script src="{{asset('vendor/magnific-popup/magnific-popup.js')}}"></script>
		<!-- MAGNIFIC POPUP JS -->
		<script src="{{asset('vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
		<script src="{{asset('vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
		<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script><!-- OWL-CAROUSEL -->
		<script src="{{asset('js/dz.carousel.js')}}"></script><!-- OWL-CAROUSEL -->
		<script src="{{asset('js/dz.ajax.js')}}"></script><!-- AJAX -->
		<script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM JS -->
		<script src="{{asset('js/dznav-init.js')}}"></script><!-- DZNAV INIT -->
		<script src="{{asset('js/main.js')}}"></script>

		<script src="{{asset('vendor/rangeslider/rangeslider.js')}}"></script><!-- RANGESLIDER -->

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!--<script>
							document.addEventListener('DOMContentLoaded', function () {
								const packageOptions = document.querySelectorAll('.package-option');
								const formContainers = document.querySelectorAll('.form-container');

								packageOptions.forEach(option => {
									option.addEventListener('click', function () {
										packageOptions.forEach(opt => opt.classList.remove('active'));
										this.classList.add('active');
										const target = this.getAttribute('data-target');
										formContainers.forEach(form => form.classList.remove('active'));
										document.getElementById(target).classList.add('active');
									});
								});
							}); -->
		<!-- // 	document.addEventListener('show.bs.modal', function () {
						// 	const packageOptions = document.querySelectorAll('.package-option');
						// 	const formContainers = document.querySelectorAll('.form-container');

						// 	packageOptions.forEach(option => {
						// 		option.addEventListener('click', function () {
						// 			packageOptions.forEach(opt => opt.classList.remove('active'));
						// 			this.classList.add('active');
						// 			const target = this.getAttribute('data-target');
						// 			formContainers.forEach(form => form.classList.remove('active'));
						// 			const targetForm = document.getElementById(target);
						// 			if (targetForm) {
						// 				targetForm.classList.add('active');
						// 			} else {
						// 				console.error(`Element with ID ${target} not found.`);
						// 			}
						// 		});
						// 	});
						// });
						</script> -->
</body>

</html>