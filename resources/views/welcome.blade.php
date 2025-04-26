@extends('layouts.front')

@section('content')


 <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper7">
      <div class="hero-box">
        <div id="fullscreen-slide-contain">
          <ul class="slides-container">
            <li><img src="{{asset('travel-website/images/hero-bg2.jpg')}}" alt="" /></li>
            <li><img src="{{asset('travel-website/images/hero--bg2.jpg')}}" alt="" /></li>
            <li><img src="{{asset('travel-website/images/hero--bg3.jpg')}}" alt="" /></li>
          </ul>
        </div>
        <!-- End background slider -->
        <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="hero-content pb-5 text-center">
        <div class="section-heading">
          <h2 class="sec__title font-size-70 pb-3">Are You Ready...</h2>
          <p class="sec__desc font-size-30 font-weight-medium">
            To explore new things?
          </p>
        </div>
      </div>
      <!-- end hero-content -->
      <div class="search-fields-container">
        <div class="contact-form-action">
          <form method="POST" action="{{ url('/submit-tour-list') }}" class="row">
            @csrf
            <div class="col-lg-3 pe-0">
              <div class="input-box">
                <label class="label-text">Destination</label>
                <div class="form-group">
                  <span class="la la-map-marker form-icon"></span>
                  <input
                    class="form-control"
                    type="text"
                    name="destination"
                    placeholder="Where are you going?"
                    value="{{ session('destination', '') }}"
                  />
                </div>
              </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 pe-0">
              <div class="input-box">
                <label class="label-text">When</label>
                <div class="form-group">
                  <span class="la la-calendar form-icon"></span>
                  <input
                    class="date-range form-control"
                    type="text"
                    name="daterange"
                    value="{{ session('daterange', '') }}"
                  />
                </div>
              </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 pe-0">
              <div class="input-box">
                <label class="label-text">Guests</label>
                <div class="form-group">
                  <div class="dropdown dropdown-contain gty-container">
                    <a
                      class="dropdown-toggle dropdown-btn"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      data-bs-auto-close="outside"
                    >
                      <span
                        class="adult"
                        data-text="Adult"
                        data-text-multi="Adults"
                        >{{ session('adult_number', '0') }} Adult</span
                      >
                      -
                      <span
                        class="children"
                        data-text="Child"
                        data-text-multi="Children"
                        >{{ session('child_number', '0') }} Child</span
                      >
                    </a>
                    <div class="dropdown-menu dropdown-menu-wrap">
                      <div class="dropdown-item">
                        <div
                          class="qty-box d-flex align-items-center justify-content-between"
                        >
                          <label>Adults</label>
                          <div class="qtyBtn d-flex align-items-center">
                            <div class="qtyDec">
                              <i class="la la-minus"></i>
                            </div>
                            <input
                              type="text"
                              name="adult_number"
                              value="{{ session('adult_number', '0') }}"
                            />
                            <div class="qtyInc">
                              <i class="la la-plus"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-item">
                        <div
                          class="qty-box d-flex align-items-center justify-content-between"
                        >
                          <label>Children</label>
                          <div class="qtyBtn d-flex align-items-center">
                            <div class="qtyDec">
                              <i class="la la-minus"></i>
                            </div>
                            <input
                              type="text"
                              name="child_number"
                              value="{{ session('child_number', '0') }}"
                            />
                            <div class="qtyInc">
                              <i class="la la-plus"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3">
              <div class="input-box">
                <label class="label-text">Price</label>
                <div class="form-group">
                  <div class="dropdown dropdown-contain">
                    <a
                      class="dropdown-toggle dropdown-btn"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      data-bs-auto-close="outside"
                    >
                      <div class="price-slider-amount">
                        <input
                          type="text"
                          id="amount"
                          name="price"
                          class="amounts py-0"
                          readonly
                          value="{{ session('price', '') }}"
                        />
                      </div>
                      <!-- end price-slider-amount -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-wrap py-4">
                      <div class="dropdown-item py-0">
                        <label class="filter__label mb-2"
                          >Filter Price</label
                        >
                        <div id="slider-range"></div>
                        <!-- end slider-range -->
                      </div>
                    </div>
                  </div>
                  <!-- end panel-dropdown -->
                </div>
              </div>
            </div>
            <!-- end col-lg-3 -->

            <div class="btn-box pt-2">
              <input class="theme-btn" type="submit" value="Search Now" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end col-lg-12 -->
  </div>
  <!-- end row -->
