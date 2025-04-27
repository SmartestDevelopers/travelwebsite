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
    START SERVICE AREA
================================= -->
<section class="service-area section--padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Services We Provide</h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-80px">
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-plane"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">Flight Deals</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-anchor"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">Amazing Tour</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-support"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">Support Cases</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-briefcase"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">In Business</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-hotel"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">Handpicked Hotels</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-user-secret"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">Private Guide</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-map"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">Location Manager</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
          <div class="col-lg-3 responsive-column">
            <div class="icon-box icon-layout-4">
              <div class="info-icon">
                <i class="la la-thumbs-up"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title"><a href="#">Best Travel Agent</a></h4>
                <p class="info__desc">
                  Pellentesque ac turpis egestas, varius justo et, condimentum
                  augue nerrowe.
                </p>
              </div>
              <!-- end info-content -->
            </div>
            <!-- end icon-box -->
          </div>
          <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <div
              class="tab-content-info mt-n4 d-flex justify-content-between align-items-center"
            >
              <p class="font-size-15">
                Do not hesitate to contact us for better help and service.
              </p>
              <a href="{{ url('contact-us')}}" class="btn-text font-size-15"
                >Contact us <i class="la la-arrow-right ms-1"></i
              ></a>
            </div>
            <!-- end tab-content-info -->
          </div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- end service-area -->
    <!-- ================================
    END SERVICE AREA
================================= -->

@endsection