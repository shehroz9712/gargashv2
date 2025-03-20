<header class="site-header">
    <div class="top-reading secondary-bg py-1 overflow-hidden">
        <div class="container">
            <ul
                class="top-updates d-flex align-items-center justify-content-center justify-content-between list-unstyled m-0 p-0">
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon1.png') }}" alt="" class="img-fluid" />
                    </span> FREE PICKUP
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon2.png') }}" alt="" class="img-fluid" />
                    </span> FREE INSPECTION
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon3.png') }}" alt="" class="img-fluid" />
                    </span> JOB APPROVAL
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon4.png') }}" alt="" class="img-fluid" />
                    </span> REPAIR & FIX
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size">
                    <span>
                        <img src="{{ asset('assets/user/img/header-icon5.png') }}" alt="" class="img-fluid" />
                    </span> DELIVER BACK
                </li>
                <li
                    class="single-item primary-semibold-font level-10 dark-color text-capitalize d-flex align-items-center gap-1 my-hero-text-size">
                    <ul
                        class="reviews-wrap list-unstyled m-0 p-0 d-flex align-items-center justify-content-center gap-1">
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #000"></i>
                        </li>
                        <li class="review-li">
                            <i class="fa-solid fa-star" style="color: #fff"></i>
                        </li>
                    </ul> 4.9 Google Reviews
                </li>
                <li class="single-item dropdown-wrap">
                    <div class="dropdown">
                        <button class="dropdown-toggle border-0 bg-transparent d-flex align-items-center" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fa-solid fa-flag-usa me-1"></span>
                            <span class="language-span">English</span>
                        </button>
                        <!--  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class="dropdown-item active" href="#">
                      <span class="flag-icon flag-icon-um me-1"></span>
                      <span class="language-span">English</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="flag-icon flag-icon-ae me-1"></span>
                      <span class="language-span">Arabic</span>
                    </a>
                  </li>
                </ul>-->
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid header-options header-bg py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-lg-row gap-lg-0 gap-3">
                <div class="header-details-wrapper d-lg-flex d-none align-items-center justify-content-end gap-3">
                    <a class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="contact-detail">
                        <h6 class="level-9 primary-semibold-font extra-color-3 mb-0"> Call Us </h6>
                        <a href="tel:+971 56 545 8853"
                            class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover"> +971 56 545
                            8853</a>
                    </div>
                </div>
                <figure class="header-logo">
                    <a href="{{ route('user.home') }}" class="d-block">
                        <img src="{{ asset('assets/user/img/logo.png') }}" class="logo-here w-100 object-cover"
                            alt="" />
                    </a>
                </figure>
                <div class="header-details-wrapper d-lg-flex d-none align-items-center justify-content-end gap-3">
                    <a class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                    <div class="contact-detail">
                        <h6 class="level-9 primary-semibold-font extra-color-3 mb-0"> Mail Us </h6>
                        <a href="mailto:sales@gargashauto.ae"
                            class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover">
                            sales@gargashauto.ae</a>
                    </div>
                </div>
                <!-- <button class="icon-badge position-absolute top-0 right-0 mt-3 me-3 d-lg-none d-block" onclick='$(".mobile-header").toggleClass("active");$("body").toggleClass("overflow-hidden")'><i class="fa fa-close"></i></button> -->
                <button class="d-lg-none icon-badge p-4 bg-dark"
                    onclick='$(".mobile-header").toggleClass("active");$("body").toggleClass("overflow-hidden")'>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="header-menu-bar py-3 d-lg-block d-none">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="header-nav col-xxl-10 col-lg-12">
                    <ul class="header-menus d-flex align-items-center list-unstyled w-100 justify-content-between m-0">
                        <li class="list-item">
                            <a href="{{ route('user.home') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Home</a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.contract') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Annual
                                Contract</a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.promotions') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Upcoming
                                Promotions</a>
                        </li>
                        <li class="single-item">
                            <a href="#"
                                class="header-link categoryBtn text-decoration-none level-8 primary-semibold-font dark-color link-here">
                                Services <i class="fa-solid fa-angle-down"></i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.shop') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Body
                                Shop </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.blogs') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Blog
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.about') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">About
                                Us </a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('user.contact') }}"
                                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="mega-menu category-menu self-mobile-respnsive mega-menu-mobile-respnsive-scrolling">
        <!-- Close Button (Only for Mobile) -->
        <button
            class="close-menu icon-badge me-3 mt-3 p-4 position-absolute right-0 top-0  d-md-none close-self-mobile-respnsive-div">
            <i class="fa fa-close text-white"></i>
        </button>

        <div class="container">
            <div class="row justify-content-center align-items-center mobile-responsive-scrolling">
                <div class="col-md-8">
                    <div class="row align-items-center ">
                        <div class="head pb-2 mb-2">
                            <h6 class="title level-9 primary-semibold-font extra-color-3">Services</h6>
                        </div>
                        <div class="col-md-4 borderCol">
                            <ul class="list-unstyled p-0 d-flex flex-column gap-2">
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'auto-spa']) }}" class="d-flex">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon12.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="primary-semibold-font primary-color">Auto Spa</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Luxurious detailing
                                                to keep your car looking brand new.</span>

                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'car-inspection']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon6.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Car Inspection</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Thorough
                                                inspections to ensure safety and reliability.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'car-wrapping']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon8.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Car Wrapping</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Custom wraps to
                                                transform your vehicle's appearance.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'ceramic']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon11.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Ceramic</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Ceramic coating for
                                                long-lasting paint protection.</span>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 borderCol">
                            <ul class="list-unstyled p-0 d-flex flex-column gap-2">
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'chinese-car']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon3.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Chinese Car</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Specialized care
                                                for Chinese car brands.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'electric-car']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon10.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Electric Car</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Dedicated services
                                                for electric vehicle maintenance and repairs.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'electric-repair']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon5.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Electric Repair
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Specialized repairs
                                                for electric vehicles.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'extended-warranty']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon2.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Extended Warranty
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Peace of mind with
                                                extended coverage on your vehicle.</span>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 borderCol">
                            <ul class="list-unstyled p-0 d-flex flex-column gap-2">
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'general-repair']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon1.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">General Repair</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Expert repair
                                                services for all makes and models.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'major-minor-service']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon9.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Major/Minor Service
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Comprehensive
                                                servicing for both routine and major repairs.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'assistance']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon7.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Roadside Assistance
                                            </h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Reliable support
                                                when you need it the most.</span>
                                        </div>
                                    </a></li>
                                <li><a href="{{ route('user.servicesDetail', ['slug' => 'tinting']) }}" class="d-flex gap-2">
                                        <span class="menu-icon">
                                            <img src="{{ asset('assets/user/img/menu-icon4.png') }}" alt=""
                                                class="img-fluid">
                                        </span>
                                        <div class="menu-text">
                                            <h6 class="level-7 primary-semibold-font primary-color">Tinting</h6>
                                            <span class="level-9 primary-medium-font extra-color-3">Professional window
                                                tinting for added privacy and comfort.</span>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 borderCol header-mega-menu-margin-top">
                    <div class="video-main-wrapper">
                        <figure class="video-figure-wrap position-relative w-100">
                            <!-- <img src="{{ asset('assets/user/video/video.png') }}" alt=""
                                class="img-fluid w-100 video-animate"> -->

                            <div id="customControls"
                                class="custom-controls position-absolute top-0 right-0 bottom-0 left-0 d-flex justify-content-center align-items-center">
                                <video src="{{asset('assets/user/img/1.mp4') }}" autoplay loop muted
                                    controlsList="nodownload noplaybackrate" disablePictureInPicture controls
                                    class="rounded-3 w-100"></video>

                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var closeButton = document.querySelector('.close-self-mobile-respnsive-div');
            var mobileDiv = document.querySelector('.self-mobile-respnsive');

            closeButton.addEventListener('click', function() {
                mobileDiv.classList.remove('active');
            });
        });
    </script>
    <ul class="mobile-header list-unstyled d-flex flex-lg-row flex-column gap-4 ps-lg-0 mb-0 pe-lg-5 z-index-1"
        style="z-index: 15;">
        <li class="list-item align-self-baseline"><a href="{{ route('user.home') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Home</a>
        </li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.contract') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Annual
                Contract</a>
        </li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.promotions') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Upcoming
                Promotions</a>
        </li>
        <li class="single-item align-self-baseline"><a href="#"
                class="header-link categoryBtn text-decoration-none level-8 primary-semibold-font dark-color link-here">
                Services <i class="fa-solid fa-angle-down"></i></a>
        </li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.shop') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Body
                Shop
                us</a></li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.blogs') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Blog
                us</a></li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.about') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">About
                Us
            </a></li>
        <li class="list-item align-self-baseline"><a href="{{ route('user.contact') }}"
                class="header-link text-decoration-none level-8 primary-semibold-font dark-color link-here">Contact
                Us</a></li>
        <div class="header-details-wrapper d-flex align-items-center justify-content-start gap-3 align-self-baseline">
            <a class="contact-icon">
                <i class="fa-solid fa-phone"></i>
            </a>
            <div class="contact-detail">
                <h6 class="level-9 primary-semibold-font extra-color-2 mb-0">Call Us </h6>
                <a href="tel:+971 56 545 8853"
                    class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover">
                    +971 56 545 8853</a>
            </div>
        </div>
        <div class="header-details-wrapper d-flex align-items-center justify-content-start gap-3 align-self-baseline">
            <a class="contact-icon">
                <i class="fa-solid fa-envelope"></i>
            </a>
            <div class="contact-detail">
                <h6 class="level-9 primary-semibold-font extra-color-2 mb-0">Mail Us </h6>
                <a href="mailto:sales@gargashauto.ae"
                    class="cell-no level-7 heading-font dark-color text-decoration-none dark-hover">
                    sales@gargashauto.ae</a>
            </div>
        </div>

        <button class="icon-badge me-3 mt-3 p-4 position-absolute right-0 top-0"
            onclick='$(".mobile-header").toggleClass("active");$("body").toggleClass("overflow-hidden")'><i
                class="fa fa-close"></i></button>

    </ul>
</header>