</div>
<!-- end container -->
      </div>
    </section>
    <!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
================================= -->

    <!-- ================================
    START INFO AREA
================================= -->
<section
      class="info-area info-bg padding-top-50px padding-bottom-50px text-center"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <div class="info-icon">
                <i class="la la-bullhorn"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title">You'll never roam alone</h4>
                <p class="info__desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="icon-box margin-top-50px">
              <div class="info-icon">
                <i class="la la-globe"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title">
                  A world of choice – anytime, anywhere
                </h4>
                <p class="info__desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="icon-box">
              <div class="info-icon">
                <i class="la la-thumbs-up"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title">Peace of mind, wherever you wander</h4>
                <p class="info__desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end info-area -->
    <!-- ================================
    END INFO AREA
================================= -->

    <!-- ================================
    START ROUND-TRIP AREA
================================= -->
<section class="round-trip-flight section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title line-height-55">
                Most Popular Round-trip <br />
                Flight Destinations
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-12">
            <div class="flight-filter-tab text-center">
              <div class="section-tab section-tab-3">
                <ul
                  class="nav nav-tabs justify-content-center"
                  id="myTab4"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="new-york-tab"
                      data-bs-toggle="tab"
                      href="#new-york"
                      role="tab"
                      aria-controls="new-york"
                      aria-selected="false"
                    >
                      New York
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="hong-kong-tab"
                      data-bs-toggle="tab"
                      href="#hong-kong"
                      role="tab"
                      aria-controls="hong-kong"
                      aria-selected="false"
                    >
                      Hong Kong
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="beijing-tab"
                      data-bs-toggle="tab"
                      href="#beijing"
                      role="tab"
                      aria-controls="beijing"
                      aria-selected="false"
                    >
                      Beijing
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="tokyo-tab"
                      data-bs-toggle="tab"
                      href="#tokyo"
                      role="tab"
                      aria-controls="tokyo"
                      aria-selected="false"
                    >
                      Tokyo
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="seoul-tab"
                      data-bs-toggle="tab"
                      href="#seoul"
                      role="tab"
                      aria-controls="seoul"
                      aria-selected="false"
                    >
                      Seoul
                    </a>
                  </li>
                </ul>
              </div>
              <!-- end section-tab -->
            </div>
            <!-- end flight-filter-tab -->
            <div class="popular-round-trip-wrap padding-top-40px">
              <div class="tab-content" id="myTabContent4">
                <div
                  class="tab-pane fade show active"
                  id="new-york"
                  role="tabpanel"
                  aria-labelledby="new-york-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Los
                              Angeles
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img2.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i
                              >Barcelona
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img3.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Dallas
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img4.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>San
                              Francisco
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img5.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Miami
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img6.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>London
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="hong-kong"
                  role="tabpanel"
                  aria-labelledby="hong-kong-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i
                              >Singapore
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img2.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img3.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Seoul
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img4.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Manila
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img5.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Nepal
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img6.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i
                              >Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="seoul"
                  role="tabpanel"
                  aria-labelledby="seoul-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Nepal
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img2.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img3.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img4.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img5.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Hong kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img6.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Bangkok
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="tokyo"
                  role="tabpanel"
                  aria-labelledby="tokyo-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img2.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img3.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img4.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img5.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Hong kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img6.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Hanoi
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="beijing"
                  role="tabpanel"
                  aria-labelledby="beijing-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img2.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img3.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img4.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img5.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Hong
                              kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="{{asset('travel-website/images/airline-img6.png')}}"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Hanoi
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
              </div>
              <!-- end tab-content -->
              <div
                class="tab-content-info d-flex justify-content-between align-items-center"
              >
                <p class="font-size-15">
                  <i class="la la-question-circle me-1"></i>Average round-trip
                  price per person, taxes and fees included.
                </p>
                <a href="#" class="btn-text font-size-15"
                  >Discover More <i class="la la-angle-right"></i
                ></a>
              </div>
              <!-- end tab-content-info -->
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end round-trip-flight -->
    <!-- ================================
    END ROUND-TRIP AREA
================================= -->
    <!-- ================================

        <!-- ================================
    START HOTEL AREA
