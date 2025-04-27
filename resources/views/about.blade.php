@extends('layouts.front')

@section('content')


<!-- 
<section id="about-us">

    <div class="container">
    <h1>About Us</h1>
        <h2>Discover Nature, Embrace Culture, Experience Spirituality with Travel Pakistan Now</h2>
        <p>Welcome to <strong>Travel Pakistan Now</strong>, your premier travel partner for unforgettable tourism experiences in Pakistan. We are committed to showcasing the rich cultural heritage, breathtaking natural landscapes, and deep spiritual sites of Pakistan, offering journeys that are as enriching as they are awe-inspiring.</p>
        
        <p>We specialize in providing a variety of exceptional travel services designed to meet the needs of every type of traveler:</p>
        
        <p><strong>Nature Sightseeing:</strong> Immerse yourself in the diverse beauty of Pakistan’s natural wonders. From the snow-capped peaks of the Karakoram and Himalayas to lush valleys, serene lakes, and ancient forests, our nature sightseeing tours offer you a chance to explore the country’s most stunning and untouched landscapes.</p>

        <p><strong>Trekking Adventures:</strong> For the adventurous traveler, we provide expert-led trekking expeditions across some of the world’s most breathtaking mountain ranges. Whether it’s hiking through the rugged terrains of the Karakoram or the grandeur of the Himalayas, our trekking tours promise unforgettable experiences in the heart of Pakistan’s northern highlands.</p>

        <p><strong>Religious Tourism:</strong> Pakistan’s rich spiritual heritage is a cornerstone of its identity. Our religious tourism services take you to sacred sites that reflect the diverse faiths that have shaped the country, from historic mosques and shrines to significant spiritual landmarks that connect you with the soul of Pakistan.</p>

        <p>At <strong>Travel Pakistan Now</strong>, we pride ourselves on crafting customized itineraries that cater to your specific travel interests. Whether you’re looking for a peaceful sightseeing experience, a thrilling trekking adventure, or a deep spiritual exploration, we ensure seamless travel arrangements and exceptional service throughout your journey.</p>

        <p>With years of experience and a genuine passion for promoting the beauty and culture of Pakistan, we are dedicated to making your travel experience truly unforgettable. Let us guide you on a journey to discover the incredible landscapes, vibrant cultures, and spiritual depth of this magnificent country.</p>

        <p><strong>Start your journey with Travel Pakistan Now and explore the magic of Pakistan today!</strong></p>
    </div>
</section> -->


 <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-9">
      <div class="breadcrumb-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-content">
                <div class="section-heading">
                  <h2 class="sec__title line-height-50 text-white">
                    Travel Pakistan Now is Your Trusted <br />
                    Travel Companion.
                  </h2>
                </div>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-12 -->
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
    START INFO AREA
================================= -->
    <section class="info-area padding-top-100px padding-bottom-70px">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 responsive-column">
            <div class="card-item">
              <div class="card-img">
                <img src="{{ asset('travel-website/images/img21.jpg')}}" alt="about-img" />
              </div>
              <div class="card-body">
                <h3 class="card-title mb-2">Who We Are?</h3>
                <p class="card-text">
                We are committed to showcasing the rich cultural heritage, breathtaking natural landscapes, and deep spiritual sites of Pakistan, offering journeys that are as enriching as they are awe-inspiring.
                </p>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item">
              <div class="card-img">
                <img src="{{ asset('travel-website/images/img22.jpg')}}" alt="about-img" />
              </div>
              <div class="card-body">
                <h3 class="card-title mb-2">What We Do?</h3>
                <p class="card-text">
                We pride ourselves on crafting customized itineraries that cater to your specific travel interests. We ensure seamless travel arrangements and exceptional service throughout your journey.
                </p>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item">
              <div class="card-img">
                <img src="{{ asset('travel-website/images/img23.jpg')}}" alt="about-img" />
              </div>
              <div class="card-body">
                <h3 class="card-title mb-2">Our Mission</h3>
                <p class="card-text">
                With years of experience and a genuine passion for promoting the beauty and culture of Pakistan, we are dedicated to making your travel experience truly unforgettable.
                </p>
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
    <!-- end info-area -->
    <!-- ================================
    END INFO AREA
================================= -->

    <!-- ================================
    START ABOUT AREA
