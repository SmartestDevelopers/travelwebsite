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
                Embark on a journey where you're never alone – Travel Pakistan Now ensures every step of your adventure is guided with care.
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
                Discover a world of endless choices – anytime, anywhere, with Travel Pakistan Now, your gateway to unforgettable adventures
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
                Find peace of mind wherever you wander – Travel Pakistan Now ensures your journey is safe, seamless, and filled with unforgettable moments
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

<!-- 
    <-- ================================
    START DESTINATION AREA
=================================  -->
    <section class="destination-area section--padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="section-heading">
              <h2 class="sec__title">Top Visited Places</h2>
              <p class="sec__desc pt-3">
              Discover the world's most captivating destinations – where every journey becomes a story worth telling.
              </p>
            </div>

            <!-- end section-heading -->
          </div>
          <!-- end col-lg-8 -->
          <div class="col-lg-4">
            <div class="btn-box btn--box text-end">
              <a href="{{ url('/tour-list')}}" class="theme-btn">Discover More</a>
            </div>
          </div>
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-4">
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img2.jpg')}}" alt="destination-img" />
                <span class="badge">Skardu</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{ url('/skardu-waterfall-tour')}}">Manthoka Waterall</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <!-- <p class="tour__text">50 Tours</p> -->
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$600.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img3.jpg')}}" alt="destination-img" />
                <span class="badge">Gurdwara</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{ url('/sikh-nature-tour')}}">Sikh Sacred Gurdwaras Tour</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <!-- <p class="tour__text">50 Tours</p> -->
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$1200.00</span>
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
                <span class="badge">Sikh Yatra</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{ url('/sikh-religious-tour')}}">Sikh Religious Sites</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <!-- <p class="tour__text">150 Tours</p> -->
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$1200.00</span>
                    <span class="price__num before-price">$2400.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/destination-img5.jpg')}}" alt="destination-img" />
                <span class="badge">Buddhist Temples</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{ url('/buddhist-tour')}}">Buddhist and Nature Tour</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <!-- <p class="tour__text">50 Tours</p> -->
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$1200.00</span>
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
                <span class="badge">Hunza</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="{{ url('/hunza-tour')}}">Hunza Valley Tour</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                  </span>
                  <span class="rating__text">(30 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <!-- <p class="tour__text">50 Tours</p> -->
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$600.00</span>
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
       START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area section-bg section-padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <div class="section-heading">
              <h2 class="sec__title line-height-50">
                What our customers are saying about us?
              </h2>
              <p class="sec__desc padding-top-30px">
              Our customers provide valuable feedback that helps us improve our services and ensure a memorable travel experience. We take pride in our commitment to customer satisfaction and strive to exceed expectations with every journey.
              </p>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-8">
            <div class="testimonial-carousel carousel-action">
              <div class="testimonial-card">
                <div class="testi-desc-box">
                  <p class="testi__desc">
                  Exploring the ancient Buddhist ruins of Taxila was a profound experience. The guides provided insightful details about the history and significance of the sites. Travel Pakistan Now made the entire trip smooth and memorable. I felt a deep connection to the spiritual heritage of the region. Highly recommended for all travelers!
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{ asset('travel-website/images/team0.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Wang Hui</h4>
                    <span class="author__meta">China</span>
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
                  My trip to Pakistan with Travel Pakistan Now was unforgettable! From breathtaking landscapes to cultural experiences, everything was perfectly organized. The team’s attention to detail and hospitality made me feel at home. I highly recommend their services to anyone looking for a unique travel adventure filled with joy and discovery
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{ asset('travel-website/images/team9.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Kathy David</h4>
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
                  Visiting the Gurdwara Darbar Sahib in Kartarpur was a deeply spiritual experience. Travel Pakistan Now ensured a seamless journey, allowing me to connect with my roots and faith. The arrangements were excellent, and the team was incredibly supportive throughout the trip. Highly recommended for Sikh pilgrims!
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{ asset('travel-website/images/team10.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Jaswinder Singh</h4>
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
                  Visiting the Dharmarajika Stupa and other Buddhist sites was a once-in-a-lifetime experience. Travel Pakistan Now provided excellent service, ensuring every detail was taken care of. The spiritual energy of these places was incredible, and I left with a deeper appreciation for the region’s history and cultural significance.
                  </p>
                </div>
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{ asset('travel-website/images/team8.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <h4 class="author__title">Tenzin Dorjee</h4>
                    <span class="author__meta">Tibet</span>
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
                <form action="{{ url('/subscribe') }}" method="POST">
                  @csrf
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



@endsection