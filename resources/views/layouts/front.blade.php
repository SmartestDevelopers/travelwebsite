<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Travel Pakistan Now</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
      rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('travel-website/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/animated-headline.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/style.css') }}" />
  </head>
  <body>


    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">
      <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="header-top-content">
                <div class="header-left">
                  <ul class="list-items">
                    <li>
                      <a href="#"
                        ><i class="la la-phone me-1"></i>+66 82 586 6889</a
                      >
                    </li>
                    <li>
                      <a href="mailto:travelphuketwithuf@gmail.com"
                        ><i class="la la-envelope me-1"></i
                        >travelphuketwithuf@gmail.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="header-top-content">
                <div
                  class="header-right d-flex align-items-center justify-content-end"
                >
                  <div class="header-right-action">
                    <div class="select-contain select--contain w-auto">

                  </div>
                  <div class="header-right-action">
                    <!-- <a
                      href="{{url('/signup')}}"
                      class="theme-btn theme-btn-small theme-btn-transparent me-1"
                      >Sign Up</a
                    > -->
                    <a
                      href="{{url('/login')}}"
                      class="theme-btn theme-btn-small"
                      >Login</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="menu-wrapper">
                <a href="#" class="down-button"
                  ><i class="la la-angle-down"></i
                ></a>
                <div class="logo">
                  <a href="{{url('/')}}"
                    ><img src="{{ asset('travel-website/images/logo2.png') }}" alt="logo"
                  /></a>
                  <div class="menu-toggler">
                    <i class="la la-bars"></i>
                    <i class="la la-times"></i>
                  </div>
                  <!-- end menu-toggler -->
                </div>
                <!-- end logo -->
                <div class="main-menu-content">
                  <nav>
                    <ul>
                      <li><a href="{{url('/')}}">Home</a></li>
                      <li><a href="{{url('about')}}">About</a></li>
                      <li><a href="{{url('services')}}">Services</a></li>
                      
                      <!-- <li><a href="{{url('gallery')}}">Gallery</a></li> -->



                      <li><a href="{{url('tour-list')}}">Tours</a></li>
                      <!-- <li><a href="{{url('gallery')}}">Gallery</a></li> -->
                      <li><a href="{{url('faq')}}">FAQ</a></li>
                      <li><a href="{{url('blog')}}">Blog</a></li>
                      <li><a href="{{url('contact-us')}}">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <!-- end main-menu-content -->
                <!-- <div class="nav-btn">
                  <a href="{{url('become-local-expert')}}" class="theme-btn"
                    >Become Local Expert</a
                  > -->
                </div>
                <!-- end nav-btn -->
              </div>
              <!-- end menu-wrapper -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container-fluid -->
      </div>
      <!-- end header-menu-wrapper -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->


    @yield('content')


 <!-- ================================
       START FOOTER AREA
