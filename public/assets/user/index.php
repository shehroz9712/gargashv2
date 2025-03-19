<?php include('h.php'); ?> <style>
  .logo-item {
    opacity: 0.5;
    transition: opacity 0.3s ease-in-out;
    height: 100px;
  }

  /* //////////////////////////////////////////// */



  @media (max-width:786px) {
    .logo-item {
      opacity: 0.5;
      transition: opacity 0.3s ease-in-out;
      height: 3rem;
      width: 60%;
    }
  }




  /* //////////////////////////////////////////// */


  .slick-list {
    height: 100% !important;
  }

  .slick-current .logo-item {
    opacity: 1;
  }

  .slick-prev,
  .slick-next {
    background: transparent;
    border: none;
    font-size: 2rem;
    color: #333;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }

  .slick-prev {
    left: -50px;
  }

  .slick-next {
    right: -50px;
  }
</style>
<!-- Banner Start Here -->
<section class="banner-section">
  <div class="container">
    <div class="banner-start-here">
      <div class="banner-top-content text-center">
        <h1 class="level-1 heading-font primary-color" style="font-weight:700;">
          <span class="secondary-color d-block"> Transform Your Car </span> Care Experience
        </h1>
        <span class="level-8 primary-regular-font dark-color">Adding a Touch of Luxury to Every Journey.</span>
      </div>
      <div class="row pt-4">
        <div class="col-lg-6">
          <div class="banner-content-here pt-2 wow animate__animated animate__fadeInDown">
            <figure class="position-relative">
              <img src="assets/img/banner-img.png" alt="" class="img-fluid">
              <div class="banner-img-content text-center position-absolute top-0 left-0 right-0 p-5">
                <h2 class="level-1 heading-font extra-color-2">
                  <span class="secondary-color d-block"> Claim Our </span> Latest Offer
                </h2>
                <a href="./promotions" class="btn">Avail Your Discount</a>
              </div>
              <div class="banner-car-wrap position-absolute bottom-0">
                <figure>
                  <img src="assets/img/banner-car-img.png" alt="" class="img-fluid">
                </figure>
              </div>
            </figure>
          </div>
        </div>
        <div class="col-lg-6 ps-md-5">
          <div class="banner-detail-wrapper">
            <div class="row ">
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img1.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <a href="./services/auto-spa">
                        <div class="car-text ">
                          <!-- <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">  --> <!-- Walid bhai work -->
                          <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size"> <!-- Me Work -->
                            <span class=" d-block  "> Auto Spa </span>Service
                          </h6>
                        </div>
                      </a>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img2.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> Car Repair </span>Service
                        </h6>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img3.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> Car </span>Upholstery
                        </h6>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img4.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> Service </span>Contract
                        </h6>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img5.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> Road Side </span>Assistance
                        </h6>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img6.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> Car </span>Modification
                        </h6>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img7.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> Car </span>Inspection
                        </h6>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img8.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> Auto Body </span>Shop
                        </h6>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
              <div class="col-md-4 col-6">
                <div class="banner-sub-img my-banner-sub-img">
                  <figure class="position-relative my-figure-images-container">
                    <img src="assets/img/bg-frame1.png" alt="" class="img-fluid frame_img">
                    <div class="car-wrapper d-flex flex-column h-100 justify-content-center justify-content-md-between left-0 position-absolute right-0 text-center top-0">
                      <div class="car-sub-img">
                        <figure>
                          <img src="assets/img/car-img9.png" alt="" class="img-fluid">
                        </figure>
                      </div>
                      <div class="car-text ">
                        <h6 class="dark-color  heading-font m-0 my-hero-heading index-hero-card-text-font-size">
                          <span class=" d-block  "> General </span>Repair
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner End Here -->
<!-- experience-section Starts Here  -->
<!-- experience-section Starts Here  -->
<section class="banner-section experience-section section bg-img-cover img-no-repeat w-100 position-center ">
  <div class="container">
    <div class="experiecne-top-content text-center">
      <h2 class="level-1 heading-font primary-color col-lg-8 mx-auto" style="font-weight: 700;"> Your Perfect <span class="secondary-color">Driving Experience </span> Starts Here. </h2>
    </div>
    <div class="row align-items-end white">
      <div class="col-lg-5">
        <?php include('form.PHP'); ?>
      </div>
      <div class="col-lg-7">
        <div class="experience-car-wrapper position-relative">
          <figure style="position: relative;" class="my-figure">

            <!-- My Own  -->
            <img src="assets/img/home-car-cloudy-2.png" alt="" class="my-car-normal-image">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- experience-section Ends Here  -->
<!-- gateway-section Start Here  -->
<?php include('gateway.php'); ?>
<!-- gateway-section Ends Here  -->
<!-- discover-section Starts Here  -->
<section class="discover-section section">
  <div class="container">
    <div class="discover-top-content text-center mb-4">
      <h2 class="level-2 heading-font dark-color"> No Matter What Brand<span class="secondary-color"> You Own </span>
      </h2>
      <p class="level-7 primary-light-font dark-color col-lg-8 opacity-70 mx-auto">We provide complete auto repair solutions in a welcoming environment, featuring a comfortable sitting area and delivering fast, high-quality service.</p>
    </div>
    <!-- Slick Slider Section -->
    <div class="product-slider-wrapper slider-sec">
      <div class="product_slider_main my-product_slider_main">
        <figure class="p-2 pb-0 slide-fig position-relative text-center">
          <img src="assets/img/Jeep-1.png" alt="" class="img-fluid w-75 mx-auto">
        </figure>
        <figure class="p-2 pb-0 slide-fig position-relative text-center">
          <img src="assets/img/Merc.png" alt="" class="img-fluid w-75 mx-auto">
        </figure>
        <figure class="p-2 pb-0 slide-fig position-relative text-center">
          <img src="assets/img/lamborghini.png" alt="" class="img-fluid w-75 mx-auto">
        </figure>
        <figure class="p-2 pb-0 slide-fig position-relative text-center">
          <img src="assets/img/RR.png" alt="" class="img-fluid w-75 mx-auto">
        </figure>
        <figure class="p-2 pb-0 slide-fig position-relative text-center">
          <img src="assets/img/Ferrari.png" alt="" class="img-fluid w-75 mx-auto">
        </figure>
        <figure class="p-2 pb-0 slide-fig position-relative text-center">
          <img src="assets/img/Ford.png" alt="" class="img-fluid w-75 mx-auto">
        </figure>
      </div>
    </div>
    <!-- Logo Navigation Slider (Sync) -->
    <div class="product_slider_inner mt-4">
      <div class="logo-slider">
        <figure class="p-2">
          <img src="assets/img/Jeep Logo.png" alt="" class="img-fluid logo-item">
        </figure>
        <figure class="p-2">
          <img src="assets/img/logo-8.png" alt="" class="img-fluid logo-item">
        </figure>
        <figure class="p-2">
          <img src="assets/img/logo-5.png" alt="" class="img-fluid logo-item">
        </figure>
        <figure class="p-2">
          <img src="assets/img/RR Logo.png" alt="" class="img-fluid logo-item">
        </figure>
        <figure class="p-2">
          <img src="assets/img/Ferrari logo.png" alt="" class="img-fluid logo-item">
        </figure>
        <figure class="p-2">
          <img src="assets/img/Ford logo.png" alt="" class="img-fluid logo-item">
        </figure>
      </div>
    </div>
  </div>
</section>
<!-- discover-section Ends Here  -->
<!-- offers-section Starts Here  -->
<section class="offers-section section position-relative z-index-1 overflow-visible">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10">
        <div class="offers-wrapper">
          <div class="ml14">
            <h2 class="level-2 heading-font text-wrapper extra-color-2">
              <span class="letters">Experience Luxury Car Care with Unbeatable Offers</span>
            </h2>
          </div>
          <p class="level-7 primary-light-font extra-color-5 col-lg-7 col-md-9">Enjoy exclusive discounts and exceptional services, ensuring your elite vehicle receives the best care and expert maintenance.</p>
          <a href="#" class="btn">Get Started Today</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- offers-section Ends Here  -->
<!-- brand-section Starts Here  -->
<!-- On Desktop  -->
<section class="brand-section d-md-block d-none section">
  <div class="container">
    <div class="brand-wrapper bg-img-cover img-img-no-repeat w-100 position-center">
      <div class="row">
        <div class="col-lg-6">
          <a href="#brand-seciont">
            <div class="brand-content-wrapper text-center brand-section-open">
              <h4 class="level-3 heading-font extra-color-2 mb-0">Choose Your</h4>
              <div class="ml14">
                <h2 class="level-1-lg heading-font text-wrapper extra-color-2">
                  <span class="letters">Brand</span>
                </h2>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-6">
          <a href="#service-seciont">
            <div class="brand-content-wrapper text-center">
              <h4 class="level-3 heading-font extra-color-2 mb-0">Choose Your</h4>
              <div class="ml14">
                <h2 class="level-1-lg heading-font text-wrapper extra-color-2">
                  <span class="letters">Services</span>
                </h2>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- On Desktop  -->
<!-- On Mobile  -->

<section
  class="container d-block d-md-none vh-100 w-100 pb-0 ">
  <div
    class="d-flex flex-column gap-3 h-100 w-100">
    <a href="#brand-seciont" class="w-100 h-50">
      <div class="Choose-Your-brand-in-mobile rounded-4 align-items-center d-flex flex-column  justify-content-center h-100 w-100 brand-section-open">
        <h4 class="fw-bolder level-1 text-light pb-1 ">Choose Your</h4>
        <h2 class="fw-bolder level-1 text-light">Brand</h2>
      </div>
    </a>
    <a href="./services" class="w-100 h-50">
      <div class="Choose-Your-Services-in-mobile rounded-4 align-items-center d-flex flex-column justify-content-center w-100 h-100">
        <h4 class="fw-bolder level-1 text-light pb-1 ">Choose Your</h4>
        <h2 class="fw-bolder level-1 text-light">Services</h2>
      </div>
    </a>
  </div>

</section>


<!-- On Mobile  -->

<!-- brand-section Ends Here  -->
<!-- process-section Starts Here  -->
<section class="">
  <div class="container">
    <div class="process-top-content text-center mb-5">
      <div class="ml14">
        <h2 class="level-1 heading-font text-wrapper dark-color">
          <span class="letters">LUXURY IN AND OUT </span>
        </h2>
        <p class="level-7 primary-regular-font dark-color col-lg-9 mx-auto">Our advanced repair services are powered by modern tools, cutting-edge techniques, innovative processes, and skilled technicians. Our 4-step car repair model is designed to provide comfort and convenience for every car owner.</p>
        <a href="#" class="btn">Speak to an expert <span class="ps-2">
            <i class="fa-solid fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="process-wrapper position-relative mt-5">
      <div class="process-wrap position-relative">
        <div class="align-items-md-center align-items-md-center d-flex flex-sm-row gap-3 gap-sm-0 justify-content-between pb-sm-5">
          <div class="process-card-wrapper process-card1 extra-bg-2 radius-29 position-absolute">
            <div class="process-card">
              <figure>
                <img src="assets/img/process-icon1.png" alt="" class="inmg-fluid">
              </figure>
              <div class="process-text">
                <h5 class="level-6 heading-font secondary-color">BOOK A SERVICE</h5>
                <p class="level-9 primary-regular-font dark-color">Call us to book your service <br> and enjoy a free inspection.</p>
              </div>
            </div>
          </div>
          <div class="process-card-wrapper process-card2 extra-bg-2 radius-29 position-absolute right-0">
            <div class="process-card">
              <figure>
                <img src="assets/img/process-icon2.png" alt="" class="inmg-fluid">
              </figure>
              <div class="process-text">
                <h5 class="level-6 heading-font secondary-color">HASSLE FREE PICKUP</h5>
                <p class="level-9 primary-regular-font dark-color">We’ll pick up your car from your <br> home, office, or shopping mall.</p>
              </div>
            </div>
          </div>
        </div>
        <figure class="text-center">
          <img src="assets/img/process-car-img.png" alt="" class="img-fluid">
        </figure>
        <div class="d-flex flex-sm-row  gap-sm-0 gap-3 align-items-center justify-content-between pb-sm-5">
          <div class="process-card-wrapper process-card3 extra-bg-2 radius-29 position-absolute">
            <div class="process-card">
              <figure>
                <img src="assets/img/process-icon3.png" alt="" class="inmg-fluid">
              </figure>
              <div class="process-text">
                <h5 class="level-6 heading-font secondary-color">REPAIR & FIX</h5>
                <p class="level-9 primary-regular-font dark-color">We repair your car, perform road <br> tests, and ensure quality control.</p>
              </div>
            </div>
          </div>
          <div class="process-card-wrapper process-card4 extra-bg-2 radius-29 position-absolute right-0">
            <div class="process-card">
              <figure>
                <img src="assets/img/process-icon4.png" alt="" class="inmg-fluid">
              </figure>
              <div class="process-text">
                <h5 class="level-6 heading-font secondary-color">SMOOTH RETURN</h5>
                <p class="level-9 primary-regular-font dark-color">We wash and clean your car inside <br> and out before delivering it back to you!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
      <br />
    </div>
  </div>
</section>
<!-- process-section Ends Here  -->
<!-- review-section Starts Here  -->
<section class="review-section section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <!-- <div class="review-main bg-img-cover img-no-repeat w-100 position-center position-relative">
          <div class="google-review position-absolute left-0">
            <figure>
              <img src="assets/img/google-review-img.png" alt="" class="img-fluid">
            </figure>
          </div>
          <div class="row align-items-end">
            <div class="col-lg-6">
              <div class="review-text pb-4 position-relative">
                <a href="https://www.google.com/search?sca_esv=85f960ec4af1a2a5&sxsrf=AHTn8zpHukLBJs6EwKCIvDLxbn-z1vCZ4g:1741174509428&si=APYL9bs7Hg2KMLB-4tSoTdxuOx8BdRvHbByC_AuVpNyh0x2KzS3RFlO-rOQeZmqO_WM_LXoLy46Ew6EHxZUmQ0KzkH0OCTFP6OLptgvIxkrvHZ59HnFTri8VDbjLBhorBn9h-Emh6VpczL6DZnAMR3CNOkhnA2GibpwcarIh_yzySEqBoz7KS4h_7mLuF-N6F-D7-v3uZmNYhCkgaFgkeFtNiHpk3gcRYg%3D%3D&q=Gargash+Auto+Multi-Brand+Car+Service+Centre+-+Al+Quoz+4+,+Dubai.+Reviews&sa=X&ved=2ahUKEwiJgoHB7PKLAxUB9wIHHQ3dEsQQ0bkNegQILxAE&biw=1600&bih=773&dpr=1" target="_blank">
                  <div class="review-para pb-4">
                    <p class="level-7 primary-regular-font extra-color-2">One of the Best car services in Dubai.. Rahul was extremely accommodating to all my needs, the service level was impeccable and super smooth my car look brand new.. <strong>HIGHLY RECOMMENDED!!</strong>
                    </p>
                  </div>
                  <div class="review-name-wrapper text-end">
                    <div class="review-name">
                      <h4 class="level-4-lg primary-semibold-font extra-color-2">Hamad Al-Tamimi </h4>
                    </div>
                    <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2 mt-2">
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="review-commas position-absolute left-0 right-0 mx-auto">
                    <figure class="w-fit mx-auto">
                      <img src="assets/img/review-commas.png" alt="" class="img-fluid">
                    </figure>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review-right-wrapper">
                <a href="https://www.google.com/maps/contrib/112094789349298792644/reviews/@25.0261676,55.5071691,10z/data=!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                  <div class="review-box d-flex align-items-center justify-content-between mb-3">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2">Ashwin Jain </h6>
                      <P class="level-8 primary-regular-font extra-color-2 mb-0">Satisfied Customer</P>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5) </li>
                      </ul>
                    </div>
                  </div>
                </a>
                <a href="https://www.google.com/maps/contrib/113581672704880399952/reviews/@23.1118938,80.4932083,4z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                  <div class="review-box d-flex align-items-center justify-content-between mb-3">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2"> Raashid Shahbazi </h6>
                      <P class="level-8 primary-regular-font extra-color-2 mb-0">Local Guide</P>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5) </li>
                      </ul>
                    </div>
                  </div>
                </a>
                <a href="https://www.google.com/maps/contrib/117252774557379550002/reviews/@25.1708598,55.3177495,11z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                  <div class="review-box d-flex align-items-center justify-content-between mb-3">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2">Kardo Sha</h6>
                      <P class="level-8 primary-regular-font extra-color-2 mb-0">Local Guide</P>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5) </li>
                      </ul>
                    </div>
                  </div>
                </a>
                <a href="https://www.google.com/maps/contrib/101997236533537285372/reviews/@40.5203133,26.0415536,4z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                  <div class="review-box d-flex align-items-center justify-content-between">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2">Arfan Ahmed</h6>
                      <P class="level-8 primary-regular-font extra-color-2 mb-0">Ferrari</P>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5) </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div> -->

        <!-- /////////////////////////////////////////// -->


        <div class="review-main bg-img-cover img-no-repeat w-100 position-center position-relative">
          <!-- Google Review Image -->
          <div class="google-review position-absolute left-0">
            <figure>
              <img src="assets/img/google-review-img.png" alt="" class="img-fluid">
            </figure>
          </div>

          <div class="row align-items-end">
            <!-- Left Side: Main Review -->
            <div class="col-lg-6">
              <div class="review-text pb-4 position-relative" id="main-review">
                <a href="#" id="main-review-link" target="_blank">
                  <div class="review-para pb-4">
                    <p class="level-7 primary-regular-font extra-color-2" id="main-review-comment">
                      I’ve been bringing my car to Gargash Auto for years, and they never disappoint. The team is always professional, and I know my car is in the best hands. From routine maintenance to major repairs, they handle everything with precision. Highly recommend their services!</strong>
                    </p>
                  </div>
                  <div class="review-name-wrapper text-end">
                    <div class="review-name">
                      <h4 class="level-4-lg primary-semibold-font extra-color-2" id="main-review-name">–Dmitri </h4>
                    </div>
                    <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2 mt-2" id="main-review-rating">
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                      <li class="review-li">
                        <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="review-commas position-absolute left-0 right-0 mx-auto">
                    <figure class="w-fit mx-auto">
                      <img src="assets/img/review-commas.png" alt="" class="img-fluid">
                    </figure>
                  </div>
                </a>
              </div>
            </div>

            <!-- Right Side: Review List -->
            <div class="col-lg-6">
              <div class="review-right-wrapper">
                <!-- Review 1 -->
                <a href="https://www.google.com/maps/contrib/112094789349298792644/reviews/@25.0261676,55.5071691,10z/data=!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="review-link" data-comment="Gargash Auto transformed my car care experience. The convenience of their service contract makes it so easy for me to get my car serviced without disrupting my schedule. Plus, their team is always honest and efficient. Truly top-notch service!" data-name="– Mark R." data-rating="5">
                  <div class="review-box d-flex align-items-center justify-content-between mb-3">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2">– Mark R.</h6>
                      <p class="level-8 primary-regular-font extra-color-2 mb-0">Satisfied Customer</p>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5)</li>
                      </ul>
                    </div>
                  </div>
                </a>

                <!-- Review 2 -->
                <a href="https://www.google.com/maps/contrib/113581672704880399952/reviews/@23.1118938,80.4932083,4z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="review-link" data-comment="I recently had my luxury car serviced at Gargash Auto, and the results were outstanding. Their team treated my car like it was their own, and I could tell they used only the best tools and parts. I’ll definitely continue to trust them with all my vehicle needs." data-name="– Jasmine P." data-rating="5">
                  <div class="review-box d-flex align-items-center justify-content-between mb-3">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2">– Jasmine P.</h6>
                      <p class="level-8 primary-regular-font extra-color-2 mb-0">Local Guide</p>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5)</li>
                      </ul>
                    </div>
                  </div>
                </a>

                <!-- Review 3 -->
                <a href="https://www.google.com/maps/contrib/117252774557379550002/reviews/@25.1708598,55.3177495,11z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="review-link" data-comment="Gargash Auto’s customer service is second to none. From booking the service to receiving my car back in perfect condition, the entire process was seamless. They even took the time to explain the repairs and answer all my questions. I wouldn't trust my car with anyone else." data-name="– David M." data-rating="5">
                  <div class="review-box d-flex align-items-center justify-content-between mb-3">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2">– David M.</h6>
                      <p class="level-8 primary-regular-font extra-color-2 mb-0">Local Guide</p>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5)</li>
                      </ul>
                    </div>
                  </div>
                </a>

                <!-- Review 4 -->
                <a href="https://www.google.com/maps/contrib/101997236533537285372/reviews/@40.5203133,26.0415536,4z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDMwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="review-link" data-comment="The team at Gargash Auto went above and beyond for me. They not only fixed my car efficiently but also provided a detailed inspection and offered helpful tips to keep my vehicle in top condition. It’s clear they truly care about their customers." data-name="– Ali K." data-rating="5">
                  <div class="review-box d-flex align-items-center justify-content-between">
                    <div class="review-sub-name">
                      <h6 class="level-7 primary-semibold-font extra-color-2">– Ali K.</h6>
                      <p class="level-8 primary-regular-font extra-color-2 mb-0">Local Guide</p>
                    </div>
                    <div class="review-start-wrap">
                      <ul class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="review-li">
                          <i class="fa-solid fa-star" style="color: #E6B110;"></i>
                        </li>
                        <li class="level-9 primary-semibold-font secondary-color">(4.7 / 5)</li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- JavaScript for Dynamic Content Update -->
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            const reviewLinks = document.querySelectorAll(".review-link");
            const mainReviewComment = document.getElementById("main-review-comment");
            const mainReviewName = document.getElementById("main-review-name");
            const mainReviewRating = document.getElementById("main-review-rating");
            const mainReviewLink = document.getElementById("main-review-link");

            reviewLinks.forEach((link) => {
              link.addEventListener("click", function(e) {
                e.preventDefault(); // Prevent default link behavior

                // Get data attributes
                const comment = link.getAttribute("data-comment");
                const name = link.getAttribute("data-name");
                const rating = link.getAttribute("data-rating");
                const href = link.getAttribute("href");

                // Update main review section
                mainReviewComment.innerHTML = comment;
                mainReviewName.textContent = name;
                mainReviewLink.setAttribute("href", href);

                // Update rating stars
                mainReviewRating.innerHTML = "";
                for (let i = 0; i < rating; i++) {
                  const star = document.createElement("li");
                  star.className = "review-li";
                  star.innerHTML = '<i class="fa-solid fa-star" style="color: #E6B110;"></i>';
                  mainReviewRating.appendChild(star);
                }
              });
            });
          });
        </script>

        <!-- /////////////////////////////////////////// -->

      </div>
      <div class="col-lg-5">
        <div class="row">
          <div class="col-sm-6">
            <div class="review-performance text-center">
              <h2 class="display-5 heading-font extra-color-6">20 <span>+</span>
              </h2>
              <h4 class="level-4-lg primary-regular-font extra-color-6">Years' Experience</h4>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="review-performance text-center">
              <h2 class="display-5 heading-font extra-color-6">500 <span>+</span>
              </h2>
              <h4 class="level-4-lg primary-regular-font extra-color-6">Projects in Progress</h4>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="review-performance text-center">
              <h2 class="display-5 heading-font extra-color-6">100 <span>+</span>
              </h2>
              <h4 class="level-4-lg primary-regular-font extra-color-6">Team of Experts</h4>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="review-performance text-center">
              <h2 class="display-5 heading-font extra-color-6">100k <span>+</span>
              </h2>
              <h4 class="level-4-lg primary-regular-font extra-color-6">Projects Completed</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- review-section Ends Here  -->

<!-- sticky-icons Section Start -->
<?php include('sticky-icons.php'); ?>

<!-- sticky-icons Section End -->


<?php include('f.php'); ?>