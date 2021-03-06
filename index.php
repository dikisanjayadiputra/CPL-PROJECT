<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Citraperisailintasindo.co.id </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg w-100">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php">
            <img src="img/cpl.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row w-100">
              <div class="col-lg-12 pr-lg-0">
                <ul class="nav navbar-nav ml-auto justify-content-end">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                    <li class="nav-item">
                    <a class="nav-link" href="admin/login.php">login</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content d-flex flex-md-row flex-column">
              <div class="banner-left text-md-right">
                <h1 class="text-uppercase">Solid Super Service</h1>
              </div>
              <div class="banner-right position-relative">
                <p> 
                 To be an expedition company that provides the best service value for all customers in Indonesia.
                </p>
                <a class="main_btn mt-md-0 mt-4" href="#">Explore More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->

  <!--================ Start Quote Area =================-->
  <section class="quote-area">
    <div class="container">
      <div class="row justify-content-center text-left section-title-wrap">
        <div class="col-lg-12">
          <h2 class="text-black">
            Check the estimated cost for<br>
            your requesting goods
          </h2>
        </div>
      </div>
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-12">
          <div class="estimated-cost">
            <form class="form-wrap" action="#">
              <nav>
                <div class="nav nav-tabs justify-content-md-start justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-trackShipment-tab" data-toggle="tab" href="#nav-trackShipment"
                    role="tab" aria-controls="nav-trackShipment" aria-selected="true">Track Shipment</a>
                  <a class="nav-item nav-link" id="nav-getEstimation-tab" data-toggle="tab" href="#nav-getEstimation"
                    role="tab" aria-controls="nav-getEstimation" aria-selected="false">Get An Estimation</a>
                </div>
              </nav>
              </form>

              <!-- Tab Content -->
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-getEstimation" role="tabpanel" aria-labelledby="nav-getEstimation-tab">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="cargoType">Cargo Type</label>
                        <input type="select" class="form-control" id="cargoType" placeholder="Enter cargo type" onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Enter cargo type'" />
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="countryOfOrigin">From</label>
                        <input type="text" class="form-control" id="countryOfOrigin" placeholder="Enter From"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter country of origin'" />
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text" class="form-control" id="destination" placeholder="Enter destination"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter destination'" />
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" id="weight" placeholder="Enter weight" onfocus="this.placeholder = ''
                        "
                          onblur="this.placeholder = 'Enter weight'" />
                      </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                      <div class="text-center confirm_btn_box">
                        <a class ="main_btn text-uppercase"href="services.html">Request</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="nav-trackShipment" role="tabpanel" aria-labelledby="nav-trackShipment-tab">
                  <div class="row">
                    <div class="col-5 lg-3">
                      <form action="index.php?no_airwaybill="  method="post" div class="form-group">
                        <label for="firstName2">Check Airwaybill</label>
                        <input type="text" class="form-control" id="firstName2" name="no_airwaybill" aria-describedby="emailHelp"
                          placeholder="Insert No Airwaybill"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter first name'" />
                    </div>
                    <div class="col-lg-12 mt-4">
                      <div class="text-center confirm_btn_box">
                        <input type="submit" value="Tracking" a class="main_btn text-uppercase"></a>
                      </div>
                    </div>
                      </form>
                </div>
                <div class="text-black">
                    <br>
                    <?php
                        include "koneksi.php";
                        $no_airwaybill = $_POST['no_airwaybill'];
                        $q = "SELECT * FROM tb_pengiriman WHERE no_airwaybill LIKE '".$no_airwaybill."' ";
                        $result = mysql_query($q);
                        echo "<center>";
                        echo "<table border ='1' cellpadding='10' cellspacing='8'>";
                        while ($data = mysql_fetch_array($result)){
                        echo"
                        <h3>No Airwaybill : ".$data['no_airwaybill']."</h3>
                        <tr bgcolor='#ffffff'>
                        <th>Shipper's Name</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Status</th>
                        <tr>
                        <tr>
                        <td>".$data['nama_perusahaan']."</td>
                        <td>".$data['kota_asal']."</td>
                        <td>".$data['kota_tujuan']."</td>
                        <td>".$data['status']."</td>
                        <tr>";
                        }
                        echo "</table>";
                     ?> 
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Quote Area =================-->        
  <!--================ Feature Area =================-->
  <section class="feature-area section_gap_top">
    <div class="container">
      <div class="row align-items-center justify-content-">
        <div class="col-lg-15">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="single-feature">
                <img src="img/feature/f5.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                  Provides a platfrom to check the status of shipping goods in real 
                  time 
                </p>
                <a href="#">Find your cargo</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3">
              <div class="single-feature">
                <img src="img/feature/f2.png" alt="">
                <h4>Have a Question?</h4>
                <p>
                  If you have questions about our expedition, please contact us.
                </p>
                <a href="contact.html">Contact Us</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3">
              <div class="single-feature">
                <img src="img/feature/f3.png" alt="">
                <h4>Get a Quote</h4>
                <p>
                  Meet in person to get a better and competent price quote
                </p>
                <a href="services.html">Start a quote</a>
              </div>
            </div>  
            <div class="col-lg-3 col-md-3">
              <div class="single-feature">
                <img src="img/feature/f4.png" alt="">
                <h4>Shipping Calculator</h4>
                <p>
                  Do the calculation correctly and thoroughly.
                </p>
                <a href="services.html">Get Estimate</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Area =================-->

  <!--================ About Area =================-->
  <section class="about-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="row justify-content-center text-left section-title-wrap">
            <div class="col-lg-12">
              <h2>Prime Customer</h2>
          </div>
          </div>
          <div class="row">
            <div class="col-lg-10">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-6 single_brand">
                  <img src="img/about/prima.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-6 single_brand">
                  <img src="img/about/sigma.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-6 single_brand">
                  <img src="img/about/erakom.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-6 single_brand">
                  <img src="img/about/wilmar.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-6 single_brand">
                  <img src="img/about/msinfo.png" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-6 single_brand">
                  <img src="img/about/slick.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="offset-lg-1 col-lg-4">
          <div class="about_box">
            <div class="activity">
              <div class="row">
                <div class="col-lg-6 col-md-3 col-6">
                  <div class="activity_box">
                    <div>
                      <img src="img/about/i1.png" alt="">
                    </div>
                    <h3><span class="counter">2500</span>+</h3>
                    <p>Packages Delivered</p>
                  </div>
                </div>

                <div class="col-lg-6 col-md-3 col-6">
                  <div class="activity_box">
                    <div>
                      <img src="img/about/i2.png" alt="">
                    </div>
                    <h3><span class="counter">500</span>+</h3>
                    <p>Satisfied Clients</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-3 col-6">
                  <div class="activity_box">
                    <div>
                      <img src="img/about/i3.png" alt="">
                    </div>
                    <h3><span class="counter">98</span></h3>
                    <p>City Reach</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-3 col-6">
                  <div class="activity_box">
                    <div>
                      <img src="img/about/i4.png" alt="">
                    </div>
                    <h3 class="counter">5000</h3>
                    <p>Tons of goods</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End About Area =================-->

  <!--================ Start Service Area =================-->
  
  <!--================ end Service Area =================-->

  <!--================ Start Testimonial Area =================-->
  
  <!--================ end Testimonial Area =================-->

  <!--================ Start Home Blog Area =================-->
  
  <!--================ end Home Blog Area =================-->

  <!--================ Start CTA Area ================-->

  <!--================ End CTA Area ================-->

  <!--================ start footer Area =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <div>
              <h6>Head Office</h6>
            </div>
            <p>PT.CITRA PERISAI LINTASINDO
            <p>Jl. Setu No 7 Kel bintara Kec Bekasi Bekasi Barat Kota Bekasi  
            <p>customerservice@cplintasindo.co.id
            <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
          </div>
        </div>
        <div class="col-lg-ol-md-4 col-sm-5">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Subscribe to our mailing list to get the updates to your email inbox</p>
            <div class="" id="mc_embed_signup">
              <form target="_blank" novalidate="true" action=""
                method="get" class="form-inline">
                <input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Email Address'" required="" type="email">
                <button class="click-btn btn btn-default"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                <div style="position: absolute; left: -5000px;">
                  <input name="" tabindex="-1" value="" type="text">
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10">
          <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> PT.CITRA PERISAI LINTASINDO
  <!--================ End footer Area =================-->

  <!--================ Optional JavaScript =================-->
  <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>