================================= -->
<section
      class="footer-area section-bg padding-top-100px padding-bottom-30px"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-3 responsive-column">
            <div class="footer-item">
              <div class="footer-logo padding-bottom-30px">
                <a href="{{ url('/')}}" class="foot__logo"
                  ><img src="{{ asset('travel-website/images/logo2.png') }}" alt="logo"
                /></a>
              </div>
              <!-- end logo -->
              <p class="footer__desc">
              Travel Pakistan Now offers unforgettable nature, trekking, and religious tours across Pakistan
              </p>
              <ul class="list-items pt-3">
                <li>
                53/2, SIRIRAT ROAD, PATONG, KATHU, <br />
                PHUKET, THAILAND, PHUKET 83150
                </li>
                <li>+66 82 586 6889</li>
                <li><a href="mailto:travelphuketwithuf@gmail.com">travelphuketwithuf@gmail.com</a></li>
              </ul>
            </div>
            <!-- end footer-item -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="footer-item">
              <h4
                class="title curve-shape pb-3 margin-bottom-20px"
                data-text="curvs"
              >
                Company
              </h4>
              <ul class="list-items list--items">
                <li><a href="{{url('about')}}">About us</a></li>
                <li><a href="{{url('services')}}">Services</a></li>
                <!-- <li><a href="#">Jobs</a></li> -->
                <li><a href="{{url('blog')}}">News</a></li>
                <li><a href="{{url('contact-us')}}">Support</a></li>
                <!-- <li><a href="#">Advertising</a></li> -->
              </ul>
            </div>
            <!-- end footer-item -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="footer-item">
              <h4
                class="title curve-shape pb-3 margin-bottom-20px"
                data-text="curvs"
              >
                Other Links
              </h4>
              <ul class="list-items list--items">
                <li><a href="{{ url('/tour-list') }}">Tour Packages</a></li>
                <!-- <li><a href="#">USA Flights</a></li>
                <li><a href="#">USA Hotels</a></li>
                <li><a href="#">USA Car Hire</a></li>
                <li><a href="#">Create an Account</a></li>
                <li><a href="#">Reviews</a></li> -->
              </ul>
            </div>
            <!-- end footer-item -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="footer-item">
              <h4
                class="title curve-shape pb-3 margin-bottom-20px"
                data-text="curvs"
              >
                Subscribe now
              </h4>
              <p class="footer__desc pb-3">
                Subscribe for latest updates & promotions
              </p>
              <div class="contact-form-action">
                <form action="{{ url('/subscribe') }}" method="post">
                  @csrf
                  <div class="input-box">
                    <label class="label-text">Enter email address</label>
                    <div class="form-group mb-0">
                      <span class="la la-envelope form-icon"></span>
                      <input
                        class="form-control"
                        type="email"
                        name="email"
                        placeholder="Email address"
                      />
                      <button
                        class="theme-btn theme-btn-small submit-btn"
                        type="submit"
                      >
                        Go
                      </button>
                      <span class="font-size-14 pt-1"
                        ><i class="la la-lock me-1"></i>Your information is safe
                        with us.</span
                      >
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end footer-item -->
          </div>
          <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="term-box footer-item">
              <ul class="list-items list--items d-flex align-items-center">
                <li><a href="{{ url('/terms-and-conditions')}}">Terms & Conditions</a></li>
                <li><a href="{{ url('/privacy-policy')}}">Privacy Policy</a></li>
                <li><a href="{{ url('/contact-us')}}">Help Center</a></li>
              </ul>
            </div>
          </div>
          <!-- end col-lg-8 -->
          <div class="col-lg-4">
            <div class="footer-social-box text-end">
              <ul class="social-profile">
                <li>
                  <a href="https://web.facebook.com/profile.php?id=61568604338068"><i class="lab la-facebook-f"></i></a>
                </li>
                <!-- <li>
                  <a href="https://www.tiktok.com/@travel_pakistannow?_t=ZS-8vUwz53JFq6&_r=1"><i class="lab la-tiktok"></i></a>
                </li> -->
                <li>
                  <a href="https://www.instagram.com/travelpakistannow"><i class="lab la-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
      <div class="section-block mt-4"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="copy-right padding-top-30px">
              <p class="copy__desc">
                &copy; Copyright Travel Pakistan Now <span id="get-year"></span> . Made with
                <span class="la la-heart"></span> by
                <a href="https://smartestdevelopers.com/"
                  >SmartestDevelopers</a
                >
              </p>
            </div>
            <!-- end copy-right -->
          </div>
          <!-- end col-lg-7 -->
          <div class="col-lg-5">
            <div
              class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px"
            >
              <h3 class="title font-size-15 pe-2">We Accept</h3>
              <img src="{{asset('travel-website/images/payment-img.png')}}" alt="" />
            </div>
            <!-- end copy-right-content -->
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end footer-area -->
    <!-- ================================
       START FOOTER AREA
================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
      <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->


    <!-- Template JS Files -->
    <script src="{{ asset('travel-website/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('travel-website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/select2.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/moment.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('travel-website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/animated-headline.js') }}"></script>
    <script src="{{ asset('travel-website/js/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('travel-website/js/quantity-input.js') }}"></script>
    <script src="{{ asset('travel-website/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('travel-website/js/superslider-script.js') }}"></script>
    <script src="{{ asset('travel-website/js/main.js') }}"></script>
  </body>


</html>
