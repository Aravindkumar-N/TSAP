
@extends('layout')
 @section('content')

<div class="tamil">
    <video autoplay muted loop plays-inline class="background-video">
        <source
            src="{{ asset('images/background/none.mp4') }}"
            type="video/mp4"
        />
        Your browser does not support the video tag.
    </video>

    <div class="text-content">
        <div class="content">
            <h1>வணக்கம்</h1>
            <h3>Welcome to Tamil Nadu!</h3>
            <p>
                A potpourri of vibrant cultures, exotic destinations and
                enduring memories; welcome to one of the heartlands of human
                civilization. Tamil Nadu - where stories never end.
            </p>
        </div>
        <div class="grid-container">
            <div>
                <p>4 UNESCO's <br>World Heritage Sites</p>
            </div>
            <div>
                <div>
                    <p>4 International Airport <br>2 Domestic Airports</p>
                </div>
            </div>
            <div>
                <div>
                    <p>2nd Largest Contributor <br>to India's GDP</p>
                </div>
            </div>
            <div>
                <div>
                    <p>3rd Largest Contributor <br>to India's Export</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Start -->
<section
    class="testimonial-wrapper3 content-inner"
    style="
        background-image: url('images/background/bg1.jpg');
        background-position: center;
    "
>
    <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-sm-8 col-9">
                <div class="section-head">
                    <h5 class="sub-title">
                        Our Tamilnadu have the pride to have
                    </h5>
                    <h2 class="title text-white">4 Heritage Places</h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-3">
                <div class="swiper-btn float-sm-end m-b40">
                    <div class="test-swiper-prev btn-prev text-white">
                        <i class="flaticon-left-arrow-1"></i>
                    </div>
                    <div class="test-swiper-next btn-next text-white">
                        <i class="flaticon-next"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="resize-wrapper">
        <div class="swiper testimonial-swiper3 m-b30">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div
                        class="testimonial-3 wow fadeInUp"
                        data-wow-delay="0.2s"
                    >
                        <div class="testimonial-media">
                            <img
                                src="images/testimonials/large/pic1.jpg"
                                alt=""
                            />
                        </div>
                        <div class="testimonial-content">
                            <h5 class="testimonial-title">
                                Airavatesvara Temple: The Impressive Chola
                                Shrine of Darasuram
                            </h5>
                            <p class="testimonial-text">
                                The Airavatesvara Temple, built by Rajaraja II,
                                is fashioned as a typical Dravidian-style temple
                                with receding tiers or ‘tala’ forging a stunning
                                pyramidal ‘shikhara’ or superstructure. It is
                                one of the Great Living Chola Temples, and since
                                the olden days, the Airavatesvara Temple has
                                attracted devotees and travellers alike.
                                <a
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#read"
                                    >Read More</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="testimonial-3 wow fadeInUp"
                        data-wow-delay="0.4s"
                    >
                        <div class="testimonial-media">
                            <img
                                src="images/testimonials/large/pic2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="testimonial-content">
                            <h5 class="testimonial-title">
                                Brihadeeswarar Temple: (Also known as Periya
                                Kovil, RajaRajeswara Temple and Rajarajesvaram)
                            </h5>
                            <p class="testimonial-text">
                                It is one of the largest temples in India and is
                                an example of Dravidian architecture during the
                                Chola period. Built by emperor Raja Raja Chola I
                                and completed in 1010 AD, the temple turned 1000
                                years old in 2010.The temple stands amidst
                                fortified walls that were probably added in the
                                16th century.
                                <a
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#read"
                                    >Read More</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="testimonial-3 wow fadeInUp"
                        data-wow-delay="0.6s"
                    >
                        <div class="testimonial-media">
                            <img
                                src="images/testimonials/large/pic3.jpg"
                                alt=""
                            />
                        </div>
                        <div class="testimonial-content">
                            <h5 class="testimonial-title">
                                Brihadisvara Temple, Gangaikonda Cholapuram
                            </h5>
                            <p class="testimonial-text">
                                The Brihadisvara Temple is a Hindu temple
                                dedicated to Shiva in Gangaikonda Cholapuram,
                                Jayankondam, in the South Indian state of Tamil
                                Nadu. Completed in 1035 AD by Rajendra Chola I
                                as a part of his new capital, this Chola dynasty
                                era temple is similar in design, and has a
                                similar name, as the older 11th century,
                                Brihadeeswarar Temple about 70 kilometres (43
                                min) to the southwest in Thanjavur.<a
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#read"
                                    >Read More</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="testimonial-3 wow fadeInUp"
                        data-wow-delay="0.6s"
                    >
                        <div class="testimonial-media">
                            <img
                                src="images/testimonials/large/pic4.jpg"
                                alt=""
                            />
                        </div>
                        <div class="testimonial-content">
                            <h5 class="testimonial-title">
                                Group of Monuments at Mahabalipuram
                            </h5>
                            <p class="testimonial-text">
                                Mahabalipuram is pre-eminently testimony to the
                                Pallavas civilization of south-east India.The
                                sanctuary, known especially for its rathas
                                (temples in the form of chariots), mandapas
                                (cave sanctuaries), and giant open-air reliefs,
                                is one of the major centres of the cult of Siva.
                                The influence of the sculptures of
                                Mahabalipuram, characterized by the softness and
                                supple mass of their modelling, spread widely
                                (Cambodia, Annam, Java).
                                <a
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#read"
                                    >Read More</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a
            href="l"
            class="btn btn-primary m-r15 m-b15 wow fadeInUp"
            data-wow-delay="0.2s"
            >Explore more</a
        >
    </div>