================================= -->
    <section class="about-area padding-bottom-90px overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading margin-bottom-40px">
              <h2 class="sec__title">About Us</h2>
              <h4 class="title font-size-16 line-height-26 pt-4 pb-2">
              Welcome to <strong>Travel Pakistan Now</strong>, your premier travel partner for unforgettable tourism experiences in Pakistan.
              </h4>
              <p class="sec__desc font-size-16 pb-3">
              We specialize in providing a variety of exceptional travel services designed to meet the needs of every type of traveler:
              </p>
              <p class="sec__desc font-size-16 pb-3"><strong>Nature Sightseeing:</strong> Immerse yourself in the diverse beauty of Pakistan’s natural wonders. Nature sightseeing tours offer you a chance to explore the country’s most stunning and untouched landscapes.</p>
              <p class="sec__desc font-size-16 pb-3">
              <strong>Religious Tourism:</strong>Our religious tourism services take you to sacred sites that reflect the diverse faiths that have shaped the country, from historic mosques and shrines to significant spiritual landmarks that connect you with the soul of Pakistan.
              </p>
              <p class="sec__desc font-size-16">
              <strong>Trekking Adventures:</strong> Whether it’s hiking through the rugged terrains of the Karakoram or the grandeur of the Himalayas, our trekking tours promise unforgettable experiences in the heart of Pakistan’s northern highlands.
              </p>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-5 ms-auto">
            <div class="image-box about-img-box">
              <img
                src="{{ asset('travel-website/images/img24.jpg')}}"
                alt="about-img"
                class="img__item img__item-1"
              />
              <img
                src="{{ asset('travel-website/images/img25.jpg')}}"
                alt="about-img"
                class="img__item img__item-2"
              />
            </div>
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end about-area -->
    <!-- ================================
    END ABOUT AREA
================================= -->

    <!-- ================================
    STAR FUNFACT AREA
================================= -->
    <section class="funfact-area padding-bottom-70px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Our Numbers Say Everything</h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="counter-box counter-box-2 margin-top-60px mb-0">
          <div class="row">
            <div class="col-lg-3 responsive-column">
              <div class="counter-item counter-item-layout-2 d-flex">
                <div class="counter-icon flex-shrink-0">
                  <i class="la la-users"></i>
                </div>
                <div class="counter-content">
                  <div>
                    <span
                      class="counter"
                      data-from="0"
                      data-to="200"
                      data-refresh-interval="5"
                      >0</span
                    >
                    <span class="count-symbol">+</span>
                  </div>
                  <p class="counter__title">Partners</p>
                </div>
                <!-- end counter-content -->
              </div>
              <!-- end counter-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
              <div class="counter-item counter-item-layout-2 d-flex">
                <div class="counter-icon flex-shrink-0">
                  <i class="la la-building"></i>
                </div>
                <div class="counter-content">
                  <div>
                    <span
                      class="counter"
                      data-from="0"
                      data-to="3"
                      data-refresh-interval="5"
                      >0</span
                    >
                    <span class="count-symbol">k</span>
                  </div>
                  <p class="counter__title">Properties</p>
                </div>
                <!-- end counter-content -->
              </div>
              <!-- end counter-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
              <div class="counter-item counter-item-layout-2 d-flex">
                <div class="counter-icon flex-shrink-0">
                  <i class="la la-globe"></i>
                </div>
                <div class="counter-content">
                  <div>
                    <span
                      class="counter"
                      data-from="0"
                      data-to="400"
                      data-refresh-interval="5"
                      >0</span
                    >
                    <span class="count-symbol">+</span>
                  </div>
                  <p class="counter__title">Destinations</p>
                </div>
                <!-- end counter-content -->
              </div>
              <!-- end counter-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
              <div class="counter-item counter-item-layout-2 d-flex">
                <div class="counter-icon flex-shrink-0">
                  <i class="la la-check-circle"></i>
                </div>
                <div class="counter-content">
                  <div>
                    <span
                      class="counter"
                      data-from="0"
                      data-to="40"
                      data-refresh-interval="5"
                      >0</span
                    >
                    <span class="count-symbol">k</span>
                  </div>
                  <p class="counter__title">Booking</p>
                </div>
                <!-- end counter-content -->
              </div>
              <!-- end counter-item -->
            </div>
            <!-- end col-lg-3 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end counter-box -->
      </div>
      <!-- end container -->
    </section>
    <!-- ================================
    END FUNFACT AREA
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
                What our customers are saying us?
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
                    <img src="{{ asset('travel-website/images/team8.jpg')}}" alt="testimonial image" />
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



@endsection