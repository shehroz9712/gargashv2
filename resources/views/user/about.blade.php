@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Body Content Start Here -->
    <section class="section container-fluid update-about-bg  vh-100 about-us-hero-height-responsive">
        <div class="container d-flex flex-column h-100   justify-content-center  w-100">
            <div class="g-4 g-md-0 row">
                <div class="col-md-6 my-auto">
                    <div class="contract-hero-content">

                        <h2 class="fw-bolder display-4">Welcome To <span class="text-warning">Gargash Auto Service</span>
                        </h2>
                        <h4 class="fs-4 fw-bold">A Right Place To Fix Your Car</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form-section dark">
                        @include('user.layouts.partials.form')

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about us page Hero  Section End -->
    <!-- Service Partner Styling Start  -->
    <section class=" container">
        <div class="align-items-center row">
            <div class="col-lg-6">
                <h2 class="fs-2 fw-semibold">About Us</h2>
                <p class="fs-6 fw-normal lh-sm">
                    Gargash Auto was founded by a team of top in line and experienced automotive professionals committed to
                    delivering high-quality auto repair services in Dubai. It later extended to Sharjah. Having recognized
                    the common issues and complaints car owners face with other repair shops, our primary goal is to offer a
                    friendly, transparent environment while ensuring top-notch service to earn the trust, satisfaction, and
                    loyalty of our valued customers.
                </p>
                <p class="fs-6 fw-normal lh-sm"> At Gargash Auto, we warmly welcome all customers and guarantee
                    premium-quality auto repairs at the most competitive prices.</p>
                <p class="fs-6 fw-normal lh-sm">For more information or suggestions, feel free to reach out to us.</p>
                <a href="#" class="btn fs-6 fw-semibold rounded-3"> Click here for more Offers </a>
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
                <div class="about-text-bottom">
                    <img src="{{ asset('assets/user/img/about-us-section-right.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Service Partner Styling End  -->
    <!-- Specialized Brands Section Start -->
    <section class="container-fluid">
        <div class="d-flex flex-column gap-2">
            <div class="text-center">
                <h2 class="display-4 fw-bold text-md-center text-start"> Specialized In <span class="main-color">All
                        Brands</span>
                </h2>
                <p class="fs-6 fw-normal px-0 px-md-5 text-md-center text-start"> We at Gargash Auto provide a dealer
                    alternative service for American, European and high-end Japanese cars. We provide complete auto repair
                    and service solution under 1 roof. Any minor or major service, interval services, major repairs like
                    engine and gearbox rebuilding. For more information or any suggestion, you may call our service advisor.
                </p>
            </div>
            <div class="g-3 px-3 px-md-5 row row-cols-2 row-cols-md-5">
                <img src="{{ asset('assets/user/img/specialized-logo-1.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-2.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-3.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-4.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-5.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-6.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-7.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-8.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-9.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-10.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-11.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-12.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-13.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-14.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-15.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-16.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-17.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-18.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-19.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-20.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-21.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-22.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-23.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-24.png') }}" alt="" />
                <img src="{{ asset('assets/user/img/specialized-logo-25.png') }}" alt="" />
            </div>
        </div>
    </section>
    <!-- Specialized Brands Section Start -->
    <!-- Our Team Styling Start  -->
    <section style="background-color: #f1f1f1;">
        <div class="container">
            <div class="row align-items-center " style="padding: 20px;">
                <div class="col-lg-5" style="float: left;">
                    <div class="our-team-top">
                        <img src="{{ asset('assets/user/img/our-team-left.png') }}"
                            style="box-shadow: 6px 4px 4px #ccc; border-radius: 0px 20px;" alt="">
                    </div>
                </div>
                <div class="about-us-our-team-text-padding-responsive col-lg-6 mt-4 mt-md-0">
                    <h2 class="display-6 fw-bold">Meet Our<span class="main-color"> Expert Team</span>
                    </h2>
                    <p class="about-us-our-team-text-aling-responsive">At Gargash Auto, our team is the backbone of our
                        exceptional service. Comprising highly experienced automotive professionals from around the world,
                        we specialize in working with luxury cars using the latest diagnostic tools and advanced technology.
                        From rebuilding engines and gearboxes to providing meticulous repairs and maintenance, our team
                        brings a wealth of expertise to every project. We are dedicated to ensuring your vehicle receives
                        the highest quality care, and we pride ourselves on creating a transparent, customer-focused
                        experience. With a commitment to excellence, our team is here to deliver unmatched service for your
                        luxury car needs.</p>
                    <a href="{{ route('user.promotions') }} "><button class="btn fs-6 fw-semibold rounded-3">Click here for
                            more Offers</button></a>
                </div>

            </div>
    </section>

    <!-- Our Team Styling End  -->
    <!-- Our Vision Styling Start  -->
    <section class="container py-md-4">
        <div class="row d-flex  flex-md-row align-items-center">
            <div class="col-md-6 text-start">
                <h2 class="display-6 fw-bold"> Our <span class="main-color">Vision</span>
                </h2>
                <p class="about-us-our-team-text-aling-responsive">At Gargash Auto, our vision is to deliver seamless,
                    reliable, and top-quality car repair solutions that exceed customer expectations. We are dedicated to
                    staying ahead of the curve by adopting the latest technologies and innovations to enhance our services
                    and ensure the best care for your vehicle.</p>
                <div class="d-flex justify-content-center justify-content-md-start">
                    <a href="#" class="btn fs-6 fw-semibold rounded-3"> Click here for more Offers </a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center mt-4 mt-md-0">
                <img class="mt-5 mt-md-0 w-75 w-md-100" src="{{ asset('assets/user/img/vision-section-right.png') }}"
                    alt="hero" />
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
