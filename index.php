<!-- App Include Here -->

<?php include 'inc/app.php'; ?>

<!-- TrustBox script -->

<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<style>
.review {

    overflow: hidden;

    display: -webkit-box;

    -webkit-line-clamp: 4;

    /* Show only 4 lines */

    -webkit-box-orient: vertical;

    /* Adjust height to match the number of lines */

}



.show-more {

    cursor: pointer;

    color: #5c5ca7;

    text-decoration: underline;

}

.templateWrapper {

    / background-image: none;/ / background-color: #FFFFFF;/ padding: 26px !important;

    border-radius: 20px;

    / border: 1px solid #e7bb34;/ / background: #395ca1;/ background-image: url(../img/home/get-free-bg.webp) !important;

    background-repeat: no-repeat;

    background-size: 100% 100%;

    background-position: center;

}



a.google-trust-btn img {
    width: 140px;
    height: 46px;
    object-fit: scale-down;
}


a.google-trust-btn {

    margin-top: 18px;

}

/* Custom styles for slider */
.slider-expert {
    width: 100%;
}

.slider-expert .expert-img {
    position: relative;
    margin: 10px;

}

h3.meet-the-head {
    color: #0c1c3c;
    /* Fallback text color */
    text-transform: capitalize;
    background: linear-gradient(90deg, rgba(7, 24, 66, 1) 0%, rgba(22, 53, 121, 1) 45%, rgba(44, 83, 160, 1) 100%);
    -webkit-background-clip: text;
    /* Apply text as mask for background */
    color: transparent;
    /* Set text color as transparent */
    -webkit-text-fill-color: transparent;
    /* Fill text with background */
    font-family: "TomatoGrotesk-SemiBold";

}

.slider-expert .expert-img .overlay-content span {
    font-family: "TomatoGrotesk-Bold" !important;
    font-size: 20px !important;

}


.expert-img {
    position: relative;
    display: inline-block;
    overflow: hidden;
    /* Ensure overlay doesn't overflow */
    cursor: pointer;
}

.expert-img img {
    display: block;
    width: 100%;
    height: auto;
}


.slider-expert .expert-img .overlay-content {
    padding: 0px;
    font-family: "TomatoGrotesk-SemiBold";
}

.slider-expert .slick-prev,
.slider-expert .slick-next {
    position: absolute;
    top: 102%;
    transform: translateY(-50%);
    z-index: 1;
    font-size: 24px;
    color: #000;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.7);
    padding: 10px;
}

.slider-expert .slick-prev {
    left: -10px;
}

.slider-expert .slick-next {
    left: 40px;
}

.slider-expert .expert-img img {
    width: 100%;
    /* height: 460px; */
    object-fit: fill;
    border-radius: 20px;
}

.tempFrmWrapper {
    margin: 0px 0px -7px 0px !important;
    padding: 10px !important;

}

.templateWidth {
    padding: 0;
}

h4.we-para {
    font-size: 18px;
}

h4.we-para a {
    text-decoration: underline;
}

h4.we-para a:hover {
    color: #0c1c3c;
    text-decoration: underline;

}

a.we-the-btn.primary-button.mt-4 {
    background: rgb(7, 24, 66) !important;
    background: linear-gradient(90deg, rgba(7, 24, 66, 1) 0%, rgba(22, 53, 121, 1) 45%, rgba(44, 83, 160, 1) 100%) !important;
    color: #fff ! important;
}

.slider-expert .slick-prev,
.slider-expert .slick-next i {
    color: rgb(7, 24, 66) !important;

}

.rating-fivestar-top-rating-banner h4 {
    color: #fff;
    font-size: 18px;
}

.rating-fivestar-top-rating-banner h6.rating-number {
    color: #fff;
    position: relative;
    top: 2px;
    left: -10px;
}

.rating-fivestar-top-rating-banner .rating_star_wrapper {
    display: flex;
    align-items: start;
    justify-content: start;
    /* gap: 10px; */
}

.rating-fivestar-top-rating-banner .rating_star_wrapper h5 {
    font-size: 18px;
    font-family: "TomatoGrotesk-SemiBold";
    margin-left: 0px;
    color: #fff;
    margin-top: 5px;
}

.rating-fivestar-top-rating-banner .rating_star_wrapper-main {
    margin-top: 6px;
}

.rating-fivestar-top-rating-banner {
    position: relative;
}

ul.social-header li a {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 2px;
    flex-direction: unset;
}
</style>



<!-- banner start -->

