<?php
include 'head.php';
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
    <div class="bg-wrapper-2">
      <!-- Title-Banner Start -->
      <div class="title-banner">
        <div class="container">
          <div class="row">
            <h1 class="light-black">Book Appointment</h1>
            <p>Booking an appointment at Naari Care is easy! Simply call our office
                        or use our online booking system to schedule your consultation with one of our healthcare
                        providers.</p>
          </div>
        </div>
      </div>
      <!-- Title-Banner End -->
      <div class="bg-wrapper-3">
        <!-- Appointment Form Start -->
        <section class="app-booking p-120">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-6">
                <div class="app-table v-2">
                  <!--Table-->
                  <!-- <div class="time-table v-2">
                    <h6 class="color-primary fw-600 mb-8">Working Hours</h6> -->
                    <!-- <h3 class="fw-700">Book Appointment According to the Time Table</h3> -->
                    <!-- <div class="table-responsive">
                      <!--Table-->
                      <!-- <table class="table appointment-table">
                        <!--Table head-->
                        <!-- <thead>
                          <tr>
                            <th class="th-sm"></th>
                            <th class="th-sm"></th>
                            <th class="th-sm"></th>
                          </tr>
                        </thead>  -->
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
                          <tr> -->
                            <!-- <td><span class="ptb-24 fw-600">Sun</span></td>
                            <td class="fw-600"><span class="ptb-24"> 7AM - 11PM</span></td>
                            <td><a href="appointment.html" class="color-primary fw-600 ptb-24">Book Now</a></td>
                          </tr> -->

                        <!-- </tbody> -->
                        <!--Table body-->
                      <!-- </table> -->
                      <!--Table-->
                    <!-- </div>  -->
                    <!-- <div class="bottom-bar d-flex justify-content-between align-items-center">
                      <h5 class="light-black mt-16">Booking an appointment at Naari Care is easy! Simply call our office
                        or use our online booking system to schedule your consultation with one of our healthcare
                        providers.</h5>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="appointment-form p-24 mt-xl-0 mt-16">
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
      </div>
    </div>
  </div>
  <!-- Footer Start -->
  <?php
    include 'footer.php';
    ?>

