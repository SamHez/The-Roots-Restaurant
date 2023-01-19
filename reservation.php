<!DOCTYPE html>
<html lang="en">


<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MBRPLPL');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-205315179-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-205315179-1');
</script>

<!-- Meta SEO Tags -->
<meta content="" name="generator">
<meta content="Whether you are planning on having an intimate Garden Wedding, a Rehearsal Dinner, Birthday Party, a Bridal or Baby shower, a Baptism, a Corporate Event, an Office Retreat or Wedding Meeting, we look forward to making your party the most memorable and enjoyable experience!" name="description">
<meta content=">Best local food restaurant in uptown Kampla, Luwombo, Matooke, Kalo, Garden, Roast Chicken, Roast Goat, Ugandan food, Eat out, Katogo, Healthy food, Boiled food, Fresh fruit juice, Smoked whole fish, Roots Restaurant, Kampala, Uganda, Nakasero, Food, Localfood, The Roots Restaurant, Good food, The Roots Restaurant, Nice Food,uptown,tasty" name="keywords">
<!-- Meta SEO Tags -->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="static/images/favicon/favicon.png" rel="icon">
  <title>Make A Reservation | The Roots Restaurant - Authentic Ugandan Cuisine</title>
  <link rel="stylesheet" href="static/css/libraries.css" />
  <link rel="stylesheet" href="static/css/style.css" />
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBRPLPL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="wrapper">


    <!-- Include Header -->
    <?php include_once("header.php"); ?>

    <!-- ========================
       Page Title
    =========================== -->
    <section class="page-title page-title-layout7 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="static/images/backgrounds/14.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="pagetitle__subheading">Reserve for your meal or upcoming event</span>
            <h1 class="pagetitle__heading">Make a Reservation</h1>
          </div>
        </div>
      </div>
    </section>
    


    <!-- ========================
      Roots Reservation Form
    =========================== -->
    <section class="reservation reservation-layout2 py-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="reservation-container">
              <div class="reservation__banner" data-aos="fade-right">
                <img class="reservation__banner-img" src="static/images/backgrounds/pattern/3.jpg" alt="background">
                <div class="reservation__banner-inner">
                  <span class="reservation__banner-inner-subtitle">Check Availability</span>
                  <h5 class="reservation__banner-inner-title">Opening Times</h5>
                  <ul class="list-unstyled">
                    <li><span>Mon - Sat</span><span>07:00 am – 10:00pm</span></li>
                    <li><span>Sun</span><span>09:00 am - 07:00pm</span></li>
                  </ul>
                  <div class="reservation__banner-contact">
                    <span class="reservation__banner-contact-label">Call Us Now</span>
                    <a class="reservation__banner-contact-phone" href="tel:0772494624">0772494624</a>
                  </div>
                </div>
              </div>

              <!-- Start Reservation Form -->
              <form class="reservation__form" action="system/reserve.php" method="POST" data-aos="fade-left" id="resform">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <p>Whether you are planning on having an intimate Garden Wedding, a Rehearsal Dinner, Birthday Party, 
                      a Bridal or Baby shower, a Baptism, a Corporate Event, an Office Retreat or Wedding Meeting, 
                      we look forward to making your party the most memorable and enjoyable experience! </p><br>
                  </div>
                  <!-- Display Alert Messages -->
                  <?php 
                  if(isset($_GET['status'])){
                    $status = $_GET['status'];
                    if($status == "success"){
                      echo '<div class="alert alert-success" role="alert">Your reservation has been sent successfully, we shall be in touch shortly!</div>';
                    }elseif($status == "error"){
                      echo '<div class="alert alert-danger" role="alert">Failed to make reservation, Please try again. </div>';
                    }
                  }
                  ?>
                  <!-- Display Alert Messages -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="tel" type="text" class="form-control" placeholder="Phone Number" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="email" type="text" class="form-control" placeholder="Email" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="guests_no" type="number" class="form-control" placeholder="Number of Guests" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Time</label>
                      <input name="time" type="time" class="form-control" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Date</label>
                      <input name="date" type="date" class="form-control" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <h6>Select Occasion</h6>
                      <select name="occasion" class="form-control" required>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Wedding">Garden Wedding</option>
                        <option value="Bridal/Baby Shower">Bridal/Baby Shower</option>
                        <option value="Office Retreat">Office Retreat</option>
                      </select>
                    </div>
                  </div>
                  
                  
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__block" id="btn-submit">Submit Reservation</button>
                    <button class="btn btn__secondary btn__block" type="button" id="loader" style="cursor: not-allowed;">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" disabled></span>
                    Submitting...
                    </button>
                  </div>
                </div>
              </form>
              
              <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
              <script type="text/javascript">
              $(document).ready(function () 
                {
                    $("#loader").hide();
                    $("#resform").submit(function (e) {
              
                        $("#btn-submit").hide();
                        $("#loader").show();
              
                        return true;
                
                    });
                });  
              </script>


            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- =====================
       Online Reviews
    ======================== -->
    <section class="awards">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout1 text-center mb-40">
              <span class="heading__subtitle">Authentic Ugandan Cuisine</span>
              <h2 class="heading__title">Customer Experiences</h2>
              <div class="heading__icon">
                <img src="static/images/shapes/shape2.png" alt="heading img">
              </div>
              <p class="heading__desc"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6">
                <a href="https://www.google.com/search?q=the+roots+restauranttt&rlz=1C5CHFA_enUG1015UG1015&oq=the+roots+restauranttt&aqs=chrome..69i57l2j69i59j69i60l5.4485j0j1&sourceid=chrome&ie=UTF-8#" target="_blank"><img src="static/images/icons/google-stars.jpg" alt=""></a>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <a href="https://www.tripadvisor.com/Restaurant_Review-g293841-d10288159-Reviews-The_Roots_Restaurant-Kampala_Central_Region.html" target="_blank"><img src="static/images/icons/tt.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ========================= 
      Customer Reviews
    =========================  -->
    <section class="testimonials testimonials-layout1 bg-overlay">
      <div class="bg-img"><img src="static/images/backgrounds/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout1 text-center mb-50">
              <span class="heading__subtitle"></span>
              <h2 class="heading__title color-white">Our Customer Reviews</h2>
              <div class="heading__icon">
                <img src="static/images/shapes/shape2.png" alt="heading img">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots carousel-dots-light" data-slide="3" data-slide-md="2"
              data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
              data-speed="800">

              
              <!-- Testimonial Item #1 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <h6>Superb food and great location</h6>
                  <p class="testimonial__desc">“If you want high quality, organic local food served by attentive staff 
                    in a charming garden setting in the middle of Kampala then this is the best option in the city. 
                    And I have to say that their Covid-era food deliveries are excellent too!”</p>
                </div>
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/e9/ef/default-avatar-2020-66.jpg" alt="author thumb">
                  </div>
                  <h5 class="testimonial__meta-title">Jonathan BP</h5>
                  <p class="testimonial__meta-desc"></p>
                </div>
              </div>


              <!-- Testimonial Item #2 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <h6>The heart of Uganda food..</h6>
                  <p class="testimonial__desc">“Been to this stunning place many times over the last years. Tonight I
                    have to say, it was good as it ever was. Superb food, exceedingly good staff.”</p>
                </div>
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/f1/06/default-avatar-2020-18.jpg" alt="author thumb">
                  </div>
                  <h5 class="testimonial__meta-title">Ropa</h5>
                </div>
              </div>

              <!-- Testimonial Item #3 -->
              <div class="testimonial-item">
                <div class="testimonial__content">
                  <div class="testimonial__rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <h6>Wonderful Reastaurant</h6>
                  <p class="testimonial__desc">“I had an amazing experience with family at the roots restaurant.
                    Great ambience Not only do they serve healthy local food but its very tasty as well. 
                    Prices are competitive. Will definetly be coming back soon.”</p>
                </div>
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/eb/a3/default-avatar-2020-38.jpg" alt="author thumb">
                  </div>
                  <h5 class="testimonial__meta-title">Lucy Shantel</h5>
                </div>
              </div>




            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Include Footer -->
    <?php include_once( "footer.php"); ?>