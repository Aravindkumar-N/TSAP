@extends('layout') @section('content')
<!-- Banner -->

<div class="page-content bg-white">
    <!-- Banner Start -->
    <div class="banner-one">
        <div class="container">
            <div class="row banner-inner">
                <div class="col-lg-8 col-md-7">
                    <div class="banner-content">
                        <h5 class="sub-title text-primary">Membership</h5>
                        <h1 class="title">
                            Take a Step to Become a TSAP Member and Get
                            Exclusive Benefits
                        </h1>
                        <p>
                            Unlock exclusive benefits, connect with fellow
                            Indians, and enjoy unparalleled support and
                            resources. Become a member today and be part of a
                            thriving community dedicated to making your life in
                            Poland enriching and hassle-free.
                        </p>

                        <div class="swiper banner-clients-swiper">
                            <div class="swiper-wrapper"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="banner-media">
                        <img
                            src="{{asset('images/pic2.png') }}"
                            class="main-img"
                            alt=""
                        />
                        <!-- <div class="dz-media">
                            <img
                                src="{{asset('images/shape.png')}}"
                                class="main-img"
                                alt=""
                            />
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="dz-shape">
                <svg
                    class="shape-1 move-1"
                    viewBox="0 0 95 95"
                    xmlns="http://www.w3.org/2000/svg"
                    width="81"
                    height="63"
                    fill="var(--primary)"
                    xmlns:v="https://vecta.io/nano"
                >
                    <circle cx="16.695" cy="3.497" r="3.497" />
                    <circle cx="12.296" cy="21.975" r="3.497" />
                    <circle cx="7.896" cy="40.453" r="3.497" />
                    <circle cx="3.497" cy="58.931" r="3.497" />
                    <circle cx="36.933" cy="3.497" r="3.497" />
                    <circle cx="32.534" cy="21.975" r="3.497" />
                    <circle cx="28.134" cy="40.453" r="3.497" />
                    <circle cx="23.735" cy="58.931" r="3.497" />
                    <circle cx="57.171" cy="3.497" r="3.497" />
                    <circle cx="52.772" cy="21.975" r="3.497" />
                    <circle cx="48.372" cy="40.453" r="3.497" />
                    <circle cx="43.973" cy="58.931" r="3.497" />
                    <circle cx="77.409" cy="3.497" r="3.497" />
                    <circle cx="73.01" cy="21.975" r="3.497" />
                    <circle cx="68.61" cy="40.453" r="3.497" />
                    <circle cx="64.211" cy="58.931" r="3.497" />
                </svg>
                <svg
                    class="shape-2 move-2"
                    viewBox="0 0 57 43"
                    xmlns="http://www.w3.org/2000/svg"
                    width="57"
                    height="43"
                    fill="var(--secondary)"
                    xmlns:v="https://vecta.io/nano"
                >
                    <circle cx="11.261" cy="2.559" r="2.559" />
                    <ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303" />
                    <circle cx="5.375" cy="27.897" r="2.303" />
                    <circle cx="2.559" cy="40.438" r="2.559" />
                    <ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559" />
                    <ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303" />
                    <ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303" />
                    <ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559" />
                    <ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559" />
                    <circle cx="36.599" cy="15.1" r="2.303" />
                    <ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303" />
                    <circle cx="30.713" cy="40.438" r="2.559" />
                    <circle cx="54.259" cy="2.559" r="2.559" />
                    <circle cx="50.42" cy="15.1" r="2.303" />
                    <circle cx="47.349" cy="27.897" r="2.303" />
                    <circle cx="44.533" cy="40.438" r="2.559" />
                </svg>
                <svg
                    class="shape-3 move-2"
                    viewBox="0 0 95 95"
                    xmlns="http://www.w3.org/2000/svg"
                    width="81"
                    height="63"
                    fill="var(--primary)"
                    xmlns:v="https://vecta.io/nano"
                >
                    <circle cx="16.695" cy="3.497" r="3.497" />
                    <circle cx="12.296" cy="21.975" r="3.497" />
                    <circle cx="7.896" cy="40.453" r="3.497" />
                    <circle cx="3.497" cy="58.931" r="3.497" />
                    <circle cx="36.933" cy="3.497" r="3.497" />
                    <circle cx="32.534" cy="21.975" r="3.497" />
                    <circle cx="28.134" cy="40.453" r="3.497" />
                    <circle cx="23.735" cy="58.931" r="3.497" />
                    <circle cx="57.171" cy="3.497" r="3.497" />
                    <circle cx="52.772" cy="21.975" r="3.497" />
                    <circle cx="48.372" cy="40.453" r="3.497" />
                    <circle cx="43.973" cy="58.931" r="3.497" />
                    <circle cx="77.409" cy="3.497" r="3.497" />
                    <circle cx="73.01" cy="21.975" r="3.497" />
                    <circle cx="68.61" cy="40.453" r="3.497" />
                    <circle cx="64.211" cy="58.931" r="3.497" />
                </svg>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <section class="content-inner-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 m-b40">
                    <div class="col-12 m-b30">
                        <h2 class="title">Benefits For Members</h2>
                        <br />
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic1.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Discounts on Indian Spices and
                                        Groceries</a
                                    >
                                </h5>
                                <p>
                                    Enjoy exclusive savings on authentic Indian
                                    spices and groceries from our trusted
                                    partner brands. Elevate your culinary
                                    experience with flavors from home!
                                </p>
                            </div>
                        </div>
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic2.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Exclusive Access to Tamil Sangam
                                        Events</a
                                    >
                                </h5>
                                <p>
                                    Get VIP access to vibrant cultural events
                                    and festivals organized by Tamil Sangam.
                                    Celebrate your heritage and connect with
                                    fellow community members.
                                </p>
                            </div>
                        </div>
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic3.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Access to Tamil Library</a
                                    >
                                </h5>
                                <p>
                                    Dive into a rich collection of Tamil
                                    literature, magazines, and resources.
                                    Whether you're seeking knowledge or
                                    entertainment, our library has something for
                                    everyone.
                                </p>
                            </div>
                        </div>
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic4.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Legal and Immigration Assistance</a
                                    >
                                </h5>
                                <p>
                                    Navigate the complexities of legal and
                                    immigration matters with confidence. Our
                                    expert guidance ensures you have the support
                                    you need every step of the way.
                                </p>
                            </div>
                        </div>
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic5.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Health and Wellness Support</a
                                    >
                                </h5>
                                <p>
                                    Stay healthy and well with access to health
                                    camps, wellness workshops, and discounts on
                                    medical services. Your well-being is our
                                    priority.
                                </p>
                            </div>
                        </div>

                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic6.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Educational Support</a
                                    >
                                </h5>
                                <p>
                                    Unlock educational opportunities with
                                    discounted language courses, cultural
                                    education programs, and skill-enhancing
                                    workshops. Empower yourself with knowledge.
                                </p>
                            </div>
                        </div>
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic7.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Networking Opportunities</a
                                    >
                                </h5>
                                <p>
                                    Expand your professional network with
                                    exclusive invitations to events with
                                    business leaders and professionals. Build
                                    valuable connections within the community.
                                </p>
                            </div>
                        </div>
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic8.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Travel Assistance</a
                                    >
                                </h5>
                                <p>
                                    Travel with peace of mind knowing you have
                                    special deals and support for all your
                                    travel needs, including emergency assistance
                                    when abroad.
                                </p>
                            </div>
                        </div>
                        <!-- <div class="dz-card style-1 blog-half">
								<div class="dz-media">
									<a href="blog-details.html"><img src="images/blog/blog-grid/pic9.jpg" alt=""></a>
									<a href="blog-details.html" class="btn btn-secondary">Get</a>
								</div>
								<div class="dz-info">
									<h5 class="dz-title"><a href="blog-details.html">Community Support Services</a></h5>
									<p>Whether you're new to Poland or need a helping hand, our community support services assist with housing, job placements, and other essential needs.</p>
									
									
								</div>
							</div> -->
                        <div class="dz-card style-1 blog-half">
                            <div class="dz-media">
                                <a href="blog-details.html"
                                    ><img
                                        src="images/blog/blog-grid/pic10.jpg"
                                        alt=""
                                /></a>
                                <a
                                    href="blog-details.html"
                                    class="btn btn-secondary"
                                    >Get</a
                                >
                            </div>
                            <div class="dz-info">
                                <h5 class="dz-title">
                                    <a href="blog-details.html"
                                        >Special Offers from Partner Brands</a
                                    >
                                </h5>
                                <p>
                                    ake advantage of exclusive deals and
                                    discounts from a variety of partner brands,
                                    from dining to shopping, tailored just for
                                    our members.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top right">
                        <div class="widget style-1 widget_categories">
                            <div class="widget-title">
                                <h4 class="title">Membership Benefits</h4>
                            </div>
                            <ul>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Discounts on Indian Spices and
                                        Groceries</a
                                    >
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Exclusive Access to Tamil Sangam
                                        Eventss</a
                                    >
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Access to Tamil Library</a
                                    >
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Legal and Immigration Assistance</a
                                    >
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Health and Wellness Support</a
                                    >
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Educational Support</a
                                    >
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Networking Opportunities</a
                                    >
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Travel Assistance</a
                                    >
                                </li>
                                <!-- <li class="cat-item"><a href="javascript:void(0);">Community Support Services</a></li>   -->
                                <li class="cat-item">
                                    <a href="javascript:void(0);"
                                        >Special Offers from Partner Brands</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
       
        <div class="toggle1">

                    <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" onclick="togglePricing()" />
            <label class="form-check-label" id="toggleText" for="flexSwitchCheckChecked">Switch to Yearly Pricing</label>
            </div>
                        <!-- <div class="toggle">
            
                <label>
                    <input
                        type="checkbox"
                        id="toggleButton"
                        onclick="togglePricing()"
                    />
                    
                    <span id="toggleText">Switch to Yearly Pricing</span>
                </label>
            </div> -->

            <div class="form">
                <div id="monthlyPricing" class="pricing-container">
                    <div class="packages">
                        <div class="package" id="monthly">
                            <h2>Family</h2>
                            <h4>Monthy 100 PLN</h4>
                        </div>
                        <div class="package" id="six-months">
                            <h2>Individual</h2>
                            <h4>Monthy 50 PLN</h4>
                        </div>
                        <div class="package" id="annual">
                            <h2>Student</h2>
                            <h4>Monthy 30 PLN</h4>
                        </div>
                    </div>
                </div>
                <div
                    id="yearlyPricing"
                    class="pricing-container"
                    style="display: none"
                >
                    <div class="packages">
                        <div class="package" id="monthly">
                            <h2>Family</h2>
                            <h4>
                                1000 PLN/year <br />
                                <small>*Save 200 PLN!</small>
                            </h4>
                        </div>
                        <div class="package" id="six-months">
                            <h2>Individual</h2>
                            <h4>
                                500 PLN/year <br />
                                <small>*Save 100 PLN!</small>
                            </h4>
                        </div>
                        <div class="package" id="annual">
                            <h2>Student</h2>
                            <h4>
                                300 PLN/year <br />
                                <small>*Save 60 PLN!</small>
                            </h4>
                        </div>
                    </div>
                </div>
                <script src="form.js"></script>
            </div>
            <div>
                <p>
                   * All members will receive the above-mentioned benefits from
                    TSAP for the selected duration, whether they choose a
                    monthly or yearly subscription.Save money by choosing our
                    yearly plan!
                </p>
            </div>
        </div>
    </section>

    <!-- Call Action -->
    <div class="call-action style-1 content-inner-1">
        <div class="container">
            <div
                class="inner-action overlay-primary-dark"
                style="
                    background-image: url('images/background/bg1.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                "
            >
                <div class="row inner-content justify-content-center">
                    <div class="col-xl-6 col-lg-9">
                        <div class="section-head text-center">
                            <h2 class="title text-white">
                                Don’t miss our updates
                            </h2>
                        </div>
                        <form
                            class="dzSubscribe"
                            action="script/mailchamp.php"
                            method="post"
                        >
                            <div class="dzSubscribeMsg text-white"></div>
                            <div class="input-group">
                                <input
                                    name="dzEmail"
                                    required="required"
                                    type="email"
                                    class="form-control"
                                    placeholder="Enter your email address..."
                                />
                                <div class="input-group-addon">
                                    <button
                                        name="submit"
                                        value="Submit"
                                        type="submit"
                                        class="btn btn-secondary btn-rounded-lg"
                                    >
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
    <script>
        function togglePricing() {
            var monthlyPricing = document.getElementById("monthlyPricing");
            var yearlyPricing = document.getElementById("yearlyPricing");
            var toggleText = document.getElementById("toggleText");

            if (monthlyPricing.style.display === "none") {
                monthlyPricing.style.display = "block";
                yearlyPricing.style.display = "none";
                toggleText.innerText = "Switch to Yearly Pricing";
            } else {
                monthlyPricing.style.display = "none";
                yearlyPricing.style.display = "block";
                toggleText.innerText = "Switch to Monthly Pricing";
            }
        }
    </script>

    @endsection
</div>