<section class="banner banner-second position-relative" id="form-banner">

    <div class="container">

        <div class="row wrapper-rex">

            <div class="col-lg-12">

                <div class="establish text-center">

                    <div class="col-lg-3">

                        <h4 class="topheading">Simplify Your Company Formation Today</h4>

                    </div>

                    <h1 class="level-1 text-white secondary-semibold-font">Best Business Setup Consultant in Dubai, UAE

                    </h1>

                </div>

                <div class="row">

                    <div class="col-lg-4  order-lg-0 order-md-1 col-md-6 col-md-6">

                        <div class="top-wrapper-padding">

                           <!-- <p class="padding-service-content">Let us handle all the hassle while you start business in

                                Dubai.</p>-->

                            <div class="company-consultant-info-content position-relative">

                                <div class="div-wrapper-dotted">

                                    <img src="assets/img/home/dotted-border.webp" class="img-fluid" alt="">

                                </div>

                                <div class="row border-bottom-services">

                                    <div class="col-lg-6 col-6 mt-4">

                                        <div class="content-services">

                                            <img src="assets/img/icon-wrapper/Audit.png" class="img-fluid" alt="">

                                            <h4 class="services-heading-srap heading-font level-5 mt-2">Business License

                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-6 mt-4">

                                        <div class="content-services">

                                            <img src="assets/img/icon-wrapper/Vissa.png" class="img-fluid" alt="">

                                            <h4 class="services-heading-srap heading-font level-5 mt-2">Golden

                                                Visa

                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-6 mt-4">

                                        <div class="content-services">

                                            <img src="assets/img/icon-wrapper/Bank (1).png" class="img-fluid" alt="">

                                            <h4 class="services-heading-srap heading-font level-5 mt-2">Business

                                                Bank Account

                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-6 mt-4">

                                        <div class="content-services">

                                            <img src="assets/img/icon-wrapper/Busines.png" class="img-fluid"
                                                alt="">

                                            <h4 class="services-heading-srap heading-font level-5 mt-2">Auditing and Bookkeeping

                                                

                                            </h4>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row mt-4 justify-content-center">

                                <div class="col-lg-6 text-center">
                                    <div class="d-flex-arapperq">
                                        <a class="primary-button w-100 mt-2"
                                            href="https://anurajhraju-helensonsuae.zohobookings.com/#/helenandsonsconsultancyfzc">Book

                                            A Meeting<span class="ms-2 mt-1"><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12 mt-3">

                                    <div class="d-flex align-items-center gap-5 mt-3">
                                        <div class="rating-fivestar-top-rating-banner">
                                            <a href="" class="google-trust-btn">

                                                <img src="assets/img/google-logo.png" class="img-fluid" alt="">

                                            </a>
                                            <h4 class="ps-2 mt-3">Rating : 4.8</h4>
                                        </div>


                                        <div class="rating-fivestar-top-rating-banner">
                                            <a href="" class="google-trust-btn">

                                                <img src="assets/img/trust-logo.png" class="img-fluid" alt=""> </a>
                                            <h4 class=" mt-3">Rating : 4.8</h4>
                                        </div>


                                    </div>
                                    <!-- <div class="rating-fivestar-top-rating-banner">
                                        <div class=" d-flex align-items-center gap-2">
                                            <h4>Rating : 4.8</h4>
                                            <div class="rating_star_wrapper-main">
                                            </div>
                                            <h6 class="rating-number google_reviews_avg_ratings">
                                            </h6>
                                        </div>
                                        <div class="rating_star_wrapper">

                                            <h5 class="review google_reviews_count"></h5>
                                        </div>

                                    </div> -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 order-lg-1 order-md-2  p-0">

                        <div class="bg-wrapper">

                            <img src="assets/img/home/round-bg-wrapper.webp" class="img-fluid" alt="">

                        </div>

                        <div class="img-center">

                            <img src="assets/img/home/banner-center-girl.webp" class="img-fluid" alt="">

                        </div>

                    </div>

                    <div class="col-lg-4 order-lg-2 order-md-1  col-md-6 ps-3">

                        <div class="form-text ">

                            <!--<div class="d-flex border-get align-items-start justify-content-between">-->

                            <!--    <div>-->

                            <!--        <h4 class="text-form"> <span>Get Free </span>Consultation!</h4>-->

                            <!--        <p>Schedule a free consultation with the most renowned business setup consultant in-->

                            <!--            Dubai.</p>-->

                            <!--    </div>-->

                            <!--    <div class="company-employment-img">-->

                            <!--        <img src="assets/img/home/dedicated-team-icon.webp" class="img-fluid" alt="">-->

                            <!--    </div>-->

                            <!--</div>-->

                            <!--<form action="">-->

                            <!--    <div class="row">-->

                            <!--        <div class="col-lg-12">-->

                            <!--            <div class="form-group">-->

                            <!--                <label for="full-name">-->

                            <!--                    <h6>Name*</h6>-->

                            <!--                    <input type="text" id="full-name" class="form-control" placeholder="John Doe">-->

                            <!--                </label>-->

                            <!--            </div>-->

                            <!--        </div>-->

                            <!--        <div class="col-lg-12">-->

                            <!--            <div class="form-group">-->

                            <!--                <label for="countrySelect" class="form-label">-->

                            <!--                    <h6>Country*</h6>-->

                            <!--                    <div class="custom-select">-->

                            <!--                        <select class="form-select" id="countrySelect">-->

                            <!--                            <option value="usa">United States</option>-->

                            <!--                            <option value="uk">United Kingdom</option>-->

                            <!--                            <option value="canada">Canada</option>-->

                            <!--                            <option value="france">France</option>-->

                            <!-- Add more options as needed -->

                            <!--                        </select>-->

                            <!--                        <img id="flagImage" src="" alt="Flag">-->

                            <!--                        <i class="fa-solid fa-chevron-down"></i>-->

                            <!--                    </div>-->

                            <!--                </label>-->

                            <!--            </div>-->



                            <!--        </div>-->

                            <!--        <div class="col-lg-12">-->

                            <!--            <div class="form-group">-->

                            <!--                <label for="full-name">-->

                            <!--                    <h6>Email Address*</h6>-->

                            <!--                    <input type="email" id="full-name" class="form-control" placeholder="-----">-->

                            <!--                </label>-->

                            <!--            </div>-->

                            <!--        </div>-->

                            <!--        <div class="col-lg-12">-->

                            <!--            <div class="form-group">-->

                            <!--                <label for="full-name">-->

                            <!--                    <h6>Preferred business activity*</h6>-->

                            <!--                    <input type="text" id="full-name" class="form-control" placeholder="-----">-->

                            <!--                </label>-->

                            <!--            </div>-->

                            <!--        </div>-->

                            <!--        <div class="col-lg-12">-->

                            <!--            <div class="form-group">-->

                            <!--                <label for="countrySelect" class="form-label">-->

                            <!--                    <h6>Start Business Date*</h6>-->

                            <!--                    <div class="custom-select">-->

                            <!--                        <select class="form-select">-->

                            <!--                            <option value="usa">------</option>-->

                            <!--                            <option value="uk">United Kingdom</option>-->

                            <!--                            <option value="canada">Canada</option>-->

                            <!--                            <option value="france">France</option>-->

                            <!-- Add more options as needed -->

                            <!--                        </select>-->

                            <!--                        <i class="fa-solid fa-chevron-down"></i>-->

                            <!--                    </div>-->

                            <!--                </label>-->

                            <!--            </div>-->



                            <!--        </div>-->

                            <!--        <div class="col-lg-11 mx-auto">-->

                            <!--            <a class="primary-button btn-box-shadow w-100" href=""> Get a free Quote<span class="ms-2 mt-1"><i class="fa-solid fa-arrow-right"></i></span></a>-->

                            <!--        </div>-->

                            <!--    </div>-->

                            <!--</form>-->

                            <iframe aria-label='helensons.ae' frameborder="0"
                                style="height:670px;width:100%;border:none;"
                                src='https://forms.zohopublic.com/helenandsonsconsultancyfzc/form/GETAFREECONSULTATIONBizsetup/formperma/GTYUNIPdiWzoBDJrvQvgUTLR8EtqZBKej6yqAmviVpw'></iframe>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- banner end -->

<!--  -->

