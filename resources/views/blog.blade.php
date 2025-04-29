@extends('layouts.front')

@section('content')

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
                    Blog <br />
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
    START CARD AREA
================================= -->
<section class="card-area section--padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/blog-img.jpg')}}" alt="blog-img"/>
                <div class="post-format icon-element">
                  <i class="la la-photo"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">Travel</a>
                    <a href="#" class="badge">Blog</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="{{ url('/blog/hunza-blog')}}"
                      >A Journey Through Hunza: The Hidden Gem of Northern Pakistan</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 15 January, 2025</span>
                    <span class="post-dot"></span>
                    <span class="post__time">3 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/small-team1.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Leroy Bell</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/blog-img2.jpg')}}" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-play"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">Blog</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="{{ url('/blog/sikh-gurdwara-blog')}}"
                      >Top Gurdwaras in Pakistan: A Spiritual Journey Through Sikh Heritage</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 10 February, 2025</span>
                    <span class="post-dot"></span>
                    <span class="post__time">3 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/small-team2.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Phillip Hunt</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/blog-img3.jpg')}}" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-music"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">Blog</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="{{ url('/blog/sikh-sites-blog')}}"
                      >Top Sikh Religious Sites in Pakistan: Pilgrimage Destinations for Devotees</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 25 February, 2025</span>
                    <span class="post-dot"></span>
                    <span class="post__time">3 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/small-team3.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Luke Jacobs</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/blog-img.jpg')}}" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-photo"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">Travel</a>
                    <a href="#" class="badge">Blog</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="{{url('/blog/skardu-blog')}}"
                      >Skardu Travel Guide: Discovering the Majestic Beauty of Skardu Valley</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 9 March, 2025</span>
                    <span class="post-dot"></span>
                    <span class="post__time">3 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/small-team4.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Alex Smith</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/blog-img2.jpg')}}" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-play"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">Blog</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="{{ url('/blog/buddhist-blog')}}"
                      >Buddhist Sites of Pakistan: Exploring Ancient Temples and Monasteries</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 25 February, 2025</span>
                    <span class="post-dot"></span>
                    <span class="post__time">2 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/small-team5.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Abraham Doe</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="{{asset('travel-website/images/blog-img3.jpg')}}" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-music"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">audio</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="{{ url('/blog/honeymoon-blog')}}"
                      >Top 10 Honeymoon Spots in Pakistan: Explore the Beauty of Love</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 21 March, 2025</span>
                    <span class="post-dot"></span>
                    <span class="post__time">3 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="{{asset('travel-website/images/small-team6.jpg')}}" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">David Martin</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="btn-box mt-3 text-center">
              <button type="button" class="theme-btn">
                <i class="la la-refresh me-1"></i>Load More
              </button>
              <p class="font-size-13 pt-2">Showing 1 - 6 of 44 Posts</p>
            </div>
            <!-- end btn-box -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </section>
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->  
@endsection