@extends('layout')
@section('content')


	
	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr style-1 text-center overlay-primary-dark" style="background-image:url('images/background/bg20.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Become A Member</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
							
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
                                @if (session('success'))
                                    <script>
                                        alert("{{ session('success') }}");
                                    </script>
                                @endif
								<form class="mform" method="POST" action="{{route('volunteerstore')}}">
                                @csrf
									
									<div class="row sp15">
										<div class="col-md-12">
											<label class="form-label">Full Name</label>
											<div class="input-group">
												<input name="name" required type="text" class="form-control" placeholder="Marchelo Queque">
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label">Email address</label>
											<div class="input-group">
												<input name="email" required type="text" class="form-control" placeholder="marseloque@mail.com">
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label">Phone Number</label>
											<div class="input-group">
												<input name="phone" required type="text" class="form-control" placeholder="987 654 3210">
											</div>
										</div>
                                        <div class="col-md-12">
											<label class="form-label">Address</label>
											<div class="input-group">
												<input name="address" required type="text" class="form-control" placeholder="38,cross street">
											</div>
										</div>
										
										<div class="col-md-12">
											<label class="form-label">City</label>
											<div class="input-group">
												<input name="city" required type="text" class="form-control" placeholder="Warsaw">
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label">Postalcode</label>
											<div class="input-group">
												<input name="postalcode" required type="text" class="form-control" placeholder="98904825">
											</div>
										</div>
                                        <div class="col-md-12">
											<label class="form-label">Membership Type:</label>
											<div class="input-group">
                                            <select id="membership_type" name="membership_type"  class="form-control"  required>
                                            <option value="">Select Membership type</option>
                                                <option value="Individual">Individual</option>
                                                <option value="Family">Family</option>
                                                <option value="Student">Student</option>
                                            </select>
											</div>
										</div>
                                        <div class="col-md-12">
											<label class="form-label">Preferred Payment Plan:</label>
											<div class="input-group">
                                            <select id="plan_type" name="payment_plan"   class="form-control" required>
                                               <option value="">Select Preferred Payment Plan</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                               
                                            </select>
											</div>
										</div>
                                        
                                        <div class="col-md-12 m-b20">
										<label class="form-label">Are you interested in any of the following? (check all that apply):</label>
											<div class="form-check">
											<input type="checkbox" id="cultural_events" name="interests[]" value="Cultural Events">
                                                <label for="cultural_events">Cultural Events</label><br>
                                                <input type="checkbox" id="educational_programs" name="interests[]" value="Educational Programs">
                                                <label for="educational_programs">Educational Programs</label><br>
                                                <input type="checkbox" id="networking_opportunities" name="interests[]" value="Networking Opportunities">
                                                <label for="networking_opportunities">Networking Opportunities</label><br>
                                                <input type="checkbox" id="volunteer_activities" name="interests[]" value="Volunteer Activities">
                                                <label for="volunteer_activities">Volunteer Activities</label><br>
                                                <input type="checkbox" id="health_wellness_programs" name="interests[]" value="Health and Wellness Programs">
                                                <label for="health_wellness_programs">Health and Wellness Programs</label>
											</div>
										</div>
                                        
                                        
										<div class="col-md-12">
											<label class="form-label">Any additional comments or questions:</label>
											<div class="input-group">
												<textarea name="comments" rows="5" required class="form-control" placeholder="Dear Sir/Madam"></textarea>
											</div>
										</div>
										<div class="col-md-12 m-b20">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">
													<a href="{{url('terms_condition')}}">Accept terms & conditions</a>
												</label>
											</div>
										</div>
										<div class="col-md-12">
											<!-- <button name="submit" type="submit" value="Submit" class="btn btn-secondary effect">SUBMIT
												 -->
                                                 <input type="submit" class="btn btn-secondary effect" name="" value="submit" >
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