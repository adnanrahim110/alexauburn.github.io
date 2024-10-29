<?php $page = 'home';
include 'includes/head.php' ?>

<body>

  <?php include 'includes/popup.php' ?>

  <div class="mouseCursor cursor-outer"></div>
  <div class="mouseCursor cursor-inner"><span>Drag</span></div>

  <?php include 'includes/navbar.php' ?>
  <?php include 'includes/aside.php' ?>

  <main class="p-relative w-100 h-100 z-index-0" id="main">
    <div class="plane-modal">
      <img src="assets/img/3d/img-1.png" alt="" class="img-fluid">
    </div>
    <!-- banner-area-start -->
    <div class="banner-area banner-area1 pos-rel z-index-2">
      <!-- line animation - start -->
      <div class="line_wrap banner-line">
        <div class="line_item"></div>
      </div>
      <!-- line animation - end -->
      <div class="swiper-container slider__active">
        <div class="swiper-wrapper">
          <!-- <div class="swiper-slide">
            <div class="single-banner single-banner-1 banner-1080 p-relative d-flex align-items-center">
              <div class="banner-bg banner-bg1 banner-bg1-1" data-background="assets/img/banner/banner-1-1.jpg">
              </div>
              <div class="arm-hero-shape-wrapper">
                <div class="arm-hero-shape arm-shape-a-1">
                  <img src="assets/img/shape/shape-1.png" alt="img not found">
                </div>
                <div class="arm-hero-shape arm-shape-a-2">
                  <img src="assets/img/shape/shape-2.png" alt="img not found">
                </div>
                <div class="arm-hero-shape arm-shape-a-4">
                  <img src="assets/img/shape/shape-4.png" alt="img not found">
                </div>
              </div>
              <div class="armado-shape">
                <span class="stroke-text">ALEX AUBURN</span>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="banner-content banner-content1 banner-content1-1 pt-100">
                      <div class="banner-meta-text">
                        <span>Discover the truth</span>
                      </div>
                      <h1 class="banner-title">
                        <span class="title-anim-part-1">
                          <span>Secrets Beneath </span>
                        </span>
                        <span class="title-anim-part-2">
                          <span>the <span class="marked-text">Surface</span></span>
                        </span>
                      </h1>
                      <div class="banner-btn mt-80">
                        <a href="services.html" class="arm-btn arm-btn-white">
                          <span class="circle-btn"><i class="fal fa-long-arrow-right"></i></span>
                          Get Start Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="single-banner single-banner-1 banner-1080 p-relative d-flex align-items-center">
              <div class="banner-bg banner-bg1 banner-bg1-2" data-background="assets/img/banner/banner-1-2.jpg">
              </div>

              <div class="arm-hero-shape-wrapper">
                <div class="arm-hero-shape arm-shape-a-1">
                  <img src="assets/img/shape/shape-1.png" alt="img not found">
                </div>
              </div>
              <div class="armado-shape">
                <span class="stroke-text">ALEX AUBURN</span>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="banner-content banner-content1 banner-content1-2 pt-100">
                      <div class="banner-meta-text">
                        <span>Race Against Time</span>
                      </div>
                      <h1 class="banner-title">
                        <span class="title-anim-part-1">
                          <span>Will he uncover the</span>
                        </span>
                        <span class="title-anim-part-2">
                          <span><span class="marked-text"> conspiracy</span> before</span>
                        </span>
                        <span class="title-anim-part-3">
                          <span>it's too late?</span>
                        </span>
                      </h1>
                      <div class="banner-btn mt-80">
                        <a href="services.html" class="arm-btn arm-btn-white">
                          <span class="circle-btn"><i class="fal fa-long-arrow-right"></i></span>
                          Get Start Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="swiper-slide">
            <div class="single-banner single-banner-1 banner-1080 p-relative d-flex align-items-center">
              <div class="hero-video">
                <video muted autoplay loop>
                  <source src="assets/video/hero.mp4" type="video/mp4">
                </video>
              </div>
              <div class="banner-bg banner-bg1 banner-bg1-3">
              </div>
              <div class="arm-hero-shape-wrapper">
                <div class="arm-hero-shape arm-shape-c-1" data-animation="fadeIn" data-delay="2s">
                  <img src="assets/img/shape/shape-5.png" alt="img not found">
                </div>
                <div class="arm-hero-shape arm-shape-a-1">
                  <img src="assets/img/shape/shape-1.png" alt="img not found">
                </div>
              </div>
              <div class="armado-shape">
                <span class="stroke-text">ALEX AUBURN</span>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="banner-content banner-content1 banner-content1-3 pt-100">
                      <div class="banner-meta-text">
                        <span>Discover the truth</span>
                      </div>
                      <h1 class="banner-title">
                        <span class="title-anim-part-1">
                          <span>Secrets Beneath</span>
                        </span>
                        <span class="title-anim-part-2">
                          <span>the <span class="marked-text">Surface</span></span>
                        </span>
                      </h1>
                      <div class="banner-btn mt-80">
                        <a href="contact.php" class="arm-btn arm-btn-white">
                          <span class="circle-btn"><i class="fal fa-long-arrow-right"></i></span>
                          Get Start Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner-area-end -->

    <!-- about-area-start-->
    <section class="about-area pt-70 pb-65 p-relative bg-transparent z-index--0 fix" id="book">
      <!-- line animation - start -->
      <div class="deco_wrap">
        <div class="line_wrap body-line">
          <div class="line_item"></div>
        </div>
      </div>
      <!-- line animation - end -->
      <div class="container">
        <div class="about-inner p-relative">
          <div class="about-area-shape">
            <img class="about-shape-1" src="assets/img/shape/x-frame.png" alt="img not found">
          </div>
          <div class="row  align-items-center justify-content-center">
            <div class="col-xl-5">
              <div class="about-thumb-1-area">
                <div class="about-thumb-1-wrapper mb-65 p-relative z-index-1">
                  <div class="about-thumb about-thumb-1 p-relative wow fadeInLeft" data-wow-delay=".3s">
                    <img src="assets/img/about/img-2.png" alt="img not found">
                    <div class="panel wow"></div>
                  </div>
                  <div class="facility-shape-wrapper">
                    <img class="about-shape about-img" src="assets/img/about/img-1.png" alt="img not found">
                    <img class="about-shape shape-1" src="assets/img/shape/round-1.png" alt="img not found">
                    <img class="about-shape shape-2" src="assets/img/shape/round-2.png" alt="img not found">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="about-content-wrapper mb-65 wow fadeInRight" data-wow-delay=".3s">
                <div class="bd-section-title-wrapper">
                  <div class="bd-section-subtitle">
                    About Book
                    <i class="flaticon-001-bullet"></i>
                  </div>
                  <h3 class="bd-section-title mb-40">About Book
                    <span class="title-bg">
                      <img src="assets/img/shape/scratched-shape.png" alt="img not found">
                    </span>
                  </h3>
                </div>
                <div class="about-content">
                  <p>
                    Join Mike McAllister on an adrenaline-pumping adventure in “The McAllister Contingency.” Follow him
                    as he delves into a world of national security breaches, mysterious disappearances, and dangerous
                    encounters. From the picturesque landscapes of Cornwall to the vast Australian Outback, McAllister’s
                    quest to uncover the truth behind the theft of sensitive missile system information will keep you
                    hooked from start to finish. With a diverse cast of characters, unexpected plot twists, and
                    heart-pounding action, this captivating story will leave you breathless. Prepare to be swept away by
                    a tale of espionage, betrayal, and suspense, where every turn brings new revelations and challenges.
                    Can McAllister unravel the web of deception before it’s too late? Find out in “The McAllister
                    Contingency.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about-area-end -->

    <!-- About Book 2-start -->
    <section class="donation-area pt-130 pb-130 donation-style fix z-index--4">
      <div class="donation-overlay-img area-absolute parallax-bg " data-background="assets/img/bg/book-banner.png">
      </div>
      <div class="container">
        <div class="donation-inner p-relative">
          <div class="donation-shape-wrapper">
            <img class="donation-shape shape-1" src="assets/img/shape/circle.png" alt="img not found">
            <img class="donation-shape shape-2" src="assets/img/shape/shape-2.png" alt="img not found">
          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-8">
              <div class="dontaion-content-wrapper wow fadeInUp" data-wow-delay=".3s">
                <div class="bd-section-title-wrapper">
                  <div class="bd-section-subtitle">
                    Book
                    <i class="flaticon-001-bullet"></i>
                  </div>
                  <h3 class="bd-section-title mb-40">What would keep you on the edge of your seat?</h3>
                </div>

                <div class="donation-content">
                  <p>
                    It’s the story of Mike McAllister unlocking the Defence Science & Technology Organisation story on a
                    national security breach; the one that keeps you turning pages to find hidden dangers and secrets
                    lurking below the surface. This journey of McAllister takes him across continents, encountering
                    intriguing characters and facing complex challenges that make his mission much more dangerous than
                    he had ever anticipated-from mysterious disappearances to violent confrontations. As the twists and
                    turns take hold in this intriguing tale of espionage, betrayal, and high-stakes intrigue, you will
                    find yourself ensnared till the very end.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Book 2-end -->

    <!-- facility-area-start -->
    <section class="facility-area pt-130 pb-65 fix p-relative bg-transparent z-index-2" id="author">
      <div class="video-wrap">
        <video src="assets/video/three.mp4" loop autoplay muted></video>
      </div>
      <!-- line animation - start -->
      <div class="deco_wrap">
        <div class="line_wrap body-line">
          <div class="line_item"></div>
        </div>
      </div>
      <!-- line animation - end -->

      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-10">
            <div class="facility-thumb-wrapper p-relative mb-65 z-index-2 pb-5">
              <div class="facility-thumb p-relative wow fadeInLeft" data-wow-delay=".3s">
                <img src="assets/img/facility/img-1.png" alt="img not found">
                <div class="panel wow"></div>
              </div>
              <div class="facility-shape-wrapper">
                <!-- <div class="facility-shape-1"></div> -->
                <div class="facility-shape-2">Alex Auburn</div>
                <img class="facility-shape-4" src="assets/img/shape/round-1.png" alt="img not found">
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-10">
            <div class="facility-content mb-25 wow fadeInRight" data-wow-delay=".3s">
              <div class="bd-section-title-wrapper">
                <div class="bd-section-subtitle">
                  Author
                  <i class="flaticon-001-bullet"></i>
                </div>
                <h3 class="bd-section-title mb-4">
                  Get To Know Alex Auburn
                  <span class="title-bg">
                    <img src="assets/img/shape/scratched-shape.png" alt="img not found">
                  </span>
                </h3>
              </div>
              <p class="">
                Alex Auburn, a seasoned storyteller with a passion for adventure and intrigue, draws inspiration from a
                diverse range of life experiences and a deep understanding of human behaviour. With a background in
                defence, law enforcement and government security, Auburn’s narratives are known for their intricate
                plots and complex characters. The latest novel, “The McAllister Contingency,” delves into the world of
                espionage and moral ambiguity, showcasing Auburn’s talent for exploring the complexities of human
                nature. When not writing, Alex enjoys outdoor activities and immersing in the world of mystery novels.
                Currently residing in the countryside, Auburn continues to craft captivating stories that resonate with
                readers worldwide.
              </p>
            </div>
          </div>
        </div>
      </div>
      <style>
      .featured_At {
        position: absolute;
        max-width: 45%;
        bottom: 50px;
        left: 0;
      }
      </style>
      <div class="featured_At">
        <div class="row mt-3 justify-content-center">
          <div class="col-6">
            <a href="https://thrillerwriters.org/" target="_blank">
              <img src="assets/img/facility/itw-logo.svg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-6">
            <a href="https://www.austcrimewriters.com/" target="_blank">
              <img src="assets/img/facility/ACWA_Logo.png" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- facility-area-end -->

    <!-- service-area-start -->
    <section class="service-area service-style pt-130 pb-65" data-background="assets/img/bg/img-1.png">
      <div class="overlay-img">
      </div>
      <div class="service-shape-wrapper">
        <div class="service-shape shape-1">
          <img src="assets/img/shape/service/img-1.png" alt="img not found">
        </div>
      </div>
      <div class="container">


        <div class="row">
          <div class="col-xl-5">
            <div class="services-title-wrapper mb-65 wow fadeInUp" data-wow-delay=".3s">
              <div class="bd-section-title-wrapper">
                <div class="bd-section-subtitle">
                  Reviews
                  <i class="flaticon-001-bullet"></i>
                </div>
                <h3 class="bd-section-title text-white">
                  Hear It From Our Readers
                </h3>
              </div>
            </div>
          </div>
          <div class="col-xl-7">
            <div class="service-slide-wrapper p-relative mb-65">
              <div class="service-pagination circle-dot-pagination"></div>
              <div class="service-slider swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="service-content">
                      <div class="service-info">
                        <p>
                          Alex Auburn’s debut novel, The McAllister Contingency, is a captivating read with
                          well-developed characters and unexpected twists that keep you hooked. Fans of James Patterson
                          and Karin Slaughter will enjoy this thrilling page-turner. Eagerly awaiting more from this
                          author! Highly recommended.
                        </p>
                        <div class="client-d">
                          <img src="assets/img/service/img-1.jpg" alt="">
                          <h4 class="service-title">Anne A</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="service-content">
                      <div class="service-info">
                        <p>
                          Wow, this book is an absolute page-turner! From the moment I started reading, I was hooked by
                          the intricate plot and the relentless pursuit of justice by Mike McAllister. I couldn't put it
                          down until I found out how it all unfolded. A must-read for anyone who loves a good thriller!
                        </p>
                        <div class="client-d">
                          <img src="assets/img/service/img-2.jpg" alt="">
                          <h4 class="service-title">Selena Mandy</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="service-content">
                      <div class="service-info">
                        <p>
                          The McAllister Contingency keeps you on the edge of your seat with its relentless action and
                          complex characters. This is a must-read for anyone who enjoys suspense woven with
                          international intrigue.
                        </p>
                        <div class="client-d">
                          <img src="assets/img/service/img-3.jpg" alt="">
                          <h4 class="service-title">Jonny M.</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- service-area-end -->

    <!-- cta-area-start -->
    <section class="cta-area  pt-130 pb-60 p-relative bg-transparent z-index-2">

      <!-- line animation - start -->
      <div class="deco_wrap">
        <div class="line_wrap body-line">
          <div class="line_item"></div>
        </div>
      </div>
      <!-- line animation - end -->

      <div class="container">
        <div class="cta-box p-relative wow fadeInUp" data-wow-delay=".3s">
          <div class="cta-thumb">
            <img src="assets/img/bg/img-3.png" alt="img not found">
          </div>
          <div class="cta-shape-wrapper">
            <img class="cta-shape-1 opacity-25" src="assets/img/shape/frame-3.png" alt="img not found">
            <img class="cta-shape-2 opacity-25" src="assets/img/shape/frame-3.png" alt="img not found">
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="cta-content">
                <div class="bd-section-title-wrapper centered-title">
                  <h3 class="bd-section-title mb-40"><u>24/7
                      The McAllister Contingency Out NOW</u></h3>
                </div>
                <div class="cta-num  text-center">
                  <h3><a href="#" class="border-btn">Grab Your Copy Now!</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cta-area-end -->

    <!-- contact-form-area-star -->
    <section class="contact-form-area pt-0 pb-0 contact-form-style parallax-bg fix mb-50"
      data-background="assets/img/bg/form-parallax.jpg">
      <div class="contact-overlay">
      </div>
      <div class="container">
        <div class="contact-form-inner p-relative">
          <div class="contact-form-shape-wrapper">
            <img class="contact-form-area-shape-1" src="assets/img/shape/shape-slice-circle-3.png" alt="img not found">
            <img class="contact-form-area-shape-2" src="assets/img/shape/circle.png" alt="img not found">
          </div>
          <div class="row align-items-center">
            <div class="col-xl-7 col-lg-5">
              <div class="contact-content pt-130 pb-120 wow fadeInUp" data-wow-delay=".3s">
                <div class="bd-section-title-wrapper">
                  <div class="bd-section-subtitle">
                    inquire now
                    <i class="flaticon-001-bullet"></i>
                  </div>
                  <h3 class="bd-section-title mb-40">Explore a World of Secrets</h3>
                </div>
                <p class="">
                  Alex Auburn delivers an enthralling mix of intrigue, action, and emotional depth in The McAllister
                  Contingency. His ability to craft complex narratives that are both captivating and thought-provoking
                  sets him apart in the thriller genre.
                </p>
              </div>
            </div>
            <div class="col-xl-5 col-lg-7">
              <div class="contact-form-wrapper-1">
                <form action="#" method="post"">
                  <div class=" single-input-field field-f-name">
                  <input type="text" placeholder="First Name" name="fname">
              </div>
              <div class="single-input-field field-f-name">
                <input type="text" placeholder="Last Name" name="lname">
              </div>
              <div class="single-input-field field-phone">
                <input type="text" placeholder="Phone Number" name="phone">
              </div>
              <div class="single-input-field field-subject">
                <input type="text" placeholder="Subject" name="subject">
              </div>
              <div class="single-input-field field-message">
                <textarea name="message" placeholder="Write Message . . ."></textarea>
              </div>
              <div class="form-btn mt-30">
                <button class="border-btn" type="submit" name="submit_btn">Request Now</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- contact-form-area-end -->
  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>