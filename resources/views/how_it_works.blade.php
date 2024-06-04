@extends('layout')
@section('content')

	
	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('images/banner/bnr3.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>How It Works</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">How It Works</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Faq -->
		<section class="content-inner">
			<div class="container">
				<div class="row align-items-center flex-column-reverse flex-lg-row">
					<div class="col-lg-6 align-self-center">
						<div class="section-head m-b30">
							<h2 class="title">What Is Akcel ?</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne1">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
										Cras turpis felis, elementum sed mi at arcu ?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionFaq1">
									<div class="accordion-body">
										<p class="m-b0">Vestibulum nibh risus, lobortis in neque eleifend, varius vulputate sem. Donec maximus, sapien id auctor ornare, odio mi luctus massa, id rhoncus velit purus eu turpis onec aliquet mauris est.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo1">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
										Vestibulum nibh risus, in neque eleifendulputate ?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionFaq1">
									<div class="accordion-body">
										<p class="m-b0">Vestibulum nibh risus, lobortis in neque eleifend, varius vulputate sem. Donec maximus, sapien id auctor ornare, odio mi luctus massa, id rhoncus velit purus eu turpis onec aliquet mauris est.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree1">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
										Donec maximus, sapien id auctor ornare ?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionFaq1">
									<div class="accordion-body">
										<p class="m-b0">Vestibulum nibh risus, lobortis in neque eleifend, varius vulputate sem. Donec maximus, sapien id auctor ornare, odio mi luctus massa, id rhoncus velit purus eu turpis onec aliquet mauris est.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 order-lg-2 order-1 m-b30">
						<div class="dz-media split-box rounded">
							<img src="images/project/pic3.jpg" alt="FAQ Image">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Our Mission -->
		<section class="content-inner-2 section-wrapper6 bg-light section-pattren1">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-lg-5 about-bx3">
						<div class="dz-media">
							<img src="images/main-slider/pic2.png" alt="image">
						</div>
					</div>
					<div class="col-lg-7">
						<div class="form-wrapper style-2">
							<h2 class="title">We know you are in urgent need of funds.</h2>
							<div class="contact-area">
								<form class="dz-form dzForm contact-bx" method="POST" action="script/contact_smtp.php">
									<div class="dzFormMsg"></div>
									<input type="hidden" class="form-control" name="dzToDo" value="Contact">
									<input type="hidden" class="form-control" name="reCaptchaEnable" value="0">
									
									<div class="row sp15">
										<div class="col-md-12">
											<label class="form-label">Full Name</label>
											<div class="input-group">
												<input name="dzName" required type="text" class="form-control" placeholder="Marchelo Queque">
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label">Email address</label>
											<div class="input-group">
												<input name="dzEmail" required type="text" class="form-control" placeholder="example@gmail.com">
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label">Phone Number</label>
											<div class="input-group">
												<input name="dzPhoneNumber" required type="text" class="form-control" placeholder="832141251">
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label">Company Name</label>
											<div class="input-group">
												<input name="dzOther[company_Name]" required type="text" class="form-control" placeholder="Marchelo Studios">
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label">Message</label>
											<div class="input-group">
												<textarea name="dzMessage" rows="5" required class="form-control" placeholder="Dear Sir/Madam"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button name="submit" type="submit" value="Submit" class="btn btn-secondary effect ">SEND</button>
										</div>
									</div>
								</form>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<svg class="shape-1 move-1" viewBox="0 0 81 63" xmlns="http://www.w3.org/2000/svg" width="81" height="63" fill="var(--primary)" xmlns:v="https://vecta.io/nano"><circle cx="16.695" cy="3.497" r="3.497"></circle><circle cx="12.296" cy="21.975" r="3.497"></circle><circle cx="7.896" cy="40.453" r="3.497"></circle><circle cx="3.497" cy="58.931" r="3.497"></circle><circle cx="36.933" cy="3.497" r="3.497"></circle><circle cx="32.534" cy="21.975" r="3.497"></circle><circle cx="28.134" cy="40.453" r="3.497"></circle><circle cx="23.735" cy="58.931" r="3.497"></circle><circle cx="57.171" cy="3.497" r="3.497"></circle><circle cx="52.772" cy="21.975" r="3.497"></circle><circle cx="48.372" cy="40.453" r="3.497"></circle><circle cx="43.973" cy="58.931" r="3.497"></circle><circle cx="77.409" cy="3.497" r="3.497"></circle><circle cx="73.01" cy="21.975" r="3.497"></circle><circle cx="68.61" cy="40.453" r="3.497"></circle><circle cx="64.211" cy="58.931" r="3.497"></circle></svg>
			<svg class="shape-2 move-2" viewBox="0 0 81 63" xmlns="http://www.w3.org/2000/svg" width="81" height="63"  fill="var(--secondary)" xmlns:v="https://vecta.io/nano"><circle cx="11.261" cy="2.559" r="2.559"></circle><ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303"></ellipse><circle cx="5.375" cy="27.897" r="2.303"></circle><circle cx="2.559" cy="40.438" r="2.559"></circle><ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559"></ellipse><ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303"></ellipse><ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303"></ellipse><ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559"></ellipse><ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559"></ellipse><circle cx="36.599" cy="15.1" r="2.303"></circle><ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303"></ellipse><circle cx="30.713" cy="40.438" r="2.559"></circle><circle cx="54.259" cy="2.559" r="2.559"></circle><circle cx="50.42" cy="15.1" r="2.303"></circle><circle cx="47.349" cy="27.897" r="2.303"></circle><circle cx="44.533" cy="40.438" r="2.559"></circle></svg>
			<svg class="shape-3 move-1" xmlns="http://www.w3.org/2000/svg" width="81" height="48" viewBox="0 0 81 48" fill="none">
				<path d="M2 19L15.744 6.73604C18.6614 4.1328 23.1457 4.42415 25.7017 7.383L30.3669 12.7835C33.1839 16.0444 38.2501 16.0101 41.0227 12.7114L44.878 8.12464C47.6031 4.88238 52.5608 4.78406 55.4124 7.91574L59.9639 12.9144C62.8687 16.1045 67.9399 15.9329 70.6223 12.5537L79 2" stroke="var(--primary)" stroke-width="5"></path>
				<path d="M2 46L15.744 33.736C18.6614 31.1328 23.1457 31.4241 25.7017 34.383L30.3669 39.7835C33.1839 43.0444 38.2501 43.0101 41.0227 39.7114L44.878 35.1246C47.6031 31.8824 52.5608 31.7841 55.4124 34.9157L59.9639 39.9144C62.8687 43.1045 67.9399 42.9329 70.6223 39.5537L79 29" stroke="var(--primary)" stroke-width="5"></path>
			</svg>
			<svg class="shape-4 rotating" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" xmlns:v="https://vecta.io/nano" width="95" height="95" fill="none">
				<mask id="A" maskUnits="userSpaceOnUse" x="0" y="0" width="95" height="95" mask-type="alpha">
				  <circle cx="47.5" cy="47.5" r="47" fill="#d9d9d9" stroke="#3b6ff5"></circle>
				</mask>
				<g mask="url(#A)">
				  <path d="M35.044-64.787L-48.721 55.222M85.098-11.882L1.332 108.127M43.387-55.969L-40.379 64.039M93.44-3.064L9.674 116.944M51.729-47.152L-32.037 72.857M101.782 5.753L18.017 125.762M60.071-38.334L-23.695 81.674m133.82-67.103L26.359 134.579M68.414-29.517L-15.352 90.492m133.819-67.104L34.701 143.397M76.755-20.699L-7.01 99.309M39.215-60.378L-44.55 59.631M89.269-7.473L5.503 112.535M47.558-51.56L-36.208 68.448M97.611 1.344L13.846 121.353M55.9-42.743L-27.866 77.266m133.819-67.104L22.187 130.17M64.242-33.925L-19.523 86.083m133.819-67.104L30.53 138.987M72.585-25.108L-11.181 94.9m133.819-67.104L38.872 147.805M80.927-16.291L-2.839 103.718" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round"></path>
				</g>
			</svg>
			<svg class="shape-5 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
			<svg class="shape-6 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
		</section>
		
		<!-- Categories Start -->
		<section class="content-inner-2">
			<div class="container">
				<div class="section-head text-center">
					<h5 class="sub-title">CATEGORIES</h5>
					<h2 class="title">Explore Our Crowdfunding <br> Featured Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="project-categories.html" class="icon-cell">
								<i class="flaticon-like-1"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte text-capitalize"><a href="project-categories.html">Giving Love</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="project-categories.html" class="icon-cell">
								<i class="flaticon-open-book"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><a href="project-categories.html">Education</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="project-categories.html" class="icon-cell">
								<i class="flaticon-raw-food"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><a href="project-categories.html">Healthy Food</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="project-categories.html" class="icon-cell">
								<i class="flaticon-doctor-bag"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><a href="project-categories.html">Medical</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Categories End -->
		
		<!-- Testimonials -->
		<section class="testimonial-wrapper1 content-inner-2">
			<div class="section-head text-center">
				<h2 class="title">Testimonials</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
			</div>
			<div class="swiper testimonial-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-1">
							<div class="testimonial-text">
								<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni..</p>
							</div>
							<div class="testimonial-details">
								<div class="testimonial-info">
									<div class="testimonial-pic">
										<img src="images/testimonials/pic1.jpg" alt="">
									</div>
									<div class="clearfix">
										<h5 class="testimonial-name">Johan Lee</h5>
										<span class="testimonial-position">Joe’s Parents</span>
									</div>
								</div>
								<div class="testimonial-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1">
							<div class="testimonial-text">
								<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni..</p>
							</div>
							<div class="testimonial-details">
								<div class="testimonial-info">
									<div class="testimonial-pic">
										<img src="images/testimonials/pic2.jpg" alt="">
									</div>
									<div class="clearfix">
										<h5 class="testimonial-name">Lee Jordon</h5>
										<span class="testimonial-position">Joe’s Parents</span>
									</div>
								</div>
								<div class="testimonial-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1">
							<div class="testimonial-text">
								<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni..</p>
							</div>
							<div class="testimonial-details">
								<div class="testimonial-info">
									<div class="testimonial-pic">
										<img src="images/testimonials/pic3.jpg" alt="">
									</div>
									<div class="clearfix">
										<h5 class="testimonial-name">Alex Costa</h5>
										<span class="testimonial-position">Joe’s Parents</span>
									</div>
								</div>
								<div class="testimonial-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-btn container swiper-btn-center-lr">
					<div class="test-swiper-prev btn-prev style-1"><i class="fa fa-arrow-left-long"></i></div>
					<div class="test-swiper-next btn-next style-1"><i class="fa fa-arrow-right-long"></i></div>
				</div>
			</div>
		</section>
		<!-- Testimonials End -->
		
		<!-- Call Action -->
		<div class="call-action style-1 content-inner-1">
			<div class="container">
				<div class="inner-action overlay-primary-dark" style="background-image:url('images/background/bg1.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="row inner-content justify-content-center">
						<div class="col-xl-6 col-lg-9">
							<div class="section-head text-center">
								<h2 class="title text-white">Don’t miss our weekly updates about donations</h2>
							</div>
							<form class="dzSubscribe" action="script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg text-white"></div>
								<div class="input-group">
									<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter your email address...">
									<div class="input-group-addon">
										<button name="submit" value="Submit" type="submit" class="btn btn-secondary btn-rounded-lg">
											<span>SUBSCRIBE</span>
											<i class="fa-solid fa-paper-plane"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call Action -->
		
	</div>
		
  @endsection