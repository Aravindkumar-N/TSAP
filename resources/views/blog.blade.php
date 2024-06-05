@extends('layout')
@section('content')

	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('images/background/bg12.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Blog</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row">					
					<div class="col-lg-7 col-md-12 m-b30">
						<div class="dz-card style-3 overlay">
							<div class="dz-media">
								<img src="images/blog/blog-grid/pic2.jpg" alt="">
							</div>
							<div class="dz-info">
								<div class="dz-category">
									<ul>
										<li><a href="javascript:void(0);">BUSSINESS STRATEGY</a></li>
									</ul>
								</div>
								<h5 class="dz-title"><a href="blog-details.html" class="text-white">How to increase your business skill while pandemic</a></h5>
							</div>
						</div>
					</div>					
					<div class="col-lg-5 col-md-12 m-b30">
						<div class="dz-card style-3 overlay">
							<div class="dz-media">
								<img src="images/blog/blog-grid/pic6.jpg" alt="">
							</div>
							<div class="dz-info">
								<div class="dz-category">
									<ul>
										<li><a href="javascript:void(0);">BUSSINESS STRATEGY</a></li>
									</ul>
								</div>
								<h5 class="dz-title"><a href="blog-details.html" class="text-white">Akcel Academy 2021 Grand Opening at Jakarta</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="content-inner-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 search-bx style-2">
						<div class="input-group  m-b0 m-md-b10">
							<input type="text" class="form-control" placeholder="Search Articles">
							<div class="input-group-prepend">
								<button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="row g-3 justify-content-end m-b30">
							<div class="col-sm-4">
								<select class="default-select form-select style-2">
									<option>All Categories</option>
									<option>Newest</option>
									<option>Oldest</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="default-select form-select style-2">
									<option>Filter Date</option>
									<option>7/12/2022</option>
									<option>15/2/2022</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="default-select form-select style-2">
									<option>Latest</option>
									<option>Oldest</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic4.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">HEALTH</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">New vaccine for cattle calf loss learned </a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar2.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Hawkins Junior</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic3.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">TECHNOLOGY</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">4 Things parents learned for they jids in 2020 </a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar3.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Tom wilson</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic2.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">EDUCATION</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">He Created the Web. Now He’s Out to Remake </a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar4.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Adam Jordon</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic5.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">DESIGN</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">Partnering to create a community</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar1.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Kaylynn Donin</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic6.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">FASHION</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">Primary School Build for Children</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar5.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Richard Hartisona</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic7.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">DESIGN</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">Best & Less published their supplier lists</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar6.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Cheyenne Curtis</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic8.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">TECHNOLOGY</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">New vaccine for cattle calf loss learned </a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar7.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Hawkins Junior</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic9.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">EDUCATION</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">Smallest of donations can help change a life</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar8.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Tom wilson</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 m-b30">
						<div class="dz-card style-1">
							<div class="dz-media">
								<a href="blog-details.html"><img src="images/blog/blog-grid/pic1.jpg" alt=""></a>
								<ul class="dz-badge-list">
									<li><a href="javascript:void(0);" class="dz-badge">HEALTH</a></li>
								</ul>
								<a href="blog-details.html" class="btn btn-secondary">Read More</a>
							</div>
							<div class="dz-info">
								<h5 class="dz-title"><a href="blog-details.html">It is a long established fact that a reader </a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
								
								<div class="author-wrappper">
									<div class="author-media">
										<img src="images/avatar/avatar9.jpg" alt=""> 
									</div>
									<div class="author-content">
										<div class="author-head">
											<h6 class="author-name">Adam Jordon</h6>
										</div>
										<ul class="author-meta">
											<li class="date">November 21th, 2022</li>
										</ul>
									</div>
								</div>
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
		</section>
		
	</div>
	@endsection