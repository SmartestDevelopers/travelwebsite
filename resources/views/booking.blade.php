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
                  <h2 class="sec__title text-white">Tour Booking</h2>
                </div>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
              <div class="breadcrumb-list text-end">
                <ul class="list-items">
                  <li><a href="index.html">Home</a></li>
                  <li>Tour Booking</li>
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
    START BOOKING AREA
================================= -->
    <section class="booking-area padding-top-100px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Your Personal Information</h3>
                        </div>
                        <!-- form-title-wrap -->

                        <div class="form-content">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="contact-form-action">
        <form method="post" action="{{ url('/insert-booking-record') }}">
            @csrf
            <div class="row">
                                        <!-- First Name -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">First Name</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="firstname"
                                                        placeholder="First name"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Last Name</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="lastname"
                                                        placeholder="Last name"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Your Email</label>
                                                <div class="form-group">
                                                    <span class="la la-envelope-o form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="email"
                                                        name="email"
                                                        placeholder="Email address"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Phone -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Phone Number</label>
                                                <div class="form-group">
                                                    <span class="la la-phone form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="phone"
                                                        placeholder="Phone Number"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Address -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Address Line</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marked form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="address"
                                                        placeholder="Address line"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Country -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Country</label>
                                                <div class="form-group select2-container-wrapper">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" name="country" required>
                                                            <option value="">Select country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="United States">United States</option>
                                                            <option value="India">India</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <!-- Add more countries as needed -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tour -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Tour</label>
                                                <div class="form-group select2-container-wrapper">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" name="tour" required>
                                                            <option value="Buddhist Site + Nature Tour">Buddhist Site + Nature Tour</option>
                                                            <option value="Sikh Religious + Nature Tour">Sikh Religious + Nature Tour</option>
                                                            <option value="Sikh Religious Site Tour">Sikh Religious Site Tour</option>
                                                            <option value="Sikh Religious Tour">Sikh Religious Tour</option>
                                                            <option value="Skardu Tour by Road">Skardu Tour by Road</option>
                                                            <option value="Hunza Valley by Road">Hunza Valley by Road</option>
                                                            <option value="Other">Other (write name of tour)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Booking Dates -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Date From</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="form-control" type="date" name="date_from" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Date To</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="form-control" type="date" name="date_to" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Guests -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Adults</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="number"
                                                        name="adults"
                                                        placeholder="Enter number of adults"
                                                        min="1"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Kids</label>
                                                <div class="form-group">
                                                    <span class="la la-child form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="number"
                                                        name="kids"
                                                        placeholder="Enter number of kids"
                                                        min="0"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Promotional Offers -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <div class="custom-checkbox mb-0">
                                                    <input
                                                        type="checkbox"
                                                        name="promotional_offers"
                                                        class="form-check-input"
                                                        id="receiveChb"
                                                        value="1"
                                                    />
                                                    <label for="receiveChb">
                                                        I want to receive Travel Pakistan Now's promotional offers in the future
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Terms and Conditions -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <div class="form-group">
                                                    <div class="custom-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            class="form-check-input"
                                                            id="agreechb"
                                                            required
                                                        />
                                                        <label for="agreechb">
                                                            By continuing, you agree to the
                                                            <a href="{{ url('/terms-and-conditions') }}">Terms and Conditions</a>.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Submit Button -->
                                        <div class="col-lg-12">
                                            <div class="btn-box">
                                                <button class="theme-btn" type="submit">
                                                    Confirm Booking
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end contact-form-action -->
                        </div>
                        <!-- end form-content -->
                    </div>
                    <!-- end form-box -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
            <div class="form-box">
              <div class="form-title-wrap">
                <h3 class="title">Contact Us</h3>
              </div>
              <!-- form-title-wrap -->
              <div class="form-content">
                <div class="address-book">
                  <ul class="list-items contact-address">
                    <li>
                      <i class="la la-map-marker icon-element"></i>
                      <h5 class="title font-size-16 pb-1">Address</h5>
                      <p class="map__desc">
                      53/2, SIRIRAT ROAD, PATONG, KATHU, PHUKET, THAILAND, PHUKET 83150
                      </p>
                    </li>
                    <li>
                      <i class="la la-phone icon-element"></i>
                      <h5 class="title font-size-16 pb-1">Phone</h5>
                      <!-- <p class="map__desc">Telephone: 2800 256 508</p> -->
                      <p class="map__desc">+66 82 586 6889</p>
                    </li>
                    <li>
                      <i class="la la-envelope-o icon-element"></i>
                      <h5 class="title font-size-16 pb-1">Email</h5>
                      <p class="map__desc">travelphuketwithuf@gmail.com</p>
                      <!-- <p class="map__desc">inquiry@trizen.com</p> -->
                    </li>
                  </ul>
                  <ul class="social-profile text-center">
                    <li>
                      <a href="https://web.facebook.com/profile.php?id=61568604338068"><i class="lab la-facebook-f"></i></a>
                    </li>
                    <!-- <li>
                      <a href="#"><i class="lab la-twitter"></i></a>
                    </li> -->
                    <li>
                      <a href="https://www.instagram.com/travelpakistannow"><i class="lab la-instagram"></i></a>
                    </li>
                    <li>
                      <!-- <a href="#"><i class="lab la-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-youtube"></i></a>
                    </li> -->
                  </ul>
                </div>
              </div>
              <!-- end form-content -->
            </div>
            <!-- end form-box -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end booking-area -->

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
              <h2 class="sec__title font-size-30 text-white">
                Subscribe to see Secret Deals
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-7 -->
          <div class="col-lg-5">
            <div class="subscriber-box">
              <div class="contact-form-action">
                <form action="{{ url('/subscribe') }}" method="post">
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