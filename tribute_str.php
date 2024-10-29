<?php
$countries =
  [
    [
      'country' => 'usa',
      'video' => 'us.mp4',
    ],
    [
      'country' => 'uk',
      'video' => 'uk.mp4',
    ],
    [
      'country' => 'australia',
      'video' => 'australia.mp4',
    ],
    [
      'country' => 'nz',
      'video' => 'nz.mp4',
    ],
    [
      'country' => 'canada',
      'video' => 'canada.mp4',
    ],
    [
      'country' => 'other',
      'video' => 'other.mp4',
    ]
  ];

$flagUrl = $_GET['country'];

$country = Null;
foreach ($countries as $c) {
  if ($c['country'] == $flagUrl) {
    $country = $c;
    break;
  }
}

$original_price = 5.00;

?>

<?php $page = 'Shop';
include 'includes/head.php'; ?>

<style>
  .member-details-area::before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .5);
    content: '';
    z-index: 0;
  }

  .video-wrap video {
    opacity: 1;
  }

  .team-thumb img {
    border: 5px solid #fff;
    width: auto;
    box-shadow: 0 0 15px 10px rgba(0, 0, 0, .5);
  }

  .btn.btn-custom {
    width: 100%;
    color: #8d1a24;
    background-color: #fff;

  }
</style>

<body>

  <div class="mouseCursor cursor-outer"></div>
  <div class="mouseCursor cursor-inner"><span>Drag</span></div>

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/aside.php'; ?>

  <main>
    <!-- member about area start  -->
    <section class="member-details-area pt-130">
      <div class="video-wrap">
        <video src="assets/video/<?= $country['video'] ?>" muted autoplay loop></video>
      </div>
      <div class="container">
        <div class="member-details-wrapper">
          <div class="row wow fadeInUp justify-content-between align-items-center" data-wow-delay=".3s">
            <div class="col-lg-4">
              <div class="team-thumb pb-30">
                <img src="assets/img/about/img-1.png" alt="img not found">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="team-content glassy position-relative">
                <div class="row">
                  <div class="col-12">
                    <button class="btn btn-custom" id="buy-now-btn">Buy Now</button>
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
  <script src="assets/js/nice-select.min.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/jquery.odometer.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/js_circle-progress.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/paypalButton.js"></script>

  <script>
    $('#buy-now-btn').on('click', function() {
      $('#paypal-button-container').show();

      $.getScript('assets/js/paypalButton.js', function() {
        renderPayPalButton(<?= $original_price ?>, 'downloadbook.php');
      });
    });
  </script>

</body>

</html>
