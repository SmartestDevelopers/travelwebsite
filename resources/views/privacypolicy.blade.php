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
                  <h2 class="sec__title text-white">Privacy Policy</h2>
                </div>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
              <div class="breadcrumb-list text-end">
                <ul class="list-items">
                  <li><a href="{{ url('/')}}">Home</a></li>
                  <li>Privacy Policy</li>
                  <!-- <li></li> -->
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
              <h2 class="sec__title">Our Privacy Policy</h2>
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
                <h4 class="info__title"><a href="#">Information We Collect</a></h4>
                <p class="info__desc">
                We collect personal information such as your name, email, phone number, and payment details when you book services or subscribe to our newsletter. Additionally, we gather usage data like IP addresses and browsing behavior to improve our website and services.
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
                <h4 class="info__title"><a href="#">How We Use Your Information</a></h4>
                <p class="info__desc">
                Your information is used to process bookings, communicate updates, and enhance your experience. We may also use it to send promotional offers, improve our services, and comply with legal obligations. Your data helps us provide a seamless and personalized travel experience.
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
                <h4 class="info__title"><a href="#">Sharing Your Information</a></h4>
                <p class="info__desc">
                We do not sell your personal information. However, we may share it with trusted service providers, such as payment processors or tour operators, to fulfill your bookings. We may also disclose information if required by law or to protect our rights.
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
                <h4 class="info__title"><a href="#">Cookies and Tracking</a></h4>
                <p class="info__desc">
                We use cookies to enhance your browsing experience, remember preferences, and analyze website traffic. Cookies help us improve functionality and provide personalized services. You can disable cookies in your browser settings, but some features may not work properly.
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
                <h4 class="info__title"><a href="#">Data Security</a></h4>
                <p class="info__desc">
                We implement robust security measures to protect your personal information. While we strive to safeguard your data, no method of transmission over the internet is entirely secure. We encourage you to take precautions to protect your information.
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
                <h4 class="info__title"><a href="#">Your Rights</a></h4>
                <p class="info__desc">
                You have the right to access, update, or delete your personal information. You can opt out of promotional emails by clicking "unsubscribe" in our emails. Contact us to request a copy of the data we hold about you.
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
                <h4 class="info__title"><a href="#">Third-Party Links</a></h4>
                <p class="info__desc">
                Our website may contain links to third-party websites. We are not responsible for their privacy practices or content. Please review their privacy policies before providing any personal information to ensure your data is handled securely.
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
                <h4 class="info__title"><a href="#">Changes to This Policy</a></h4>
                <p class="info__desc">
                We may update this Privacy Policy periodically to reflect changes in our practices or legal requirements. Any updates will be posted on this page with the revised effective date. Please review it regularly to stay informed.
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