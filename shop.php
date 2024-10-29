<?php $page = 'Shop';
include 'includes/head.php'; ?>
<style>
  small {
    font-size: 12px;
  }
</style>

<body>

  <div class="mouseCursor cursor-outer"></div>
  <div class="mouseCursor cursor-inner"><span>Drag</span></div>

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/aside.php'; ?>

  <?php

  include 'config/dbconn.php';

  $stmt = $conn->prepare("SELECT * FROM products LIMIT 1"); // Adjust query as needed
  $stmt->execute();
  $result = $stmt->get_result();
  $product = $result->fetch_assoc();

  // Assign variables for PHP
  $product_id = $product['id'];
  $original_price = $product['price'];
  $discounted_price = $original_price - ($original_price * 0.25);
  ?>

  <main>

    <!-- page title area start  -->
    <section class="page-title-area" data-background="assets/img/banner/banner-1-4.jpg">
      <div class="page-title-shape">
        <img class="shape-cube" src="assets/img/shape/cube-shape.png" alt="img not found">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="page-title-wrapper">
              <h1 class="page-title mb-10">Shop</h1>
            </div>
            <div class="breadcrumb-menu">
              <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items">
                  <li class="trail-item trail-begin"><a href="index.html"><span>home</span></a>
                  </li>
                  <li class="trail-item trail-end"><span>Shop</span></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page title area end  -->

    <!-- member about area start  -->
    <section class="member-details-area pt-130">
      <div class="container">
        <div class="member-details-wrapper">
          <div class="row wow fadeInUp justify-content-between" data-wow-delay=".3s">
            <div class="col-lg-4">
              <div class="team-thumb pb-30">
                <img src="assets/img/about/img-1.png" alt="img not found">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="team-content">
                <div class="vtrn-form position-relative">
                  <form id="vateren-form">
                    <div class="row">
                      <div class="col-12">
                        <select name="vateren" id="vaterenSelect" class="form-select">
                          <option value="default" selected disabled>Are you a military or Police veteran?</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                        <small class="text-danger" id="vaterenSelectError" style="display: none;">
                          * Please select an option.
                        </small>
                      </div>
                    </div>
                  </form>
                  <form action="" id="non-vateren-form" class="wow" style="display: none;">
                    <div class="row">
                      <div class="col-12">
                        <select name="still_serving" id="stillServing" class="form-select">
                          <option value="default">Are you still serving in the armed services or the Police?</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                        <small class="text-danger" id="stillServingError" style="display: none;">
                          * Please select an option.
                        </small>
                      </div>
                      <div class="col-12 py-3">
                        <select name="country" id="countrySelect" class="form-select">
                          <option value="default">Which country have you served?</option>
                          <option value="usa">USA</option>
                          <option value="uk">UK</option>
                          <option value="australia">Australia</option>
                          <option value="nz">New Zealand</option>
                          <option value="canada">Canada</option>
                          <option value="other">Other</option>
                        </select>
                        <small class="text-danger" id="countryError" style="display: none;">
                          * Please select a country.
                        </small>
                      </div>
                      <div class="col-12">
                        <select name="forces" id="forcesSelect" class="form-select">
                          <option value="default">
                            Have you served in or are you currently serving in the armed forces?
                          </option>
                          <option value="airforce">Air Force</option>
                          <option value="army">Army</option>
                          <option value="marines">Marines</option>
                          <option value="navy">Navy</option>
                          <option value="coastguard">Coast Guard</option>
                          <option value="police">Police</option>
                        </select>
                        <small class="text-danger" id="forcesError" style="display: none;">
                          * Please select an option.
                        </small>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="row mt-40">
                  <div class="col-12">
                    <div class="vtrn-submit d-flex justify-content-between align-items-center">
                      <div class="t-price">
                        <span id="total">Total Price:</span>
                        <span id="price">$<?= number_format($original_price, 2); ?></span>
                        <span id="discount-price"></span>
                      </div>
                      <div id="discount_text" style="display: none;">* 25% OFF</div>
                      <button class="btn btn-custom" id="submit_btn" type="submit">Submit</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div id="paypal-button-container" style="display: none; margin-top: 20px;">
                      <div id="paypal-button"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- member about area end  -->

    <?php include 'includes/gallery.php'; ?>

  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendor/waypoints.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/meanmenu.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/magnific-popup.min.js"></script>
  <script src="assets/js/backToTop.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/jquery.odometer.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/js_circle-progress.min.js"></script>
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      const originalPrice = <?= $original_price ?>;
      const discountedPrice = <?= $discounted_price ?>;
      const productId = <?= $product_id ?>;

      // When the veteran selection changes
      $('#vaterenSelect').change(function() {
        if ($('#vaterenSelect').val() === 'yes') {
          // Apply discount, change button to "Submit", hide form, and hide PayPal button initially
          $('#price').html(`<s>$${originalPrice.toFixed(2)}</s>`);
          $('#discount-price').html(`$${discountedPrice.toFixed(2)}`).show();
          $('#discount_text').show();
          $('#non-vateren-form').hide();
          $('#submit_btn').html('Submit');
          $('#paypal-button-container').hide(); // Ensure PayPal button is hidden initially

        } else if ($('#vaterenSelect').val() === 'no') {
          // Show form, change button to "Next", and reset prices
          $('#price').html(`$${originalPrice.toFixed(2)}`);
          $('#discount_text').hide();
          $('#discount-price').hide();
          $('#non-vateren-form').addClass('fadeInUp').show();
          $('#submit_btn').html('Next');
          $('#paypal-button-container').hide(); // Hide PayPal button

        }
      });

      // Handle the form submission
      $('#submit_btn').on('click', function(e) {
        e.preventDefault();

        if ($('#vaterenSelect').val() === 'yes') {
          // If "Yes" was selected, show the PayPal button on submit
          $('#paypal-button-container').show();

          $.getScript('assets/js/paypalButton.js', function() {
            renderPayPalButton(discountedPrice, productId);
          });

        } else if ($('#vaterenSelect').val() === 'no') {
          // If "No" was selected, validate the form fields
          let isValid = true;
          const stillServing = $('#stillServing').val();
          const selectedCountry = $('#countrySelect').val();
          const forces = $('#forcesSelect').val();

          // Form validation
          if (stillServing === 'default' || !stillServing) {
            $('#stillServingError').show();
            isValid = false;
          } else {
            $('#stillServingError').hide();
          }

          if (selectedCountry === 'default' || !selectedCountry) {
            $('#countryError').show();
            isValid = false;
          } else {
            $('#countryError').hide();
          }

          if (forces === 'default' || !forces) {
            $('#forcesError').show();
            isValid = false;
          } else {
            $('#forcesError').hide();
          }

          // If valid, redirect to the next page
          if (isValid) {
            // Send the country via AJAX (optional if you need backend processing)
            $.ajax({
              url: 'process_country.php', // Change this to your server-side script if needed
              type: 'POST',
              data: {
                country: selectedCountry
              },
              success: function(response) {
                // Redirect to tribute.php with the selected country
                window.location.href = 'tribute.php?country=' + selectedCountry;
              },
              error: function() {
                alert('There was an error processing your request.');
              }
            });
          }
        } else {
          // If no selection was made, show an error message
          const vaterenSelect = $('#vaterenSelect').val()
          if (vaterenSelect === 'default' || !vaterenSelect) {
            $('#vaterenSelectError').show();
            isValid = false;
          } else {
            $('#vaterenSelectError').hide();
          }
        }
      });

      // Hide error messages when selection changes
      $('#stillServing').on('change', function() {
        if ($(this).val() !== 'default') {
          $('#stillServingError').hide();
        }
      });

      $('#countrySelect').on('change', function() {
        if ($(this).val() !== 'default') {
          $('#countryError').hide();
        }
      });

      $('#forcesSelect').on('change', function() {
        if ($(this).val() !== 'default') {
          $('#forcesError').hide();
        }
      });

      $('#vaterenSelect').on('change', function() {
        if ($(this).val() !== 'default') {
          $('#vaterenSelectError').hide();
        }
      });
    });
  </script>

</body>

</html>