<section class="banking-section banking-stories">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 text-center mx-auto">

                <h2 class="mb-3 secondary-semibold-font level-2">Our Success Stories: Trusted by Leading Brands</h2>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-11 mx-auto">

                <div class="row align-items-center slider-social mt-5">

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/aryav.webp" class="img-fluid" alt="Aryav Global Stores">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/billion-ztech.webp" class="img-fluid"
                                alt="Billion Ztech">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/clixer-menerals.webp" class="img-fluid"
                                alt="Clixer Menirals Fzco">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/globel-talks.webp" class="img-fluid" alt="Globel Talks">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/gulf-accounting.png" class="img-fluid"
                                alt="Gulf Accounting Solutions">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/llc.webp" class="img-fluid" alt="Fz llc">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/ln.webp" class="img-fluid" alt="LN">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/p-and-c.webp" class="img-fluid" alt="p and c">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/phillips.webp" class="img-fluid" alt="phillips">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/ro-p.webp" class="img-fluid" alt="rop">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/royal-cargo.webp" class="img-fluid" alt="royal cargo">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/speed-and-care.webp" class="img-fluid"
                                alt="speed and care">

                        </div>

                    </div>

                    <div class="col-lg-2">

                        <div class="over-effect-image">

                            <img src="assets/img/home/companies/talia.webp" class="img-fluid" alt="talia">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--  -->



<section class="planing-to-start-sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 text-start mx-auto">

                <h3 class="mb-3 secondary-semibold-font level-3"> From Startup to Success: Successfully Build Your

                    Business in Dubai</h3>

                <p class="text-darkwrappper ">We handle all the challenges of having your company setup in Dubai so that you can concentrate on what’s required for you managing and setting up the business. </p>

                <ul class="list-experience mt-3">

                    <li class="d-flex align-items-start gap-2 ">

                        <h5 class="secondary-regular-font level-7 ">• Streamlined Setup </h5>

                    </li>

                    <li class="d-flex align-items-start gap-2">

                        <h5 class="secondary-regular-font level-7 ">• Legal & compliance sorted

                        </h5>

                    </li>

                </ul>

                <div class="wrapper-cost-second-sec">

                    <a class="primary-button mt-4" href="#faq-sec-file">Get Free Consultation<span class="ms-2 mt-1"><i
                                class="fa-solid fa-arrow-right"></i></span></a>

                    <!-- <a class="primary-button second-wrap mt-4" href="/" data-bs-toggle="modal"
                        data-bs-target="#costCalculatorModal">Cost

                        Calculator<span class="ms-2 mt-1"><i class="fa-solid fa-arrow-right"></i></span></a> -->
                    <a class="primary-button second-wrap mt-4" href="https://forms.zohopublic.com/helenandsonsconsultancyfzc/form/FreeTrial1/formperma/NMPgy2MPAZg7G9ubGaMVWh7kDID2wFhioIs9Y_wZpaI">Cost
                        Calculator<span class="ms-2 mt-1"><i class="fa-solid fa-arrow-right"></i></span></a>

                </div>

            </div>

            <div class="col-lg-6 ">

                <div class="img-updown ">

                    <div class="row">

                        <div class="col-lg-6 col-md-6">

                            <img src="assets/img/home/Business-setup-consultant-in-dubai-helen-sons.webp" class="img-fluid" alt="planing img">

                        </div>

                        <div class="col-lg-6 col-md-6">

                            <img src="assets/img/home/Business-setup-consultant-in-dubai.webp" class="top-planing-position img-fluid"
                                alt="planing img">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--  -->



<section class="helenson-experience-sec ">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="img-frame">

                    <img src="assets/img/home/fram2.webp" class="img-fluid w-100" alt="fram2">

                </div>

            </div>

            <div class="col-lg-7">

                <h4 class="inverted-comma-content"> <img src="assets/img/icon-wrapper/right.png" class="img-fluid comma"
                        alt=""> You Have the
                    Idea, Helen and Sons have the experience. <img src="assets/img/icon-wrapper/left.png"
                        class="img-fluid comma" alt="left">
                </h4>
                <div class="d-flex align-items-start gap-3 align-responisev-wrap">

                    <ul class="list-experience mt-3">

                        <li class="d-flex align-items-start gap-2 "><i class="fa-solid fa-check"></i>

                            <h5 class="secondary-regular-font level-7 ">At Helen and Sons, we focus on simplifying

                                business setup in the UAE so you can concentrate on your strategy.</h5>

                        </li>

                        <li class="d-flex align-items-start gap-2"><i class="fa-solid fa-check"></i>

                            <h5 class="secondary-regular-font level-7 ">Helen and Sons, award-winning Dubai consultants,

                                ensure swift and accurate business setups with seasoned expertise.

                            </h5>

                        </li>

                    </ul>

                    <img src="assets/img/home/fram1.webp" class="img-fluid" alt="fram1">

                </div>

            </div>

        </div>

    </div>

</section>

<!--  -->



<!--  -->

<section class="banking-section mb-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 text-center mx-auto">

                <h3 class="mb-3 secondary-semibold-font level-3">Registered Business Partners</h3>

                <p class="text-darkwrappper ">Helen and Sons is one of the most trusted business setup company in Dubai

                    and there’s a reason behind it. Our long list of happy clients is the testament to our success.</p>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-11 mx-auto">

                <div class="row align-items-center slider-social mt-5">

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/ajman-free-zone.webp" class="img-fluid"
                            alt="ajman free zone">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/dmcc-logo-bg.webp" class="img-fluid" alt="dmcc">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/dubai-airport-free-zone.webp" class="img-fluid"
                            alt="dubai airport free zone">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/hfza-logo.webp" class="img-fluid" alt="hfza">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/jafza-logo.webp" class="img-fluid" alt="jafza">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/logo-ifza.webp" class="img-fluid" alt="ifza">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/meydan-free-zone-logo.webp" class="img-fluid"
                            alt="meydan free zone">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/rakez-log-english.webp" class="img-fluid"
                            alt="rakez">

                    </div>

                    <div class="col-lg-2 over-effect-image">

                        <img src="assets/img/home/register-partner/saifzone.webp" class="img-fluid" alt="saifzone">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--  -->

<section class="testemonial-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="img-tes">

                    <img src="assets/img/testemonial-img.webp" class="img-fluid" alt="testemonial">

                </div>

            </div>

            <div class="col-lg-7">

                <div class="tes-content">

                    <div class="testemoial-arrow">

                        <img src="assets/img/testemonial-right.webp" class="img-fluid" alt="testemonial">

                    </div>

                    <h4 class="level-3 mb-4">Start your business in Dubai with expert support from Helen and Sons Consultancy.</h4>

                   <!-- <p>Navigated a dynamic market, harnessed innovation, and built a thriving business in the heart of a

                        global hub.

                    </p> --><p>We help navigate the entire business setup process, ensuring compliance and long-term success in the UAE.</p> 

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="d-flex align-items-center gap-3">

                                <a class="primary-button get-free-wrapper mt-4" href="#faq-sec-file">Get Free

                                    Consultation<span class="ms-2 mt-1"><i
                                            class="fa-solid fa-arrow-right"></i></span></a>

                                <span class="line-wrapper"></span>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>

</section>

<!--  -->

