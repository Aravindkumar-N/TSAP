@extends('layout')
@section('content')


	
	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr style-1 text-center overlay-primary-dark" style="background-image:url('images/banner/bnr1.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Become A Volunteer</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Become A Volunteer</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Volunteer -->
		<section class="gradient-white" style="background-image:url('images/background/bg1.jpg'); background-position: center;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-9 col-md-9 col-sm-12">
						<div class="form-wrapper style-3">
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
												<input name="dzEmail" required type="text" class="form-control" placeholder="marseloque@mail.com">
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label">Phone Number</label>
											<div class="input-group">
												<input name="dzPhoneNumber" required type="text" class="form-control" placeholder="987 654 3210">
											</div>
										</div>
										<div class="col-md-12 m-b20">
										<label class="form-label">Gender</label>
											<div class="form-check">
											<label for="male">
												<input type="radio" id="male" name="gender" value="male">
												Male
											</label>
											<label for="female">
												<input type="radio" id="female" name="gender" value="female">
												Female
											</label>
											<label for="other">
												<input type="radio" id="other" name="gender" value="other">
												Other
											</label>
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label">City</label>
											<div class="input-group">
												<input name="dzOther[company_Name]" required type="text" class="form-control" placeholder="Warsaw">
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label">Country</label>
											<div class="input-group">
												<input name="dzOther[company_Name]" required type="text" class="form-control" placeholder="Poland">
											</div>
										</div>
										<!-- <div class="col-md-12">
											<label class="form-label">Message</label>
											<div class="input-group">
												<textarea name="dzMessage" rows="5" required class="form-control" placeholder="Dear Sir/Madam"></textarea>
											</div>
										</div> -->
										<div class="col-md-12 m-b20">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">
													<a href="{{url('terms_condition')}}">Accept terms & conditions</a>
												</label>
											</div>
										</div>
										<div class="col-md-12">
											<button name="submit" type="submit" value="Submit" class="btn btn-secondary effect">RESGISTER
												
											</button>
										</div>
										
										
									</div>
								</form>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- volunteer -->

		<!-- Counter -->
		<div class="counter-wrapper-1 content-inner-3">
			<div class="container">
				<div class="counter-inner bg-secondary">
					<div class="mem-row">
						<div>
							<div class="mem-para">
							<p>Take a Step to Become a TSAP Member and Get Exclusive Benefits</p>
							</div>
							<div class="mem-btn">
								<button>Get Membership</button>
							</div>
						</div>
					</div>
					<img src="{{asset('images/counter/pattren1.png')}}" class="pattren1 move-2" alt="">
					<img src="{{asset('images/counter/pattren2.png')}}" class="pattren2 move-2" alt="">
					<img src="{{asset('images/counter/pattren3.png')}}" class="pattren3 move-2" alt="">
					<img src="{{asset('images/counter/pattren4.png')}}" class="pattren4 move-2" alt="">
					<img src="{{asset('images/counter/pattren5.png')}}" class="pattren5 move-2" alt="">
					<img src="{{asset('images/counter/pattren6.png')}}" class="pattren6 move-2" alt="">
				</div>
			</div>
		</div>
		<!-- Counter End -->
		
		<!-- Our Mission -->
		<!-- <section class="content-inner-2">
			<div class="container">
				<div class="row about-bx3 align-items-center">
					<div class="col-lg-5">
						<div class="dz-media">
							<img src="images/main-slider/pic1.png" alt="image">
						</div>
					</div>
					<div class="col-lg-7 m-b50">
						<div class="section-head">
							<h5 class="sub-title">Our Mission</h5>
							<h2>Change The World for Better Futures</h2>
							<p class="m-t20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-4 col-6 m-b30">
								<h2><span class="counter">4,556</span></h2>
								<span class="counter-text">Total Donor</span>
							</div>
							<div class="col-lg-3 col-sm-4 col-6 m-b30">
								<h2><span class="counter">874</span></h2>
								<span class="counter-text">Volunteer</span>
							</div>
							<div class="col-lg-4 col-sm-4 col-12 m-b30">
								<h2>zł <span class="counter">195,234</span></h2>
								<span class="counter-text">Total Donation</span>
							</div>
						</div>
						<a href="{{url('project_story')}}" class="m-r30 m-sm-r10 btn btn-secondary">See Projects <i class="flaticon-right-arrows ps-3"></i></a>
						<a href="{{url('how_work')}}" class="btn btn-outline-dark">How It Works</a>
					</div>
				</div>
			</div>
		</section> -->
		
		<!-- Counter -->
		<!-- <div class="counter-wrapper-1">
			<div class="container">
				<div class="counter-inner bg-secondary">
					<div class="row">
						<div class="col-lg-3 col-6 m-b30">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num">23,577</span>
								<p class="counter-text">Total Donor</p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num">978</span>
								<p class="counter-text">Donations</p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30">
							<div class="counter-style-1 text-center">
								<span class="counter-num counter">762</span>
								<p class="counter-text">Projects</p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num">852</span>
								<p class="counter-text">Volunteer</p>
							</div>
						</div>
					</div>
					<img src="images/counter/pattren1.png" class="pattren1 move-2" alt="">
					<img src="images/counter/pattren2.png" class="pattren2 move-2" alt="">
					<img src="images/counter/pattren3.png" class="pattren3 move-2" alt="">
					<img src="images/counter/pattren4.png" class="pattren4 move-2" alt="">
					<img src="images/counter/pattren5.png" class="pattren5 move-2" alt="">
					<img src="images/counter/pattren6.png" class="pattren6 move-2" alt="">
				</div>
			</div>
		</div> -->
		<!-- Counter End -->
		
		<!-- categories -->
		<!-- <section class="content-inner-2">
			<div class="container">
				<div class="section-head text-center">
					<h5 class="sub-title">CATEGORIES</h5>
					<h2 class="title">Explore Our Crowdfunding <br> Featured Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
								<i class="flaticon-like-1"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte text-capitalize"><a href="{{url('project_categories')}}">Giving Love</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
								<i class="flaticon-open-book"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Education</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="{{url('project_story')}}" class="icon-cell">
								<i class="flaticon-raw-food"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_story')}}">Healthy Food</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="icon-bx-wraper style-1 text-center m-b30">
							<div class="icon-lg m-b30"> <a href="{{url('project_story')}}" class="icon-cell">
								<i class="flaticon-doctor-bag"></i>
							</a> </div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_story')}}">Medical</a></h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- categories -->
		
		<!-- Call Action -->
			<div class="call-action style-1 content-inner-1">
				<div class="container">
					<div class="inner-action overlay-primary-dark" style="background-image:url('images/background/bg1.jpg'); background-size: cover; background-repeat: no-repeat;">
						<div class="row inner-content justify-content-center">
							<div class="col-xl-6 col-lg-9">
								<div class="section-head text-center">
									<h2 class="title text-white">Don’t miss our updates </h2>
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