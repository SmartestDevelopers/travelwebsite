@extends('layouts.admin')

@section('content')
  <!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
      <div class="dashboard-nav dashboard--nav">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="menu-wrapper">
                <div class="logo me-5">
                  <a href="index.html"
                    ><img src="{{ asset('travel-website/images/logotpn.png') }}" alt="logo"
                  /></a>
                  <div class="menu-toggler">
                    <i class="la la-bars"></i>
                    <i class="la la-times"></i>
                  </div>
                  <!-- end menu-toggler -->
                  <div class="user-menu-open">
                    <i class="la la-user"></i>
                  </div>
                  <!-- end user-menu-open -->
                </div>
                <div class="dashboard-search-box">
                  <div class="contact-form-action">
                    <form action="#">
                      <div class="form-group mb-0">
                        <input
                          class="form-control"
                          type="text"
                          name="text"
                          placeholder="Search"
                        />
                        <button class="search-btn">
                          <i class="la la-search"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="nav-btn ms-auto">
                  <div class="notification-wrap d-flex align-items-center">
                    <div class="notification-item me-2">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="dropdown-toggle drop-reveal-toggle-icon"
                          id="notificationDropdownMenu"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="la la-bell"></i>
                          <span class="noti-count">4</span>
                        </a>
                        <div
                          class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right"
                        >
                          <div class="dropdown-header drop-reveal-header">
                            <h6 class="title">
                              You have
                              <strong class="text-black">4</strong>
                              notifications
                            </h6>
                          </div>
                          <div class="list-group drop-reveal-list">
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
                              <div class="msg-body d-flex align-items-center">
                                <div
                                  class="icon-element flex-shrink-0 me-3 ms-0"
                                >
                                  <i class="la la-bell"></i>
                                </div>
                                <div class="msg-content w-100">
                                  <h3 class="title pb-1">
                                    Your request has been sent
                                  </h3>
                                  <p class="msg-text">2 min ago</p>
                                </div>
                              </div>
                              <!-- end msg-body -->
                            </a>
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
                              <div class="msg-body d-flex align-items-center">
                                <div
                                  class="icon-element bg-2 flex-shrink-0 me-3 ms-0"
                                >
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
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
                              <div class="msg-body d-flex align-items-center">
                                <div
                                  class="icon-element bg-3 flex-shrink-0 me-3 ms-0"
                                >
                                  <i class="la la-user"></i>
                                </div>
                                <div class="msg-content w-100">
                                  <h3 class="title pb-1">
                                    Your account updated
                                  </h3>
                                  <p class="msg-text">2 hrs ago</p>
                                </div>
                              </div>
                              <!-- end msg-body -->
                            </a>
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
                              <div class="msg-body d-flex align-items-center">
                                <div
                                  class="icon-element bg-4 flex-shrink-0 me-3 ms-0"
                                >
                                  <i class="la la-lock"></i>
                                </div>
                                <div class="msg-content w-100">
                                  <h3 class="title pb-1">
                                    Your password changed
                                  </h3>
                                  <p class="msg-text">Yesterday</p>
                                </div>
                              </div>
                              <!-- end msg-body -->
                            </a>
                          </div>
                          <a
                            href="#"
                            class="dropdown-item drop-reveal-btn text-center"
                            >View all</a
                          >
                        </div>
                        <!-- end dropdown-menu -->
                      </div>
                    </div>
                    <!-- end notification-item -->
                    <div class="notification-item me-2">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="dropdown-toggle drop-reveal-toggle-icon"
                          id="messageDropdownMenu"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="la la-envelope"></i>
                          <span class="noti-count">4</span>
                        </a>
                        <div
                          class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right"
                        >
                          <div class="dropdown-header drop-reveal-header">
                            <h6 class="title">
                              You have
                              <strong class="text-black">4</strong> messages
                            </h6>
                          </div>
                          <div class="list-group drop-reveal-list">
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
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
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
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
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
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
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
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
                          <a
                            href="#"
                            class="dropdown-item drop-reveal-btn text-center"
                            >View all</a
                          >
                        </div>
                        <!-- end dropdown-menu -->
                      </div>
                    </div>
                    <!-- end notification-item -->
                    <div class="notification-item">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="dropdown-toggle"
                          id="userDropdownMenu"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                              <img src="images/team8.jpg" alt="team-img" />
                            </div>
                            <span class="font-size-14 font-weight-bold"
                              >Royel Admin</span
                            >
                          </div>
                        </a>
                        <div
                          class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right"
                        >
                          <div
                            class="dropdown-item drop-reveal-header user-reveal-header"
                          >
                            <h6 class="title text-uppercase">Welcome!</h6>
                          </div>
                          <div
                            class="list-group drop-reveal-list user-drop-reveal-list"
                          >
                            <a
                              href="admin-dashboard-settings.html"
                              class="list-group-item list-group-item-action"
                            >
                              <div class="msg-body">
                                <div class="msg-content">
                                  <h3 class="title">
                                    <i class="la la-user me-2"></i> Edit Profile
                                  </h3>
                                </div>
                              </div>
                              <!-- end msg-body -->
                            </a>
                            <a
                              href="admin-dashboard-orders.html"
                              class="list-group-item list-group-item-action"
                            >
                              <div class="msg-body">
                                <div class="msg-content">
                                  <h3 class="title">
                                    <i class="la la-shopping-cart me-2"></i
                                    >Orders
                                  </h3>
                                </div>
                              </div>
                              <!-- end msg-body -->
                            </a>
                            <a
                              href="#"
                              class="list-group-item list-group-item-action"
                            >
                              <div class="msg-body">
                                <div class="msg-content">
                                  <h3 class="title">
                                    <i class="la la-bell me-2"></i>Messages
                                  </h3>
                                </div>
                              </div>
                              <!-- end msg-body -->
                            </a>
                            <a
                              href="admin-dashboard-settings.html"
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
                        <!-- end dropdown-menu -->
                      </div>
                    </div>
                    <!-- end notification-item -->
                  </div>
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
      <!-- end dashboard-nav -->
      <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard-bread-2">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="breadcrumb-content">
                  <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">
                      Dashboard
                    </h2>
                  </div>
                </div>
                <!-- end breadcrumb-content -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6">
                <div class="breadcrumb-list text-end">
                  <ul class="list-items">
                    <li><a href="index.html" class="text-white">Home</a></li>
                    <li>Pages</li>
                    <li>Dashboard</li>
                  </ul>
                </div>
                <!-- end breadcrumb-list -->
              </div>
              <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
            <div class="row mt-4">
              <div class="col-lg-3 responsive-column-l">
                <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                  <div class="d-flex pb-3 justify-content-between">
                    <div class="info-content">
                      <p class="info__desc">Total Booking!</p>
                      <h4 class="info__title">55</h4>
                    </div>
                    <!-- end info-content -->
                    <div class="info-icon icon-element bg-4">
                      <i class="la la-shopping-cart"></i>
                    </div>
                    <!-- end info-icon-->
                  </div>
                  <div class="section-block"></div>
                  <a
                    href="admin-dashboard-booking.html"
                    class="d-flex align-items-center justify-content-between view-all"
                    >View All <i class="la la-angle-right"></i
                  ></a>
                </div>
              </div>
              <!-- end col-lg-3 -->
              <div class="col-lg-3 responsive-column-l">
                <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                  <div class="d-flex pb-3 justify-content-between">
                    <div class="info-content">
                      <p class="info__desc">New Reviews!</p>
                      <h4 class="info__title">22</h4>
                    </div>
                    <!-- end info-content -->
                    <div class="info-icon icon-element bg-3">
                      <i class="la la-star"></i>
                    </div>
                    <!-- end info-icon-->
                  </div>
                  <div class="section-block"></div>
                  <a
                    href="admin-dashboard-reviews.html"
                    class="d-flex align-items-center justify-content-between view-all"
                    >View All <i class="la la-angle-right"></i
                  ></a>
                </div>
              </div>
              <!-- end col-lg-3 -->
              <div class="col-lg-3 responsive-column-l">
                <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                  <div class="d-flex pb-3 justify-content-between">
                    <div class="info-content">
                      <p class="info__desc">Total Subscribers!</p>
                      <h4 class="info__title">27</h4>
                    </div>
                    <!-- end info-content -->
                    <div class="info-icon icon-element bg-2">
                      <i class="la la-envelope"></i>
                    </div>
                    <!-- end info-icon-->
                  </div>
                  <div class="section-block"></div>
                  <a
                    href="admin-dashboard-subscribers.html"
                    class="d-flex align-items-center justify-content-between view-all"
                    >View All <i class="la la-angle-right"></i
                  ></a>
                </div>
              </div>
              <!-- end col-lg-3 -->
              <div class="col-lg-3 responsive-column-l">
                <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                  <div class="d-flex pb-3 justify-content-between">
                    <div class="info-content">
                      <p class="info__desc">New Bookmarks!</p>
                      <h4 class="info__title">25</h4>
                    </div>
                    <!-- end info-content -->
                    <div class="info-icon icon-element bg-1">
                      <i class="la la-bookmark-o"></i>
                    </div>
                    <!-- end info-icon-->
                  </div>
                  <div class="section-block"></div>
                  <a
                    href="admin-dashboard-wishlist.html"
                    class="d-flex align-items-center justify-content-between view-all"
                    >View All <i class="la la-angle-right"></i
                  ></a>
                </div>
              </div>
              <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
          </div>
        </div>
        <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-7 responsive-column--m">
                <div class="form-box">
                  <div class="form-title-wrap">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <ul class="chart-pagination d-flex">
                        <li>
                          <a href="#" class="theme-btn theme-btn-small me-2"
                            >Day</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent me-2"
                            >Week</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent"
                            >This year</a
                          >
                        </li>
                      </ul>
                      <div class="select-contain select2-container-wrapper">
                        <select class="select-contain-select">
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-content">
                    <canvas id="line-chart"></canvas>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-7-->
              <div class="col-lg-5 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <h3 class="title">Notifications</h3>
                      <button
                        type="button"
                        class="icon-element mark-as-read-btn ms-auto me-0"
                        data-bs-toggle="tooltip"
                        data-placement="left"
                        title="Mark all as read"
                      >
                        <i class="la la-check-square"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-content p-0">
                    <div class="list-group drop-reveal-list">
                      <a
                        href="#"
                        class="list-group-item list-group-item-action border-top-0"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div class="icon-element flex-shrink-0 me-3 ms-0">
                            <i class="la la-bell"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">Status updated</h3>
                            <p class="msg-text">2 min ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                            data-bs-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-1 flex-shrink-0 me-3 ms-0"
                          >
                            <i class="la la-bell"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">50% Discount Offer</h3>
                            <p class="msg-text">2 min ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                            data-bs-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-2 flex-shrink-0 me-3 ms-0"
                          >
                            <i class="la la-check"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">
                              Your account has been created
                            </h3>
                            <p class="msg-text">1 day ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                            data-bs-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-3 flex-shrink-0 me-3 ms-0"
                          >
                            <i class="la la-user"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">Your account updated</h3>
                            <p class="msg-text">2 hrs ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                            data-bs-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-4 flex-shrink-0 me-3 ms-0"
                          >
                            <i class="la la-lock"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">Your password changed</h3>
                            <p class="msg-text">Yesterday</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                            data-bs-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-5 flex-shrink-0 me-3 ms-0"
                          >
                            <i class="la la-user"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">Your account updated</h3>
                            <p class="msg-text">2 hrs ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ms-auto me-0"
                            data-bs-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-5 -->
              <div class="col-lg-12">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <h3 class="title">
                      Sales earning this month for each service
                    </h3>
                  </div>
                  <div class="form-content">
                    <div class="row">
                      <div class="col-lg-3 responsive-column-l">
                        <div
                          class="icon-box icon-layout-2 dashboard-icon-box dashboard--icon-box bg-1 pb-0"
                        >
                          <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                              <p class="info__desc">Hotels</p>
                              <h4 class="info__title">$1,455.00</h4>
                            </div>
                            <!-- end info-content -->
                            <div
                              class="info-icon icon-element bg-white text-color-2"
                            >
                              <i class="la la-hotel"></i>
                            </div>
                            <!-- end info-icon-->
                          </div>
                          <div class="section-block"></div>
                          <a
                            href="#"
                            class="d-flex align-items-center justify-content-between view-all"
                            >View Details <i class="la la-arrow-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3 responsive-column-l">
                        <div
                          class="icon-box icon-layout-2 dashboard-icon-box dashboard--icon-box bg-2 pb-0"
                        >
                          <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                              <p class="info__desc">Cars</p>
                              <h4 class="info__title">$422.00</h4>
                            </div>
                            <!-- end info-content -->
                            <div
                              class="info-icon icon-element bg-white text-color-3"
                            >
                              <i class="la la-car"></i>
                            </div>
                            <!-- end info-icon-->
                          </div>
                          <div class="section-block"></div>
                          <a
                            href="#"
                            class="d-flex align-items-center justify-content-between view-all"
                            >View Details <i class="la la-arrow-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3 responsive-column-l">
                        <div
                          class="icon-box icon-layout-2 dashboard-icon-box dashboard--icon-box bg-3 pb-0"
                        >
                          <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                              <p class="info__desc">Cruises</p>
                              <h4 class="info__title">$827.00</h4>
                            </div>
                            <!-- end info-content -->
                            <div
                              class="info-icon icon-element bg-white text-color-4"
                            >
                              <i class="la la-ship"></i>
                            </div>
                            <!-- end info-icon-->
                          </div>
                          <div class="section-block"></div>
                          <a
                            href="#"
                            class="d-flex align-items-center justify-content-between view-all"
                            >View Details <i class="la la-arrow-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3 responsive-column-l">
                        <div
                          class="icon-box icon-layout-2 dashboard-icon-box dashboard--icon-box bg-4 pb-0"
                        >
                          <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                              <p class="info__desc">Flights</p>
                              <h4 class="info__title">$325.00</h4>
                            </div>
                            <!-- end info-content -->
                            <div
                              class="info-icon icon-element bg-white text-color-5"
                            >
                              <i class="la la-plane"></i>
                            </div>
                            <!-- end info-icon-->
                          </div>
                          <div class="section-block"></div>
                          <a
                            href="#"
                            class="d-flex align-items-center justify-content-between view-all"
                            >View Details <i class="la la-arrow-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                    </div>
                    <!-- end row -->
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-6 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <h3 class="title">Total Orders</h3>
                  </div>
                  <div class="form-content">
                    <canvas id="bar-chart"></canvas>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <h3 class="title">Server Stats</h3>
                  </div>
                  <div class="form-content pb-0">
                    <div class="dashboard-progressbar pb-4">
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-striped"
                          role="progressbar"
                          style="width: 10%"
                          aria-valuenow="10"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <p class="font-size-14 pt-1">
                        Disk space usage: 1,746.5 / 50,000 MB
                      </p>
                    </div>
                    <!-- end dashboard-progressbar -->
                    <div class="dashboard-progressbar pb-4">
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-striped bg-success"
                          role="progressbar"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <p class="font-size-14 pt-1">
                        Monthly Bandwidth Transfer: 14,706.1 / 30.000
                      </p>
                    </div>
                    <!-- end dashboard-progressbar -->
                    <div class="dashboard-progressbar pb-4">
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-striped bg-info"
                          role="progressbar"
                          style="width: 50%"
                          aria-valuenow="50"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <p class="font-size-14 pt-1">Subdomains: 7/15</p>
                    </div>
                    <!-- end dashboard-progressbar -->
                    <div class="dashboard-progressbar pb-4">
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-striped bg-warning"
                          role="progressbar"
                          style="width: 75%"
                          aria-valuenow="75"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <p class="font-size-14 pt-1">All SQL Databases : 6/8</p>
                    </div>
                    <!-- end dashboard-progressbar -->
                    <div class="dashboard-progressbar pb-4">
                      <div class="progress">
                        <div
                          class="progress-bar progress-bar-striped bg-danger"
                          role="progressbar"
                          style="width: 100%"
                          aria-valuenow="100"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <p class="font-size-14 pt-1">Email Accounts: 8 / 10</p>
                    </div>
                    <!-- end dashboard-progressbar -->
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <h3 class="title">7,273 people visited this site</h3>
                  </div>
                  <div class="form-content pb-0">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="sparkline-chart-item">
                          <span class="font-size-15">Visits</span>
                          <h3 class="title font-size-16">9,080</h3>
                          <div class="visits-chart mt-2"></div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4">
                        <div class="sparkline-chart-item">
                          <span class="font-size-15">Unique Visitors</span>
                          <h3 class="title font-size-16">4,080</h3>
                          <div class="visits-chart mt-2"></div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4">
                        <div class="sparkline-chart-item">
                          <span class="font-size-15">Previews</span>
                          <h3 class="title font-size-16">12,080</h3>
                          <div class="previews-chart mt-2"></div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4">
                        <div class="sparkline-chart-item">
                          <span class="font-size-15">Pages / Visit</span>
                          <h3 class="title font-size-16">1.54</h3>
                          <div class="visits-chart-2 mt-2"></div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4">
                        <div class="sparkline-chart-item">
                          <span class="font-size-15">Avg. Visit Duration</span>
                          <h3 class="title font-size-16">00:01:39</h3>
                          <div class="previews-chart mt-2"></div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                    </div>
                    <!-- end row -->
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-3 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <h3 class="title">Visits by Browser</h3>
                  </div>
                  <div class="form-content py-0">
                    <ul class="list-group list-group-flush">
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Chrome
                        <span class="badge bg-info text-white badge-pill"
                          >3,506</span
                        >
                      </li>
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Firefox
                        <span class="badge bg-info text-white badge-pill"
                          >2,405</span
                        >
                      </li>
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Safari
                        <span class="badge bg-info text-white badge-pill"
                          >300</span
                        >
                      </li>
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Internet Explorer
                        <span class="badge bg-info text-white badge-pill"
                          >200</span
                        >
                      </li>
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Opera
                        <span class="badge bg-info text-white badge-pill"
                          >111</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-3 -->
              <div class="col-lg-3 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <h3 class="title">Mobile Overview</h3>
                  </div>
                  <div class="form-content py-0">
                    <ul class="list-group list-group-flush">
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Desktop
                        <span class="badge bg-info text-white badge-pill"
                          >6,506</span
                        >
                      </li>
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Mobile
                        <span class="badge bg-info text-white badge-pill"
                          >222</span
                        >
                      </li>
                      <li
                        class="list-group-item px-0 d-flex justify-content-between align-items-center"
                      >
                        Tablet
                        <span class="badge bg-info text-white badge-pill"
                          >65</span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
            <div class="border-top mt-4"></div>
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                  <p class="copy__desc">
                    &copy; Copyright Trizen <span id="get-year"></span> . Made
                    with <span class="la la-heart"></span> by
                    <a href="https://themeforest.net/user/techydevs/portfolio"
                      >TechyDevs</a
                    >
                  </p>
                </div>
                <!-- end copy-right -->
              </div>
              <!-- end col-lg-7 -->
              <div class="col-lg-5">
                <div class="copy-right-content text-end padding-top-30px">
                  <ul class="social-profile">
                    <li>
                      <a href="#"><i class="lab la-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <!-- end copy-right-content -->
              </div>
              <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container-fluid -->
        </div>
        <!-- end dashboard-main-content -->
      </div>
      <!-- end dashboard-content-wrap -->
    </section>
    <!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->
@endsection