<!--  -->
<section class="meet-the-expert pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="content-heading text-start">
                    <h3 class="meet-the-head mb-3  level-2">Meet the Professionals.
                    </h3>
                    <h4 class="we-para">We Are <a href=""> leading experts in business setup consultancy in the UAE.</a>
                    </h4>
                    <a class="we-the-btn primary-button mt-4" href="">Find More<span class="ms-2 mt-1"><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="slider-expert">
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/dinesh.png" class="img-fluid" alt="Dinesh">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/subi-deena.png" class="img-fluid" alt="Subi Deena">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/rumana.png" class="img-fluid" alt="Rumana">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/saravjeet.png" class="img-fluid" alt="Saravjeet">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/ashik.png" class="img-fluid" alt="Ashik">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/anushiya.png" class="img-fluid" alt="Anushiya">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/ranjitha.png" class="img-fluid" alt="Ranjitha">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/vaishnav.png" class="img-fluid" alt="Vaishnav">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/rizwan.png" class="img-fluid" alt="Rizwan">
                    </div>
                    <div class="expert-img">
                        <img src="assets/img/home/expert-img/kumaran.png" class="img-fluid" alt="kumaran">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->

<!--  -->

<section class="what-we-do position-relative">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 text-center mx-auto">

                <div class="wrapper-main-linear-bg">

                    <h4 class="topheading width-helenson-wrap">Everything You Need to Know About  Business Setup</h4>

                </div>

                <h3 class="mb-3 secondary-semibold-font level-3 dark-wrap-color">Our Complete Range of Services to Help You Successfully Setup Your Business in Dubai</h3>

                <p class="text-darkwrappper mb-5">What do we offer at Helen and Sons? We simplify the process of Starting a business in the UAE, helping you save time, money, and stress. Here’s what you’re getting when you join hands with us.</p>

            </div>

        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card">
                    <img src="assets/img/icon-h/business1.png" data-original-src="assets/img/icon-h/business1.png"
                        data-hover-src="assets/img/icon-h/business.png" class="card-image img-fluid" alt="">
                    <h4>Business setup in UAE</h4>
                    <p>We’ll help you in establishing your business in UAE. Whether in Mainland, Free Zone, or Offshore,
                        we’ll help you get it incorporated without breaking a sweat.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card">
                    <img src="assets/img/icon-h/customer-service1.png"
                        data-original-src="assets/img/icon-h/customer-service1.png"
                        data-hover-src="assets/img/icon-h/customer-service.png" class="card-image img-fluid"
                        alt="customer service">
                    <h4>PRO Services</h4>
                    <p>Managing government documentations and processes could be painstaking when you start a business
                        in the UAE. With our PRO services, it’ll be a breeze.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card" onclick="toggleActive(this)">
                    <img src="assets/img/icon-h/bank-account2.png"
                        data-original-src="assets/img/icon-h/bank-account2.png"
                        data-hover-src="assets/img/icon-h/bank-account1.png" class="card-image img-fluid"
                        alt="bank account">
                    <h4>Bank Account Opening</h4>
                    <p>We’ll assist you in opening a bank account easily to streamline your company formation in Dubai.
                        It is especially helpful for foreign investors.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card">
                    <img src="assets/img/icon-h/vat2.png" data-original-src="assets/img/icon-h/vat2.png"
                        data-hover-src="assets/img/icon-h/vat1.png" class="card-image img-fluid" alt="vat">
                    <h4>Corporate TAX and VAT</h4>
                    <p>Break free from the intricacies of corporate tax and VAT with the best business setup consultant
                        in Dubai on your side.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card">
                    <img src="assets/img/icon-h/services2.png" data-original-src="assets/img/icon-h/services2.png"
                        data-hover-src="assets/img/icon-h/services1.png" class="card-image img-fluid"
                        alt="services img">
                    <h4>Legal Services</h4>
                    <p>Helen and Sons will be your legal experts, tackling legal issues and protecting your business
                        interests.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card">
                    <img src="assets/img/icon-h/accounting2.png" data-original-src="assets/img/icon-h/accounting2.png"
                        data-hover-src="assets/img/icon-h/accounting1.png" class="card-image img-fluid"
                        alt="accounting img">
                    <h4>Accounting & Payroll</h4>
                    <p>Focus on building your business and let the top business setup company in Dubai handle your
                        accounting and payroll processes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card">
                    <img src="assets/img/icon-h/cloud-app2.png" data-original-src="assets/img/icon-h/cloud-app2.png"
                        data-hover-src="assets/img/icon-h/cloud-app1.png" class="card-image img-fluid" alt="cloud app">
                    <h4>Compliance Services</h4>
                    <p>Rely on the experts for regulatory and compliance requirements and operate your business in Dubai
                        worry-free.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="what-we-card">
                    <img src="assets/img/icon-h/visa1.png" data-original-src="assets/img/icon-h/visa1.png"
                        data-hover-src="assets/img/icon-h/visa.png" class="card-image img-fluid" alt="visa">
                    <h4>Golden Visa</h4>
                    <p>With our expert assistance, you can use UAE’s Golden Visa program to your advantage to get
                        residency for you and your family.</p>
                </div>
            </div>
        </div>


</section>

<!--  -->

<section class="setup-in-dubai">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 mx-auto text-center tes-content">

                <h4 class="heading-let">Simple Process for Successful Business Setup in Dubai</h4>

                <p>Begin your Dubai business journey with Helen & Sons Business Consultancy. We simplify the process,

                    making it both simple and cost-effective for you! Your company can be registered in just 24 hours.

                    Here’s how we help:</p>



            </div>

        </div>

        <div class="row position-relative mt-4">

            <div class="col-lg-10 mx-auto">

                <img src="assets/img/home/dubaisetup-img2.webp" class="img-fluid position-n set-img" alt="dubaisetup">

            </div>

            <div class="position-content-img">

                <div class="row">

                    <div class="col-lg-9 mx-auto">

                        <div class="wrapper-list-setup-in-dubai">

                            <ul>

                                <li>

                                    <div class="step-wrapper">

                                        <div class="step-number">

                                            <h6>Step</h6>

                                            <h3>01</h3>

                                        </div>

                                        <div class="documnet-content">

                                            <h4>Document Preparation</h4>

                                            <p>We will help you navigate the paperwork and make it simple for you. We'll

                                                also

                                                expertly prepare all required company registration forms and legal

                                                documents,

                                                providing a smooth and streamlined setup experience.</p>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="step-wrapper">

                                        <div class="documnet-content">

                                            <h4>Business Licensing</h4>

                                            <p>Our expert consultant will help you select the optimal license for your

                                                business goals. Our team will also guide you through the application

                                                process, ensuring everything is filed correctly and promptly for swift

                                                approval.</p>

                                        </div>

                                        <div class="step-number">

                                            <h6>Step</h6>

                                            <h3>02</h3>

                                        </div>

                                    </div>

                                </li>

                                <li class="position-wrt">

                                    <div class="step-wrapper">

                                        <div class="step-number">

                                            <h6>Step</h6>

                                            <h3>03</h3>

                                        </div>

                                        <div class="documnet-content">

                                            <h4>Visa Services</h4>

                                            <p>Get secure visas for your team with ease. We'll manage the process,

                                                facilitate residence visa applications, and ensure timely issuance of

                                                employment permits for a hassle-free transition.</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="position-wrt">

                                    <div class="step-wrapper">

                                        <div class="documnet-content">

                                            <h4> Bank Account Setup</h4>

                                            <p>Open a corporate bank account seamlessly. We'll guide you through the

                                                requirements, handle communication with the bank, and ensure a swift and

                                                successful setup.</p>

                                        </div>

                                        <div class="step-number">

                                            <h6>Step</h6>

                                            <h3>04</h3>

                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--  -->