</section>












<section class="content-inner">
    <div class="container">
        <div class="row align-items-center content-bx style-3">
            <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                <div class="inner-content">
                    <div class="section-head">
                        <h2 class="title">
                            Invest, Innovate and Create in Tamil Nadu
                        </h2>
                        <p class="max-w400">
                        Tamil Nadu offers a vibrant and dynamic environment for business and investment, making it an ideal destination for international investors.
                        </p>
                        <p class="max-w400">
                        Tamil Sangam Association Poland, is dedicated to promoting and supporting investors to invest in Tamil Nadu. Our goal is to streamline the investment process, making it as efficient and straightforward as possible.
                        </p>
                        <p class="max-w400">
                        For detailed information and assistance on investment opportunities in Tamil Nadu, please contact our Business Development Executive Mr.Suresh Nallasivam 
                    </div>
                    <a href="project-story.html" class="btn btn-primary"
                        >Invest Now</a
                    >
                </div>
            </div>
            <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
                <div class="right">
                    <div class="info">
                        <img
                            src="images/logo/pic1.png"
                            alt="Business-Friendly Environment and Supportive Government"
                        />
                        <p>
                            Business-Friendly Environment and Supportive
                            Government.
                        </p>
                    </div>
                    <div class="info">
                        <img
                            src="images/logo/pic2.png"
                            alt="Diverse Talent Pool with Right Expertise"
                        />
                        <p>Diverse Talent Pool with Right Expertise.</p>
                    </div>
                    <div class="info">
                        <img
                            src="images/logo/pic3.png"
                            alt="Access to Fast Growing Market"
                        />
                        <p>Access to Fast Growing Market.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<div class="city">
