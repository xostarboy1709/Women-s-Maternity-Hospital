<?php
include 'head.php';
$home = "active";
include 'header.php';
?>
<body>
  <!-- Preloader-->
  <div id="preloader">
    <div class="heartbeatloader">
      <svg class="svgdraw" width="100%" height="100%" viewBox="0 0 150 400"
        xmlns="../../../../www.w3.org/2000/svg.html">
        <path class="path"
          d="M 0 200 l 40 0 l 5 -40 l 5 40 l 10 0 l 5 15 l 10 -140 l 10 220 l 5 -95 l 10 0 l 5 20 l 5 -20 l 30 0"
          fill="transparent" stroke-width="4" stroke="black"></path>
      </svg>
      <div class="innercircle"></div>
      <div class="outercircle"></div>
    </div>

  </div>
  <!-- Back To Top Start -->
  <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>
  <!-- Main Wrapper Start -->
  <div id="main-wrapper" class="main-wrapper overflow-hidden">

    <!-- Header Area Start -->
   
    <!-- Header Area end -->


    <section class="hero-banner">
      <div class="container p-3">
      <!-- <div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="assets/media/banner/banner2.png" alt="Care Image 1">
      <div class="slide-text">Exceptional Women's Healthcare</div>
    </div>
    <div class="swiper-slide">
      <img src="assets/media/banner/banner-image.png" alt="Care Image 2">
      <div class="slide-text">Compassionate & Expert Doctors</div>
    </div>
    <div class="swiper-slide">
      <img src="assets/media/banner/banner.png" alt="Care Image 3">
      <div class="slide-text">Advanced Medical Facilities</div>
    </div>
  </div>
  <style>
  .mySwiper {
  width: 100%;
  height: 400px;
  position: relative;
}

.swiper-slide {
  position: relative;
}

.swiper-slide img {
  width: 100%;
  height: 150%;
  object-fit: fill;
}

.slide-text {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: #fff;
  font-size: 2rem;
  font-weight: bold;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
}

@media screen and (max-width: 768px) {
  .mySwiper {
    height: 250px;
  }
  .slide-text {
    font-size: 1.2rem;
    bottom: 10px;
    left: 10px;
  }
}
</style>

   <script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
</script> --> 

  <!-- Pagination -->
  <!-- <div class="swiper-pagination"></div>