<!--  -->

<section class="plans-sec position-relative mt-5">

    <div class="wrapper-round">

        <img src="assets/img/round-wrapper.webp" class="img-fluid" alt="round-wrapper">

    </div>

    <div class="wrapper-round1">

        <img src="assets/img/round-wrapper1.webp" class="img-fluid" alt="round-wrapper1">

    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <h3 class="mb-3 secondary-semibold-font level-3">Planning To Start a Business in Dubai? Explore Your

                    Best Options.

                </h3>

            </div>

            <div class="col-lg-6">

                <p class="text-darkwrappper mb-5">Company formation in Dubai comes with a lot of complexity. You have to

                    make critical decisions like choosing the right jurisdiction and deciding between free zone,

                    mainland, and offshore setups. Make one wrong decision, and you have to start all over again.

                    <br>

                    <br>That’s where Helen and Sons, a prominent business setup company in Dubai, comes in. We will help

                    you make those critical decisions and start business in Dubai.

                </p>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6">

                <div class="plan-zone-wrapper blur-wrapper-zone">

                    <div class="img-wrapper-plan">

                        <img src="assets/img/dubaiskyline.webp" class="img-fluid" alt="dubaiskyline">

                        <div class="overlay-text blue">

                            <h4 class="text-white"> Mainland</h4>

                            <p class="level-6 heading-font text-white  text-center">Tap into the unrestricted & vast

                                market of mainland Dubai. Business setup in Dubai mainland will give you the opportunity

                                to work with government entities with no minimum capital requirements to set up.

                            </p>

                        </div>

                    </div>

                    <div class="free-zone-wrap">

                        <div class="position-relative h-100">

                            <div class=" overlay-wrapper">

                            </div>

                            <div class="text-padding">

                                <div
                                    class=" bg-free-zonewrap d-flex align-items-center justify-content-center mb-1 gap-4">

                                    <div class="rotate-wrapper">

                                        <h5 class="text-white">package</h5>

                                    </div>

                                    <h3 class="text-white">MAINLAND COMPANY FORMATION</h3>

                                </div>

                                <p class="text-white">Free Consultancy </p>

                                <h2 class="price text-white">20,800 <span class="small-wrap text-white"> AED</span></h2>

                                <h4 class="price text-white">Company formation</span></h4>

                                <ul class="list-zone">

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Business License</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Investor Visa </p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">MOA </p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Lease Agreement </p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Medical & Emirates ID </p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">100% ownership</p>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="plan-zone-wrapper">

                    <div class="img-wrapper-plan">

                        <img src="assets/img/dubaiskyline1.webp" class="img-fluid" alt="dubaiskyline1">

                        <div class="overlay-text">

                            <h4 class="text-white"> Free Zone</h4>

                            <p class="level-6 heading-font text-white  text-center">Enjoy special no currency

                                restrictions, simplified import/export processes, and special tax exemptions when you do

                                business setup in Dubai Freezone. Perfect for foreign investors

                            </p>

                        </div>

                    </div>

                    <div class="free-zone-wrap">

                        <div class="position-relative h-100">

                            <div class="overlay-wrapper">

                            </div>

                            <div class="text-padding">

                                <div class="popular-heading">

                                    <h5 class="text-white">Popular</h5>

                                </div>

                                <div
                                    class=" bg-free-zonewrap d-flex align-items-center justify-content-center mb-1 gap-4">

                                    <div class="rotate-wrapper">

                                        <h5 class="text-white">promotion</h5>

                                    </div>

                                    <h3 class="text-white">FOR FREEZONE</h3>

                                </div>

                                <p class="text-white">Free Consultancy </p>

                                <h2 class="price text-white">12,000 <span class="small-wrap text-white"> AED</span></h2>

                                <h4 class="price text-white">Company formation</span></h4>

                                <ul class="list-zone">

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Business License</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Shared Desk</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Investor Visa </p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Change The Status </p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Medical & Emirates ID </p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">100% ownership</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Installment plan </p>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="plan-zone-wrapper blur-wrapper-zone">

                    <div class="img-wrapper-plan">

                        <img src="assets/img/dubaiskyline2.webp" class="img-fluid" alt="dubaiskyline2">

                        <div class="overlay-text blue">

                            <h4 class="text-white"> Offshore</h4>

                            <p class="level-6 heading-font text-white  text-center">Want to Maximize global asset

                                protection and tax efficiency? An offshore business setup in Dubai is your best option.

                                It’s ideal for international asset protection, tax optimization, and confidentiality.

                            </p>

                        </div>

                    </div>

                    <div class="free-zone-wrap">

                        <div class="position-relative h-100">

                            <div class="overlay-wrapper">

                            </div>

                            <div class="text-padding">

                                <div
                                    class=" bg-free-zonewrap d-flex align-items-center justify-content-center mb-1 gap-4">

                                    <div class="rotate-wrapper">

                                        <h5 class="text-white">0 visa</h5>

                                    </div>

                                    <h3 class="text-white">FOR OFFSHORE</h3>

                                </div>

                                <!-- <p class="text-white">Free Consultation </p> -->

                                <h2 class="price text-white">7,000 <span class="small-wrap text-white"> AED</span></h2>

                                <h4 class="price text-white">Company formation</span></h4>

                                <ul class="list-zone">

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Incorporate Certificate</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">MOA</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Share Certificate</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">100% ownership</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Pro Services</p>

                                    </li>

                                    <li class="d-flex align-items-center gap-3">

                                        <img src="assets/img/arrow-round.webp" class="img-fluid" alt="arrow-round">

                                        <p class="text-white">Zero Visa</p>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-3 mx-auto">

                <a class="primary-button  mt-lg-5 mt-md-5 mt-2" href="#form-banner">Get Free Consultation<span
                        class="ms-2 mt-1"><i class="fa-solid fa-arrow-right"></i></span></a>

            </div>

        </div>

    </div>