<section class="content-inner-3 section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.1s">
					<h6 class="sub-title">Best Culture</h6>
					<h2 class="title">Place To Visit in Tamilnadu</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="swiper team-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic1.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">CHENNAI</h5>
									<span class="dz-position text-primary">Capital city of Tamilnadu</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic2.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">KANCHIPURAM</h5>
									<span class="dz-position text-primary">City of Thousand Temples</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.3s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic3.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">KANNIYAKUMARI</h5>
									<span class="dz-position text-primary">Symbol of Tamilnadu</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic4.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">OOTY</h5>
									<span class="dz-position text-primary">The Queen of hill stations</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic5.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">KODAIKANAL</h5>
									<span class="dz-position text-primary">The Princess of Hill stations</span>
								</div>
							</div>
						</div>
                        <div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic6.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">MAHABALIPURAM</h5>
									<span class="dz-position text-primary">The historic city </span>
								</div>
							</div>
						</div>
                        <div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic7.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">MADURAI</h5>
									<span class="dz-position text-primary">Sleepless City of Tamilnadu</span>
								</div>
							</div>
						</div>
                        <div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="instructor.html"><img src="images/project/city/pic8.jpg" alt=""></a>
									
								</div>
								<div class="dz-content">
									<h5 class="dz-name">VELANKANNI</h5>
									<span class="dz-position text-primary">Entrance to the Basilica</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<svg class="shape-1 move-1" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" width="81" height="63" fill="var(--primary)" xmlns:v="https://vecta.io/nano"><circle cx="16.695" cy="3.497" r="3.497"/><circle cx="12.296" cy="21.975" r="3.497"/><circle cx="7.896" cy="40.453" r="3.497"/><circle cx="3.497" cy="58.931" r="3.497"/><circle cx="36.933" cy="3.497" r="3.497"/><circle cx="32.534" cy="21.975" r="3.497"/><circle cx="28.134" cy="40.453" r="3.497"/><circle cx="23.735" cy="58.931" r="3.497"/><circle cx="57.171" cy="3.497" r="3.497"/><circle cx="52.772" cy="21.975" r="3.497"/><circle cx="48.372" cy="40.453" r="3.497"/><circle cx="43.973" cy="58.931" r="3.497"/><circle cx="77.409" cy="3.497" r="3.497"/><circle cx="73.01" cy="21.975" r="3.497"/><circle cx="68.61" cy="40.453" r="3.497"/><circle cx="64.211" cy="58.931" r="3.497"/></svg>
			<svg class="shape-4 move-2" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" width="57" height="43" fill="var(--secondary)" xmlns:v="https://vecta.io/nano"><circle cx="11.261" cy="2.559" r="2.559"></circle><ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303"></ellipse><circle cx="5.375" cy="27.897" r="2.303"></circle><circle cx="2.559" cy="40.438" r="2.559"></circle><ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559"></ellipse><ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303"></ellipse><ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303"></ellipse><ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559"></ellipse><ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559"></ellipse><circle cx="36.599" cy="15.1" r="2.303"></circle><ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303"></ellipse><circle cx="30.713" cy="40.438" r="2.559"></circle><circle cx="54.259" cy="2.559" r="2.559"></circle><circle cx="50.42" cy="15.1" r="2.303"></circle><circle cx="47.349" cy="27.897" r="2.303"></circle><circle cx="44.533" cy="40.438" r="2.559"></circle></svg>
			<svg class="shape-6 move-1" xmlns="http://www.w3.org/2000/svg" width="81" height="48" viewBox="0 0 81 48" fill="none">
				<path d="M2 19L15.744 6.73604C18.6614 4.1328 23.1457 4.42415 25.7017 7.383L30.3669 12.7835C33.1839 16.0444 38.2501 16.0101 41.0227 12.7114L44.878 8.12464C47.6031 4.88238 52.5608 4.78406 55.4124 7.91574L59.9639 12.9144C62.8687 16.1045 67.9399 15.9329 70.6223 12.5537L79 2" stroke="var(--primary)" stroke-width="5"/>
				<path d="M2 46L15.744 33.736C18.6614 31.1328 23.1457 31.4241 25.7017 34.383L30.3669 39.7835C33.1839 43.0444 38.2501 43.0101 41.0227 39.7114L44.878 35.1246C47.6031 31.8824 52.5608 31.7841 55.4124 34.9157L59.9639 39.9144C62.8687 43.1045 67.9399 42.9329 70.6223 39.5537L79 29" stroke="var(--primary)" stroke-width="5"/>
			</svg>
			<svg class="shape-2 rotating" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" xmlns:v="https://vecta.io/nano" width="95" height="95" fill="none">
				<mask id="A" maskUnits="userSpaceOnUse" x="0" y="0" width="95" height="95" mask-type="alpha">
				  <circle cx="47.5" cy="47.5" r="47" fill="#d9d9d9" stroke="#3b6ff5" />
				</mask>
				<g mask="url(#A)">
				  <path d="M35.044-64.787L-48.721 55.222M85.098-11.882L1.332 108.127M43.387-55.969L-40.379 64.039M93.44-3.064L9.674 116.944M51.729-47.152L-32.037 72.857M101.782 5.753L18.017 125.762M60.071-38.334L-23.695 81.674m133.82-67.103L26.359 134.579M68.414-29.517L-15.352 90.492m133.819-67.104L34.701 143.397M76.755-20.699L-7.01 99.309M39.215-60.378L-44.55 59.631M89.269-7.473L5.503 112.535M47.558-51.56L-36.208 68.448M97.611 1.344L13.846 121.353M55.9-42.743L-27.866 77.266m133.819-67.104L22.187 130.17M64.242-33.925L-19.523 86.083m133.819-67.104L30.53 138.987M72.585-25.108L-11.181 94.9m133.819-67.104L38.872 147.805M80.927-16.291L-2.839 103.718" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" />
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
			<svg class="shape-3 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
		</section>

