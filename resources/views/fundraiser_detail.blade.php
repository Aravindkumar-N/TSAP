
@extends('layout')
@section('content')

	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('images/banner/bnr4.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Fundraiser Detail</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Fundraiser Detail</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Fundraiser Detail -->
		<section class="content-inner-2">
			<div class="container">	
				<div class="row">
					<div class="col-xl-8 col-lg-8 m-b30">
						<div class="fundraiser-single">
							<div class="swiper fundraiser-gallery-wrapper">
								<div class="swiper fundraiser-gallery-swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic1.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic2.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic3.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic4.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic5.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic6.jpg" alt=""></div></div>
									</div>
									<div class="btn-wrapper">
										<div class="swiper-button-prev btn-prev"><i class="fa fa-arrow-left-long"></i></div>
										<div class="swiper-button-next btn-next"><i class="fa fa-arrow-right-long"></i></div>
									</div>
								</div>
								<div class="swiper fundraiser-gallery-thumb">
									<div class="swiper-wrapper">
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic1.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic2.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic3.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic4.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic5.jpg" alt=""></div></div>
										<div class="swiper-slide"><div class="dz-media"><img src="images/blog/large/pic6.jpg" alt=""></div></div>
									</div>
								</div>
							</div>
							<h2 class="title">Schooling Special Needs Children Education</h2>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
							
							<h5>About the Fundraiser</h5>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
							
							<ul class="fundraiser-bottom">
								<li><a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDonate"><i class="flaticon-like me-2"></i> Donate Now </a></li>
								<li><a href="https://www.facebook.com/login/" target="_blank" class="btn facebook btn-primary btn-sm"><i class="fa-brands fa-facebook-square me-2"></i> Spread The World</a></li>
								<li><a href="https://web.whatsapp.com/" target="_blank" class="btn whatsapp btn-primary btn-sm"><i class="fa-brands fa-whatsapp me-2"></i>Share</a></li>
							</ul>
						</div>
						
						<!-- Widget Refer -->
						<div class="widget style-1 widget_refer">
							<div class="widget-title">
								<h4 class="title">Refer a Friend</h4>
							</div>	
							<p>In need of funds for medical treatment or know someone who might be? Share the details and Akcel will get in touch with.</p>
							<a href="javascript:void(0);" class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#modalRefer">Refer Now</a>
						</div>
						
						<!-- Comment List -->
						<div class="clear" id="comment-list">
							<div class="comments-area" id="comments">
								<div class="widget-title style-1">
									<h4 class="title">Comments</h4>
								</div>
								<div class="clearfix">
									<!-- comment list END -->
									<ol class="comment-list">
										<li class="comment">
											<div class="comment-body">
												<div class="comment-author vcard"> 
													<img  class="avatar photo" src="images/avatar/avatar1.jpg" alt=""> 
													<cite class="fn">Celesto Anderson</cite>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<div class="reply"> 
													<a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-reply"></i>Reply</a>
												</div>
											</div>
											<ol class="children">
												<li class="comment odd parent">
													<div class="comment-body">
														<div class="comment-author vcard"> 
															<img  class="avatar photo" src="images/avatar/avatar2.jpg" alt=""> 
															<cite class="fn">Jake Johnson</cite>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<div class="reply"> 
															<a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-reply"></i>Reply</a>
														</div>
													</div>
													<!-- list END -->
												</li>
											</ol>
											<!-- list END -->
										</li>
										<li class="comment">
											<div class="comment-body">
												<div class="comment-author vcard"> 
													<img  class="avatar photo" src="images/avatar/avatar3.jpg" alt=""> 
													<cite class="fn">John Doe</cite> 
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<div class="reply"> 
													<a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-reply"></i>Reply</a>
												</div>
											</div>
										</li>
										<li class="comment">
											<div class="comment-body">
												<div class="comment-author vcard"> 
													<img  class="avatar photo" src="images/avatar/avatar4.jpg" alt=""> 
													<cite class="fn">Celesto Anderson</cite> 
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<div class="reply"> 
													<a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-reply"></i>Reply</a>
												</div>
											</div>
										</li>
									</ol>
									<!-- comment list END -->
									
									<!-- Form -->
									<div class="comment-respond" id="respond">
										<div class="widget-title style-1">
											<h4 class="title" id="reply-title">Leave Your Comment
												<small><a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a></small>
											</h4>
										</div>
										<form class="comment-form" id="commentform" method="post">
											<p class="comment-form-author">
												<label for="author">Name <span class="required">*</span></label>
												<input type="text" name="Author"  placeholder="Author" id="author">
											</p>
											<p class="comment-form-email">
												<label for="email">Email <span class="required">*</span></label>
												<input type="text" placeholder="Email" name="email" id="email">
											</p>
											<p class="comment-form-comment">
												<label for="comment">Comment</label>
												<textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
											</p>
											<p class="form-submit">
												<button type="submit" class="btn btn-primary" id="submit">SUBMIT</button>
											</p>
										</form>
									</div>
									<!-- Form -->
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-xl-4 col-lg-4">
						<aside class="side-bar sticky-top">
							<!--  Donate Now -->
							<div class="widget style-1 widget_donate">
								<a href="javascript:void(0);" class="btn btn-donate btn-primary w-100"  data-bs-toggle="modal" data-bs-target="#modalDonate"><i class="flaticon-like me-3"></i> Donate Now </a>
								<div class="tagcloud"> 
									<a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#modalDonate">Cards</a>
									<a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#modalDonate">Net Banking</a>
									<a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#modalDonate">UPI</a>
								</div>
								<a href="https://www.facebook.com/" target="_blank" class="btn btn-primary facebook w-100 btn-bottom"><i class="fa-brands fa-facebook-square me-2"></i> Spread The World</a>
							</div>
							
							<!--  Widget Fund -->
							<div class="widget style-1 widget_fund">
								<h3 class="title">₹ 45,00,000</h3>
								<p>raised of <span>₹ 50,00,000</span> goal</p>
								<div class="progress-bx style-1">
									<div class="progress">
										<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"></div>
									</div> 
								</div>
								<ul class="detail">
									<li class="d-flex"><h5>2422</h5><span class="ms-2">supporters</span></li>
									<li class="d-flex"><h5>52</h5><span class="ms-2">days left</span></li>
								</ul>
							</div>
							
							<!-- Fundraiser Post -->
							<div class="widget style-1 recent-posts-entry">
								<div class="widget-title">
									<h5 class="title">Fundraiser Post</h5>
								</div>	
								<div class="widget-post-bx">
									<div class="widget-post clearfix">
										<div class="dz-media"> 
											<img src="images/blog/recent-blog/pic1.jpg" alt="">
										</div>
										<div class="dz-info">
											<h6 class="title"><a href="blog-details.html">How To Teach Education Like A Pro.</a></h6>
											<div class="dz-meta">
												<ul>
													<li class="post-date"><i class="flaticon-placeholder"></i> Coimbatore</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dz-media"> 
											<img src="images/blog/recent-blog/pic2.jpg" alt="">
										</div>
										<div class="dz-info">
											<h6 class="title"><a href="blog-details.html">Quick and Easy Fix For Your Education.</a></h6>
											<div class="dz-meta">
												<ul>
													<li class="post-date"><i class="flaticon-placeholder"></i> Coimbatore</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
                            </div>
							
							<!-- Fundraising Team -->
							<div class="widget style-1 widget_avatar">
								<div class="widget-title">
									<h5 class="title">Fundraising Team</h5>
								</div>
								<div class="avatar-wrapper">
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar1.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">Jake Johnson</a></h6>
										</div>
									</div>
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar2.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">Celesto Anderson</a></h6>
										</div>
									</div>
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar3.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">John Doe</a></h6>
										</div>
									</div>
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar4.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">Jake Johnson</a></h6>
										</div>
									</div>
								</div>
                            </div>
							
							<!-- Top Donors -->
							<div class="widget style-1 widget_avatar">
								<div class="widget-title">
									<h5 class="title">Top Donors</h5>
								</div>
								<div class="avatar-wrapper">
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar5.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">Jake Johnson</a></h6>
											<span class="donors-item">$ 1,812</span>
										</div>
									</div>
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar4.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">Celesto Anderson</a></h6>
											<span class="donors-item">$ 1,564</span>
										</div>
									</div>
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar3.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">John Doe</a></h6>
											<span class="donors-item">$ 1,225</span>
										</div>
									</div>
									<div class="avatar-item">
										<div class="avatar-media"> 
											<img src="images/avatar/avatar2.jpg" alt="">
										</div>
										<div class="avatar-info">
											<h6 class="title"><a href="javascript:void(0);">Jake Johnson</a></h6>
											<span class="donors-item">$ 9,00</span>
										</div>
									</div>
								</div>
                            </div>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<!-- Fundraiser Detail -->
		
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