</section>

<!--  -->

<section class="consultant-indubai-sec planing-to-start-sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <img src="assets/img/home/consultant-building.webp" class="img-fluid" alt="consultant-building">

            </div>

            <div class="col-lg-6 text-start mx-auto">

                <h3 class="mb-3 secondary-semibold-font level-3"> Experienced Business Setup Consultant in Dubai for a

                    Seamless Setup</h3>

                <p class="text-darkwrapper"> Start strong with personalized guidance. Our business setup experts handle

                    the complexities so you can focus on your vision.</p>

                <div class="faqs-content-wrapper">

                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingFour">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">

                                    <h4 class="secondary-semibold-font level-5 dark-wrap-color">Tailored Solutions for

                                        Your Unique Business Needs</h4>

                                </button>

                            </h2>

                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body pt-0">

                                    <p class="level-7 heading-font text-darkwrapper mt-2">Helen and Sons understands the

                                        unique nature of your business. Our consultants craft a setup strategy tailored

                                        to your specific needs, ensuring a foundation for success.</p>

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingFive">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">

                                    <h4 class="secondary-semibold-font level-5 dark-wrap-color">Simplifying UAE

                                        Regulations For You</h4>

                                </button>

                            </h2>

                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <p class="level-7 heading-font text-darkwrapper mt-2">We simplify the process. Our

                                        in-depth knowledge of UAE regulations ensures a smooth and compliant setup,

                                        allowing you to focus on growth.</p>

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingSix">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">

                                    <h4 class="secondary-semibold-font level-5 dark-wrap-color">Professional Advice at

                                        Every Turn</h4>

                                </button>

                            </h2>

                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <p class="level-7 heading-font text-darkwrapper mt-2"> From start to launch, our

                                        experienced consultants offer support and insights. Make informed decisions and

                                        achieve your business setup goals with confidence.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mt-4">

                    <div class="col-lg-6">

                        <a class="primary-button w-100 mt-2" href="#form-banner">Get Free Consultation<span
                                class="ms-2 mt-1"><i class="fa-solid fa-arrow-right"></i></span></a>

                    </div>

                    <div class="col-lg-6">

                         <a class="primary-button bg-blue-wrapper-cost w-100 mt-2"
                            href="https://forms.zohopublic.com/helenandsonsconsultancyfzc/form/FreeTrial1/formperma/NMPgy2MPAZg7G9ubGaMVWh7kDID2wFhioIs9Y_wZpaI " data-bs-toggle="modal"
                            data-bs-target="#costCalculatorModal">Cost Calculator<span class="ms-2 mt-1"><i
                                    class="fa-solid fa-arrow-right"></i></span></a> 
                        <!-- <a class="primary-button bg-blue-wrapper-cost w-100 mt-2"
                            href="https://zfrmz.com/m96AM59QuItyYMupAo61">Cost Calculator<span class="ms-2 mt-1"><i
                                    class="fa-solid fa-arrow-right"></i></span></a> -->

                    </div>

                </div>

            </div>





        </div>

    </div>

</section>

<!--  -->



<section class="founder-massage-sec">

    <div class="container">

        <div class="row founder-massage align-items-center">

            <div class="col-lg-4">

                <div class="tes-content founder-content">

                    <h4>Founder's message</h4>

                    <h5>Anna Magritha Duplessis - Founder</h5>

                    <div class="row">

                        <div class="col-lg-9">

                            <span class="line-wrapper"></span>

                        </div>

                        <div class="col-lg-3">

                            <div class="testemoial-arrow1">

                                <img src="assets/img/testemonial-right.webp" class="img-fluid" alt="testemonial-right">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 position-relative h-100">

                <div class="founder-image-position">

                    <img src="assets/img/founder-image.webp" class="img-fluid" alt="founder-image">

                </div>

            </div>

            <div class="col-lg-4">

                <img src="assets/img/home/content-wrapper-testemonial.webp" class="img-fluid"
                    alt="content-wrapper-testemonial">

            </div>

        </div>

    </div>

</section>

<!--  -->

<section class="top-rating ">

    <div class="container">

        <div class="row mt-2">

            <div class="col-lg-12 mx-auto">

                <div class="row">

                    <div class="col-lg-12 col-md-12">

                        <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc"
                            data-businessunit-id="65c75b378fb576cb2ca0abc3" data-style-height="52px"
                            data-style-width="100%">

                            <a href="https://www.trustpilot.com/review/helensonsuae.com" target="_blank"
                                rel="noopener">Trustpilot</a>

                        </div>
                        <div class="elfsight-app-02e86e54-d899-4dc7-9fe6-4acad8bc5549" data-elfsight-app-lazy></div>
                    </div>

                    <div class="col-lg-12">

                        <!-- <section class="top-rating">

                            <div class="container">

                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="row bg-white align-items-center py-3">

                                            <div class="col-lg-6">

                                                <div class="top-rating-wrapper">

                                                    <div class="google-star-wrapper">

                                                        <h4 class="google-colors-text">

                                                            <span class="red">G</span>

                                                            <span class="yellow">o</span>

                                                            <span class="blue">o</span>

                                                            <span class="red">g</span>

                                                            <span class="green">l</span>

                                                            <span class="blue">e</span>

                                                        </h4>

                                                    </div>

                                                    <div class="rating-fivestar-top-rating">

                                                        <h4>Rating</h4>

                                                        <div class="rating_star_wrapper">

                                                            <h6 class="rating-number google_reviews_avg_ratings">
                                                            </h6>

                                                            <div class="rating_star_wrapper-main">

                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                            </div>
                                                            <h5 class="review google_reviews_count">46 Reviews</h5>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-2"></div>

                                            <div class="col-lg-4">

                                                <div class="btn-write-wrapper">

                                                    <a class="btn-write p-0 py-2" target="_blank"
                                                        href="https://www.google.com/maps/place/Helen+%26+Sons+Consultancy+FZC+-+Business+Setup+Consultant+in+Dubai,+UAE/@25.3292165,55.4961908,17z/data=!4m8!3m7!1s0x3e5f58ab08a048bf:0x4f4a3f294fa23a71!8m2!3d25.3292117!4d55.4987657!9m1!1b1!16s%2Fg%2F11f3x6sp4r?entry=ttu">Write
                                                        a Review</a>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row mt-2 google_reviews_listing ">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section> -->

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="google-review-main">
                                    <div class="google-review">
                                        <h4 class="google-colors-text">
                                            <span class="red">G</span>
                                            <span class="yellow">o</span>
                                            <span class="blue">o</span>
                                            <span class="red">g</span>
                                            <span class="green">l</span>
                                            <span class="blue">e</span>
                                        </h4>
                                        <div class="rating_star_wrapper-main">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="base-content">
                                        <a
                                            href="https://www.google.com/maps/place/Helen+%26+Sons+Consultancy+FZC+-+Business+Setup+Consultant+in+Dubai,+UAE/@25.3292165,55.4961908,17z/data=!4m8!3m7!1s0x3e5f58ab08a048bf:0x4f4a3f294fa23a71!8m2!3d25.3292117!4d55.4987657!9m1!1b1!16s%2Fg%2F11f3x6sp4r?entry=ttu">
                                            <h5> <span class="under-line"> GOOGLE Review
                                                </span></h5>
                                        </a>
                                    </div>
                                    <ul class="list-review-google">
                                        <li><i class="fa-solid fa-handshake"></i>
                                            <h4>Review 64</h4>
                                        </li>
                                        <li> <i class="fa fa-star" aria-hidden="true"></i>
                                            <h4>4.8</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="shape-wrapper">
                                    <div class="d-flex gap-10 justify-content-center">
                                        <div class="shape-star">
                                            <img src="assets/img/shape.png" class="img-fluid" alt="">
                                        </div>
                                        <h4>Trustpilot</h4>
                                    </div>
                                    <div class="fivestar-wrapper">
                                        <img src="assets/img/shape1.webp" class="img-fluid" alt="shape1">
                                        <img src="assets/img/shape1.webp" class="img-fluid" alt="shape1">
                                        <img src="assets/img/shape1.webp" class="img-fluid" alt="shape1">
                                        <img src="assets/img/shape1.webp" class="img-fluid" alt="shape1">
                                        <img src="assets/img/shape1.webp" class="img-fluid" alt="shape1">
                                    </div>
                                    <div class="base-content">
                                        <a href="https://www.trustpilot.com/evaluate/helensonsuae.com">
                                            <h5> <span class="under-line"> TRUST PILOT </span></h5>
                                        </a>
                                    </div>
                                    <ul>
                                        <li><i class="fa-solid fa-handshake"></i>
                                            <h4>Review 50</h4>
                                        </li>
                                        <li> <i class="fa fa-star" aria-hidden="true"></i>
                                            <h4>4.8</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!--  -->



