<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<header>
  <div id="header-sticky" class="header-main header-main2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12">
          <div class="header-main-content-wrapper">
            <div class="header-main-left header-main-left-header2">
              <div class="header-logo header2-logo">
                <a href="index.html" class="logo-white"><img src="assets/img/logo/logo-white.png" alt="logo-img"></a>
              </div>
            </div>
            <div class="header-main-right header-main-right-header2">
              <div class="main-menu main-menu2 d-none d-xl-block">
                <nav id="mobile-menu">
                  <ul>
                    <li class="<?= ($current_page == 'index.php') ? 'active' : '' ?>"><a href="index.php">Home</a></li>
                    <li><a href="index.php#book">Book</a>
                    </li>
                    <li><a href="indexlihp#author">Author</a></li>
                    <li class="<?= ($current_page == 'press-release.php') ? 'active' : '' ?>"><a
                        href="press-release.php">Press Release</a></li>
                    <li class="<?= ($current_page == 'shop.php') ? 'active' : '' ?>"><a href="shop.php">Shop</a></li>
                    <li class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>"><a
                        href="contact.php">Contact</a></li>
                  </ul>
                </nav>
              </div>
              <div class="menu-bar">
                <a class="offset-btn d-none d-xl-inline-block" href="javascript:void(0)">
                  <div class="dot-icon">
                    <img src="assets/img/icons/side-toggle.png" alt="img not found">
                  </div>
                </a>
                <a class="side-toggle d-xl-none" href="javascript:void(0)">
                  <div class="dot-icon">
                    <img src="assets/img/icons/side-toggle.png" alt="img not found">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