</div> -->

        <!-- Hero-Banner Start -->
        <div class="banner-area">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="text-block mb-48 mt-xl-0 mt-50">
                <h1 class="light-black mb-8">We Listen, We Care, We Heal.</h1>
                <p class="mb-32 gray">Welcome to Naari Care – The Women Hospital, Kota. We are proud to be the first
                  5-star facility maternity hospital in the Kota-Hadoti region and one of the top 5 maternity hospitals
                  in Rajasthan.<br class="d-xl-flex d-none">
                  We are dedicated to offering world-class
                  healthcare services for women and children with a focus on safety, comfort, and well-being.
                </p>
                <a href="appointment.php" class="cus-btn h6">Appointment</a>
                <a href="contact.php" class="cus-btn active h6">Contact Us</a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="banner-right-image">
                <img src="assets/media/banner/banner2.png" style=" border-radius:15px; margin-left:1%; height: 375px!important; width: 100%; " alt="" class="banner-image">
                 <!-- <div class="banner-card">
                  <h4 class="color-primary">10</h4>
                  <h6 class="light-black">Best Specialists</h6>
                </div>  -->
                 <!-- <div class="banner-card box-2">
                  <h4 class="color-primary">20K</h4>
                  <h6 class="light-black">Patients healed</h6>
                </div>  -->
               </div>
            </div>
          </div>
        </div>  
        <!-- Hero-Banner End -->

        <!-- Benifits Start -->
        <div class="benifits p-50">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="benifits-block mb-lg-0 mb-24">
                <h5 class="white mb-4p">Doctors</h5>
                <p class="white">Our experienced specialists in gynecology, pediatrics, neonatology, and fertility offer expert medical care.</p>
                <div class="image-circle">
                  <img src="assets/media/icons/benefits-1.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="benifits-block mb-lg-0 mb-24">
                <h5 class="white mb-4p">Nurses</h5>
                <p class="white">Our highly trained nurses are compassionate caregivers who provide support at every step.</p>
                <div class="image-circle">
                  <img src="assets/media/icons/benefits-2.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="benifits-block mb-lg-0 mb-24">
                <h5 class="white mb-4p">Support Staff</h5>
                <p class="white">Our administrative and support team ensures a smooth, efficient experience for every patient.</p>
                <div class="image-circle">
                  <img src="assets/media/icons/benefits-3.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Benifits Bar End-->
    </section>

    <!-- About Us Start-->
    <section class="about-us pt-40">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7">
            <div class="content-area">
              <h6 class="color-primary mb-4p">About Us</h6>
              <h2 class="light-black mb-16">A Legacy of Compassionate Care!</h2>
              <p class="gray mb-32">At Naari Care, we provide comprehensive healthcare solutions with advanced medical
                technology, highly experienced doctors, and compassionate care. Whether you're expecting a baby, seeking gynecological treatment, or looking for pediatric care, we are committed to offering the highest standards of healthcare in a welcoming environment.</p>
              <div class="row g-0">
                <div class="col-md-6 col-sm-6 mb-md-0 mb-24">
                  <div class="msg-box box-1 shadow br-30 p-24">
                    <h4 class="light-black mb-16">Our Vision</h4>
                    <p class="gray">Our vision is to be the leading provider of healthcare services for women and
                      children, setting new standards.</p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="msg-box box-2 mb-32 shadow br-30 p-24">
                    <h4 class="light-black mb-16">Our Mission</h4>
                    <p class="gray">Our mission is to deliver world-class healthcare services with compassion,
                      innovation, and professionalism.</p>
                  </div>
                </div>
              </div>
              <a href="about.php" class="cus-btn mb-xl-0 mb-24">Learn More</a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-5">
            <img src="assets/media/about/about-image.png" alt="" class="about_image br-30">
          </div>
        </div>
      </div>
    </section>
    <!-- About Us End-->

    <!-- Services Section Start -->
    <section class="services p-55">
      <div class="container">
        <!-- <h6 class="color-primary fw-600 mb-4p">Services</h6> -->
        <h2 class="light-black mb-32">Facilities</h2>
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="service-block mb-32">
              <div class="image-circle">
                <img src="assets/media/services/service-1.png" alt="">
              </div>
              <div class="text-block">
                <h4 class="light-black mb-16">Advanced Diagnostics</h4>
                <p class="gray">Cutting-edge diagnostic tools for accurate and quick assessments.
                </p>
              </div>
              <!-- <div class="bottom-bar">
                <a href="services-detail.html" class="cus-btn small-pad-2">Acquire Service</a>
                <a href="services-detail.html" class="color-primary">
                  <h6 class="fw-600">Learn More <i class="fal fa-chevron-right"></i></h6>
                </a>
              </div> -->
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="service-block mb-32">
              <div class="image-circle">
                <img src="assets/media/services/service-2.png" alt="">
              </div>
              <div class="text-block">
                <h4 class="light-black mb-16">Pediatric Care Units</h4>
                <p class="gray">Special care units designed to make pediatric visits more comfortable.
                </p>
              </div>
              <!-- <div class="bottom-bar">
                <a href="services-detail.html" class="cus-btn small-pad-2">Acquire Service</a>
                <a href="services-detail.html" class="color-primary">
                  <h6 class="fw-600">Learn More <i class="fal fa-chevron-right"></i></h6>
                </a>
              </div> -->
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="service-block mb-32">
              <div class="image-circle">
                <img src="assets/media/services/service-3.png" alt="">
              </div>
              <div class="text-block">
                <h4 class="light-black mb-16">Patients Care</h4>
                <p class="gray">Well-equipped rooms for both inpatient and outpatient treatments.
                </p>
              </div>
              <!-- <div class="bottom-bar">
                <a href="services-detail.html" class="cus-btn small-pad-2">Acquire Service</a>
                <a href="services-detail.html" class="color-primary">
                  <h6 class="fw-600">Learn More <i class="fal fa-chevron-right"></i></h6>
                </a>
              </div> -->
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="service-block mb-32">
              <div class="image-circle">
                <img src="assets/media/services/service-4.png" alt="">
              </div>
              <div class="text-block">
                <h4 class="light-black mb-16">Maternity and Delivery Suites</h4>
                <p class="gray">Comfortable, luxurious birthing suites designed to make your experience pleasant and
                  stress-free.
                </p>
              </div>
              <!-- <div class="bottom-bar">
                <a href="services-detail.html" class="cus-btn small-pad-2">Acquire Service</a>
                <a href="services-detail.html" class="color-primary">
                  <h6 class="fw-600">Learn More <i class="fal fa-chevron-right"></i></h6>
                </a>
              </div> -->
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="service-block mb-32">
              <div class="image-circle">
                <img src="assets/media/services/service-5.png" alt="">
              </div>
              <div class="text-block">
                <h4 class="light-black mb-16">24/7 Emergency Services</h4>
                <p class="gray">Our emergency department is always ready to handle urgent medical needs, day or night.
                </p>
              </div>
              <!-- <div class="bottom-bar">
                <a href="services-detail.html" class="cus-btn small-pad-2">Acquire Service</a>
                <a href="services-detail.html" class="color-primary">
                  <h6 class="fw-600">Learn More <i class="fal fa-chevron-right"></i></h6>
                </a>
              </div> -->
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="service-block mb-32">
              <div class="image-circle">
                <img src="assets/media/services/service-6.png" alt="">
              </div>
              <div class="text-block">
                <h4 class="light-black mb-16">Neonatal Intensive Care Unit (NICU)</h4>
                <p class="gray">Equipped with the latest technology to ensure the health and safety of newborns.
                </p>
              </div>
              <!-- <div class="bottom-bar">
                <a href="services-detail.html" class="cus-btn small-pad-2">Acquire Service</a>
                <a href="services-detail.html" class="color-primary">
                  <h6 class="fw-600">Learn More <i class="fal fa-chevron-right"></i></h6>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Appointment Table Start -->
    <!-- <section class="app-table">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-8">
            <!--Table-->
            <!-- <div class="time-table">
              <h6 class="color-primary fw-600 mb-8">Working Hours</h6>
              <h3 class="fw-700">Book Appointment According to the Time Table</h3>
              <div class="table-responsive"> -->
                <!--Table-->
                <!-- <table class="table appointment-table"> -->
                  <!--Table head-->
                  <!-- <thead>
                    <tr>
                      <th class="th-sm"></th>
                      <th class="th-sm"></th>
                      <th class="th-sm"></th>
                    </tr>
                  </thead> -->
                  <!--Table head-->
                  <!--Table body-->
                  <!-- <tbody>
                    <tr>
                      <td><span class="ptb-24 fw-600">Mon</span></td>
                      <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                      <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                    </tr>
                    <tr>
                      <td><span class="ptb-24 fw-600">Tue</span></td>
                      <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                      <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                    </tr>
                    <tr>
                      <td><span class="ptb-24 fw-600">Wed</span></td>
                      <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                      <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                    </tr>
                    <tr>
                      <td><span class="ptb-24 fw-600">Thu</span></td>
                      <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                      <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                    </tr>
                    <tr>
                      <td><span class="ptb-24 fw-600">Fri</span></td>
                      <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                      <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                    </tr>
                    <tr>
                      <td><span class="ptb-24 fw-600">Sat</span></td>
                      <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                      <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                    </tr>
                    <tr>
                      <td><span class="ptb-24 fw-600">Sun</span></td>
                      <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                      <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                    </tr> -->

                  <!-- </tbody> -->
                  <!--Table body-->
                <!-- </table> -->
                <!--Table-->
              <!-- </div>
              <div class="bottom-bar d-flex justify-content-between align-items-center">
                <h5 class="light-black">Time's not Flexible</h5>
                <a href="appointment.html" class="cus-btn small-pad">Make an Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Appointment Table End -->

    <!-- BG Wrapper Start -->
    <div class="bg-wrapper">

      <!-- Team Section Start -->
      <section style="margin-bottom: 20px;" class ="team p-55">
        <div class="container">
          <h6 class="color-primary fw-600 mb-4p">Team Members</h6>
          <h2 class="light-black">Meet Our Compassionate Doctors</h2>
          <div class="mb-32 mt-32">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="team_card mb-md-0 mb-24">
                  <div class="image_block mb-16">
                    <a href="#"><img src="assets/media/team/Dr. Rakshita Khandelwal-Photoroom.png" alt=""></a>
                    <!-- <ul class="social-media-links unstyled">
                      <li><a href="#"><img src="assets/media/icons/instagram.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/twitter.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/facebook.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/linkedin.png" alt=""></a></li>
                    </ul> -->
                  </div>
                  <div class="text_block text-center">
                    <h4 class="light-black mb-8"><a href="#">Dr. Rakshita Khanderwal</a></h4>
                    <h6 class="fw-600 m-0">Gynecologist</h6>
                    <h6>Qualifications:</h6><p> MBBS, MS, DNB (OBGYN), FIL</p>
                    <h6>Experience:1 year</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="team_card mb-md-0 mb-24">
                  <div class="image_block mb-16">
                    <a href="#"><img src="assets/media/team/Dr. Ragini Garg-Photoroom.png" alt=""></a>
                    <!-- <ul class="social-media-links unstyled">
                      <li><a href="#"><img src="assets/media/icons/instagram.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/twitter.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/facebook.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/linkedin.png" alt=""></a></li>
                    </ul> -->
                  </div>
                  <div class="text_block text-center">
                    <h4 class="light-black mb-8"><a href="#">Dr. Ragini Garg</a></h4>
                    <h6 class="fw-600 m-0">Gynecologist</h6>
                    <h6>Qualifications:</h6><p> MBBS,OBGYN</p>
                    <h6>Experience:Fresher</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="team_card">
                  <div class="image_block mb-16">
                    <a href="#"><img src="assets/media/team/Dr. Priyanka MaheshwariPhotoroom.png" alt=""></a>
                    <!-- <ul class="social-media-links unstyled">
                      <li><a href="#"><img src="assets/media/icons/instagram.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/twitter.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/facebook.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/linkedin.png" alt=""></a></li>
                    </ul> -->
                  </div>
                  <div class="text_block text-center">
                    <h4 class="light-black mb-8"><a href="#">Dr. Priyanka Maheshwari</a></h4>
                    <h6 class="fw-600 m-0">Gynecologist</h6>
                    <h6>Qualifications:</h6><p> MBBS,DGO</p>
                    <h6>Experience:15 Years</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="team_card">
                  <div class="image_block mb-16">
                    <a href="#"><img src="assets/media/team/Dr. Varsha Dadhich-Photoroom.png" alt=""></a>
                    <!-- <ul class="social-media-links unstyled">
                      <li><a href="#"><img src="assets/media/icons/instagram.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/twitter.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/facebook.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/linkedin.png" alt=""></a></li>
                    </ul> -->
                  </div>
                  <div class="text_block text-center">
                    <h4 class="light-black mb-8"><a href="#">Dr. Varsha Dadhich</a></h4>
                    <h6 class="fw-600 m-0">Pediatrician</h6>
                    <h6>Qualifications:</h6><p>MBBS, DCH (DCC),(FPCC)</p>
                    <h6>Experience:7 Years(FIC)</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="team_card mb-md-0 mb-24">
                  <div class="image_block mb-16">
                    <a href="#"><img src="assets/media/team/Dr. Monika Meena-Photoroom.png" alt=""></a>
                    <!-- <ul class="social-media-links unstyled">
                      <li><a href="#"><img src="assets/media/icons/instagram.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/twitter.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/facebook.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/media/icons/linkedin.png" alt=""></a></li>
                    </ul> -->
                  </div>
                  <div class="text_block text-center">
                    <h4 class="light-black mb-8"><a href="#">Dr. Monika Meena</a></h4>
                    <h6 class="fw-600 m-0">Pediatrician</h6>
                    <h6>Qualifications:</h6><p>MBBS (LHMC), MD (UCMS & GTB)</p>
                    <h6>Experience:3 Years(Senior Resident)</h6>
                  </div>
                </div>
              </div>
           <!-- <a href="team-detail.html" class="cus-btn d-flex m-auto">See All</a>  -->
        </div>
      </section>
      <!-- Team Section End -->

      <!-- Appointment Form Start -->
      <section class="app-booking">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <img src="assets/media/images/appointment-form.png" alt="" class="appointment-image br-30">
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="appointment-form p-24 mt-xl-0 mt-24">
                <!-- <h6 class="color-primary">Appointment</h6> -->
                <h2 class="light-black">Book Your Appointment</h2>
                <form method="post" action="forms/appointment.php"
                  class="form-group mt-32">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="icon-block mb-24">
                        <label for="first-name" class="mb-4p">Name*</label>
                        <input type="text" class="form-control" id="first-name" name="name" required
                          placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="icon-block mb-24">
                        <label for="no" class="mb-4p">Number*</label>
                        <input type="tel" class="form-control" id="no" name="number" required
                          placeholder="+1 (547) 546 768">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="icon-block mb-24">
                        <label for="email" class="mb-4p">Email*</label>
                        <input type="email" class="form-control" id="e-mail" name="email" required
                          placeholder="email@example.com">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="icon-block mb-24">
                        <label for="date" class="mb-4p">Date*</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="icon-block mb-24">
                        <label for="tim" class="mb-4p">Time*</label>
                        <input type="time" class="form-control" id="tim" name="time" required>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="icon-block mb-32">
                        <label for="tim" class="mb-4p">Message</label>
                        <textarea name="message" class="form-control" id="msg" cols="30" rows="6"
                          placeholder="Hey there!"></textarea>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="cus-btn small-pad">Book an Appointment</button>
                  <!-- Alert Message -->
                  <div id="message" class="alert-msg"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Appointment Form End -->

      <!-- Testimonials Section Start -->
      <section class="testimonials p-50">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <h6 class="color-primary fw-600 mb-4p">Testimonials</h6>
              <h2 class="light-black mb-16">See What Our Patients Say About Our Services</h2>
              <p class="gray">See What Our Patients Say About Our Services
              At Naari Care, our patients are at the heart of everything we do. Their words of appreciation inspire us to serve with even more dedication and compassion. From maternity care to gynecological treatments, women trust us for our expertise, empathy, and commitment to their well-being. Read their stories and discover why Naari Care is the preferred choice for women’s health.</p>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="testimonials-slider-1 mb-16">
                <div class="slide-item">
                  <div class="testimonials-card">
                    <div class="user-image">
                      <img src="assets/media/users/user-6.png" alt="">
                    </div>
                    <div class="text-block">
                      <h5>Divya Tripathi</h5>
                      <p>Lorem ipsum dolor sit amet conse<br> ctetur. Vestibulum elit eu vulputate<br> tristique enim
                        molestie.</p>
                    </div>
                    <img src="assets/media/icons/qoutes.png" alt="" class="quote-img">
                  </div>
                </div>
                <div class="slide-item">
                  <div class="testimonials-card">
                    <div class="user-image">
                      <img src="assets/media/users/user-7.png" alt="">
                    </div>
                    <div class="text-block">
                      <h5>Tanisha Maheshwari</h5>
                      <p>Lorem ipsum dolor sit amet conse<br> ctetur. Vestibulum elit eu vulputate<br> tristique enim
                        molestie.</p>
                    </div>
                    <img src="assets/media/icons/qoutes.png" alt="" class="quote-img">
                  </div>
                </div>
                <div class="slide-item">
                  <div class="testimonials-card">
                    <div class="user-image">
                      <img src="assets/media/users/user-8.png" alt="">
                    </div>
                    <div class="text-block">
                      <h5>Khushi Khanderwal</h5>
                      <p>Lorem ipsum dolor sit amet conse<br> ctetur. Vestibulum elit eu vulputate<br> tristique enim
                        molestie.</p>
                    </div>
                    <img src="assets/media/icons/qoutes.png" alt="" class="quote-img">
                  </div>
                </div>
              </div>
              <div class="testimonials-slider-2 mb-16">
                <div class="slide-item">
                  <div class="testimonials-card">
                    <div class="user-image">
                      <img src="assets/media/users/user-9.png" alt="">
                    </div>
                    <div class="text-block">
                      <h5>Lakshita Hada</h5>
                      <p>Lorem ipsum dolor sit amet conse<br> ctetur. Vestibulum elit eu vulputate<br> tristique enim
                        molestie.</p>
                    </div>
                    <img src="assets/media/icons/qoutes.png" alt="" class="quote-img">
                  </div>
                </div>
                <div class="slide-item">
                  <div class="testimonials-card">
                    <div class="user-image">
                      <img src="assets/media/users/user-10.png" alt="">
                    </div>
                    <div class="text-block">
                      <h5>Mehak Srivastava</h5>
                      <p>Lorem ipsum dolor sit amet conse<br> ctetur. Vestibulum elit eu vulputate<br> tristique enim
                        molestie.</p>
                    </div>
                    <img src="assets/media/icons/qoutes.png" alt="" class="quote-img">
                  </div>
                </div>
                <div class="slide-item">
                  <div class="testimonials-card">
                    <div class="user-image">
                      <img src="assets/media/users/user-11.png" alt="">
                    </div>
                    <div class="text-block">
                      <h5>Navya Gautam</h5>
                      <p>Lorem ipsum dolor sit amet conse<br> ctetur. Vestibulum elit eu vulputate<br> tristique enim
                        molestie.</p>
                    </div>
                    <img src="assets/media/icons/qoutes.png" alt="" class="quote-img">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials Section End -->

      <!-- FAQ's Start -->
      <!-- <section class="faq">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <h6 class="color-primary fw-600">FAQ's</h6>
              <h2 class="light-black mb-32">All Your Questions Have Answers Here</h2> -->
              <!-- <div class="faq-form"> -->
                <!-- <form method="post" action="https://uiparadox.co.uk/templates/medicare/v3/index.html"
                  class="form-group contact-from">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="icon-block mb-24">
                        <label for="first_name" class="mb-4p">Name*</label>
                        <input type="text" class="form-control" id="first_name" name="name" required
                          placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="icon-block mb-24">
                        <label for="e-mail" class="mb-4p">Email*</label>
                        <input type="email" class="form-control" id="e-mail" name="email" required
                          placeholder="email@example.com">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="icon-block mb-32">
                        <label for="mssg" class="mb-4p">Question</label>
                        <textarea name="message" class="form-control" id="mssg" cols="30" rows="5"
                          placeholder="Hey there!"></textarea>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="cus-btn small-pad">Post Question</button>
                  <!-- Alert Message -->
                  <!-- <div id="messagee" class="alert-msg"></div> -->
                <!-- </form>  -->
              <!-- </div> -->
            <!-- </div>
            <div class="col-xl-6 col-lg-6">
              <div class="row m-0 p-md-0 p-24" id="accordionExample">
                <div class="faq-block border-0">
                  <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1"
                    aria-expanded="true" aria-controls="faq1">How do I buy Medicare here?
                  </a>
                  <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                    data-bs-parent="#accordionExample">
                    <p class="gray">You can buy Medicare by clicking on the buy now button and get the most amazing
                      clinic theme on the platform!
                      Get the theme now and set up your online clinic presence! and help as many customers as you can.
                    </p>
                  </div>
                </div>
                <div class="faq-block">
                  <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2"
                    aria-expanded="true" aria-controls="faq2"> Are walk-in appointments available?
                  </a>
                  <div id="faq2" class="accordion-collapse collapse " aria-labelledby="faq2"
                    data-bs-parent="#accordionExample">
                    <p class="gray">You can buy Medicare by clicking on the buy now button and get the most amazing
                      clinic theme on the platform!
                      Get the theme now and set up your online clinic presence! and help as many customers as you can.
                    </p>
                  </div>
                </div>
                <div class="faq-block">
                  <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3"
                    aria-expanded="true" aria-controls="faq3">What are the accepted payment methods for medical <br>
                    services at your clinic?
                  </a>
                  <div id="faq3" class="accordion-collapse collapse " aria-labelledby="faq3"
                    data-bs-parent="#accordionExample">
                    <p class="gray">You can buy Medicare by clicking on the buy now button and get the most amazing
                      clinic theme on the platform!
                      Get the theme now and set up your online clinic presence! and help as many customers as you can.
                    </p>
                  </div>
                </div>
                <div class="faq-block">
                  <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4"
                    aria-expanded="true" aria-controls="faq4">Do you offer telemedicine or virtual appointments?
                  </a>
                  <div id="faq4" class="accordion-collapse collapse " aria-labelledby="faq4"
                    data-bs-parent="#accordionExample">
                    <p class="gray">You can buy Medicare by clicking on the buy now button and get the most amazing
                      clinic theme on the platform!
                      Get the theme now and set up your online clinic presence! and help as many customers as you can.
                    </p>
                  </div>
                </div>
                <div class="faq-block">
                  <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5"
                    aria-expanded="true" aria-controls="faq5">Is parking available on-site for patients and visitors?
                  </a>
                  <div id="faq5" class="accordion-collapse collapse " aria-labelledby="faq5"
                    data-bs-parent="#accordionExample">
                    <p class="gray">You can buy Medicare by clicking on the on the platform!
                      Get the theme now and set up your online clinic presence! and help as many customers as you can.
                    </p>
                  </div>
                </div>
                <div class="faq-block">
                  <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6"
                    aria-expanded="true" aria-controls="faq6">How can I access my medical records or request a <br> copy
                    of my health information?
                  </a>
                  <div id="faq6" class="accordion-collapse collapse " aria-labelledby="faq6"
                    data-bs-parent="#accordionExample">
                    <p class="gray">You can buy Medicare by platform!
                      Get the theme now and set up your online clinic presence! and help as many customers as you can.
                    </p>
                  </div>
                </div>
                <div class="faq-block">
                  <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7"
                    aria-expanded="true" aria-controls="faq7">How can I make an appointment in advance?
                  </a>
                  <div id="faq7" class="accordion-collapse collapse " aria-labelledby="faq7"
                    data-bs-parent="#accordionExample">
                    <p class="gray">You can buy Medicare by clicking on the buy now button and get the most amazing
                      clinic theme on the platform!
                      Get the theme now </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- FAQ's End -->

      <!-- Contact Us Banner Start -->
      <section class="contact-us p-50">
        <div class="container">
          <div class="row">
            <div class="contact-banner">
              <div class="text-area">
                <h2 class="white">Get Helpline Services with <br>One Call Away</h2>
                <div class="d-flex align-items-center">
                  <a href="tel:+916376993470" class="h2 color-primary"><img src="assets/media/icons/telephone.png" alt="">63769 93470</a>
                </div>
                <h5 class="white mb-32">We are available for your help 24/7</h5>
                <a href="contact.php" class="cus-btn">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us Banner End -->

      <!-- Blog Area Start -->
      <!-- <section class="blog">
        <div class="container">
          <h6 class="color-primary fw-600">Blogs</h6>
          <h2 class="light-black mb-32">Read Blogs Written By Our Medics</h2>
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-8 offset-md-0 offset-2">
              <div class="blog_card mb-32">
                <div class="blog_card_img_block">
                  <a href="blog-detail.html"><img src="assets/media/blog/blog-1.png" alt="" class="br-30"></a>
                  <p class="date h6 fw-600">12 October 24</p>
                </div>
                <div class="blog_card_text_block p-24">
                  <h5 class="mb-32"><a href="blog-detail.html">A Closer Look at Mental Health: Breaking the Stigma</a>
                  </h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="author">
                      <img src="assets/media/users/blog-user_1.png" alt="">
                      <h6 class="light-black fw-600">Sonia Cleric</h6>
                    </div>
                    <a href="blog-detail.html" class="fw-600 color-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-8 offset-md-0 offset-2">
              <div class="blog_card mb-32">
                <div class="blog_card_img_block">
                  <a href="blog-detail.html"><img src="assets/media/blog/blog-2.png" alt="" class="br-30"></a>
                  <p class="date h6 fw-600">31 November 24</p>
                </div>
                <div class="blog_card_text_block p-24">
                  <h5 class="mb-32"><a href="blog-detail.html">Understanding Telemedicine: The Future of Healthcare</a>
                  </h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="author">
                      <img src="assets/media/users/blog-user_2.png" alt="">
                      <h6 class="light-black fw-600">Sonia Cleric</h6>
                    </div>
                    <a href="blog-detail.html" class="fw-600 color-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-8 offset-md-0 offset-2">
              <div class="blog_card mb-32">
                <div class="blog_card_img_block">
                  <a href="blog-detail.html"><img src="assets/media/blog/blog-3.png" alt="" class="br-30"></a>
                  <p class="date h6 fw-600">15 November 23</p>
                </div>
                <div class="blog_card_text_block p-24">
                  <h5 class="mb-32"><a href="blog-detail.html">The Impact of Stress: Tips for Stress Management</a></h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="author">
                      <img src="assets/media/users/blog-user_3.png" alt="">
                      <h6 class="light-black fw-600">Chris Roxin</h6>
                    </div>
                    <a href="blog-detail.html" class="fw-600 color-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="see_all_btn d-flex text-center">
            <a href="blogs.html" class="cus-btn m-auto">See All</a>
          </div>
        </div>
      </section> -->
      <!-- Blog Area End -->
    </div>

    <!-- Footer Start -->
<?php
include 'footer.php';
?>