<!--  -->

<section class="banking-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 text-center mx-auto">

                <h3 class="mb-3 secondary-semibold-font level-3">Banking Partners</h3>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-11 mx-auto">

                <div class="row align-items-center slider-social mt-5">

                    <div class="col-lg-2 over-effect-image bg-white">

                        <img src="assets/img/home/banks/dubai-islamic-bank.webp" class="img-fluid"
                            alt="Dubai Islamic Bank">

                    </div>

                    <div class="col-lg-2 over-effect-image bg-white">

                        <img src="assets/img/home/banks/emirates-islamic.webp" class="img-fluid" alt="Emirates Islamic">

                    </div>

                    <div class="col-lg-2 over-effect-image bg-white">

                        <img src="assets/img/home/banks/emirates-nbd.webp" class="img-fluid" alt="Emirates Nbd">

                    </div>

                    <div class="col-lg-2 over-effect-image bg-white">

                        <img src="assets/img/home/banks/fab.webp" class="img-fluid" alt="Fab">

                    </div>

                    <div class="col-lg-2 over-effect-image bg-white">

                        <img src="assets/img/home/banks/mashreq-Bank.webp" class="img-fluid" alt="Mashreq Bank">

                    </div>

                    <div class="col-lg-2 over-effect-image bg-white">

                        <img src="assets/img/home/banks/sharjah-islamic-bank.webp" class="img-fluid"
                            alt="Sharjah Islamic Bank">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--  -->

<!-- faqs -->

<section class="faq-section planing-to-start-sec" id="faq-sec-file">

    <div class="container">

        <div class="row align-items-start">

            <div class="col-lg-7 mt-5">

                <div class="faqs-content-wrapper">

                    <h4 class="heading-let level-4 mb-2 text-white text-center">Choose the Right Setup Plan for Your

                        Business in UAE</h4>

                    <p class=" heading-font text-white mb-5  text-center">Choose the path to success in Dubai

                        with

                        Helen &

                        Sons. Our tailored setup plans ensure a seamless

                        launch, strategic growth, and full compliance within the UAE's regulatory framework. Let us

                        guide you on your expansion journey – contact us to discuss the cost of business setup in Dubai.

                    </p>

                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingSeven">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">

                                    <h4 class="secondary-semibold-font level-6 text-white">How much does it cost to set

                                        up a business in Dubai?</h4>

                                </button>

                            </h2>

                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body pt-0">

                                    <p class="level-7 heading-font text-white mt-2">Business setup costs in Dubai vary

                                        based on the unique nature of your structure, activities, and requirements.

                                        Contact a business setup consultant in Dubai for a customized quote.</p>

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingEight">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">

                                    <h4 class="secondary-semibold-font level-6 text-white">Can a foreigner set up a

                                        business in Dubai? </h4>

                                </button>

                            </h2>

                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <p class="level-7 heading-font text-white mt-2">Yes! Dubai offers flexible options

                                        for foreigners to establish businesses. Explore mainland, free zone, and

                                        offshore company formation in Dubai.</p>

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingNine">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                    aria-expanded="false" aria-controls="collapseNine">

                                    <h4 class="secondary-semibold-font level-6 text-white">Can you own 100% of a

                                        business in Dubai? </h4>

                                </button>

                            </h2>

                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <p class="level-7 heading-font text-white mt-2"> Yes, certain free zones and

                                        business structures allow 100% foreign ownership. Consult with a business setup

                                        company in Dubai to find the best fit.</p>

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingTen">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                    aria-expanded="false" aria-controls="collapseTen">

                                    <h4 class="secondary-semibold-font level-6 text-white">How can I set up my business

                                        in Dubai? </h4>

                                </button>

                            </h2>

                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <p class="level-7 heading-font text-white mt-2"> Connect with a business setup

                                        consultant in Dubai to guide you through the process of choosing your business

                                        structure, licensing, visas, and starting your business in Dubai.</p>

                                </div>

                            </div>

                        </div>

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingEleven">

                                <button class="accordion-button level-7 primary-semibold-font text-color collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                    aria-expanded="false" aria-controls="collapseEleven">

                                    <h4 class="secondary-semibold-font level-6 text-white">Who is the best business

                                        setup consultant in UAE?</h4>

                                </button>

                            </h2>

                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <p class="level-7 heading-font text-white mt-2"> Helen and Sons is one of the most

                                        prominent business setup consultants in UAE that will help you in everything

                                        from business inception to legal and compliance. </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-5">
                <iframe aria-label='helensons.ae' frameborder="0" style="height:670px;width:100%;border:none;"
                    src='https://forms.zohopublic.com/helenandsonsconsultancyfzc/form/GETAFREECONSULTATIONBizsetup/formperma/GTYUNIPdiWzoBDJrvQvgUTLR8EtqZBKej6yqAmviVpw'></iframe>
            </div>
        </div>

    </div>

