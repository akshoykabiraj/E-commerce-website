<?php
session_start();
echo session_id();

$sname = "localhost";

$unmae = "root";

$password = "";


$db_name = "default";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);


 if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $cpass = $_POST['fpass'];

    $verify = "SELECT * FROM register WHERE email= '$email' AND password= '$cpass'";
    $result = mysqli_query($conn,$verify);
    $data = mysqli_fetch_assoc($result) or die("result wrong");
    $datap = mysqli_num_rows($result) or die("data wrong");
    
    
    if($datap == 1){
      if($fpass == $data["cpass"]){

        $_SESSION["email"] = $data["email"];
        $_SESSION["fpass"] = $data["cpass"];
        $_SESSION["uname"] = $data["uname"];
        header("location:index-3.php");
      }else{
        echo("check password !");
        header("refresh:2, location: login.php");
      }
    }else{
      echo "check email !";
      header("refresh:2, location: login.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ecop/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 10:36:14 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/fonts/flaticon.css">

  <link rel="stylesheet" href="assets/css/nice-select.min.css">

  <link rel="stylesheet" href="assets/css/boxicons.min.css">

  <link rel="stylesheet" href="assets/css/meanmenu.css">

  <link rel="stylesheet" type="text/css" href="assets/css/settings.css">
  <link rel="stylesheet" type="text/css" href="assets/css/layers.css">
  <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="assets/css/modal-video.min.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/responsive.css">
  <title>Ecop - Multipurpose eCommerce HTML Template</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>

  <div class="loader">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="pre-load">
          <div class="inner one"></div>
          <div class="inner two"></div>
          <div class="inner three"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="header-area">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-6 col-lg-7">
          <div class="left">
            <ul>
              <li>
                <i class="flaticon-delivery-truck"></i>
                <span>Free Next Day Delivery*</span>
              </li>
              <li>
                <i class="flaticon-quality"></i>
                <span>Best Price Guarantee</span>
              </li>
              <li>
                <i class="flaticon-call-center"></i>
                <span>24/7 Customer Support</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-5">
          <div class="right">
            <div class="inner">
              <select>
                <option>$ USD</option>
                <option>EUR</option>
                <option>GBP</option>
                <option>CAD</option>
              </select>
            </div>
            <div class="inner">
              <form>
                <select>
                  <option>English</option>
                  <option>العربيّة</option>
                  <option>Deutsch</option>
                  <option>Português</option>
                  <option>简体中文</option>
                </select>
              </form>
            </div>
            <div class="inner">
              <div class="call">
                <i class="flaticon-phone-call"></i>
                <a href="tel:9905324980">990-532-4980</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="nav-top-area">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-2">
          <div class="left">
            <a href="index.html">
              <img src="assets/images/logo.png" alt="Logo">
            </a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="middle">
            <form>
              <div class="form-group">
                <div class="inner">
                  <select>
                    <option>All Categories</option>
                    <option>Chair</option>
                    <option>Table</option>
                    <option>Bed</option>
                    <option>Sofa</option>
                    <option>Headphones</option>
                    <option>Keyboard</option>
                    <option>MacBook</option>
                    <option>Vegetable</option>
                    <option>Fruits</option>
                    <option>Chicken</option>
                  </select>
                </div>
                <input type="text" class="form-control" placeholder="Search Your Keywords">
                <button type="submit" class="btn">
                  <i class='bx bx-search'></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="right">
            <ul>
              <li>
                <div class="inner">
                  <i class="flaticon-pin"></i>
                  <a href="#">Set Location</a>
                </div>
              </li>
              <li>
                <div class="inner">
                  <i class="flaticon-question"></i>
                  <a href="#">Need Help?</a>
                </div>
              </li>
              <li>
                <button type="button" class="btn wishlist cart-popup-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                  <i class='bx bxs-cart'></i>
                  <span>2</span>
                </button>
              </li>
              <li>
                <button type="button" class="btn wishlist" data-bs-toggle="modal" data-bs-target="#exampleModalWishlist" data-bs-whatever="@mdo">
                  <i class='bx bx-heart'></i>
                  <span>2</span>
                </button>
              </li>
              <li>
                <a class="join" href="login.html">
                  <i class="flaticon-round-account-button-with-user-inside"></i>
                  Join
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="navbar-area sticky-top">

    <div class="mobile-nav">
      <a href="index.html" class="logo">
        <img src="assets/images/logo.png" alt="Logo">
      </a>
    </div>

    <div class="main-nav">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
          <div class="left">
            <select>
              <option>All Categories</option>
              <option>Chair</option>
              <option>Table</option>
              <option>Bed</option>
              <option>Sofa</option>
              <option>Headphones</option>
              <option>Keyboard</option>
              <option>MacBook</option>
              <option>Vegetable</option>
              <option>Fruits</option>
              <option>Chicken</option>
            </select>
          </div>
          <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Home <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="index.html" class="nav-link">Home Demo One</a>
                  </li>
                  <li class="nav-item">
                    <a href="index-2.html" class="nav-link">Home Demo Two</a>
                  </li>
                  <li class="nav-item">
                    <a href="index-3.html" class="nav-link">Home Demo Three</a>
                  </li>
                  <li class="nav-item">
                    <a href="index-4.html" class="nav-link">Home Demo Four (Revolution)</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle active">Pages <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle active">Users <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="login.html" class="nav-link active">Login</a>
                      </li>
                      <li class="nav-item">
                        <a href="register.html" class="nav-link">Register</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="faq.html" class="nav-link">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a href="404.html" class="nav-link">404 Error Page</a>
                  </li>
                  <li class="nav-item">
                    <a href="return-policy.html" class="nav-link">Return Policy</a>
                  </li>
                  <li class="nav-item">
                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                  </li>
                  <li class="nav-item">
                    <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="about.html" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="blog.html" class="nav-link">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                  </li>
                  <li class="nav-item">
                    <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                  </li>
                  <li class="nav-item">
                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Shop <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="shop.html" class="nav-link">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a href="checkout.html" class="nav-link">Checkout</a>
                  </li>
                  <li class="nav-item">
                    <a href="single-product.html" class="nav-link">Single Product</a>
                  </li>
                  <li class="nav-item">
                    <a href="products-on-sale.html" class="nav-link">Products On Sale</a>
                  </li>
                  <li class="nav-item">
                    <a href="order-tracking.html" class="nav-link">Order Tracking</a>
                  </li>
                  <li class="nav-item">
                    <a href="customer-service.html" class="nav-link">Customer Service</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>
            </ul>
            <div class="side-nav">
              <h4>Get <span>50%</span> Discount On Black Friday Offer <a href="products-on-sale.html">View Products On Sale</a></h4>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>


  <div class="page-title-area">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="title-content">
            <h2>Login</h2>
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <span>Login</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="title-img">
      <img src="assets/images/page-title1.jpg" alt="About">
      <img src="assets/images/shape16.png" alt="Shape">
      <img src="assets/images/shape17.png" alt="Shape">
      <img src="assets/images/shape18.png" alt="Shape">
    </div>
  </div>


  <div class="user-area ptb-100">
    <div class="container">
      <div class="user-item">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <h2>Login</h2>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email:">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="fpass" name="fpass" placeholder="Password:">
          </div>
          <button type="submit" name="submit" class="btn common-btn">
            Login
            <img src="assets/images/shape1.png" alt="Shape">
            <img src="assets/images/shape2.png" alt="Shape">
          </button>
          <h4>Or</h4>
          <ul>
            <li>
              <a href="#">
                <i class='bx bxl-facebook'></i>
                Login With Facebook
              </a>
            </li>
            <li>
              <a href="#">
                <i class='bx bxl-google'></i>
                Login With Google
              </a>
            </li>
          </ul>
          <h5>Didn't Have An Account? <a href="register.html">Register</a></h5>
        </form>
      </div>
    </div>
  </div>


  <footer class="footer-area pt-100 pb-70">
    <div class="footer-shape">
      <img src="assets/images/footer-right-shape.png" alt="Shape">
      <img src="assets/images/shape5.png" alt="Shape">
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-4">
          <div class="footer-item">
            <div class="footer-logo">
              <a class="logo" href="index.html">
                <img src="assets/images/logo.png" alt="Logo">
              </a>
              <ul>
                <li>
                  <i class="flaticon-pin"></i>
                  <a href="#">2750 Quadra Street, Victoria, Canada</a>
                  <a href="#">345-659 Birmingham Street, England</a>
                </li>
                <li>
                  <i class="flaticon-phone-call"></i>
                  <a href="tel:+9908314326">+990-831-4326</a>
                  <a href="tel:+5465486325">+546-548-6325</a>
                </li>
                <li>
                  <i class="flaticon-email"></i>
                  <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#6b030e0707042b0e08041b45080406"><span class="__cf_email__" data-cfemail="aac2cfc6c6c5eacfc9c5da84c9c5c7">[email&#160;protected]</span></a>
                  <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#b1d8dfd7def1d4d2dec19fd2dedc"><span class="__cf_email__" data-cfemail="c1a8afa7ae81a4a2aeb1efa2aeac">[email&#160;protected]</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="footer-item">
            <div class="footer-services">
              <h3>Customer Services</h3>
              <ul>
                <li>
                  <a href="return-policy.html">Return Policy</a>
                </li>
                <li>
                  <a href="faq.html">FAQ</a>
                </li>
                <li>
                  <a href="single-product.html">Single Product</a>
                </li>
                <li>
                  <a href="order-tracking.html">Order Tracking</a>
                </li>
                <li>
                  <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                  <a href="contact.html">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="footer-item">
            <div class="footer-links">
              <h3>Important Links</h3>
              <div class="row">
                <div class="col-6 col-sm-8 col-lg-8">
                  <ul>
                    <li>
                      <a href="about.html">About Us</a>
                    </li>
                    <li>
                      <a href="blog.html">Blog</a>
                    </li>
                    <li>
                      <a href="#">Wishlist</a>
                    </li>
                    <li>
                      <a href="#">Checkout</a>
                    </li>
                    <li>
                      <a href="shop.html">Shop</a>
                    </li>
                    <li>
                      <a href="login.html">My Account</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-4">
                  <ul>
                    <li>
                      <a href="#">Cameras</a>
                    </li>
                    <li>
                      <a href="#">Laptops</a>
                    </li>
                    <li>
                      <a href="#">Headphones</a>
                    </li>
                    <li>
                      <a href="#">Smartwatch</a>
                    </li>
                    <li>
                      <a href="#">Microphones</a>
                    </li>
                    <li>
                      <a href="#">Computers</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-sm-6 col-lg-6">
          <div class="payment-cards">
            <ul>
              <li>
                <a href="#" target="_blank">
                  <img src="assets/images/payment1.png" alt="Payment">
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <img src="assets/images/payment2.png" alt="Payment">
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <img src="assets/images/payment3.png" alt="Payment">
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <img src="assets/images/payment4.png" alt="Payment">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6">
          <div class="social-links">
            <ul>
              <li>
                <a href="#" target="_blank">
                  <i class='bx bxl-facebook'></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class='bx bxl-twitter'></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class='bx bxl-linkedin'></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class='bx bxl-skype'></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class='bx bxl-youtube'></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <div class="copyright-area">
    <div class="container">
      <div class="copyright-item">
        <p>Copyright ©2020 Design & Developed by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
      </div>
    </div>
  </div>


  <div class="modal fade modal-right popup-modal" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2>Shopping Cart <span>02 Items</span></h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="cart-table">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="assets/images/cart/cart1.png" alt="Cart">
                  </th>
                  <td>
                    <h3>White Comfy Stool</h3>
                    <span class="rate">$200.00 x 1</span>
                  </td>
                  <td>
                    <ul class="number">
                      <li>
                        <span class="minus">-</span>
                        <input type="text" value="1" />
                        <span class="plus">+</span>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a class="close" href="#">
                      <i class='bx bx-x'></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="assets/images/cart/cart2.png" alt="Cart">
                  </th>
                  <td>
                    <h3>Yellow Armchair</h3>
                    <span class="rate">$180.00 x 1</span>
                  </td>
                  <td>
                    <ul class="number">
                      <li>
                        <span class="minus">-</span>
                        <input type="text" value="1" />
                        <span class="plus">+</span>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a class="close" href="#">
                      <i class='bx bx-x'></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="total-amount">
              <h3>Total: <span>$380.00</span></h3>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <form>
            <input type="text" class="form-control" placeholder="Enter Coupon Code">
            <button type="submit" class="btn common-btn">
              Proceed To Checkout
              <img src="assets/images/shape1.png" alt="Shape">
              <img src="assets/images/shape2.png" alt="Shape">
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade modal-right popup-modal wishlist-modal" id="exampleModalWishlist" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2>Wishlist <span>02 Items</span></h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="cart-table">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="assets/images/cart/cart1.png" alt="Cart">
                  </th>
                  <td>
                    <h3>White Comfy Stool</h3>
                    <span class="rate">$200.00 x 1</span>
                  </td>
                  <td>
                    <a class="common-btn" href="shop.html">
                      Add To Cart
                      <img src="assets/images/shape1.png" alt="Shape">
                      <img src="assets/images/shape2.png" alt="Shape">
                    </a>
                  </td>
                  <td>
                    <a class="close" href="#">
                      <i class='bx bx-x'></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="assets/images/cart/cart2.png" alt="Cart">
                  </th>
                  <td>
                    <h3>Yellow Armchair</h3>
                    <span class="rate">$180.00 x 1</span>
                  </td>
                  <td>
                    <a class="common-btn" href="shop.html">
                      Add To Cart
                      <img src="assets/images/shape1.png" alt="Shape">
                      <img src="assets/images/shape2.png" alt="Shape">
                    </a>
                  </td>
                  <td>
                    <a class="close" href="#">
                      <i class='bx bx-x'></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="go-top">
    <i class='bx bxs-up-arrow-circle'></i>
    <i class='bx bxs-up-arrow-circle'></i>
  </div>


  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <script src="assets/js/form-validator.min.js"></script>

  <script src="assets/js/contact-form-script.js"></script>

  <script src="assets/js/jquery.ajaxchimp.min.js"></script>

  <script src="assets/js/jquery.nice-select.min.js"></script>

  <script src="assets/js/jquery.meanmenu.js"></script>

  <script src="assets/js/jquery.themepunch.tools.min.js"></script>
  <script src="assets/js/jquery.themepunch.revolution.min.js"></script>

  <script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="assets/js/extensions/revolution.extension.video.min.js"></script>

  <script src="assets/js/jquery.mixitup.min.js"></script>

  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery-modal-video.min.js"></script>

  <script src="assets/js/thumb-slide.js"></script>

  <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/ecop/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 10:36:27 GMT -->

</html>