@extends('layouts.front')

@section('content')

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
                                                            <a href="#">Terms and Conditions</a>.
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
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end booking-area -->

@endsection