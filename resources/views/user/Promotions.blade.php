@extends('user.layouts.app')

@section('css')
@endsection


@section('content')


<!-- Hero Sectin Start -->
<section class=" container-fluid overflow-visible  promotion-section-bg pormotions-hero-height-responsive vh-100">
  <div class="container d-flex flex-column h-100 justify-content-center text-center w-100">
    <div class="align-items-center d-flex flex-column gap-5 h-100">
      <span class="text-center">
        <p class="fw-bold fs-6">Delivering Luxury</p>
        <h1 class="fw-bolder lh-1 promotion-hero-heading-font-size">Providing Luxury Car Care <br>
          <span class="text-warning">with Exceptional Offers</span>
        </h1>
        <p class="fs-6 fw-normal text-black-50 pormotions-hero-para-responsive-font-padding">From exclusive discounts to premium services, we ensure your luxury vehicle receives the highest level of care and expert maintenance.</p>
      </span>
      <span class="w-100 w-md-75">
        <img src="{{asset('assets/user/img/up-pro-hero-bottom.png')}}" class="pormotions-hero-img-margin-top-responsive" alt="Location 1">
      </span>
    </div>
  </div>
</section>
<!-- Hero Sectin End -->
<!-- Text  Sectin Start-->
<section class="pb-0">
  <div class="container px-4">
    <div class="row">
      <div class="col-lg-8">
        <p class="level-7 primary-light-font dark-color ">We take pride in being a leading auto service provider. Gargash Auto Multibrand Workshop is your trusted destination for expert car servicing and luxury vehicle repairs in the UAE. Our team of highly skilled professionals is committed to delivering outstanding care, keeping your luxury car in finest condition. Additionally, our exciting promotions offer dealership-quality services at highly competitive prices. </p>
      </div>
      <div class="col-lg-4">
        <div class="d-flex flex-column flex-lg-column flex-md-row gap-3 gateway-btn-wrapper w-100">
          <a href="./promotions" class="align-self-baseline align-self-lg-end btn fs-6 w-100 w-fit w-md-75">Avail Your Discount</a>
          <a href="tel:+971 56 545 8853" class="align-self-baseline align-self-lg-end btn fs-6 transparent-btn w-100 w-fit w-md-75">Call Now </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Text  Sectin End-->
<!-- Blog Section Start -->
<style>
  .blog-box-height {
    height: 30rem;
  }

  @media(max-width:768px) {
    .blog-box-height {
      height: 35rem;
    }

    .heading-2 {
      font-size: 2.2rem !important;
    }

    .para-2 {
      font-size: 1.5rem !important;
    }

    .row-gap-7rem {
      gap: 7rem;
    }

    .mobile-responsive-font-size {
      font-size: 1.2rem;
    }

    /* height: 35rem; */
  }
</style>
<section class="container">
  <div class="w-100 h-100 d-flex flex-column" style="gap: 6rem;">
    <div class="row justify-content-center align-items-center row-gap-7rem">
      <div class="col-md-3 col-sm-4 blog-box-height">
        <div class="align-items-end blag-img-1 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">

          <span>
            <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
          <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 blog-box-height">
      <div class="align-items-end blag-img-2 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">
          <span>
          <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>

        </div>
      </div>
      <div class="col-md-3 col-sm-4 blog-box-height">
      <div class="align-items-end blag-img-1 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">
          <span>


          </span>
          <span>
            <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>

        </div>
      </div>
      <div class="col-md-3 col-sm-4 blog-box-height">
        <div class="align-items-end blag-img-2 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">
          <span>


          </span>
          <span>
            <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>

        </div>
      </div>
    </div>
    <div class="row justify-content-center align-items-center row-gap-7rem">
      <div class="blog-box-height col-md-3 col-sm-4 m-md-0 mt-5">
      <div class="align-items-end blag-img-1 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">
          <span>
          </span>
          <span>
            <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>

        </div>
      </div>
      <div class="col-md-3 col-sm-4 blog-box-height">
        <div class="align-items-end blag-img-2 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">
          <span>


          </span>
          <span>
            <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>

        </div>
      </div>
      <div class="col-md-3 col-sm-4 blog-box-height">
      <div class="align-items-end blag-img-1 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">
          <span>


          </span>
          <span>
            <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>

        </div>
      </div>
      <div class="col-md-3 col-sm-4 blog-box-height">
      <div class="align-items-end blag-img-2 d-flex flex-column h-100 justify-content-end pb-3 px-4 rounded-5 text-white w-100">
          <span>


          </span>
          <span>
            <small class="text-white fw-normal kdam-thmor-pro-font fs-6">*T&C Apply</small>
          </span>
        </div>
        <div class=" mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-primary fs-6 fw-semibold w-75 promotions-blog-btn-font-size "> Avail Now </button>
        </div>
      </div>
    </div>
    <br />

  </div>
  </div>