================================= -->
<section
      class="hotel-area section-bg section-padding overflow-hidden padding-right-100px padding-left-100px"
    >
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title line-height-55">
                Most Popular Hotel <br />
                Destinations
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-12">
            <div class="hotel-card-wrap">
              <div class="hotel-card-carousel carousel-action">
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img1.jpg')}}" alt="hotel-img" />
                    </a>
                    <span class="badge">Bestseller</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >The Millennium Hilton New York</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, New york</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img2.jpg')}}" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Best Western Grant Park Hotel</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, Chicago</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$58.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img3.jpg')}}" alt="hotel-img" />
                    </a>
                    <span class="badge">Featured</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Hyatt Regency Maui Resort & Spa</a
                      >
                    </h3>
                    <p class="card-meta">200 Nohea Kai Dr, Lahaina, HI</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img4.jpg')}}" alt="hotel-img" />
                    </a>
                    <span class="badge">Popular</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Four Seasons Resort Maui at Wailea</a
                      >
                    </h3>
                    <p class="card-meta">3900 Wailea Alanui Drive, Kihei, HI</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img5.jpg')}}" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Ibis Styles London Heathrow</a
                      >
                    </h3>
                    <p class="card-meta">272 Bath Road, Harlington, England</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img6.jpg')}}" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Hotel Europe Saint Severin Paris</a
                      >
                    </h3>
                    <p class="card-meta">
                      38-40 Rue Saint Séverin, Paris, Paris
                    </p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img1.jpg')}}" alt="hotel-img" />
                    </a>
                    <span class="badge">Bestseller</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >The Millennium Hilton New York</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, New york</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/img2.jpg')}}" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Best Western Grant Park Hotel</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, Chicago</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$58.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end hotel-card-carousel -->
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </section>
    <!-- end hotel-area -->
    <!-- ================================
    END HOTEL AREA
================================= -->

    <!-- ================================
    START DESTINATION AREA
================================= -->
    <section class="destination-area section--padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="section-heading">
              <h2 class="sec__title">Top Visited Places</h2>
              <p class="sec__desc pt-3">
                Morbi convallis bibendum urna ut viverra Maecenas quis
              </p>
            </div>

            <!-- end section-heading -->
          </div>
          <!-- end col-lg-8 -->
          <div class="col-lg-4">
            <div class="btn-box btn--box text-end">
              <a href="tour-grid.html" class="theme-btn">Discover More</a>
            </div>
          </div>
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-4">
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img2.jpg')}}" alt="destination-img" />
                <span class="badge">new york</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Main Street Park</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$58.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img3.jpg')}}" alt="destination-img" />
                <span class="badge">chicago</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('tour-details')}}">Chicago Cultural Center</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$68.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img4.jpg')}}" alt="destination-img" />
                <span class="badge">Hong Kong</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Lugard Road Lookout</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">150 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$79.00</span>
                    <span class="price__num before-price">$89.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img5.jpg')}}" alt="destination-img" />
                <span class="badge">Las Vegas</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Planet Hollywood Resort</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$88.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img.jpg')}}" alt="destination-img" />
                <span class="badge">Shanghai</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Oriental Pearl TV Tower</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$58.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
================================= -->

    <!-- ================================
    START CAR AREA
