<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "crypto";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch employee data
$sql = "SELECT EmployeeID, Photo, Name, Designation, Salary, Address FROM Employee";
$result = $conn->query($sql);
?>





<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from thetork.com/demos/html/bitrader/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 14:16:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <title>Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business
  </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business">
  <meta name="author" content="thetork">
  <meta name="keywords" content="Bitrader, Crypto, Forex, and Stocks Trading Business">
  <meta name="description"
    content="Experience the power of Bitrader, the ultimate HTML template designed to transform your trading business. With its sleek design and advanced features, Bitrader empowers you to showcase your expertise, engage clients, and dominate the markets. Elevate your online presence and unlock new trading possibilities with Bitrader.">

  <!-- OG meta data -->
  <meta property="og:title"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business">
  <meta property="og:site_name" content=Bitrader>
  <meta property="og:url" content="index-3.html">
  <meta property="og:description"
    content="Welcome to Bitrader, the game-changing HTML template meticulously crafted to revolutionize your trading business. With its sleek and modern design, Bitrader provides a cutting-edge platform to showcase your expertise, attract clients, and stay ahead in the competitive trading markets.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/og.png">



  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/all.min.css">

  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">



  <!-- main css for template -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="assets/images/logo/preloader.png" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn" id="btnSwitch"><img src="assets/images/icon/moon.svg" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->


 <!-- ===============>> Header section start here <<================= -->
 <header class="header-section bg-color-3">
  <div class="header-bottom">
    <div class="container">
      <div class="header-wrapper">
        <div class="logo">
          <a href="index.html">
            <img class="dark" src="assets/images/logo/logo.png" alt="logo">
          </a>
        </div>
        <div class="menu-area">
          <ul class="menu menu--style1">
            <li class="megamenu">
              <a href="index.html">Website </a>
            </li>
            <li class="megamenu">
              <a href="admin_dash.html">Dashboard </a>
            </li>
            
            <li>
              <a href="admin_blog_show.php">Blog</a>
            </li><li>
              <a href="admin_employee_show.php">Employee</a>
              
            </li>
            <li>
              <a href="admin_contact_show copy.php">User Contact</a>
              
            </li>
            <li>
              <a href="log.html">Log Out</a>
              
            </li>
            
          </ul>

        </div>
        <div class="header-action">
          <div class="menu-area">
            

            <!-- toggle icons -->
            <div class="header-bar d-lg-none home1">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ===============>> Header section end here <<================= -->

  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Employee Table</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="index-2.html">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">employee Table</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1"><img src="assets/images/header/2.png"
            alt="shape-icon"></span>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->
  

  <section class="blog_table mt-5">
    <div class="section-header section-header--max50">
      <h2 class="mb-10 mt-minus-5"> <span>Employee</span> Table</h2>

      <a href="admin_add_employee_data.html" class="btn bg-primary text-light btn-lg mt-3">Add Employee</a>
    </div>


    <div class="content_area px-5 styled-table-mother">
    <table class="styled-table">
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['EmployeeID']) . "</td>";
                    echo "<td><img src='" . htmlspecialchars($row['Photo']) . "' alt='Employee Photo' width='100' height='100'></td>";
                    echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Designation']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Salary']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Address']) . "</td>";
                    echo "<td>";
                echo "<a href='admin_employee_delete.php?id=" . $row['EmployeeID'] . "' class='btn btn-danger'>Delete</a>";
                echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data available</td></tr>";
            }
            ?>
        </tbody>
    </table>


    </div>
  </section>
    
        



  <!-- ===============>> footer start here <<================= -->
  <footer class="footer ">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__top footer__top--style1">
          <div class="row gy-5 gx-4">
            <div class="col-md-6">
              <div class="footer__about">
                <a href="index.html" class="footer__about-logo"><img src="assets/images/logo/logo-dark.png"
                    alt="Logo"></a>
                <p class="footer__about-moto ">Welcome to our trading site! We offer the best, most
                  affordable products and services around. Shop now and start finding great deals!</p>
                <div class="footer__app">
                  <div class="footer__app-item footer__app-item--apple">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://www.apple.com/app-store/" target="_blank" class="stretched-link">
                          <img src="assets/images/footer/apple.png" alt="apple-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>Download on the</span>
                        <p class="mb-0">App Store</p>
                      </div>
                    </div>
                  </div>
                  <div class="footer__app-item footer__app-item--playstore">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://play.google.com/store" target="_blank" class="stretched-link">
                          <img src="assets/images/footer/play.png" alt="playstore-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>GET IT ON</span>
                        <p class="mb-0">Google Play</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Quick links</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="index.html">Home</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="services.html">Services</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="news.html">News</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="blogs.php">Blog</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="about.html">About Us</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Support</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="about.html">Terms & Conditions</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="about.html">Privacy Policy</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="services.html">FAQs</a></li>
                    <li class="footer__linklist-item"> <a href="contact.html">Support Center</a> </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-sm-4">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Services</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="service_d1.html">FXBANK VIP & Gold</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="service_d2.html">FXBANK ICCM VIP</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="service_d3.html">FXBANK Account Management Service</a> </li>
                    <li class="footer__linklist-item"> <a href="service_d4.html">Best Forex Signals</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="service_d5.html">Free Forex Signals</a>
                    </li>
                    
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__end">
            <div class="footer__end-copyright">
              <p class=" mb-0">© 2024 All Rights Reserved By <a href="https://themeforest.net/user/thetork/portfolio"
                  target="_blank">Nexttech</a> </p>
            </div>
            <div>
              <ul class="social">
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__shape">
      <span class="footer__shape-item footer__shape-item--1"><img src="assets/images/footer/1.png"
          alt="shape icon"></span>
      <span class="footer__shape-item footer__shape-item--2"> <span></span> </span>
    </div>
  </footer>
  <!-- ===============>> footer end here <<================= -->


  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->


  <!-- vendor plugins -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/fslightbox.js"></script>
  <script src="assets/js/purecounter_vanilla.js"></script>



  <script src="assets/js/custom.js"></script>


</body>


<!-- Mirrored from thetork.com/demos/html/bitrader/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 14:16:46 GMT -->
</html>