</section>
<!-- Blog Section End -->
<!-- Faq Section Start -->
<!-- F&Q Section Start -->
<section class=" fq-section">
  <div class="">
    <h2 class="fs-1 fw-bold">Navigate Through Common Queries</h2>
    <p class="fs-6 fw-normal"> From exclusive discounts to top-tier services, we guarantee your premium vehicle receives the finest care and smart maintenance. </p>
  </div>
  <style>
    .faq-box {
      background: white;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 10px;
      cursor: pointer;
    }

    .faq-box.active {
      background: #e6b110;
    }

    .faq-header {
      display: flex;
      gap: 30px;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      transition: background 0.3s ease;
      border-radius: 8px;
    }

    .faq-box.active .faq-header {
      background: #e6b110;
      /* Active hone par sirf header yellow */
      border-radius: 8px;
    }

    .faq-content {
      display: none;
      margin: -1rem;
      margin-top: 0.5rem;
      background: white;
      padding: 10px;
      border-radius: 0 0 8px 8px;
    }

    .faq-content p {
      padding: 0px 3.2rem;
    }

    .faq-icon {
      background: #e6b110;
      padding: 10px;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .faq-box.active .faq-icon {
      background: #fff;
      color: black;
      transform: rotate(180deg);
    }

    /* ✅ Updated Button Styling */
    .faq-btn {
      background: #e6b110;
      color: #fff;
      font-size: 20px;
      padding: 10px 15px;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .faq-box.active .faq-btn {
      background: #fff;
      color: #e6b110;
    }

    .faq-btn i {
      transition: transform 0.3s ease;
    }

    .faq-box.active .faq-btn i {
      transform: rotate(180deg);
    }
  </style>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-6">
        <div class="faq-box" onclick="toggleFAQ(this)">
          <div class="faq-header">
            <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
              <span class="faq-icon"></span>
              <h5 class="mb-0"> Do you service only Mercedes, or all luxury car brands?</h5>
            </div>
            <div class="faq-btn">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
          <div class="faq-content">
            <p class="text-md-start">At Gargash Auto, we specialize in servicing Mercedes-Benz vehicles, but our expertise extend to all luxury car brands. Our highly skilled technicians and state-of-the-art facilities ensure premium care for a wide range of high-end vehicles.</p>
          </div>
        </div>
        <div class="faq-box" onclick="toggleFAQ(this)">
          <div class="faq-header">
            <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
              <span class="faq-icon"></span>
              <h5 class="mb-0">Are you an agency or are you related to Gargash Enterprises?</h5>
            </div>
            <div class="faq-btn">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
          <div class="faq-content">
            <p class="text-md-start">Gargash Auto operates as an independent, specialized service center and is not affiliated with Gargash Enterprises. But owners are same family hence the name is Gargash Auto. We have a customer-centric approach acquired through extensive experience.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="faq-box" onclick="toggleFAQ(this)">
          <div class="faq-header">
            <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
              <span class="faq-icon"></span>
              <h5 class="mb-0">What sets Gargash Auto apart from other service centers?</h5>
            </div>
            <div class="faq-btn">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
          <div class="faq-content">
            <p class="text-md-start">Gargash Auto stands out due to our commitment to excellence, skilled technicians, advanced diagnostic tools, and use of genuine or high-quality OEM parts. We offer personalized customer service, transparent pricing, and a seamless repair and maintenance experience tailored to luxury car owners.</p>
          </div>
        </div>
        <div class="faq-box" onclick="toggleFAQ(this)">
          <div class="faq-header">
            <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
              <span class="faq-icon"></span>
              <h5 class="mb-0">Do you offer discounts on services or long-term service contracts?</h5>
            </div>
            <div class="faq-btn">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
          <div class="faq-content">
            <p class="text-md-start">Yes, we provide exclusive discounts on selected services and offer long-term service contracts designed to give you peace of mind and cost savings. Contact our team to learn more about our customized maintenance plans.</p>
          </div>
        </div>
        <div class="faq-box" onclick="toggleFAQ(this)">
          <div class="faq-header">
            <div class="faq-heading d-flex gap-3 justify-content-center align-items-center">
              <span class="faq-icon"></span>
              <h5 class="mb-0"> Can I get a courtesy car if my car has gone for repairs?</h5>
            </div>
            <div class="faq-btn">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
          <div class="faq-content">
            <p class="text-md-start">Yes, we offer courtesy cars for certain repair services, subjected to availability. Our goal is to ensure minimal disruption to your routine while your vehicle is being serviced. Please reach out to our team for more details on eligibility and availability.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function toggleFAQ(selectedFaq) {
      let allFaqs = document.querySelectorAll(".faq-box");
      allFaqs.forEach((faq) => {
        if (faq !== selectedFaq) {
          faq.classList.remove("active");
          faq.querySelector(".faq-content").style.display = "none";
        }
      });
      selectedFaq.classList.toggle("active");
      let content = selectedFaq.querySelector(".faq-content");
      content.style.display = selectedFaq.classList.contains("active") ? "block" : "none";
    }
    // Close FAQ when clicking outside
    document.addEventListener("click", function(event) {
      let allFaqs = document.querySelectorAll(".faq-box");
      let isInsideFAQ = event.target.closest(".faq-box");
      if (!isInsideFAQ) {
        allFaqs.forEach((faq) => {
          faq.classList.remove("active");
          faq.querySelector(".faq-content").style.display = "none";
        });
      }
    });
  </script>
</section>
@include('user.layouts.partials.sticky-icons')
@endsection

@section('js')
@endsection
