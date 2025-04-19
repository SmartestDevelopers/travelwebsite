<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- Favicon -->
     <link rel="icon" href="images/favicon.png" />

    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
    rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('travel-website/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/line-awesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/animated-headline.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/flag-icon.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('travel-website/css/style.css')}}" />

</head>
<body class="section-bg">
    <div id="app">

       <!-- ================================
       START USER CANVAS MENU
================================= -->
<div class="user-canvas-container">
      <div class="side-menu-close">
        <i class="la la-times"></i>
      </div>
      <!-- end menu-toggler -->
      <div class="user-canvas-nav">
        <div class="section-tab section-tab-2 text-center pt-4 pb-3 ps-4">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="notification-tab"
                data-bs-toggle="tab"
                href="#notification"
                role="tab"
                aria-controls="notification"
                aria-selected="false"
              >
                Notifications
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="message-tab"
                data-bs-toggle="tab"
                href="#message"
                role="tab"
                aria-controls="message"
                aria-selected="false"
              >
                Messages
              </a>
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="account-tab"
                data-bs-toggle="tab"
                href="#account"
                role="tab"
                aria-controls="account"
                aria-selected="true"
              >
                Account
              </a>
            </li>
          </ul>
        </div>
        <!-- end section-tab -->
      </div>
      <div class="user-canvas-nav-content">
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="notification"
            role="tabpanel"
            aria-labelledby="notification-tab"
          >
            <div class="user-sidebar-item">
              <div class="notification-item">
                <div class="list-group drop-reveal-list">
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element flex-shrink-0 me-3 ms-0">
                        <i class="la la-bell"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your request has been sent</h3>
                        <p class="msg-text">2 min ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-2 flex-shrink-0 me-3 ms-0">
                        <i class="la la-check"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">
                          Your account has been created
                        </h3>
                        <p class="msg-text">1 day ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-3 flex-shrink-0 me-3 ms-0">
                        <i class="la la-user"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your account updated</h3>
                        <p class="msg-text">2 hrs ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-4 flex-shrink-0 me-3 ms-0">
                        <i class="la la-lock"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your password changed</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-5 flex-shrink-0 me-3 ms-0">
                        <i class="la la-envelope"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your email sent</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-6 flex-shrink-0 me-3 ms-0">
                        <i class="la la-envelope"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your email changed</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                </div>
              </div>
              <!-- end notification-item -->
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="message"
            role="tabpanel"
            aria-labelledby="message-tab"
          >
            <div class="user-sidebar-item">
              <div class="notification-item">
                <div class="list-group drop-reveal-list">
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="images/team8.jpg" alt="" />
                      </div>
                      <div class="msg-content w-100">
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <h3 class="title pb-1">Steve Wornder</h3>
                          <span class="msg-text">3 min ago</span>
                        </div>
                        <p class="msg-text">
                          Ancillae delectus necessitatibus no eam
                        </p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="images/team9.jpg" alt="" />
                      </div>
                      <div class="msg-content w-100">
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <h3 class="title pb-1">Marc Twain</h3>
                          <span class="msg-text">1 hrs ago</span>
                        </div>
                        <p class="msg-text">
                          Ancillae delectus necessitatibus no eam
                        </p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="images/team10.jpg" alt="" />
                      </div>
                      <div class="msg-content w-100">
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <h3 class="title pb-1">Enzo Ferrari</h3>
                          <span class="msg-text">2 hrs ago</span>
                        </div>
                        <p class="msg-text">
                          Ancillae delectus necessitatibus no eam
                        </p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="images/team11.jpg" alt="" />
                      </div>
                      <div class="msg-content w-100">
                        <div
                          class="d-flex align-items-center justify-content-between"
                        >
                          <h3 class="title pb-1">Lucas Swing</h3>
                          <span class="msg-text">3 hrs ago</span>
                        </div>
                        <p class="msg-text">
                          Ancillae delectus necessitatibus no eam
                        </p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                </div>
              </div>
              <!-- end notification-item -->
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="account"
            role="tabpanel"
            aria-labelledby="account-tab"
          >
            <div class="user-action-wrap user-sidebar-panel">
              <div class="notification-item">
                <a href="user-dashboard-profile.html" class="dropdown-item">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm flex-shrink-0 me-2">
                      <img src="images/team8.jpg" alt="team-img" />
                    </div>
                    <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                  </div>
                </a>
                <div class="list-group drop-reveal-list user-drop-reveal-list">
                  <a
                    href="user-dashboard-profile.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-user me-2"></i>My Profile
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-booking.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-shopping-cart me-2"></i>My Booking
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-reviews.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-heart me-2"></i>My Reviews
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-settings.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-gear me-2"></i>Settings
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <div class="section-block"></div>
                  <a
                    href="index.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-power-off me-2"></i>Logout
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                </div>
              </div>
              <!-- end notification-item -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end user-canvas-container -->
    <!-- ================================
       END USER CANVAS MENU
================================= -->

    <!-- ================================
       START DASHBOARD NAV
================================= -->
    <div class="sidebar-nav sidebar--nav">
      <div class="sidebar-nav-body">
        <div class="side-menu-close">
          <i class="la la-times"></i>
        </div>
        <!-- end menu-toggler -->
        <div class="author-content">
          <div class="d-flex align-items-center">
            <div class="author-img avatar-sm">
              <img src="{{ asset('travel-website/images/logotpn.png') }}" alt="testimonial image" />
            </div>
            <div class="author-bio">
              <h4 class="author__title">Travel Pakistan Now</h4>
              <span class="author__meta">Welcome to Admin Panel</span>
            </div>
          </div>
        </div>
        <div class="sidebar-menu-wrap">
          <ul class="sidebar-menu toggle-menu list-items">
            <li>
              <a href="{{url('home')}}"
                ><i class="la la-dashboard me-2 text-color"></i>Dashboard</a
              >
            </li>
            <li>
              <a href="{{url('admin-contact-list')}}"
                ><i class="la la-users me-2 text-color"></i>Contact List</a
              >
            </li>
            <li>
              <a href="{{url('admin-booking-list')}}"
                ><i class="la la-shopping-cart me-2 text-color-2"></i>Booking</a
              >
            </li>
            <li class="page-active">
              <span class="side-menu-icon toggle-menu-icon">
                <i class="la la-angle-down"></i>
              </span>
              <a href="admin-dashboard-orders.html"
                ><i class="la la-list me-2"></i>Orders</a
              >
              <ul class="toggle-drop-menu">
                <li>
                  <a href="admin-dashboard-orders-details.html"
                    >Order Details</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <span class="side-menu-icon toggle-menu-icon">
                <i class="la la-angle-down"></i>
              </span>
              <a href="admin-dashboard-travellers.html"
                ><i class="la la-users me-2 text-color-3"></i>Travellers</a
              >
              <ul class="toggle-drop-menu">
                <li>
                  <a href="admin-dashboard-traveler-detail.html"
                    >Traveller Details</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="admin-dashboard-visa.html"
                ><i class="la la-plane me-2 text-color-4"></i>Visa
                Application</a
              >
            </li>
            <li>
              <a href="admin-dashboard-reviews.html"
                ><i class="la la-star me-2 text-color-5"></i>Reviews</a
              >
            </li>
            <li>
              <a href="admin-dashboard-wishlist.html"
                ><i class="la la-heart me-2 text-color-6"></i>Wishlist</a
              >
            </li>
            <li>
              <a href="admin-dashboard-travel-agents.html"
                ><i class="la la-text-width me-2 text-color-7"></i>Travel
                Agents</a
              >
            </li>
            <li>
              <span class="side-menu-icon toggle-menu-icon">
                <i class="la la-angle-down"></i>
              </span>
              <a href="#"
                ><i class="la la-area-chart me-2 text-color-8"></i>Finance</a
              >
              <ul class="toggle-drop-menu">
                <li><a href="admin-invoice.html">Invoice</a></li>
                <li><a href="admin-payments.html">Payments</a></li>
                <li><a href="admin-currency-list.html">Currency List</a></li>
                <li>
                  <a href="admin-dashboard-subscribers.html">Subscribers</a>
                </li>
              </ul>
            </li>
            <li>
              <span class="side-menu-icon toggle-menu-icon">
                <i class="la la-angle-down"></i>
              </span>
              <a href="#"
                ><i class="la la-map-signs me-2 text-color-9"></i>Locations</a
              >
              <ul class="toggle-drop-menu">
                <li><a href="admin-countries.html">Countries</a></li>
                <li><a href="admin-airlines.html">Airlines</a></li>
              </ul>
            </li>
            <li>
              <a href="admin-dashboard-settings.html"
                ><i class="la la-cog me-2 text-color-10"></i>Settings</a
              >
            </li>
            <li>
              <a href="index.html"
                ><i class="la la-power-off me-2 text-color-11"></i>Logout</a
              >
            </li>
          </ul>
        </div>
        <!-- end sidebar-menu-wrap -->
      </div>
    </div>
    <!-- end sidebar-nav -->
    <!-- ================================
       END DASHBOARD NAV
================================= -->

   
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <!-- start scroll top -->
    <div id="back-to-top">
      <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
      <div
        class="modal fade"
        id="modalPopup"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title title" id="exampleModalLongTitle">
                Send Email to Customer
              </h5>
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true" class="la la-close"></span>
              </button>
            </div>
            <div class="modal-body">
              <div class="contact-form-action">
                <form method="post">
                  <div class="input-box">
                    <div class="form-group">
                      <i class="la la-book form-icon"></i>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Subject"
                      />
                    </div>
                  </div>
                  <div class="input-box">
                    <div class="form-group mb-0">
                      <i class="la la-pencil form-icon"></i>
                      <textarea
                        class="message-control form-control"
                        name="message"
                        placeholder="Write message here..."
                      ></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end contact-form-action -->
            </div>
            <div class="modal-footer border-top-0 pt-0">
              <button
                type="button"
                class="btn font-weight-bold font-size-15 color-text-2 me-2"
                data-bs-dismiss="modal"
              >
                Cancel
              </button>
              <button type="button" class="theme-btn theme-btn-small">
                Send Email
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal-popup -->

    <!-- Template JS Files -->
    <script src="{{ asset('travel-website/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('travel-website/js/jquery-ui.js')}}"></script>

    <script src="{{ asset('travel-website/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('travel-website/js/select2.min.js')}}"></script>
    <script src="{{ asset('travel-website/js/moment.min.js')}}"></script>
    <script src="{{ asset('travel-website/js/daterangepicker.js')}}"></script>
    <script src="{{ asset('travel-website/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('travel-website/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('travel-website/js/jquery.countTo.min.js')}}"></script>
    <script src="{{ asset('travel-website/js/animated-headline.js')}}"></script>
    <script src="{{ asset('travel-website/js/jquery.ripples-min.js')}}"></script>
    <script src="{{ asset('travel-website/js/main.js')}}"></script>
</body>
</html>
