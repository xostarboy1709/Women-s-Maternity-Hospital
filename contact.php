<?php
include 'head.php';
$contact = "active";
include 'header.php';
?>

<body>
  <!-- Preloader-->
  <div id="preloader">
    <div class="heartbeatloader">
      <svg class="svgdraw" width="100%" height="100%" viewBox="0 0 150 400" xmlns="../../../../www.w3.org/2000/svg.html">
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
    <div class="bg-wrapper-2">

      <!-- Title-Banner Start -->
      <div class="title-banner">
        <div class="container">
          <div class="row">
            <h1 class="light-black">Contact</h1>
            <p style="margin-top: 30px;">We're here to assist your healthcare needs.Contact us today to schedule an appointment or get more information about our services.For appointments or inquiries,please call us or fill out the contact form on our website.</p> 
          </div>
        </div>
      </div>
      <!-- Title-Banner End -->

      <!-- Appointment Form Start -->
      <section class="app-booking v-2 p-55">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 mb-lg-0 mb-32">
              <div class="appointment-form p-24">
                <h6 class="color-primary">Contact Form</h6>
                <h2 class="light-black">Fill Out the Form</h2>
                <form method="post" action="forms/contact.php" id="form" class="form-group contact-form mt-32">
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
                        <label for="eemail" class="mb-4p">Email*</label>
                        <input type="email" class="form-control" id="e-mail" name="email" required
                          placeholder="email@example.com">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="icon-block mb-24">
                        <label for="msg" class="mb-4p">Message</label>
                        <textarea name="message" class="form-control" id="msg" cols="30" rows="7"
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
            <div class="col-xl-6 col-lg-6 ">
              <div class="map mb-24">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.602471067415!2d75.83349505313649!3d25.124245307860065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f850052ec8f0b%3A0xb3d68589317abfdb!2sNaari%20care%20Women&#39;s%20hospital!5e0!3m2!1sen!2sin!4v1739769389239!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="links-block">
                <div class="our-links">
                  <div class="address_detail">
                    <div class="list">
                      <p class="details"><img src="assets/media/icons/location.png" alt=""><span class="h5 m-0">4RFP+M7M, Rangbari, Kota, Rajasthan</span></p>
                    </div>
                    <div class="list"><a href="mailto:naaricarewomenshospital25@gmail.com" class="details"><img src="assets/media/icons/mail.png" alt=""><span class="h5 m-0">naaricarewomenshospital25@gmail.com</span></a>
                    </div>
                    <div class="list">
                      <p class="details"> <a href="tel:+916376993470"> <img src="assets/media/icons/telephone-2.png" alt=""><span class="h5 m-0">63769 93470</span></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Appointment Form End -->
    </div>
    <!-- Contact Us Banner Start -->
    <section class="contact-us">
      <div class="container">
        <div class="row">
          <div  class="contact-banner">
            <div class="text-area">
              <h2 class="white">Get Helpline Services with <br>one Call Away</h2>
              <div class="d-flex align-items-center">
                <a href="tel:+916376993470" class="h2 color-primary"><img src="assets/media/icons/telephone.png" alt="">63769 93470</a>
              </div>
              <h5 class="white mb-32">We are available for your help 24/7</h5>
              <a href="#" class="cus-btn">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Banner End -->


  </div>
  <!-- Footer Start -->
  <?php
  include 'footer.php';
  ?>