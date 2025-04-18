@extends('layouts.front')

@section('content')
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
                    <a href="#" class="badge">lifestyle</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="blog-single.html"
                      >Top 10 Scenic Spots for Nature Lovers in Pakistan: A Traveler’s Guide</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 January, 2020</span>
                    <span class="post-dot"></span>
                    <span class="post__time">5 Mins read</span>
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
                    <a href="#" class="badge">Video</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="blog-single.html"
                      >Top Camping Destinations in Pakistan for Adventure Seekers</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 February, 2020</span>
                    <span class="post-dot"></span>
                    <span class="post__time">4 Mins read</span>
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
                    <a href="#" class="badge">audio</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="blog-single.html"
                      >Discover the Majestic Sikh Temples and Sacred Sites Across Pakistan</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 March, 2020</span>
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
                    <a href="#" class="badge">lifestyle</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="{{url('blog')}}"
                      >Top 10 Must-Visit Spots in Skardu: Exploring the Land of High Mountains</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 January, 2020</span>
                    <span class="post-dot"></span>
                    <span class="post__time">5 Mins read</span>
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
                    <a href="#" class="badge">Video</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="blog-single.html"
                      >Taobat, Kashmir: A Journey to One of Pakistan's Most Picturesque Villages</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 February, 2020</span>
                    <span class="post-dot"></span>
                    <span class="post__time">4 Mins read</span>
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
                    <a href="blog-single.html"
                      >The Beauty of Skardu's Deosai National Park: A High-altitude Plateau of Wonders</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 March, 2020</span>
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