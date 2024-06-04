@extends('layout')
@section('content')
	


	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('images/banner/bnr1.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Ask A Question</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Ask A Question</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Ask A Question -->
		<section class="content-inner-1 gradient-white" style="background-image:url('images/background/bg10.jpg'); background-position: center;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-md-9 col-sm-12">
						<div class="form-wrapper style-2">
							<h2 class="title">Write us a message</h2>
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
										<div class="col-md-12">
											<label class="form-label">Email address</label>
											<div class="input-group">
												<input name="dzEmail" required type="text" class="form-control" placeholder="marseloque@mail.com">
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label">Phone Number</label>
											<div class="input-group">
												<input name="dzPhoneNumber" required type="text" class="form-control" placeholder="832141251">
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label">Message</label>
											<div class="input-group">
												<textarea name="dzMessage" rows="5" required class="form-control" placeholder="Dear Sir/Madam"></textarea>
											</div>
										</div>
										<div class="col-md-12 m-b20">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">
													Accept terms & conditions
												</label>
											</div>
										</div>
										<div class="col-md-12">
											<button name="submit" type="submit" value="Submit" class="btn btn-secondary effect">SEND</button>
										</div>
									</div>
								</form>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Ask A Question -->
		
	</div>
		

@endsection