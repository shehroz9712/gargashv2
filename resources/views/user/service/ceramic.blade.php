@extends('user.layouts.app')

@section('css')
@endsection


@section('content')

<!-- Body Content Start Here -->

    <section class="cearmic-hero-section">
      <h1>Ceramic Coating</h1>
      <img src="{{asset('assets/user/img/ceramic-car.png')}}" alt="" />
    </section>
    <!-- Cearmic Hero Section End -->
    <!-- Save Section Start -->
<div class="container" style="margin-top: 8rem;">
  <div class="row">
    <div class="col-md-6">
      <h3>Save your Car's paint with</h3>
      <h1 class="about-us-heading cearmic-form-heading text-start"> Durable Car <span class="main-color">Ceramic Coating Service in Dubai</span>
        </h2>
        <p> The UV rays, dirt’s, marks, stains and muddy particles are always in contact with the vehicle’s body fading out the shine of the car. Here comes our car ceramic coating service in Dubai, based on nanotechnology and installing a protective layer over the auto body paint. This will rescue the car’s body with direct contamination of external harmful elements and your car will remain in excellent condition! </p>
        <div class="">
          <button class="save-bnt save-bnt1">Call Now</button>
          <button class="save-bnt save-bnt2">Our Services</button>
        </div>
    </div>
    <div class="col-md-6">
      <img src="{{asset('assets/user/img/save-section-right.png')}}" alt="" />
    </div>
  </div>
</div>
<!-- Save Section End -->
<!-- Cearmic Form Section Start -->
<section class=" bg-shop">
  <div class="container">
    <div class="align-items-center  row dark">
      <div class="col-md-6">      @include('user.layouts.partials.form') </div>
      <div class="col-md-6">
        <h1 class="about-us-heading cearmic-form-heading"> Your seamless <span class="main-color">Driving Experience</span> Begins Here. </h1>
        <p class="text-center">Book Gargash Car Workshop</p>
      </div>
    </div>
  </div>
</section>
<!-- Cearmic Form Section End -->
<!-- Coating Section Start -->
<section class="coating-section">
  <div class="coating-top">
    <h2>Benefits of Car <span class="main-color">Ceramic Coating</span>
    </h2>
    <p> We have all necessary advance tools at our Auto body workshop, assuring car owners they get high graded ceramic coating service in Dubai. The coating perfectly synchronized with the car’s body paint and never break or wash away. This proves that ceramic coating is a long term and durable solution. Save your priceless vehicle with car ceramic coating service in Dubai! </p>
  </div>
  <div class="coating-bottom">
    <div class="coating-bottom-grid-item">
      <img src="{{asset('assets/user/img/coating-bottom-1.png')}}" alt="" />
      <p> The ceramic coating will repel the water and it will never stay over the car’s body. Thus, it is hard for the stains and dust marks to adhere with the body. This saves your car and even make the car washing service less frequent. </p>
    </div>
    <div class="coating-bottom-grid-item">
      <p> Your car is always exposed directly to the sunlight and harmful rays, that’s why the paint will begin to fade and oxidize. There comes ceramic coating that adds a protective layer, like a firm barrier and escape the direct connection of auto body with the external environment. </p>
      <img src="{{asset('assets/user/img/coating-bottom-2.png')}}" alt="" />
    </div>
    <div class="coating-bottom-grid-item">
      <img src="{{asset('assets/user/img/coating-bottom-3.png')}}" alt="" />
      <p> The ceramic coating service will make your car’s look glossy, shiny and elegant. Drive confidently on the roads with your near, clean and beautifully looking vehicle. </p>
    </div>
  </div>
</section>
<!-- full container Start -->

<div class="auto-spa-full-container-bg container-fluid d-flex flex-column gap-4 justify-content-center px-5" style="height: 50vh;">
 <div class="row">
<div class="col-md-7">
    <h3 class="fs-3 fw-light text-white">Get a Quick Contact with our</h3>
    <h2 class="display-5 fw-bolder text-white">Service Advisor in Dubai</h2>
</div>
<div class="col-md-5 d-flex flex-column gap-4 align-items-end" >
    <button
        type="button"
        class="bg-transparent border btn btn-primary text-white w-50"
    >
    Our Services
    </button>
    <button
        type="button"
        class="btn btn-primary w-50"
    >
    Call Now
    </button>
    
</div>
 </div>

</div>

<!-- full container End -->
<!-- Body Content End Here --> 
 
<!-- sticky-icons Section Start -->
      @include('user.layouts.partials.form')

<!-- sticky-icons Section End -->



@endsection

@section('js')
@endsection
