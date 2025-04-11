@extends('layouts.front')

@section('content')


    <!-- ================================
    START GALLERY AREA
================================= -->
<section class="gallery-area section--padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Gallery Grid</h2>
              <p class="sec__desc pt-2">
                We used bootstrap grid layout format You can change grid format
                from 2 to 5 responsive-columns
              </p>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img5.jpg"
                data-caption="Showing image 1"
              >
                <img src="{{asset('travel-website/images/img5.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img29.jpg"
                data-caption="Showing image 2"
              >
                <img src="{{asset('travel-website/images/img29.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img30.jpg"
                data-caption="Showing image 3"
              >
                <img src="{{asset('travel-website/images/img30.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img31.jpg"
                data-caption="Showing image 4"
              >
                <img src="{{asset('travel-website/images/img31.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img32.jpg"
                data-caption="Showing image 5"
              >
                <img src="{{asset('travel-website/images/img32.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img33.jpg"
                data-caption="Showing image 6"
              >
                <img src="{{asset('travel-website/images/img33.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end gallery-area -->
    <!-- ================================
    END GALLERY AREA
================================= -->

    <!-- ================================
    START GALLERY AREA
================================= -->
    <section class="gallery-area section-bg section--padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Gallery Masonry</h2>
              <p class="sec__desc pt-2">
                We used bootstrap grid layout format You can change grid format
                from 2 to 5 responsive-columns
              </p>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px grid-masonry">
          <div class="grid-masonry-item grid-masonry-item-width-1 col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img5.jpg"
                data-caption="Showing image 1"
              >
                <img src="{{asset('travel-website/images/img5.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="grid-masonry-item grid-masonry-item-width-2 col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img29.jpg"
                data-caption="Showing image 2"
              >
                <img src="{{asset('travel-website/images/img29.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="grid-masonry-item col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img30.jpg"
                data-caption="Showing image 3"
              >
                <img src="{{asset('travel-website/images/img30.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="grid-masonry-item grid-masonry-item-width-3 col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img31.jpg"
                data-caption="Showing image 4"
              >
                <img src="{{asset('travel-website/images/img31.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="grid-masonry-item col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img32.jpg"
                data-caption="Showing image 5"
              >
                <img src="{{asset('travel-website/images/img32.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="grid-masonry-item grid-masonry-item-width-4 col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img33.jpg"
                data-caption="Showing image 6"
              >
                <img src="{{asset('travel-website/images/img33.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="grid-masonry-item col-lg-4">
            <div class="gallery-card">
              <a
                class="d-block"
                data-fancybox="gallery"
                href="images/img34.jpg"
                data-caption="Showing image 7"
              >
                <img src="{{asset('travel-website/images/img34.jpg')}}"/>
              </a>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end gallery-area -->
    <!-- ================================
    END GALLERY AREA
================================= -->

    <!-- ================================
    START GALLERY AREA
================================= -->
    <section class="gallery-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Horizontal Gallery</h2>
              <p class="sec__desc pt-2">
                We used owl-carousel You can change grid format from 2 to 5
                responsive-columns
              </p>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
      <div class="full-width-slider padding-top-50px carousel-action">
        <div class="full-width-slide-item">
          <a
            class="d-block"
            data-fancybox="gallery"
            href="images/img30.jpg"
            data-caption="Showing image 1"
          >
            <img src="{{asset('travel-website/images/img30.jpg')}}"/>
          </a>
        </div>
        <!-- end full-width-slide-item -->
        <div class="full-width-slide-item">
          <a
            class="d-block"
            data-fancybox="gallery"
            href="images/img31.jpg"
            data-caption="Showing image 2"
          >
            <img src="{{asset('travel-website/images/img31.jpg')}}"/>
          </a>
        </div>
        <!-- end full-width-slide-item -->
        <div class="full-width-slide-item">
          <a
            class="d-block"
            data-fancybox="gallery"
            href="images/img32.jpg"
            data-caption="Showing image 3"
          >
            <img src="{{asset('travel-website/images/img32.jpg')}}"/>
          </a>
        </div>
        <!-- end full-width-slide-item -->
        <div class="full-width-slide-item">
          <a
            class="d-block"
            data-fancybox="gallery"
            href="images/img33.jpg"
            data-caption="Showing image 4"
          >
            <img src="{{asset('travel-website/images/img33.jpg')}}"/>
          </a>
        </div>
        <!-- end full-width-slide-item -->
        <div class="full-width-slide-item">
          <a
            class="d-block"
            data-fancybox="gallery"
            href="images/img34.jpg"
            data-caption="Showing image 5"
          >
            <img src="{{asset('travel-website/images/img34.jpg')}}"/>
          </a>
        </div>
        <!-- end full-width-slide-item -->
      </div>
      <!-- end full-width-slider -->
    </section>
    <!-- end gallery-area -->
    <!-- ================================
    END GALLERY AREA
================================= -->

    <!-- ================================
    START CTA AREA
================================= -->
    <section
      class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="section-heading">
              <p class="sec__desc text-white-50 pb-1">Newsletter sign up</p>
              <h2 class="sec__title font-size-30 text-white">
                Subscribe to Get Special Offers
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

@endsection