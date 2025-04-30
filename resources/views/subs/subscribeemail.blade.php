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
                  <a href="{{ url('/') }}"
                    ><img src="{{ asset('travel-website/images/logo2.png')}}" alt="logo"
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
                                  <img src="{{ asset('travel-website/images/team8.jpg')}}" alt="" />
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
                                  <img src="{{ asset('travel-website/images/team10.jpg')}}" alt="" />
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
                              <img src="{{ asset('travel-website/images/team8.jpg')}}" alt="team-img" />
                            </div>
                            <span class="font-size-14 font-weight-bold"
                              > Admin</span
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
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="breadcrumb-content">
                  <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Subscription</h2>
                  </div>
                </div>
                <!-- end breadcrumb-content -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6">
                <div class="breadcrumb-list text-end">
                  <ul class="list-items">
                    <li><a href="{{ url('/home')}}" class="text-white">Home</a></li>
                    <li>Dashboard</li>
                  </ul>
                </div>
                <!-- end breadcrumb-list -->
              </div>
              <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
          </div>
        </div>
        <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-box">
                  <div class="form-title-wrap">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <h3 class="title">Subscription Lists</h3>
                        <p class="font-size-14">Showing 1 to 8 of 20 results</p>
                      </div>
                      <div class="select-contain select2-container-wrapper">
                        <select class="select-contain-select">
                          <option value="1">Any Time</option>
                          <option value="2">Latest</option>
                          <option value="3">Oldest</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-content">
                    <div class="table-form table-responsive">

                    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>email</th>
                <!-- <th>status</th> -->
                <!-- <th>action</th> -->
                </tr>
        </thead>
        <tbody>
            @foreach($subscriptions as $subscription)
            <tr>
                <td>{{ $subscription->id }}</td>
                <td>{{ $subscription->email }}</td>

<!--                 
                <td>
                    <a href="{{ url('subs.edit', $subscription->id) }}">Edit</a>
                    <a href="{{ url('subs.destroy', $subscription->id) }}">Delete</a>
                    </td> -->
                    </tr>
            @endforeach
        </tbody>
        </table>


            <div class="border-top mt-5"></div>
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                  <p class="copy__desc">
                    &copy; Copyright Travel Pakistan Now <span id="get-year"></span> . Made
                    with <span class="la la-heart"></span> by
                    <a href="https://smartestdevelopers.com/"
                      >Smartest Developers</a
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