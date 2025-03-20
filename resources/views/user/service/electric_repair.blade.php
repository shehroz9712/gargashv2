@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<style>
        .service-card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .tip-card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            text-align: center;
            padding: 20px;
        }

        .tip-card:hover {
            transform: translateY(-5px);
        }

        .tip-card img {
            width: 80%;
            margin-bottom: 15px;
        }

        .tip-title {
            font-weight: bold;
            font-size: 18px;
        }

        .tip-highlight {
            color: #F5A623;
            /* Yellow Highlight */
        }
        .form-bg-ew
        {
            background: url('assets/img/image 788.png') no-repeat center center/cover !important;
            
        }
    </style>
    <!-- Body Content Start Here -->

    <!-- Electric Hero Section Start -->

    <section class="car-insp-hero-section body-shop-hero-section">
        <div class="container car-insp-hero-section-wraper d-flex flex-column flex-md-row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="car-insp-heading body-shop-heading">
                    <span class="main-color">Safeguard Your Car's Electricals</span> With Our Expertise
                </h1>
                <p class="mt-3 mb-4 car-insp-content body-shop-hero-text">
                    Delivering exceptional car care services for your peace of mind on
                    every mile
                </p>
                <div class="align-items-center d-flex gap-5 flex-wrap">
                        <button class="btn fs-6 fw-bold px-4 text-dark w-auto">Avail Your Discount</button>
                        <button class="bg-transparent border-2 border-dark btn fs-6 fw-bold px-5 text-dark w-auto">Call
                            Now</button>
                    </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center mt-4 mt-md-0">
                <img class="img-fluid rounded" src="{{asset('assets/user/img/coche_electrico2 1.png')}}" alt="hero" />
            </div>
        </div>
    </section>


    <!-- Electric Hero Section End -->


    <!-- Luxury Section Start -->

    <section>
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{asset('assets/user/img/image-1.png')}}" alt="Engine Control Unit">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">Engine Control Unit</h5>
                            <p class="text-muted">Unleash your car’s peak performance as our certified technicians ensure
                                your ignition modules and all electrical features.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{asset('assets/user/img/image-2.png')}}" alt="Programming">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">Programming</h5>
                            <p class="text-muted">We have the technology, expertise and experience to keep the programming
                                system of your car updated and worry-free.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{asset('assets/user/img/image-3.png')}}" alt="Navigation Update">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">Navigation Update</h5>
                            <p class="text-muted">We provide our customers with the finest navigation experience through
                                accurate updates.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{asset('assets/user/img/image-4.png')}}" alt="AC System Check">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">AC System Check</h5>
                            <p class="text-muted">Our experts will ensure your car’s AC helps you beat the heat
                                and ensures your comfort.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{asset('assets/user/img/image-5.png')}}" alt="Central Locking System Check">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">Central Locking System Check</h5>
                            <p class="text-muted">We diagnose with precision so you can enjoy a secure and hassle-free
                                drive.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="{{asset('assets/user/img/image-6.png')}}" alt="Ignition System Check">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">Ignition System Check</h5>
                            <p class="text-muted">Our certified technicians inspect and repair all the components related to
                                the ignition system.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Luxury Section End -->

    <!-- Electric About Section start -->
    <section class="section container-fluid  form-bg-ew">
        <div class="container d-flex flex-column h-100 justify-content-center text-center w-100">
            <div class="">
                <h1 style="font-size: 64.18px;" class="fw-bolder">Dealership Quality Services At <span
                        class="text-warning">Competitive Prices! Contract!</span>
                </h1>
                <h4 class="fs-4 fw-bold">Book Gargash Car Workshop</h4>
            </div>
            <div class="contact-form-section">
                <div class="row align-items-center justify-content-center dark">
                    <div class="col-lg-5">
                        @include('user.layouts.partials.form')                    
                </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Electric About Section End -->

    <section>
        <div class="container py-5">
            <h2 class="text-center fw-bold">Car Care <span class="tip-highlight">Tips</span></h2>
            <div class="row g-4 mt-4">

                <div class="col-md-3">
                    <div class="tip-card border p-3">
                        <img src="{{asset('assets/user/img/image 719.png')}}" alt="Air Conditioner">
                        <h5 class="tip-title">Air Conditioner</h5>
                        <p class="text-muted">Regularly test your car's air conditioning system to ensure that  control and keeps you cool
                            and
                            fresh.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="tip-card border p-3">
                        <img src="{{asset('assets/user/img/image 784.png')}}" style="height: 180px;" alt="Car Polishing">
                        <h5 class="tip-title">Car Polishing</h5>
                        <p class="text-muted">Get your car polished after washing to restore its original shine and luster.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="tip-card border p-3">
                        <img src="{{asset('assets/user/img/image 785.png')}}" alt="Battery Check">
                        <h5 class="tip-title">Battery Check</h5>
                        <p class="text-muted">Ensure a timely check of your car's battery life and avoid to the unexpected failures.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="tip-card border p-3">
                        <img src="{{asset('assets/user/img/image 786.png')}}"  style="height: 180px;" alt="Fuel Efficiency">
                        <h5 class="tip-title">Fuel Efficiency</h5>
                        <p class="text-muted">Maintain proper tire pressure to improve safety and enhance fuel efficiency.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Tips Section Start -->


    <!-- sticky-icons Section Start -->
      @include('user.layouts.partials.form')

<!-- sticky-icons Section End -->



@endsection

@section('js')
@endsection
