<?php include('h.php'); ?>
<!-- Body Content Start Here -->
<style>
  .shop-bg {
    background: url('assets/img/car-insp-hero-bg.png') no-repeat center center/cover;
  }

  .shop-form-section-bg {
    background: url('assets/img/body-shop-form-section-bg.png') no-repeat center center/cover;
  }
</style>
<!-- Hero  Section Start -->
<section class="shop-bg section">
  <div class="container">
    <div class="row align-items-center white">
      <div class="col-lg-7">
        <div class="experiecne-top-content">
          <h2 class="display-4 fw-bold mx-auto primary-color text-start">
            <span class="text-warning">Renowned Auto </span>Body Shop in Dubai
          </h2>
          <p class="fs-6 fw-light lh-sm text-secondary">Specializing in auto body, mechanical and electrical repair and servicing for American, German, Japanese, Chinese, and all luxury cars. Enjoy discounted prices, pickup and drop-off, and a complimentary inspection and estimate. Proud finalists at Automechanika, offering top-tier service you can trust. Call us today for your booking!</p>
          <span class="d-flex flex-column flex-md-row gap-4">
            <button class="border-0 btn fs-6 fw-semibold rounded-3">Avail Your Discount</button>
            <button class="bg-transparent border-3 border-dark btn fs-6 fw-semibold rounded-3">Call Now</button>
          </span>
        </div>
      </div>
      <div class="col-lg-5">
        <img src="assets/img/shop-hero-right.png" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- Hero  Section End -->
<!-- Form Section Start Here -->
<section class="container-fluid shop-form-section-bg overflow-visible body-shop-hero-height-responsive vh-100">
  <div class="container h-100 w-100">
    <div class="align-items-center g-2 h-100 justify-content-center row w-100">
      <div class="col-md-6 px-0 text-center">
        <h2 class="fw-bolder text-black lh-1 responsive-heading-3">Your Effortless <span class="main-color">Driving Experience </span> Starts Here.</h2>
        <p>Schedule your appointment at Gargash Auto today!</p>
      </div>
      <div class="col-md-6 white"><?php include('form.PHP') ?> </div>
    </div>
  </div>
</section>
<!-- Form Section End Here -->
<!-- Content section start -->
<section class="container-fluid">
  <div class="row justify-content-center align-items-center g-2">
    <div class="col-md-5">
      <img src="assets/img/auto-body-services.png" alt="" class="img-fluid" style="margin-left: -1rem;">
    </div>
    <div class="col-md-5 d-flex flex-column gap-2">
      <span>
        <h2 class="fs-1 fw-semibold lh-sm text-dark">Auto Body Services in Dubai</h2>
      </span>
      <span>
        <p class="fs-6 fw-light lh-sm text-secondary">Looking for comprehensive auto body services in Dubai? You've come to the right place. We provide expert services including accident repair, chassis repair, auto detailing, and more.</p>
        <h3 class="fs-5 fw-semibold">Our services include:</h3>
      </span>
      <span class="d-flex flex-column flex-md-row gap-1 gap-md-5">
        <ul class="fs-6 fw-light list-group text-secondary">
          <li>Accident/Collision Repair</li>
          <li>Car Painting Service</li>
          <li>Scratch Removal & Repaint</li>
          <li>Detailing, Polishing & Ceramic Coating</li>
          <li>PPF (Paint Protection Film)</li>
          <li>Windscreen Repair/Replacement</li>
          <li>Paintless Dent Repair</li>          
          <li>Car Tinting</li>
          <li>Under Coating & Rust Proofing</li>
          <li>Interior Repair</li>
          <li>Convertible Roof Repair</li>
          <li>Chassis Repair</li>
        </ul>
        <ul class="fs-6 fw-light list-group text-secondary">
          <li>Calipers Painting</li>
          <li>Rim Painting Service</li>
          <li>Dent Removal</li>
          <li>Car Wrapping Service</li>
          <li>Headlights Restoration</li>
          <li>Hail Damage Repair</li>
          <li>Upholstery Service</li>
          <li>Dashboard Repair</li>
          <li>Dashboard Repair</li>
          <li>Sand Blasting</li>
          <li>Leather Repair & Restoration</li>
          <li>Sunroof Repair</li>
        </ul>
      </span>
      <h5 class="fs-6 fw-normal">Let us take care of your vehicle with our expert services, ensuring it stays in perfect condition.</h5>
    </div>
    <div class="col-md-2 d-none d-md-block">
      <img src="assets/img/auto-body-services-tree.png" alt="" class="img-fluid" style="margin-right: 1rem;">
    </div>
  </div>