</div>



<div class="gallery">
    <div class="heading-gallery">
        <h3> Tamilnadu <span>Gallery</span></h3>
    </div>

    <div class="gal-box">
        <div class="gal-row">
        <img src="images/gallery/pic1.jpg" alt=""/>
        <img src="images/gallery/pic2.jpg" alt=""/>
        <img src="images/gallery/pic8.jpg" alt=""/>
        <img src="images/gallery/pic9.jpg" alt=""/>
        <img src="images/gallery/pic15.jpg" alt=""/>
        </div>

        <div class="gal-row">
        <img src="images/gallery/pic6.jpg" alt=""/>
         <img src="images/gallery/pic5.jpg" alt=""/>
        <img src="images/gallery/pic7.jpg" alt=""/>
        <img src="images/gallery/pic3.jpg" alt=""/>
        <img src="images/gallery/pic4.jpg" alt=""/>
        <img src="images/gallery/pic10.jpg" alt=""/>
        </div>

        <div class="gal-row">
        <img src="images/gallery/pic11.jpg" alt=""/>
        <img src="images/gallery/pic12.jpg" alt=""/>
        <img src="images/gallery/pic13.jpg" alt=""/>
        <img src="images/gallery/pic14.jpg" alt=""/>
        <img src="images/gallery/pic5.jpg" alt=""/>
        
        </div>

       
    </div>

</div>


		<!-- Our Team -->
<!-- <section class="content-inner-2">
    <div class="container">
        <div class="clearfix">
            <h1>gallery of Our Tamilnadu</h1><br>
            <ul id="masonry" class="row">
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic1.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);">Culture</a>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </li>
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic2.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);">Jallikattu</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </li>
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic3.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);">Festivals</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </li>
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic4.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);">Foods</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </li>
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic5.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);"> Tamil Sangam</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </li>
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic6.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);">Hill Stations</a>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </li>
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic7.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);">Temples</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </li>
                <li
                    class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30"
                >
                    <div class="dz-card style-2 overlay-skew">
                        <div class="dz-media">
                            <a href="fundraiser-detail.html"
                                ><img src="images/gallery/pic8.jpg" alt=""
                            /></a>
                        </div>
                        <div class="dz-info">
                            <ul class="dz-category">
                                <li>
                                    <a href="javascript:void(0);">Toursim</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
</section> -->

@endsection