================================= -->
    <section class="car-area section-bg section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Recommended Car Rentals</h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-12">
            <div class="car-wrap">
              <div class="car-carousel carousel-action">
                <div class="card-item car-card mb-0">
                  <div class="card-img">
                    <a href="car-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/car-img.png')}}" alt="car-img" />
                    </a>
                    <span class="badge">Bestseller</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Save for later"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-meta">Compact SUV</p>
                    <h3 class="card-title">
                      <a href="car-single.html">Toyota Corolla or Similar</a>
                    </h3>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div class="card-attributes">
                      <ul class="d-flex align-items-center">
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Passenger"
                        >
                          <i class="la la-users"></i><span>4</span>
                        </li>
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Luggage"
                        >
                          <i class="la la-suitcase"></i><span>1</span>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$23.00</span>
                        <span class="price__text">Per day</span>
                      </p>
                      <a href="car-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item car-card mb-0">
                  <div class="card-img">
                    <a href="car-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/car-img2.png')}}" alt="car-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Save for later"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-meta">Standard</p>
                    <h3 class="card-title">
                      <a href="car-single.html"
                        >Volkswagen Jetta 2 Doors or Similar</a
                      >
                    </h3>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div class="card-attributes">
                      <ul class="d-flex align-items-center">
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Passenger"
                        >
                          <i class="la la-users"></i><span>4</span>
                        </li>
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Luggage"
                        >
                          <i class="la la-suitcase"></i><span>1</span>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$33.00</span>
                        <span class="price__text">Per day</span>
                      </p>
                      <a href="car-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item car-card mb-0">
                  <div class="card-img">
                    <a href="car-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/car-img3.png')}}" alt="car-img" />
                    </a>
                    <span class="badge">featured</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Save for later"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-meta">Compact Elite</p>
                    <h3 class="card-title">
                      <a href="car-single.html">Toyota Yaris or Similar</a>
                    </h3>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div class="card-attributes">
                      <ul class="d-flex align-items-center">
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Passenger"
                        >
                          <i class="la la-users"></i><span>4</span>
                        </li>
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Luggage"
                        >
                          <i class="la la-suitcase"></i><span>1</span>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$23.00</span>
                        <span class="price__text">Per day</span>
                      </p>
                      <a href="car-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item car-card mb-0">
                  <div class="card-img">
                    <a href="car-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/car-img4.png')}}" alt="car-img" />
                    </a>
                    <span class="badge">Bestseller</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Save for later"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-meta">Fullsize Van</p>
                    <h3 class="card-title">
                      <a href="car-single.html">Seat Alhambra or Similar</a>
                    </h3>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div class="card-attributes">
                      <ul class="d-flex align-items-center">
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Passenger"
                        >
                          <i class="la la-users"></i><span>6</span>
                        </li>
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Luggage"
                        >
                          <i class="la la-suitcase"></i><span>2</span>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$45.00</span>
                        <span class="price__text">Per day</span>
                      </p>
                      <a href="car-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item car-card mb-0">
                  <div class="card-img">
                    <a href="car-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/car-img5.png')}}" alt="car-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Save for later"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-meta">Luxury</p>
                    <h3 class="card-title">
                      <a href="car-single.html">Mercedes E Class or Similar</a>
                    </h3>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div class="card-attributes">
                      <ul class="d-flex align-items-center">
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Passenger"
                        >
                          <i class="la la-users"></i><span>5</span>
                        </li>
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Luggage"
                        >
                          <i class="la la-suitcase"></i><span>3</span>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$58.00</span>
                        <span class="price__text">Per day</span>
                      </p>
                      <a href="car-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item car-card mb-0">
                  <div class="card-img">
                    <a href="car-single.html" class="d-block">
                      <img src="{{asset('travel-website/images/car-img6.png')}}" alt="car-img" />
                    </a>
                    <span class="badge">featured</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Save for later"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="card-meta">Mini</p>
                    <h3 class="card-title">
                      <a href="car-single.html"
                        >Fiat Fiesta 2 Doors or Similar</a
                      >
                    </h3>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div class="card-attributes">
                      <ul class="d-flex align-items-center">
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Passenger"
                        >
                          <i class="la la-users"></i><span>4</span>
                        </li>
                        <li
                          class="d-flex align-items-center"
                          data-bs-toggle="tooltip"
                          data-placement="top"
                          title="Luggage"
                        >
                          <i class="la la-suitcase"></i><span>1</span>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$23.00</span>
                        <span class="price__text">Per day</span>
                      </p>
                      <a href="car-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end car-carousel -->
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end car-area -->
    <!-- ================================
    END CAR AREA
