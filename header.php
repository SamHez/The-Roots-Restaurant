<?php  
    // IDENTIFY CURRENT PAGE NAME
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  ?>   


    <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="index">
            <img src="static/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="static/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item "><a href="index" class=" nav__item-link <?php if($curPageName == "index.php"){ echo "active";} ?>">Home</a></li>
              <li class="nav__item "><a href="menu" class=" nav__item-link <?php if($curPageName == "menu.php"){ echo "active";} ?>">Roots Menu</a></li>
              <li class="nav__item "><a href="https://food.jumia.ug/restaurant/k2vr/the-roots-restaurant" target="_blank" class=" nav__item-link ">Order Now</a></li>
              <li class="nav__item "><a href="gallery" class="nav__item-link <?php if($curPageName == "gallery.php"){ echo "active";} ?>">Gallery</a></li>

              <li class="nav__item with-dropdown">
                <a href="services" data-toggle="dropdown" class="dropdown-toggle nav__item-link <?php if($curPageName == "services.php"){ echo "active";}elseif($curPageName == "about.php"){echo "active";} ?> ?>">Services <img src="static/images/icons/arrow-drop-down.svg" style="color: white;" alt=""></a>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="services" class="nav__item-link ">Our Services</a></li>
                  <li class="nav__item"><a href="about" class="nav__item-link ">About Us</a></li>
                </ul><!-- /.dropdown-menu -->
              </li>

              <li class="nav__item"><a href="contact" class="nav__item-link <?php if($curPageName == "contact.php"){ echo "active";} ?>">Contact Us</a></li>
              
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-actions-wrap">
            <div class="navbar-actions d-flex align-items-center">
              <a href="reservation" class="navbar__action-btn navbar__action-btn-reserve btn">Reservation</a>
            </div><!-- /.navbar-actions -->
          </div><!-- /.navbar-actions-wrap -->
        </div>
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

