@extends('layout')
@section('content')

	
	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('images/background/bg1.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Offers</h1>
					<!-- Breadcrumb Row -->
					
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		
		<!-- Banner End -->
		<div class="content-inner-2">
			<div class="container">
				<div class="row reverse-sidebar">
					<div class="col-xl-4 col-lg-4">
						<aside class="side-bar sticky-top right">
							<div class="widget style-1">
								<div class="widget-title">
									<h4 class="title">Search</h4>
								</div>
								<div class="search-bx">
									<form role="search" method="post">
										<div class="input-group">
											<input name="text" class="form-control" placeholder="Search Here..." type="text">
											<span class="input-group-btn">
												<button type="submit" class="btn btn-primary sharp radius-no"><i class="la la-search scale3"></i></button>
											</span> 
										</div>
									</form>
								</div>
							</div>
							<div class="widget style-1 widget_categories">
								<div class="widget-title">
									<h4 class="title">Category</h4>
								</div>
								<ul>
									<li class="cat-item"><a href="javascript:void(0);">Indian Products</a></li>                                         
									<li class="cat-item"><a href="javascript:void(0);">Resturants</a></li>                                         
									<li class="cat-item"><a href="javascript:void(0);">Cloths</a></li>                                         
									<li class="cat-item"><a href="javascript:void(0);">Medi-products</a></li>                                         
									 <li class="cat-item"><a href="javascript:void(0);">Others</a></li> 
									<!--<li class="cat-item"><a href="javascript:void(0);">Development</a></li>  -->
								</ul>
							</div>
							<div class="widget style-1 widget_tag_cloud">
								<div class="widget-title">
									<h4 class="title">Popular Tags</h4>
								</div>
								<div class="tagcloud"> 
									<a href="javascript:void(0);">TSAP</a>
									<a href="javascript:void(0);">India</a>
									<a href="javascript:void(0);">groceries</a>
									<a href="javascript:void(0);">vegetables</a>
									<a href="javascript:void(0);">cloths</a>
									<a href="javascript:void(0);">language</a>
									<a href="javascript:void(0);">help Design</a>
									<a href="javascript:void(0);">education</a>
									<a href="javascript:void(0);">more</a>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-xl-8 col-lg-8 m-b50">
						<div class="row align-items-center">
							<div class="col-md-9 col-sm-8 mb-3 mb-sm-4">
								<h4 class="m-b0">82 Offers for members</h4>
							</div>
							<div class="col-md-3 col-sm-4 m-b30">
								<select class="default-select form-select style-1">
									<option>Newest</option>
									<option>Oldest</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-6 m-b30">
								<div class="dz-card style-2 overlay-skew">
									<div class="dz-media">
										<a href="fundraiser-detail.html"><img src="images/project/pic1.jpg" alt=""></a>
									</div>
									<div class="dz-info">
										<ul class="dz-category">
											<li><a href="javascript:void(0);">EDUCATION</a></li>
										</ul>
										<h5 class="dz-title"><a href="fundraiser-detail.html">25% offer in language Courses</a></h5>
										
										
									</div>
								</div>
							</div>
							<div class="col-xl-6 m-b30">
								<div class="dz-card style-2 overlay-skew">
									<div class="dz-media">
										<a href="fundraiser-detail.html"><img src="images/project/pic2.jpg" alt=""></a>
									</div>
									<div class="dz-info">
										<ul class="dz-category">
											<li><a href="javascript:void(0);">Medicine</a></li>
										</ul>
										<h5 class="dz-title"><a href="fundraiser-detail.html">Free sample for Ayurvedic medicine </a></h5>
										<!-- <div class="progress-bx style-1">
											<div class="progress">
												<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width:68%"></div>
											</div>
											<ul class="progress-tag">
												<li class="raised">
													<i class="las la-coins"></i> <span>Total Raised $ 35,542</span>
												</li>
												<li class="goal">
													<i class="lar la-calendar"></i> <span>63 Days left</span>
												</li>
											</ul> 
										</div>
										<div class="author-wrappper">
											<div class="author-media">
												<img src="images/avatar/avatar2.jpg" alt=""> 
											</div>
											<div class="author-content">
												<div class="author-head">
													<h6 class="author-name">Kaylynn Donin</h6>
													<ul class="rating-list">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star gray-light"></i></li>
														<li><i class="fa fa-star gray-light"></i></li>
													</ul>
												</div>
												<ul class="author-meta">
													<li class="campaign">12 Campaign</li>
													<li class="location">New York, London</li>
												</ul>
											</div>
										</div> -->
									</div>
								</div>
							</div>
							<div class="col-xl-6 m-b30">
								<div class="dz-card style-2 overlay-skew">
									<div class="dz-media">
										<a href="fundraiser-detail.html"><img src="images/project/pic3.jpg" alt=""></a>
									</div>
									<div class="dz-info">
										<ul class="dz-category">
											<li><a href="javascript:void(0);">Cloths</a></li>
										</ul>
										<h5 class="dz-title"><a href="fundraiser-detail.html">50% sales in cloths </a></h5>
										
									</div>
								</div>
							</div>
							<div class="col-xl-6 m-b30">
								<div class="dz-card style-2 overlay-skew">
									<div class="dz-media">
										<a href="fundraiser-detail.html"><img src="images/project/pic4.jpg" alt=""></a>
									</div>
									<div class="dz-info">
										<ul class="dz-category">
											<li><a href="javascript:void(0);">Resturant</a></li>
										</ul>
										<h5 class="dz-title"><a href="fundraiser-detail.html">Get 20% offer in Resturants</a></h5>
										
									</div>
								</div>
							</div>
							<div class="col-xl-6 m-b30">
								<div class="dz-card style-2 overlay-skew">
									<div class="dz-media">
										<a href="fundraiser-detail.html"><img src="images/project/pic5.jpg" alt=""></a>
									</div>
									<div class="dz-info">
										<ul class="dz-category">
											<li><a href="javascript:void(0);">Indian Spices</a></li>
										</ul>
										<h5 class="dz-title"><a href="fundraiser-detail.html">25% offer in Indian Spices</a></h5>
										
									</div>
								</div>
							</div>
							<div class="col-xl-6 m-b30">
								<div class="dz-card style-2 overlay-skew">
									<div class="dz-media">
										<a href="fundraiser-detail.html"><img src="images/project/pic6.jpg" alt=""></a>
									</div>
									<div class="dz-info">
										<ul class="dz-category">
											<li><a href="javascript:void(0);">Indian Spices</a></li>
										</ul>
										<h5 class="dz-title"><a href="fundraiser-detail.html">By one get one Indian Spices</a></h5>
										
									</div>
								</div>
							</div>
						</div>
						<div class="row">		
							<div class="col-12 m-sm-t0 m-t30">		
								<nav aria-label="Blog Pagination" class="pagination-bx">
									<div class="page-item">
										<a class="page-link prev" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a>
									</div>
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link active" href="javascript:void(0);">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
									</ul>
									<div class="page-item">
										<a class="page-link next" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<!-- Call Action -->
		<div class="call-action style-1 content-inner-1">
			<div class="container">
				<div class="inner-action overlay-primary-dark" style="background-image:url('images/background/bg1.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="row inner-content justify-content-center">
						<div class="col-xl-6 col-lg-9">
							<div class="section-head text-center">
								<h2 class="title text-white">Don’t miss our  updates </h2>
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