================================= -->

    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
    <section class="testimonial-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="section-heading">
              <h2 class="sec__title line-height-50">
                What our customers are saying us?
              </h2>
              <p class="sec__desc padding-top-30px">
                Morbi convallis bibendum urna ut viverra. Maecenas quis
                consequat libero
              </p>
              <div class="btn-box padding-top-35px">
                <a href="#" class="theme-btn">Explore All</a>
              </div>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-8">
            <div class="testimonial-carousel carousel-action">
              <div class="testimonial-card">
                <div class="testi-desc-box">
                  <p class="testi__desc">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                    officia deserunt mollit anim laborum sint occaecat cupidatat
                    non proident. Occaecat cupidatat non proident des.
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/team8.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Leroy Bell</h4>
                    <span class="author__meta">United States</span>
                    <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <!-- end testimonial-card -->
              <div class="testimonial-card">
                <div class="testi-desc-box">
                  <p class="testi__desc">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                    officia deserunt mollit anim laborum sint occaecat cupidatat
                    non proident. Occaecat cupidatat non proident des.
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/team9.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Richard Pam</h4>
                    <span class="author__meta">Canada</span>
                    <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <!-- end testimonial-card -->
              <div class="testimonial-card">
                <div class="testi-desc-box">
                  <p class="testi__desc">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                    officia deserunt mollit anim laborum sint occaecat cupidatat
                    non proident. Occaecat cupidatat non proident des.
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/team10.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Luke Jacobs</h4>
                    <span class="author__meta">Australia</span>
                    <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <!-- end testimonial-card -->
              <div class="testimonial-card">
                <div class="testi-desc-box">
                  <p class="testi__desc">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa
                    officia deserunt mollit anim laborum sint occaecat cupidatat
                    non proident. Occaecat cupidatat non proident des.
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/team8.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Chulbul Panday</h4>
                    <span class="author__meta">Italy</span>
                    <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <!-- end testimonial-card -->
            </div>
            <!-- end testimonial-carousel -->
          </div>
          <!-- end col-lg-8 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end testimonial-area -->
    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
    <!-- START CTA AREA -->
<!-- ================================= -->
<section
      class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="section-heading">
              <p class="sec__desc text-white-50 pb-1">Get Updates & More</p>
              <h2 class="sec__title font-size-30 text-white">
                Thoughtful thoughts to your inbox
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-7 -->
          <div class="col-lg-5">
            <div class="subscriber-box">
              <div class="contact-form-action">
                <form action="#">
                  <div class="input-box">
                    <label class="label-text text-white"
                      >Enter email address</label
                    >
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
                        Subscribe
                      </button>
                      <span class="font-size-14 pt-1 text-white-50"
                        ><i class="la la-lock me-1"></i>Don't worry your
                        information is safe with us.</span
                      >
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
    END CTA AREA
================================= -->

    <!-- ================================
    START MOBILE AREA
================================= -->
<section
      class="mobile-app padding-top-100px padding-bottom-50px section-bg"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="mobile-app-content">
              <div class="section-heading">
                <h2 class="sec__title line-height-55">
                  Trizen Android and IOS App is Available!
                </h2>
              </div>
              <!-- end section-heading -->
              <ul class="info-list padding-top-30px">
                <li class="d-flex align-items-center mb-3">
                  <span
                    class="la la-check icon-element flex-shrink-0 ms-0"
                  ></span>
                  Access and change your itinerary on-the-go
                </li>
                <li class="d-flex align-items-center mb-3">
                  <span
                    class="la la-check icon-element flex-shrink-0 ms-0"
                  ></span>
                  Free cancellation on select hotels
                </li>
                <li class="d-flex align-items-center mb-3">
                  <span
                    class="la la-check icon-element flex-shrink-0 ms-0"
                  ></span>
                  Get real-time trip updates
                </li>
              </ul>
              <div class="btn-box padding-top-30px">
                <a href="#" class="d-inline-block me-3">
                  <img src="{{asset('travel-website/images/app-store.png')}}" alt="" />
                </a>
                <a href="#" class="d-inline-block">
                  <img src="{{asset('travel-website/images/google-play.png')}}" alt="" />
                </a>
              </div>
              <!-- end btn-box -->
            </div>
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="mobile-img">
              <img src="{{asset('travel-website/images/mobile-app.png')}}" alt="mobile-img" />
            </div>
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end mobile-app -->
    <!-- ================================
    END MOBILE AREA
================================= -->

    <!-- ================================
       START CLIENTLOGO AREA
================================= -->
    <section
      class="clientlogo-area padding-top-80px padding-bottom-80px text-center"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="client-logo">
              <div class="client-logo-item">
                <img src="{{asset('travel-website/images/client-logo.png')}}" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="{{asset('travel-website/images/client-logo2.png')}}" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="{{asset('travel-website/images/client-logo3.png')}}" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="{{asset('travel-website/images/client-logo4.png')}}" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="{{asset('travel-website/images/client-logo5.png')}}" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="{{asset('travel-website/images/client-logo6.png')}}" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
            </div>
            <!-- end client-logo -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end clientlogo-area -->
    <!-- ================================
       START CLIENTLOGO AREA
================================= -->
@endsection