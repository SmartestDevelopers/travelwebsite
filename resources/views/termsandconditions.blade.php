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
                  <h2 class="sec__title text-white">Terms & Conditions</h2>
                </div>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
              <div class="breadcrumb-list text-end">
                <ul class="list-items">
                  <li><a href="{{ url('/')}}">Home</a></li>
                  <li>Terms & Conditions</li>
                  <!-- <li>Tour List</li> -->
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
              <h2 class="sec__title">Our Terms and Conditions</h2>
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
                <h4 class="info__title"><a href="#">Booking and Payments</a></h4>
                <p class="info__desc">
                All bookings are subject to availability and confirmation. Full payment must be made at the time of booking unless otherwise specified. Prices may vary due to currency fluctuations or other factors. Ensure accurate details during booking to avoid delays or issues with your travel arrangements.
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
                <h4 class="info__title"><a href="#">Cancellations, Refunds, and Changes</a></h4>
                <p class="info__desc">
                Cancellation requests must be submitted in writing via email. Refunds will be processed according to our cancellation policy, which may vary depending on the tour package. Travel Pakistan Now reserves the right to modify or cancel itineraries due to weather, political instability, or unforeseen circumstances. Alternative arrangements will be made where possible.
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
                <h4 class="info__title"><a href="#">Travel Documents and Health</a></h4>
                <p class="info__desc">
                It is the traveler’s responsibility to ensure they have valid passports, visas, and other required travel documents. Travelers must also ensure they are physically fit to participate in selected tours. Travel Pakistan Now is not liable for delays, cancellations, or denied entry caused by incomplete documentation or health issues.
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
                <h4 class="info__title"><a href="#">Liability and Insurance</a></h4>
                <p class="info__desc">
                Travel Pakistan Now acts as an agent for third-party service providers, such as hotels and transport companies. We are not liable for issues arising from their services. Travelers are responsible for their belongings, and we recommend purchasing travel insurance to cover medical emergencies, cancellations, or other unforeseen events.
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
                <h4 class="info__title"><a href="#">Promotional Offers and Discounts</a></h4>
                <p class="info__desc">
                  Promotional offers are subject to specific terms and conditions. Discounts cannot be combined with other offers unless explicitly stated. Travel Pakistan Now reserves the right to modify or withdraw promotional offers at any time without prior notice.
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
                <h4 class="info__title"><a href="#">Privacy and Data Usage</a></h4>
                <p class="info__desc">
                Your personal information is collected to process bookings and improve services. We do not share your data with third parties without consent, except as required by law. For more details, refer to our Privacy Policy available on our website.
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
                <h4 class="info__title"><a href="#"> Third-Party Links and Services</a></h4>
                <p class="info__desc">
                Our website may contain links to third-party websites. We are not responsible for their privacy practices or content. Please review their privacy policies before providing any personal information. Additionally, we are not liable for issues arising from third-party services used during your trip.
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
                <h4 class="info__title"><a href="#"> Governing Law and Acceptance</a></h4>
                <p class="info__desc">
                These terms and conditions are governed by the laws of Pakistan. Any disputes arising from the use of our services will be resolved in the courts of Pakistan. By booking with Travel Pakistan Now, you acknowledge that you have read, understood, and agreed to these terms.
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
    <!-- end section -->
    <!-- ================================
    END SECTION