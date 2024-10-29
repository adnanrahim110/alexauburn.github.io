<?php $page = 'contact';
include 'includes/head.php';

$pressReleases = [
  ['logo' => '.png', 'link' => 'https://www.numbercoin.net/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://markets.financialcontent.com/stocks/article/globeprwire-2024-10-24-discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency'],

  ['logo' => '.png', 'link' => 'https://www.insureinformation.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.investmentnewz.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.currencygossip.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.fundsgossip.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.moneyinformation.org/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://financewine.com/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://moneyfaction.com/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://marketskyline.com/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://marketencore.com/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://marketsounds.com/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://getfincorp.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.microtrustiva.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.financeronin.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.financezeus.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.financeshogun.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.economyprime.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.bizeconomic.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://www.economypeople.com/2024/10/24/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],

  ['logo' => '.png', 'link' => 'https://fortuneglobalwealth.com/discover-a-thrilling-journey-in-time-and-space-with-alex-auburns-the-mcallister-contingency/'],
]

?>

<body>

  <div class="mouseCursor cursor-outer"></div>
  <div class="mouseCursor cursor-inner"><span>Drag</span></div>

  <?php include 'includes/navbar.php' ?>
  <?php include 'includes/aside.php' ?>

  <main>

    <!-- page title area start  -->
    <section class="page-title-area" data-background="assets/img/bg/page-title-bg.jpg">
      <div class="page-title-shape">
        <img class="shape-cube" src="assets/img/shape/cube-shape.png" alt="img not found">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="page-title-wrapper">
              <h1 class="page-title mb-10">Press Releases</h1>
            </div>
            <div class="breadcrumb-menu">
              <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items">
                  <li class="trail-item trail-begin"><a href="index.html"><span>home</span></a>
                  </li>
                  <li class="trail-item trail-end"><span>Press Release</span></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page title area end  -->

    <section class="latest-news-are pt-70 pb-100 p-relative bg-white z-index-2">

      <div class="deco_wrap">
        <div class="line_wrap body-line">
          <div class="line_item"></div>
        </div>
      </div>

      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-12">
            <div class="bd-section-title-wrapper wow fadeInUp" data-wow-delay=".3s">
              <div class="bd-section-subtitle">
                latest Press Releases
                <i class="flaticon-001-bullet"></i>
              </div>
              <h3 class="bd-section-title mb-50">Alex Auburn's Latest Press Releases</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <?php $count = 1;
          foreach ($pressReleases as $pressRelease): ?>

            <div class="col-xl-4">
              <div class="single-news wow fadeInUp" data-wow-delay=".3s">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <div class="latest-news-thumb mb-30">
                      <a href="<?= $pressRelease['link'] ?>"><img
                          src="assets/img/press/<?= $count ?><?= $pressRelease['logo'] ?>" alt="img not found"></a>
                      <div class="panel wow"></div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="news-box mb-30">
                      <div class="news-box-content pt-0">
                        <div class="blog-btn">
                          <a href="<?= $pressRelease['link'] ?>" class="arm-btn">
                            <span class="circle-btn"><i class="fal fa-long-arrow-right"></i></span>
                            Read Now
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php $count++;
          endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include 'includes/footer.php' ?>
  <?php include 'includes/scripts.php' ?>
