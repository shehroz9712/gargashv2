<?php include('h.php')?>
<!-- Hero Section Start -->
<section class="Chinese-Car-hero-bg container-fluid overflow-hidden">
  <div class="container h-100">
    <div class="row align-items-md-center h-100 ">
      <div class="col-md-6 d-flex flex-column gap-2">
        <h1 class="fw-bolder fs-1 lh-1">
          <span style="color: #E6B110;">Expert Chinese Car</span> Repair Services
        </h1>
        <h6 class="fw-semibold me-auto">Adding exquisite care to your luxurious journey</h6>
        <div class="align-items-center d-flex gap-5 flex-wrap">
        <a href="Promotions.php">  <button class="btn fs-6 fw-bold px-4 text-dark w-auto">Avail Your Discount</button></a>
          <a href="tel:+971 56 545 8853"><button class="bg-transparent border-2 border-dark btn fs-6 fw-bold px-5 text-dark w-auto">Call Now</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <img src="assets/img/Chinese-Car-hero-right-car.png" alt="" class="img-fluid" loading="lazy">
      </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Hero Section End -->
<!-- Form Section  start-->
<section class="Chinese-Car-form-bg Chinese-Car-form-bottom-car container-fluid overflow-visible vh-100">
  <div class="container h-100 w-100">
    <div class="align-items-center g-2 h-100 justify-content-center row w-100">
      <div class=" col-md-6 light position-relative white"> <?php include('form.PHP');?> </div>
      <div class="col-md-6 px-0 text-center">
        <h2 class="fw-bolder text-black lh-1 responsive-heading-3"> Your seamless <span class="main-color">Driving Experience</span> Begins Here. </h2>
        <p>Book Gargash Car Workshop</p>
      </div>
    </div>
  </div>
