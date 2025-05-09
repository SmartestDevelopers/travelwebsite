@extends('layouts.front')

@section('content')


 <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg">
      <div class="breadcrumb-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="breadcrumb-content">
                <div class="section-heading">
                  <h2 class="sec__title text-white">Tour List</h2>
                </div>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
              <div class="breadcrumb-list text-end">
                <ul class="list-items">
                  <li><a href="{{ url('/')}}">Home</a></li>
                  <li>Tour</li>
                  <li>Tour List</li>
                </ul>
              </div>
              <!-- end breadcrumb-list -->
            </div>
            <!-- end col-lg-6 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end breadcrumb-wrap -->
      <div class="bread-svg-box">
        <svg
          class="bread-svg"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 100 10"
          preserveAspectRatio="none"
        >
          <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
        </svg>
      </div>
      <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START CARD AREA
================================= -->
    <section class="card-area section--padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="filter-wrap margin-bottom-30px">
              <div
                class="filter-top d-flex align-items-center justify-content-between pb-4"
              >
                <div>
                  <h3 class="title font-size-24">7 Tours found</h3>
                  <p class="font-size-14 line-height-20 pt-1">
                    Book with confidence: No tour booking fees
                  </p>
                </div>
                <div class="layout-view d-flex align-items-center">
                  <a
                    href="tour-grid.html"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="Grid View"
                    ><i class="la la-th-large"></i
                  ></a>
                  <a
                    href="#"
                    data-bs-toggle="tooltip"
                    data-placement="top"
                    title="List View"
                    class="active"
                    ><i class="la la-th-list"></i
                  ></a>
                </div>
              </div>
              <!-- end filter-top -->
              <div
                class="filter-bar d-flex align-items-center justify-content-between"
              >
                <div
                  class="filter-bar-filter d-flex flex-wrap align-items-center"
                >
                  <div class="filter-option">
                    <h3 class="title font-size-16">Filter by:</h3>
                  </div>
                  <div class="filter-option">
                    <div class="dropdown dropdown-contain">
                      <a
                        class="dropdown-toggle dropdown-btn dropdown--btn"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                      >
                        Filter Price
                      </a>
                      <div class="dropdown-menu dropdown-menu-wrap">
                        <div class="dropdown-item">
                          <div class="slider-range-wrap">
                            <div
                              class="price-slider-amount padding-bottom-20px"
                            >
                              <label for="amount" class="filter__label"
                                >Price:</label
                              >
                              <input type="text" id="amount" class="amounts" />
                            </div>
                            <!-- end price-slider-amount -->
                            <div id="slider-range"></div>
                            <!-- end slider-range -->
                          </div>
                          <!-- end slider-range-wrap -->
                          <div class="btn-box pt-4">
                            <button
                              class="theme-btn theme-btn-small theme-btn-transparent"
                              type="button"
                            >
                              Apply
                            </button>
                          </div>
                        </div>
                        <!-- end dropdown-item -->
                      </div>
                      <!-- end dropdown-menu -->
                    </div>
                    <!-- end dropdown -->
                  </div>
                  <div class="filter-option">
                    <div class="dropdown dropdown-contain">
                      <a
                        class="dropdown-toggle dropdown-btn dropdown--btn"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                      >
                        Review Score
                      </a>
                      <div class="dropdown-menu dropdown-menu-wrap">
                        <div class="dropdown-item">
                          <div class="checkbox-wrap">
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="r1"
                              />
                              <label for="r1">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <span class="color-text-3 font-size-13 ms-1"
                                    >(55.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="r2"
                              />
                              <label for="r2">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ms-1"
                                    >(40.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="r3"
                              />
                              <label for="r3">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ms-1"
                                    >(23.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="r4"
                              />
                              <label for="r4">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ms-1"
                                    >(12.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="r5"
                              />
                              <label for="r5">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ms-1"
                                    >(590)</span
                                  >
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <!-- end dropdown-item -->
                      </div>
                      <!-- end dropdown-menu -->
                    </div>
                    <!-- end dropdown -->
                  </div>
                  <div class="filter-option">
                    <div class="dropdown dropdown-contain">
                      <a
                        class="dropdown-toggle dropdown-btn dropdown--btn"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                      >
                        Categories
                      </a>
                      <div class="dropdown-menu dropdown-menu-wrap">
                        <div class="dropdown-item">
                          <div class="checkbox-wrap">
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="catChb1"
                              />
                              <label for="catChb1"
                                >Active Adventures Tours</label
                              >
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="catChb2"
                              />
                              <label for="catChb2">Ecotourism</label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="catChb3"
                              />
                              <label for="catChb3">Group Tours</label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="catChb4"
                              />
                              <label for="catChb4">Ligula</label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="catChb5"
                              />
                              <label for="catChb5">Family Tours</label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="catChb6"
                              />
                              <label for="catChb6">City Tour</label>
                            </div>
                            <div class="custom-checkbox">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="catChb7"
                              />
                              <label for="catChb7">National Park Tours</label>
                            </div>
                          </div>
                        </div>
                        <!-- end dropdown-item -->
                      </div>
                      <!-- end dropdown-menu -->
                    </div>
                    <!-- end dropdown -->
                  </div>
                </div>
                <!-- end filter-bar-filter -->
                <div class="select-contain select2-container-wrapper">
                  <select class="select-contain-select">
                    <option value="1">Short by default</option>
                    <option value="2">New Tour</option>
                    <option value="3">Price: low to high</option>
                    <option value="4">Price: high to low</option>
                    <option value="5">A to Z</option>
                  </select>
                </div>
                <!-- end select-contain -->
              </div>
              <!-- end filter-bar -->
            </div>
            <!-- end filter-wrap -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-4">
            <div class="sidebar mt-0">
              <div class="sidebar-widget">
                <h3 class="title stroke-shape">Where would like to go?</h3>
                <div class="sidebar-widget-item">
                  <div class="contact-form-action">
                    <form action="#">
                      <div class="input-box">
                        <label class="label-text">Destination</label>
                        <div class="form-group">
                          <span class="la la-map-marker form-icon"></span>
                          <input
                            class="form-control"
                            type="text"
                            placeholder="Destination, city, or region"
                          />
                        </div>
                      </div>
                      <div class="input-box">
                        <label class="label-text">From</label>
                        <div class="form-group">
                          <span class="la la-calendar form-icon"></span>
                          <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                          />
                        </div>
                      </div>
                      <div class="input-box">
                        <label class="label-text">To</label>
                        <div class="form-group">
                          <span class="la la-calendar form-icon"></span>
                          <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                          />
                        </div>
                      </div>
                      <div class="input-box">
                        <label class="label-text">Trip Type</label>
                        <div class="form-group">
                          <div
                            class="select-contain select2-container-wrapper select-contain-shadow w-auto"
                          >
                            <select class="select-contain-select">
                              <option value="1">City Tour</option>
                              <option value="2">Village Tour</option>
                              <option value="3">Holiday Tour</option>
                              <option value="4">Honeymoon Tour</option>
                              <option value="5">Family Tour</option>
                            </select>
                          </div>
                          <!-- end select-contain -->
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end sidebar-widget-item -->
                <div class="btn-box pt-2">
                  <a href="tour-search-result.html" class="theme-btn"
                    >Search Now</a
                  >
                </div>
              </div>
              <!-- end sidebar-widget -->
              <div class="sidebar-widget">
                <h3 class="title stroke-shape">Filter by Price</h3>
                <div class="sidebar-price-range">
                  <div class="main-search-input-item">
                    <div class="price-slider-amount padding-bottom-20px">
                      <label for="amount2" class="filter__label">Price:</label>
                      <input type="text" id="amount2" class="amounts" />
                    </div>
                    <!-- end price-slider-amount -->
                    <div id="slider-range2"></div>
                    <!-- end slider-range -->
                  </div>
                  <!-- end main-search-input-item -->
                  <div class="btn-box pt-4">
                    <button
                      class="theme-btn theme-btn-small theme-btn-transparent"
                      type="button"
                    >
                      Apply
                    </button>
                  </div>
                </div>
              </div>
              <!-- end sidebar-widget -->
              <div class="sidebar-widget">
                <h3 class="title stroke-shape">Review Score</h3>
                <div class="sidebar-category">
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="r6" />
                    <label for="r6">Excellent</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="r7" />
                    <label for="r7">Very Good</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="r8" />
                    <label for="r8">Average</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="r9" />
                    <label for="r9">Poor</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="r10" />
                    <label for="r10">Terrible</label>
                  </div>
                </div>
              </div>
              <!-- end sidebar-widget -->
              <div class="sidebar-widget">
                <h3 class="title stroke-shape">Filter by Rating</h3>
                <div class="sidebar-review">
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="s1" />
                    <label for="s1">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <span class="color-text-3 font-size-13 ms-1"
                          >(55.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="s2" />
                    <label for="s2">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ms-1"
                          >(40.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="s3" />
                    <label for="s3">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ms-1"
                          >(23.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="s4" />
                    <label for="s4">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ms-1"
                          >(12.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox mb-0">
                    <input type="checkbox" class="form-check-input" id="s5" />
                    <label for="s5">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ms-1"
                          >(590)</span
                        >
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <!-- end sidebar-widget -->
              <div class="sidebar-widget">
                <h3 class="title stroke-shape">Categories</h3>
                <div class="sidebar-category">
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="c1" />
                    <label for="c1"
                      >All <span class="font-size-13 ms-1">(1809)</span></label
                    >
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="c2" />
                    <label for="c2"
                      >Active Adventure Tours
                      <span class="font-size-13 ms-1">(809)</span></label
                    >
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="c3" />
                    <label for="c3"
                      >Ecotourism
                      <span class="font-size-13 ms-1">(504)</span></label
                    >
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="c4" />
                    <label for="c4"
                      >Escorted Tours
                      <span class="font-size-13 ms-1">(401)</span></label
                    >
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="c5" />
                    <label for="c5"
                      >Group Tours
                      <span class="font-size-13 ms-1">(277)</span></label
                    >
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="c6" />
                    <label for="c6"
                      >Ligula <span class="font-size-13 ms-1">(87)</span></label
                    >
                  </div>
                  <div class="collapse" id="categoryMenu">
                    <div class="custom-checkbox">
                      <input type="checkbox" class="form-check-input" id="c7" />
                      <label for="c7"
                        >Family Tours
                        <span class="font-size-13 ms-1">(100)</span></label
                      >
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" class="form-check-input" id="c8" />
                      <label for="c8"
                        >City Trips
                        <span class="font-size-13 ms-1">(58)</span></label
                      >
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" class="form-check-input" id="c9" />
                      <label for="c9"
                        >National Parks Tours
                        <span class="font-size-13 ms-1">(33)</span></label
                      >
                    </div>
                  </div>
                  <!-- end collapse -->
                  <a
                    class="btn-text"
                    data-bs-toggle="collapse"
                    href="#categoryMenu"
                    role="button"
                    aria-expanded="false"
                    aria-controls="categoryMenu"
                  >
                    <span class="show-more"
                      >Show More <i class="la la-angle-down"></i
                    ></span>
                    <span class="show-less"
                      >Show Less <i class="la la-angle-up"></i
                    ></span>
                  </a>
                </div>
              </div>
              <!-- end sidebar-widget -->
              <div class="sidebar-widget">
                <h3 class="title stroke-shape">Tour Duration</h3>
                <div class="sidebar-category">
                  <div class="custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="all" />
                    <label for="all">All</label>
                  </div>
                  <div class="custom-checkbox">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="full-day"
                    />
                    <label for="full-day">Full Day</label>
                  </div>
                  <div class="custom-checkbox">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="days-10"
                    />
                    <label for="days-10">10 Days</label>
                  </div>
                  <div class="custom-checkbox">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="days-7"
                    />
                    <label for="days-7">7 Days</label>
                  </div>
                  <div class="custom-checkbox">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="days-5"
                    />
                    <label for="days-5">5 Days</label>
                  </div>
                  <div class="collapse" id="tourDurationMenu">
                    <div class="custom-checkbox">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="days-3"
                      />
                      <label for="days-3">3 Days</label>
                    </div>
                    <div class="custom-checkbox">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="days-2"
                      />
                      <label for="days-2">2 Days</label>
                    </div>
                    <div class="custom-checkbox">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="hours-8"
                      />
                      <label for="hours-8">8 Hours</label>
                    </div>
                    <div class="custom-checkbox">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="hours-3-5"
                      />
                      <label for="hours-3-5">3-5 Hours</label>
                    </div>
                    <div class="custom-checkbox">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="hours-3"
                      />
                      <label for="hours-3">3 Hours</label>
                    </div>
                  </div>
                  <!-- end collapse -->
                  <a
                    class="btn-text"
                    data-bs-toggle="collapse"
                    href="#tourDurationMenu"
                    role="button"
                    aria-expanded="false"
                    aria-controls="tourDurationMenu"
                  >
                    <span class="show-more"
                      >Show More <i class="la la-angle-down"></i
                    ></span>
                    <span class="show-less"
                      >Show Less <i class="la la-angle-up"></i
                    ></span>
                  </a>
                </div>
              </div>
              <!-- end sidebar-widget -->
            </div>
            <!-- end sidebar -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-8">
            <div class="card-item card-item-list">
              <div class="card-img">
                <a href="{{url('/buddhist-tour')}}" class="d-block">
                  <img src="{{asset('travel-website/images/img9.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('/tour/buddhist-tour')}}"
                    >Buddhist Sites And Nature Tour </a
                  >
                </h3>
                <p class="card-meta">Taxila, Mingora, Haripur, Lahore Pakistan</p>
                <div class="card-rating">
                  <span class="badge text-white">4.9/5</span>
                  <span class="review__text">Best</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$1200.00</span>
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>10 Days 9 Nights</span
                  >
                </div>
              </div>
            </div>
            <!-- end card-item -->

            <div class="card-item card-item-list">
              <div class="card-img">
                <a href="{{url('/tour/sikh-nature-tour')}}" class="d-block">
                  <img src="{{asset('travel-website/images/img10.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
                <span class="badge">Bestseller</span>
                <!-- <span class="badge badge-ribbon">24% Save</span> -->
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('/tour/sikh-nature-tour')}}">Sikh Religious and Nature Tour
                  </a>
                </h3>
                <p class="card-meta">Lahore, Haripur, Peshawar, Murree Pakistan</p>
                <div class="card-rating">
                  <span class="badge text-white">4.9/5</span>
                  <span class="review__text">Best</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$1200.00</span>
                    <span class="price__num before-price color-text-3"
                      >$2400.00</span
                    >
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>12 Days 11 Nights</span
                  >
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item card-item-list">
              <div class="card-img">
                <a href="{{url('/tour/sikh-site-tour')}}" class="d-block">
                  <img src="{{asset('travel-website/images/sikh.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('/tour/sikh-site-tour')}}">Sikh Religious Sites Tour</a>
                </h3>
                <p class="card-meta">Lahore, Nowshera, Hasan Abdal, Peshawar, Haripur Pakistan</p>
                <div class="card-rating">
                  <span class="badge text-white">4.9/5</span>
                  <span class="review__text">Best</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$1200.00</span>
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>10 Days 9 Nights</span
                  >
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item card-item-list">
              <div class="card-img">
                <a href="{{url('/tour/sikh-religious-tour')}}" class="d-block">
                  <img src="{{asset('travel-website/images/gurdwara.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
                <span class="badge">Bestseller</span>
                <!-- <span class="badge badge-ribbon">24% Save</span> -->
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('/tour/sikh-religious-tour')}}">Sikh Religious Tour</a>
                </h3>
                <p class="card-meta">Lahore, Peshawar, Hasan Abdal Pakistan</p>
                <div class="card-rating">
                  <span class="badge text-white">4.9/5</span>
                  <span class="review__text">Best</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$1200.00</span>
                    <span class="price__num before-price color-text-3"
                      >$2400.00</span
                    >
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>8 Days 7 Nights</span
                  >
                </div>
              </div>
            </div>
            <!-- end card-item -->
             <div class="card-item card-item-list">
              <div class="card-img">
                <a href="{{url('/tour/skardu-tour')}}" class="d-block">
                  <img src="{{asset('travel-website/images/img12.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('/tour/skardu-tour')}}">Skardu Tour by Road</a>
                </h3>
                <p class="card-meta">Gilgit Baltistan, Skardu, Pakistan</p>
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
                    <span class="price__num">$600.00</span>
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>7 Days 6 Nights</span
                  >
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item card-item-list">
              <div class="card-img">
                <a href="{{url('/tour/skardu-waterfall-tour')}}" class="d-block">
                  <img src="{{asset('travel-website/images/img11.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
                <span class="badge">Featured</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('/tour/skardu-waterfall-tour')}}"
                    >Skardu, Shangrila, Manthoka Waterfall Tour</a
                  >
                </h3>
                <p class="card-meta">Skardu, Shigar Pakistan</p>
                <div class="card-rating">
                  <span class="badge text-white">4.7/5</span>
                  <span class="review__text">Good</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$600.00</span>
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>6 Days</span
                  >
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item card-item-list">
              <div class="card-img">
                <a href="{{url('/tour/hunza-tour')}}" class="d-block">
                  <img src="{{asset('travel-website/images/img13.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{url('/tour/hunza-tour')}}">Hunza Valley By Road</a>
                </h3>
                <p class="card-meta">Chilas, Karimabad, Hunza Pakistan</p>
                <div class="card-rating">
                  <span class="badge text-white">4.6/5</span>
                  <span class="review__text">Average</span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p>
                    <span class="price__from">From</span>
                    <span class="price__num">$600.00</span>
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>5 Days</span
                  >
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <!-- <div class="card-item card-item-list">
              <div class="card-img">
                <a href="tour-details.html" class="d-block">
                  <img src="{{asset('travel-website/images/img14.jpg')}}" alt="Destination-img" />
                </a>
                <div
                  class="add-to-wishlist icon-element"
                  data-bs-toggle="tooltip"
                  data-placement="top"
                  title="Save for Later"
                >
                  <i class="la la-heart-o"></i>
                </div>
                <span class="badge">Featured</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Mangrove Tunnel Kayak Eco Tour</a>
                </h3>
                <p class="card-meta">212 Colin road, Canada</p>
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
                    <span class="price__num">$124.00</span>
                  </p>
                  <span class="tour-hour"
                    ><i class="la la-clock-o me-1"></i>1 day</span
                  >
                </div>
              </div>
            </div> -->
            <!-- end card-item -->
          </div>
          <!-- end col-lg-8 -->
        </div> 
        <!-- end row -->
        <!-- <div class="row">
          <div class="col-lg-12">
            <div class="btn-box mt-3 text-center">
              <button type="button" class="theme-btn">
                <i class="la la-refresh me-1"></i>Load More
              </button>
              <p class="font-size-13 pt-2">Showing 1 - 8 of 2292 Tours</p>
            </div> -->
            <!-- end btn-box -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->

    <div class="section-block"></div>

@endsection