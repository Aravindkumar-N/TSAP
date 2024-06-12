@extends('layout') @section('content')

<section
    class="content-inner-3"
    style="
        background-image: url('images/background/bg10.jpg');
        background-position: center;
    "
>
    <div class="container">
        <div
            class="section-head text-center m-b30 wow fadeInUp"
            data-wow-delay="0.2s"
        >
            <h2 class="title text-capitalize text-white">
                Commerce Wing<br />of <br />Tamil Sangam Association of Poland
                (TSAP)
            </h2>
        </div>
        <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.4s">
            <p class="text-white">
                The commerce wing of TSAP is dedicated to fostering cross-border
                trade and investment between India and Poland. Our goal is to
                create a robust economic partnership by providing valuable
                resources and support to businesses in both regions.
            </p>
        </div> -->
    </div>
</section>

<!-- <div class="container">
    <div class="head2 wow fadeInUp" data-wow-delay="0.2s">
        <h2 class="">We offer a range of services, including:</h2>
    </div>
    <div class="row justify-content-center">
        <div class="container-invest">
            <div class="tile1">
                <div class="tile">
                    <div class="icon">
                        <img
                            src="path_to_your_svg_1.svg"
                            alt="Setting up Business"
                        />
                    </div>
                    <h3>Facilitating Trade Partnerships: </h3>
                    <p>
                    We connect Indian companies with potential trade partners in Poland, helping to establish strong, mutually beneficial business relationships
                    </p>
                    <a href="#">View more &gt;</a>
                </div>
                <div class="tile">
                    <div class="icon">
                        <img
                            src="path_to_your_svg_2.svg"
                            alt="Know Your Clearances"
                        />
                    </div>
                    <h3>Investment Opportunities:</h3>
                    <p>We provide detailed information on investment opportunities in Poland, assisting Indian companies in identifying and capitalizing on lucrative ventures</p>
                    <a href="#">View more &gt;</a>
                </div>
            </div>
            <div class="tile2">
                <div class="tile">
                    <div class="icon">
                        <img
                            src="path_to_your_svg_1.svg"
                            alt="Setting up Business"
                        />
                    </div>
                    <h3>Export/Import Guidance: </h3>
                    <p>
                    Our team offers comprehensive guidance on export and import rules and regulations, ensuring that businesses can navigate the complexities of international trade with ease.
                    </p>
                    <a href="#">View more &gt;</a>
                </div>
                <div class="tile">
                    <div class="icon">
                        <img
                            src="path_to_your_svg_2.svg"
                            alt="Know Your Clearances"
                        />
                    </div>
                    <h3>Support for Polish Companies:s</h3>
                    <p>We also assist Polish companies seeking to explore the Indian market, providing insights into trade opportunities, investment prospects, and regulatory requirements.</p>
                    <a href="#">View more &gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>

Services -->

<section id="section_resources">
    <div class="section_resources_container">
        <div class="resources_title">
            <!-- <div>
                <h2>
                    Commerce Wing of Tamil Sangam Association of Poland (TSAP)
                </h2>
            </div> -->
        </div>
        <p>
            The commerce wing of TSAP is dedicated to fostering cross-border
            trade and investment between India and Poland. Our goal is to create
            a robust economic partnership by providing valuable resources and
            support to businesses in both regions.
        </p>
        <div class="resources_cards_container">
            <div id="resources_trade_partnership_card" class="resources_card">
                <div class="resources_img_container">
                    <img
                        id="resources_trade_partnership_img"
                        src="images/logo/logo1.png"
                        class="resources_non_anim_img"
                        alt="Trade Partnership"
                    />
                </div>
                <h4>Facilitating Trade Partnerships</h4>
                <p>
                    We connect Indian companies with potential trade partners in
                    Poland, helping to establish strong, mutually beneficial
                    business relationships.
                </p>
            </div>
            <div
                id="resources_investment_opportunities_card"
                class="resources_card"
            >
                <div class="resources_img_container">
                    <img
                        id="resources_investment_opportunities_img"
                        src="images/logo/logo2.png"
                        class="resources_non_anim_img"
                        alt="Investment Opportunities"
                    />
                </div>
                <h4>Investment Opportunities</h4>
                <p>
                    We provide detailed information on investment opportunities
                    in Poland, assisting Indian companies in identifying and
                    capitalizing on lucrative ventures.
                </p>
            </div>
        </div>
        <div class="resources_cards_container">
            <div
                id="resources_export_import_guidance_card"
                class="resources_card"
            >
                <div class="resources_img_container">
                    <img
                        id="resources_export_import_guidance_img"
                        src="images/logo/logo3.png"
                        class="resources_non_anim_img"
                        alt="Export Import Guidance"
                    />
                </div>
                <h4>Export/Import Guidance</h4>
                <p>
                    Our team offers comprehensive guidance on export and import
                    rules and regulations, ensuring that businesses can navigate
                    the complexities of international trade with ease.
                </p>
            </div>
            <div
                id="resources_support_polish_companies_card"
                class="resources_card"
            >
                <div class="resources_img_container">
                    <img
                        id="resources_support_polish_companies_img"
                        src="images/logo/logo4.png"
                        class="resources_non_anim_img"
                        alt="Support for Polish Companies"
                    />
                </div>
                <h4>Support for Polish Companies</h4>
                <p>
                    We also assist Polish companies seeking to explore the
                    Indian market, providing insights into trade opportunities,
                    investment prospects, and regulatory requirements.
                </p>
            </div>
        </div>
        <div class="resources_description">
            <div class="res_des_title">
                <div>Your Strategic Business Partner</div>
            </div>
            <div class="res_des_para">
                <div>
                    We work hand-in-hand with investors to unlock investment
                    opportunities and facilitate a seamless investment journey
                    in Poland. We support investors from their initial enquiries
                    until the realisation of their projects.
                </div>
                <div>
                    For trade or investment-related queries, please write to our
                    Business Development Executive, Mr. Suresh Nallasivam. We
                    are here to support your business endeavors and facilitate
                    successful cross-border collaborations.
                </div>
                <a
                    class="btn res_des_para_button"
                    onclick="window.open('mailto:info@tamilsangam.pl')"
                    >Contact Us Now</a
                >
            </div>
        </div>
    </div>
</section>
@endsection
