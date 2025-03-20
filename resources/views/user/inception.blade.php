@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Hero  Section Start -->
    <style>
        .car-insp-bg {
            background: url('assets/img/car-insp-bg.png') no-repeat center center/cover;
        }

        .shop-form-section-bg {
            background: url('assets/img/body-shop-form-section-bg.png') no-repeat center center/cover;
        }
    </style>
    <section class=" car-insp-bg section   ">
        <div class="container">
            <div class="row align-items-center white">
                <div class="col-lg-7">
                    <div class="experiecne-top-content">
                        <h2 class=" heading-font primary-color mx-auto text-start" style="font-weight: 700; font-size:66px;">
                            <span class="secondary-color">Free Car Inspection </span>And Computer
                        </h2>
                        <p class="fs-6 fw-light lh-sm text-secondary">Car Inspection & Computer Diagnostics in Dubai For
                            American, German, Japanese, and all Exotic Cars. Discounted Price, Free Pickup & Drop Off, Free
                            Inspection. Call Us For free Pickup.</p>
                        <span class="d-flex gap-4">
                            <button class="bg-warning border-0 fs-6 fw-semibold px-4 py-2 rounded-3">Call Now</button>
                            <button class="bg-transparent border-2 fs-6 fw-semibold px-5 py-2 rounded-3">Our
                                Services</button>
                        </span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('assets/user/img/car-inspection-hero-right.png')}}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Hero  Section End -->
    <!-- Main Car  section Start-->
    <section class="align-items-center container d-flex flex-column justify-content-center gap-3">
        <h2 class="responsive-heading-2 fw-bolder text-center lh-1">Quick Fit Car Inspection <br>
            <span class="main-color">Service Includes:</span>
        </h2>
        <p class="fs-6 fw-semibold lh-sm text-center text-secondary">Your car may have a check engine light warning or
            squeaking brake noise, vibration in the car, or engine misfire, bad AC smell or AC not working, Air Suspension
            may be down or faulty, oil leaking from the car or it may have a coolant or water leakage, Engine overheating,
            gearbox jerking, or you may need an inspection for a small or major car accident, we have covered it all in our
            360 Degree Comprehensive Inspection. Feel Free To Book A Free Car Inspection today.</p>
        <img src="{{asset('assets/user/img/car-ins-about-section.png')}}" alt="" loading="lazy">
    </section>
    <!-- Main Car  section end-->
    <!-- Form Section Start Here -->
    <section class="container-fluid shop-form-section-bg overflow-visible vh-100">
        <div class="container h-100 w-100">
            <div class="align-items-center g-2 h-100 justify-content-center row w-100">
                <div class="col-md-6 px-0 text-center">
                    <h2 class="fw-bolder text-black lh-1 responsive-heading-3"> Your seamless <span
                            class="main-color">Driving Experience</span> Begins Here. </h2>
                    <p>Book Gargash Car Workshop</p>
                </div>
                <div class="col-md-6 white">       @include('user.layouts.partials.form') </div>
            </div>
        </div>
    </section>
    <!-- Form Section End Here -->
    <!--  -->
    <div class="container">
        <h2 class="text-center text-black fs-1 fw-bolder">A Glimpse Of Our Portfolio</h2>
    </div>     @include('user.layouts.gateway')
    <!--  -->


      @include('user.layouts.partials.form')
@endsection

@section('js')
@endsection