</section>
<!-- gateway-section Start Here  -->
<?php include('gateway.php'); ?>
<!-- gateway-section Ends Here  -->
<!-- card Slider Start -->
<style>
  .card-slider {
    display: flex;
    /* overflow: hidden; */
    width: 100%;
    position: relative;
    gap: 1rem;
  }

  .card-slider .card {
    flex: 0 0 auto;
    width: 300px;
    margin: 0 10px;
    overflow: hidden;
  }

  .card-border-1 {
    background: radial-gradient(circle at 100% 100%,
        #ffffff 0,
        #ffffff 5px,
        transparent 5px) 0% 0%/10px 10px no-repeat,
      radial-gradient(circle at 0 100%,
        #ffffff 0,
        #ffffff 5px,
        transparent 5px) 100% 0%/10px 10px no-repeat,
      radial-gradient(circle at 100% 0,
        #ffffff 0,
        #ffffff 5px,
        transparent 5px) 0% 100%/10px 10px no-repeat,
      radial-gradient(circle at 0 0,
        #ffffff 0,
        #ffffff 5px,
        transparent 5px) 100% 100%/10px 10px no-repeat,
      linear-gradient(#ffffff, #ffffff) 50% 50% / calc(100% - 10px) calc(100% - 20px) no-repeat,
      linear-gradient(#ffffff, #ffffff) 50% 50% / calc(100% - 20px) calc(100% - 10px) no-repeat,
      linear-gradient(0deg, #eeeeee 0%, #e6b110 100%);
    border-radius: 10px;
    padding: 5px;
    box-sizing: border-box;
  }

  .card-border-2 {
    background: radial-gradient(circle at 100% 100%, #ffffff 0, #ffffff 5px, transparent 5px) 0% 0%/10px 10px no-repeat,
      radial-gradient(circle at 0 100%, #ffffff 0, #ffffff 5px, transparent 5px) 100% 0%/10px 10px no-repeat,
      radial-gradient(circle at 100% 0, #ffffff 0, #ffffff 5px, transparent 5px) 0% 100%/10px 10px no-repeat,
      radial-gradient(circle at 0 0, #ffffff 0, #ffffff 5px, transparent 5px) 100% 100%/10px 10px no-repeat,
      linear-gradient(#ffffff, #ffffff) 50% 50%/calc(100% - 10px) calc(100% - 20px) no-repeat,
      linear-gradient(#ffffff, #ffffff) 50% 50%/calc(100% - 20px) calc(100% - 10px) no-repeat,
      linear-gradient(#eeeeee 0%, #747474 100%);
    border-radius: 10px;
    padding: 5px;
    box-sizing: border-box;
  }

  .card-slider .card img {
    width: 100%;
    height: 200px;
    object-fit: contain;
  }

  .card-slider .card-body {
    padding: 15px;
    text-align: center;
  }

  @keyframes slideRightToLeft {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  @keyframes slideLeftToRight {
    0% {
      transform: translateX(-100%);
    }

    100% {
      transform: translateX(0);
    }
  }

  .slide-right-to-left {
    animation: slideRightToLeft 20s linear infinite;
  }

  .slide-left-to-right {
    animation: slideLeftToRight 20s linear infinite;
  }
</style>

<div class="container-fluid mt-5 overflow-hidden">
  <div class="card-slider slide-right-to-left">
    <div class="card card-border-1">
      <img src="assets/img/slider-img-3.png" alt="Card Image" class="p-3" />
      <div class="card-body ">
        <h5 class="card-title fs-5 fw-bold main-color"> Car Accident Repair </h5>
        <p class="card-text fs-6 fw-normal lh-sm text-secondary"> Complete car accident repair solution, either its a small accident or a major one, we at gargash auto center provides dealer alternative quality auto body shop service at a reasonable price. </p>
      </div>
    </div>
    <div class="card card-border-2">
      <img src="assets/img/slider-img-4.png" alt="Card Image" class="p-3" />
      <div class="card-body ">
        <h5 class="card-title fs-5 fw-bold text-black"> Car Painting Service </h5>
        <p class="card-text fs-6 fw-normal lh-sm text-secondary"> Complete car accident repair solution, either its a small accident or a major one, we at gargash auto center provides dealer alternative quality auto body shop service at a reasonable price. </p>
      </div>
    </div>
    <div class="card card-border-1">
      <img src="assets/img/slider-img-5.png" alt="Card Image" class="p-3" />
      <div class="card-body ">
        <h5 class="card-title fs-5 fw-bold main-color"> Detailing / Polishing / Head Lights Restoration </h5>
        <p class="card-text fs-6 fw-normal lh-sm text-secondary"> Your car may not be so cleaned from inside, or there can be some kind of smell, or you may want a new look of your car from inside </p>
      </div>
    </div>
    <div class="card card-border-2">
      <img src="assets/img/slider-img-6.png" alt="Card Image" class="p-3" />
      <div class="card-body ">
        <h5 class="card-title fs-5 fw-bold text-black"> Wind Screen / Auto Glass Replacement </h5>
        <p class="card-text fs-6 fw-normal lh-sm text-secondary"> If your cars front or back windscreen is broken, or any door window or a mirror is broken. </p>
      </div>
    </div>
    <div class="card card-border-1">
      <img src="assets/img/slider-img-7.png" alt="Card Image" class="p-3" />
      <div class="card-body ">
        <h5 class="card-title fs-5 fw-bold main-color"> Dashboard Repairing / Sun Roof Liner Repair & Fixing </h5>
        <p class="card-text fs-6 fw-normal lh-sm text-secondary"> Sometimes your car’s dashboard can be damaged because of sunshine and high temperature in uae, or it may be broken due to any reason. </p>
      </div>
    </div>
    <div class="card card-border-2">
      <img src="assets/img/slider-img-8.png" alt="Card Image" class="p-3" />
      <div class="card-body ">
        <h5 class="card-title fs-5 fw-bold text-black"> Upholstery / Leather And Fabric Seats Restoration. </h5>
        <p class="card-text fs-6 fw-normal lh-sm text-secondary"> Complete vehicle restoration service, from accident repair, vehicle exterior repair, and restoration </p>
      </div>
    </div>
    <!-- Add more cards as needed -->
  </div>
</div>
<?php include('logo-slider.php'); ?>
<script>
  const slider = document.querySelector(".card-slider");
  const cards = document.querySelectorAll(".card");
  let isReversed = false;
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.intersectionRatio < 0.5) { // Jab last card 50% se kam visible ho
          slider.style.animation = "none"; // Pehle animation remove karo
          void slider.offsetWidth; // Reflow trigger karo (animation reset)
          if (isReversed) {
            slider.classList.remove("slide-left-to-right");
            slider.classList.add("slide-right-to-left");
          } else {
            slider.classList.remove("slide-right-to-left");
            slider.classList.add("slide-left-to-right");
          }
          slider.style.animation = ""; // Animation wapas enable karo
          isReversed = !isReversed;
        }
      });
    }, {
      root: null,
      threshold: 0.5
    } // 50% threshold
  );
  observer.observe(cards[cards.length - 1]); // Last card ko observe karo
</script>


<!-- sticky-icons Section Start -->
<?php include('sticky-icons.php'); ?>

<!-- sticky-icons Section End -->
<?php include('f.php'); ?>