</section>
<!-- Form Section  End-->
<!-- Partner Section Start -->
<section class="container-fluid vh-100 overflow-hidden">
  <div class="container">
    <div class="row vh-100">
      <div class="col-md-6 d-flex flex-column justify-content-center vh-100">
        <h2 style="font-size: 34.99px;" class="fw-semibold">Why Choose Gargash Auto As your Chinese Car Service Partner?</h2>
        <ul>
          <li>Professional Environment with High-Tech Certified Technicians</li>
          <li>Largest Independent Dealer Standard Service Center ( 5 Branches across UAE ) </li>
          <li>One Stop Service Workshop with all repair facilities under one roof</li>
          <li>German, American, European Cars, Japanese, Chinese Luxury, Exotic & Classic & EV Cars Specialists </li>
          <li>Transparent & Affordable prices, Guaranteed Customer Satisfaction</li>
          <li>Free Pickup, Inspection, Honest Video Reporting & Drop off Service</li>
        </ul>
        <button class="btn fs-6 fw-bold w-50">Call Our Advisor</button>
      </div>
      <div class="col-md-6 my-auto">
        <img src="assets/img/Chinese-Car-Partner-right-car.png" alt="" class="Chinese-Car-Partner-right-car mt-5" style="max-width: 40rem;">
						</div>
					</div>
				</section>
				<!-- Partner Section End -->
				<!-- Maintenance Section Start -->
				<section class="container-fluid  py-5">
					<div class="container">
						<h2 class="fs-1 fw-bold text-center">
							<span style="color: #E6B110;">Complete Chinese Auto Maintenance</span> ,
                Repair, & Service Solution
						</h2>
						<img src="assets/img/Maintenance-car.png" alt="">
							<span class="align-items-center justify-content-center row">
								<button class="btn w-25">Call Our
                    Advisor</button>
							</span>
						</div>
					</section>
					<!-- Maintenance Section End -->
					<!-- slider Section Start -->
					<style>
        .card {
            position: relative;
            width: 18rem;
            background: white;
            /* Card ka background */
            border-radius: 10px;
            /* Smooth corners */
        }

        .card::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 15px;
            background: linear-gradient(to bottom, #EEEEEE 0%, #E6B110 100%);
            z-index: -1;
        }

        .card::after {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 15px;
            background: linear-gradient(to top, #EEEEEE 0%, #3B3B3B 100%);
            z-index: -2;
        }

        .card-two {
            position: relative;
            width: 18rem;
            background: white;
            /* Card ka background */
            border-radius: 10px;
            /* Smooth corners */
        }

        .card-two::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 15px;
            background: linear-gradient(to bottom, #EEEEEE 0%, #3B3B3B 100%);
            z-index: -1;
        }

        .card-two::after {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 15px;
            background: linear-gradient(to top, #EEEEEE 0%, #747474 100%);
            z-index: -2;
        }

        .slider {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .slide-track {
            display: flex;
            animation: scroll 20s linear infinite;
            width: calc(18rem * 12);
            /* Adjust based on the number of cards */
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .card {
            flex: 0 0 18rem;
            margin-right: 1rem;
            /* Adjust spacing between cards */
        }
    </style>
					<section class="align-items-center container-fluid d-flex px-5 slider">
						<div class="d-flex gap-4 slide-track">
							<div class="card card-two flex-column h-auto row vh-75" style="width: 18rem;">
								<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
									<img class="card-img-top" src="assets/img/slider-img-1.png" alt="Card image cap">
									</div>
									<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
										<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">General Repair</h4>
										<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
									</div>
								</div>
								<div class="card card-two flex-column h-auto row" style="width: 18rem;">
									<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
										<img class="card-img-top" src="assets/img/slider-img-2.png" alt="Card image cap">
										</div>
										<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
											<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">General Repair</h4>
											<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
										</div>
									</div>
									<div class="card card-two flex-column h-auto row vh-75" style="width: 18rem;">
										<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
											<img class="card-img-top" src="assets/img/slider-img-3.png" alt="Card image cap">
											</div>
											<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
												<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Oil Change Service</h4>
												<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
											</div>
										</div>
										<div class="card card-two flex-column h-auto row" style="width: 18rem;">
											<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
												<img class="card-img-top" src="assets/img/slider-img-4.png" alt="Card image cap">
												</div>
												<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
													<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Brakes Service</h4>
													<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
												</div>
											</div>
											<div class="card card-two flex-column h-auto row vh-75" style="width: 18rem;">
												<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
													<img class="card-img-top" src="assets/img/slider-img-5.png" alt="Card image cap">
													</div>
													<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
														<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Car Accident Repair</h4>
														<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
													</div>
												</div>
												<div class="card card-two flex-column h-auto row" style="width: 18rem;">
													<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
														<img class="card-img-top" src="assets/img/slider-img-6.png" alt="Card image cap">
														</div>
														<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
															<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Car Painting Service</h4>
															<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
														</div>
													</div>
													<div class="card card-two flex-column h-auto row vh-75" style="width: 18rem;">
														<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
															<img class="card-img-top" src="assets/img/slider-img-7.png" alt="Card image cap">
															</div>
															<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
																<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Alloy Wheel / Rim Painting
                        Service And Rim Refurbishment</h4>
																<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
															</div>
														</div>
														<div class="card card-two flex-column h-auto row" style="width: 18rem;">
															<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
																<img class="card-img-top" src="assets/img/slider-img-8.png" alt="Card image cap">
																</div>
																<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
																	<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Brake Calipers Painting
                        Service</h4>
																	<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
																</div>
															</div>
															<div class="card card-two flex-column h-auto row vh-75" style="width: 18rem;">
																<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
																	<img class="card-img-top" src="assets/img/slider-img-9.png" alt="Card image cap">
																	</div>
																	<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
																		<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Detailing / Polishing /
                        Head Lights Restoration </h4>
																		<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
																	</div>
																</div>
																<div class="card card-two flex-column h-auto row" style="width: 18rem;">
																	<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
																		<img class="card-img-top" src="assets/img/slider-img-10.png" alt="Card image cap">
																		</div>
																		<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
																			<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Wind Screen / Auto Glass
                        Replacement</h4>
																			<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
																		</div>
																	</div>
																	<div class="card card-two flex-column h-auto row vh-75" style="width: 18rem;">
																		<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
																			<img class="card-img-top" src="assets/img/slider-img-11.png" alt="Card image cap">
																			</div>
																			<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
																				<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Dashboard Repairing / Sun
                        Roof Liner Repair & Fixing</h4>
																				<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
																			</div>
																		</div>
																		<div class="card card-two flex-column h-auto row" style="width: 18rem;">
																			<div class="align-items-center car-img col-md-12 d-flex justify-content-center">
																				<img class="card-img-top" src="assets/img/slider-img-12.png" alt="Card image cap">
																				</div>
																				<div class="align-content-center card-body col-md-12 d-flex flex-column justify-content-center">
																					<h4 class="card-title fs-4 fw-semibold text-center" style="color: #E6B110;">Upholstery / Leather And
                        Fabric Seats Restoration.</h4>
																					<p class="card-text text-center" style="font-size: 18px;">Minor & Major Services, Under Body Repair,
                        Mechanical Repair, Electrical Repair, Other General Repair.</p>
																				</div>
																			</div>
																			<!-- Add more cards as needed -->
																		</div>
																	</section>
																	<script>
        document.addEventListener("DOMContentLoaded", function() {
            const slideTrack = document.querySelector('.slide-track');
            const cards = slideTrack.innerHTML;
            slideTrack.innerHTML += cards; // Duplicate the cards
        });
    </script>
																	<!-- slider Section End -->



<!-- sticky-icons Section Start -->
<?php include('sticky-icons.php'); ?>

<!-- sticky-icons Section End -->

																	<?php include('f.php')?>