</section>



<!-- faqs -->

<!-- Modal -->

<div class="modal fade" id="costCalculatorModal" tabindex="-1" aria-labelledby="costCalculatorModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-body">

                <div class="row cost-calaculator-form text-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>

                    <div class="col-lg-12">

                        <div class="">

                            <h5 class="modal-title information-personal-heading m-0" id="costCalculatorModalLabel">Cost

                                Calculator

                            </h5>

                            <p>The calculator will generate the estimated Business Setup Cost as a calculated result.

                            </p>

                            <form action="">

                                <div class="custom-select mb-3 mt-4">

                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>Pick the Category</option>

                                        <option value="1">Option 1</option>

                                        <option value="2">Option 2</option>

                                        <option value="3">Option 3</option>

                                    </select>

                                </div>

                                <div class="custom-select mb-3">

                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>Select Number of activities</option>

                                        <option value="1">Option 1</option>

                                        <option value="2">Option 2</option>

                                        <option value="3">Option 3</option>

                                    </select>

                                </div>

                                <div class="custom-select mb-3">

                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>How many shareholders will your company have?</option>

                                        <option value="1">Option 1</option>

                                        <option value="2">Option 2</option>

                                        <option value="3">Option 3</option>

                                    </select>

                                </div>

                                <div class="custom-select mb-3">

                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>How many visas will you need?</option>

                                        <option value="1">Option 1</option>

                                        <option value="2">Option 2</option>

                                        <option value="3">Option 3</option>

                                    </select>

                                </div>

                                <div class="custom-select mb-3">

                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>Are you currently living in the UAE?</option>

                                        <option value="1">Option 1</option>

                                        <option value="2">Option 2</option>

                                        <option value="3">Option 3</option>

                                    </select>

                                </div>

                                <div class="custom-select mb-3">

                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>Select Annual turnover</option>

                                        <option value="1">Option 1</option>

                                        <option value="2">Option 2</option>

                                        <option value="3">Option 3</option>

                                    </select>

                                </div>

                                <div class="custom-select mb-3">

                                    <select class="form-select" aria-label="Default select example">

                                        <option selected>When do you plan to start your business?</option>

                                        <option value="1">Option 1</option>

                                        <option value="2">Option 2</option>

                                        <option value="3">Option 3</option>

                                    </select>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 ms-auto  justify-content-end">

                                        <div class="estimate-container ">

                                            <div class="cost-estimate">

                                                <h5>Estimated Cost:</h5>

                                                <div class="amount text-white">AED 3000</div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <h5 class="information-personal-heading">Enter Personal information</h5>

                                <div class="row">

                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="First Name">

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Last Name">

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <input type="email" class="form-control" placeholder="Email Address">

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <input type="number" class="form-control" placeholder="Contact No">

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Nationality">

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <input type="text" class="form-control"
                                                placeholder="How did you hear about us?">

                                        </div>

                                    </div>

                                    <div class="col-lg-12">

                                        <a class="primary-button w-100 mt-2" href="#">Submit<span class="ms-2 mt-1"><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>

                                    </div>



                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W658WK7G" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>


<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=469300022456340&ev=PageView&noscript=1" /></noscript>



<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyq8XY88CqF5Uwd6hQCR-F4s-OjfIlIO4&libraries=places&callback=initReviews">
</script>

<script>
let service;



function initReviews() {

    const request = {

        placeId: 'ChIJv0igCKtYXz4RcTqiTyk_Sk8', // Replace with your Place ID

        fields: ['reviews']

    };



    service = new google.maps.places.PlacesService(document.createElement('div'));

    service.getDetails(request, function(place, status) {

        if (status === google.maps.places.PlacesServiceStatus.OK) {

            displayReviews(place.reviews);

        } else {

            console.error('PlacesService failed due to: ' + status);

        }

    });

}



function displayReviews(reviews) {

    let ratings = 0;



    if (reviews) {

        const reviewsDiv = document.getElementById("reviews");

        let google_reviews = '';

        reviews.forEach(review => {

            ratings += parseFloat(review.rating);

            google_reviews += ` <div class="col-lg-4 mt-4">

                        <div class="testemonial-wrapper-main">

                            <div class="testemonial-detail">

                                <img src="${review.profile_photo_url}" class="img-fluid" alt="">

                                <div class="content-name-test">

                                    <h5>${review.author_name}</h5>

                                    <h6>${review.relative_time_description}</h6>

                                </div>

                            </div>

                            <p class="review" id="reviewText">${review.text}</p>

                            <div class="main-post">

                                <div class="rating_star_wrapper-main">

                                    <i class="fa ${review.rating >= 1 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                    <i class="fa ${review.rating >= 2 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                    <i class="fa ${review.rating >= 3 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                    <i class="fa ${review.rating >= 4 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                    <i class="fa ${review.rating == 5 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                </div>

                                <div class="post-google">

                                    <h5>Posted on</h5>

                                    <h4 class="google-colors-text">

                                        <span class="red">G</span>

                                        <span class="yellow">o</span>

                                        <span class="blue">o</span>

                                        <span class="red">g</span>

                                        <span class="green">l</span>

                                        <span class="blue">e</span>

                                    </h4>

                                </div>

                            </div>

                        </div>

                    </div>`;

        });

        $('.google_reviews_listing').html('');

        $('.google_reviews_listing').html(google_reviews);



        let total_reviews = reviews.length;

        let avg_ratings = (ratings / total_reviews);



        document.querySelector('.google_reviews_count').innerHTML = `Reviews: ${total_reviews}`;

        document.querySelector('.google_reviews_avg_ratings').innerHTML = `${avg_ratings.toFixed(1)}`;



        let stars =
            `<i class="fa ${avg_ratings >= 1 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                 <i class="fa ${avg_ratings >= 2 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                 <i class="fa ${avg_ratings >= 3 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                 <i class="fa ${avg_ratings >= 4 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>

                                 <i class="fa ${avg_ratings >= 5 ? 'fa-star' : 'fa-star-empty'}" aria-hidden="true"></i>`;



        const ratingWrapper = document.querySelector('.rating_star_wrapper-main');

        ratingWrapper.innerHTML = stars;

    }

}
</script>

<?php include 'inc/footer.php'; ?>

<!-- Footer Include Here -->