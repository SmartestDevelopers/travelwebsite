@extends('layouts.front')

@section('content')


 <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper">
      <div class="hero-box hero-bg">
        <span class="line-bg line-bg1"></span>
        <span class="line-bg line-bg2"></span>
        <span class="line-bg line-bg3"></span>
        <span class="line-bg line-bg4"></span>
        <span class="line-bg line-bg5"></span>
        <span class="line-bg line-bg6"></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto responsive--column-l">
              <div class="hero-content pb-5">
                <div class="section-heading">
                  <h2 class="sec__title cd-headline zoom">
                    Amazing
                    <span class="cd-words-wrapper">
                      <b class="is-visible">Tours</b>
                      <b>Adventures</b>
                      <b>Flights</b>
                      <b>Hotels</b>
                      <b>Cars</b>
                      <b>Cruises</b>
                      <b>Package Deals</b>
                      <b>Fun</b>
                      <b>People</b>
                    </span>
                    Waiting for You
                  </h2>
                </div>
              </div>
              <!-- end hero-content -->
              <div class="section-tab text-center ps-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center active"
                      id="flight-tab"
                      data-bs-toggle="tab"
                      href="#flight"
                      role="tab"
                      aria-controls="flight"
                      aria-selected="true"
                    >
                      <i class="la la-plane me-1"></i>Flights
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center"
                      id="hotel-tab"
                      data-bs-toggle="tab"
                      href="#hotel"
                      role="tab"
                      aria-controls="hotel"
                      aria-selected="false"
                    >
                      <i class="la la-hotel me-1"></i>Hotels
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center"
                      id="package-tab"
                      data-bs-toggle="tab"
                      href="#package"
                      role="tab"
                      aria-controls="package"
                      aria-selected="false"
                    >
                      <i class="la la-shopping-bag me-1"></i>Vacation Packages
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center"
                      id="car-tab"
                      data-bs-toggle="tab"
                      href="#car"
                      role="tab"
                      aria-controls="car"
                      aria-selected="true"
                    >
                      <i class="la la-car me-1"></i>Cars
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center"
                      id="cruise-tab"
                      data-bs-toggle="tab"
                      href="#cruise"
                      role="tab"
                      aria-controls="cruise"
                      aria-selected="false"
                    >
                      <i class="la la-ship me-1"></i>Cruises
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link d-flex align-items-center"
                      id="tour-tab"
                      data-bs-toggle="tab"
                      href="#tour"
                      role="tab"
                      aria-controls="tour"
                      aria-selected="false"
                    >
                      <i class="la la-globe me-1"></i>Tours
                    </a>
                  </li>
                </ul>
              </div>
              <!-- end section-tab -->
              <div
                class="tab-content search-fields-container"
                id="myTabContent"
              >
                <div
                  class="tab-pane fade show active"
                  id="flight"
                  role="tabpanel"
                  aria-labelledby="flight-tab"
                >
                  <div class="section-tab section-tab-2 pb-3">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="one-way-tab"
                          data-bs-toggle="tab"
                          href="#one-way"
                          role="tab"
                          aria-controls="one-way"
                          aria-selected="true"
                        >
                          One way
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="round-trip-tab"
                          data-bs-toggle="tab"
                          href="#round-trip"
                          role="tab"
                          aria-controls="round-trip"
                          aria-selected="false"
                        >
                          Round-trip
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="multi-city-tab"
                          data-bs-toggle="tab"
                          href="#multi-city"
                          role="tab"
                          aria-controls="multi-city"
                          aria-selected="false"
                        >
                          Multi-city
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- end section-tab -->
                  <div class="tab-content" id="myTabContent3">
                    <div
                      class="tab-pane fade show active"
                      id="one-way"
                      role="tabpanel"
                      aria-labelledby="one-way-tab"
                    >
                      <div class="contact-form-action">
                        <form action="#" class="row align-items-center">
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying from</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-6">
                            <div class="input-box">
                              <label class="label-text">Flying to</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Departing</label>
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control"
                                  type="text"
                                  name="daterange-single"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Passengers</label>
                              <div class="form-group">
                                <div
                                  class="dropdown dropdown-contain gty-container"
                                >
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
                                      >0 Adult</span
                                    >
                                    -
                                    <span
                                      class="children"
                                      data-text="Child"
                                      data-text-multi="Children"
                                      >0 Child</span
                                    >
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                      <div
                                        class="qty-box d-flex align-items-center justify-content-between"
                                      >
                                        <label>Adults</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="adult_number"
                                            value="0"
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
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="child_number"
                                            value="0"
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
                                        <label>Infants</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="infants_number"
                                            value="0"
                                          />
                                          <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end dropdown -->
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Coach</label>
                              <div
                                class="form-group select-contain select2-container-wrapper w-auto"
                              >
                                <select class="select-contain-select">
                                  <option value="1" selected>Economy</option>
                                  <option value="2">Business</option>
                                  <option value="3">First class</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3">
                            <a
                              href="flight-search-result.html"
                              class="theme-btn w-100 text-center margin-top-20px"
                              >Search Now</a
                            >
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- end tab-pane -->
                    <div
                      class="tab-pane fade"
                      id="round-trip"
                      role="tabpanel"
                      aria-labelledby="round-trip-tab"
                    >
                      <div class="contact-form-action">
                        <form action="#" class="row align-items-center">
                          <div class="col-lg-6 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying from</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-6">
                            <div class="input-box">
                              <label class="label-text">Flying to</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text"
                                >Departing - Returning</label
                              >
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control"
                                  type="text"
                                  name="daterange"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Passengers</label>
                              <div class="form-group">
                                <div
                                  class="dropdown dropdown-contain gty-container"
                                >
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
                                      >0 Adult</span
                                    >
                                    -
                                    <span
                                      class="children"
                                      data-text="Child"
                                      data-text-multi="Children"
                                      >0 Child</span
                                    >
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                      <div
                                        class="qty-box d-flex align-items-center justify-content-between"
                                      >
                                        <label>Adults</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="adult_number"
                                            value="0"
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
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="child_number"
                                            value="0"
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
                                        <label>Infants</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="infants_number"
                                            value="0"
                                          />
                                          <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end dropdown -->
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Coach</label>
                              <div class="form-group select2-container-wrapper">
                                <div class="select-contain w-auto">
                                  <select class="select-contain-select">
                                    <option value="1" selected>Economy</option>
                                    <option value="2">Business</option>
                                    <option value="3">First class</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3">
                            <a
                              href="flight-search-result.html"
                              class="theme-btn w-100 text-center margin-top-20px"
                              >Search Now</a
                            >
                          </div>
                        </form>
                      </div>
                      <div class="advanced-wrap">
                        <a
                          class="btn collapse-btn theme-btn-hover-gray font-size-15"
                          data-bs-toggle="collapse"
                          href="#collapseThree"
                          role="button"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                          Advanced options <i class="la la-angle-down ms-1"></i>
                        </a>
                        <div class="collapse pt-3" id="collapseThree">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="input-box">
                                <label class="label-text"
                                  >Preferred airline</label
                                >
                                <div
                                  class="form-group select2-container-wrapper"
                                >
                                  <div class="select-contain w-100">
                                    <select class="select-contain-select">
                                      <option selected="selected" value="">
                                        No preference
                                      </option>
                                      <option value="AN">Advanced Air</option>
                                      <option value="A3">Aegean</option>
                                      <option value="EI">Aer Lingus</option>
                                      <option value="5G">
                                        Aerocuahonte / Mayair
                                      </option>
                                      <option value="SU">
                                        Aeroflot-Russian Airlines
                                      </option>
                                      <option value="AR">
                                        Aerolineas Argentinas
                                      </option>
                                      <option value="VW">
                                        Aeromar Airlines
                                      </option>
                                      <option value="AM">Aeromexico</option>
                                      <option value="ZI">Aigle Azur</option>
                                      <option value="AH">Air Algerie</option>
                                      <option value="KC">Air Astana</option>
                                      <option value="UU">Air Austral</option>
                                      <option value="BT">Air Baltic</option>
                                      <option value="BP">Air Botswana</option>
                                      <option value="AC">Air Canada</option>
                                      <option value="TX">Air Caraibes</option>
                                      <option value="CA">Air China</option>
                                      <option value="3E">Air Choice One</option>
                                      <option value="XK">Air Corsica</option>
                                      <option value="UX">Air Europa</option>
                                      <option value="X4">
                                        Air Excursions LLC
                                      </option>
                                      <option value="AF">Air France</option>
                                      <option value="NY">
                                        Air Iceland Connect
                                      </option>
                                      <option value="AI">Air India</option>
                                      <option value="IG">Air Italy</option>
                                      <option value="MD">Air Madagascar</option>
                                      <option value="KM">Air Malta</option>
                                      <option value="MK">Air Mauritius</option>
                                      <option value="9U">Air Moldova</option>
                                      <option value="NZ">
                                        Air New Zealand
                                      </option>
                                      <option value="PX">Air Niugini</option>
                                      <option value="OG">Air Onix</option>
                                      <option value="JU">Air Serbia</option>
                                      <option value="TN">Air Tahiti Nui</option>
                                      <option value="TS">Air Transat</option>
                                      <option value="H/">
                                        AirAsia with baggage
                                      </option>
                                      <option value="AS">
                                        Alaska Airlines
                                      </option>
                                      <option value="AZ">Alitalia</option>
                                      <option value="NH">
                                        All Nippon Airways
                                      </option>
                                      <option value="G4">Allegiant Air</option>
                                      <option value="AA">
                                        American Airlines
                                      </option>
                                      <option value="OY">
                                        Andes Lineas Aereas
                                      </option>
                                      <option value="OZ">
                                        Asiana Airlines
                                      </option>
                                      <option value="KP">ASKY</option>
                                      <option value="OS">
                                        Austrian Airlines
                                      </option>
                                      <option value="AV">Avianca</option>
                                      <option value="2K">
                                        Avianca Ecuador
                                      </option>
                                      <option value="9V">Avior Airlines</option>
                                      <option value="J2">
                                        Azerbaijan Airlines
                                      </option>
                                      <option value="AD">Azul</option>
                                      <option value="JD">
                                        Beijing Capital Airlines
                                      </option>
                                      <option value="0B">BlueAir</option>
                                      <option value="OB">
                                        Boliviana De Aviacion
                                      </option>
                                      <option value="4B">Boutique Air</option>
                                      <option value="BA">
                                        British Airways
                                      </option>
                                      <option value="SN">
                                        Brussels Airlines
                                      </option>
                                      <option value="A7">
                                        Calafia Airlines
                                      </option>
                                      <option value="K6">
                                        Cambodia Angkor Air
                                      </option>
                                      <option value="BW">
                                        Caribbean Airlines
                                      </option>
                                      <option value="CX">Cathay Pacific</option>
                                      <option value="KX">Cayman Airways</option>
                                      <option value="CI">China Airlines</option>
                                      <option value="MU">
                                        China Eastern Airlines
                                      </option>
                                      <option value="CZ">
                                        China Southern Airlines
                                      </option>
                                      <option value="CC">CM Airlines</option>
                                      <option value="DE">Condor</option>
                                      <option value="LF">
                                        Contour Airlines
                                      </option>
                                      <option value="CM">Copa</option>
                                      <option value="SS">Corsair</option>
                                      <option value="OK">Czech Airlines</option>
                                      <option value="DL">Delta</option>
                                      <option value="KG">
                                        Denver Air Connection
                                      </option>
                                      <option value="U2">easyJet</option>
                                      <option value="MS">Egyptair</option>
                                      <option value="LY">
                                        EL AL Israel Airlines
                                      </option>
                                      <option value="7Q">Elite Airways</option>
                                      <option value="EL">Ellinair</option>
                                      <option value="EK">Emirates</option>
                                      <option value="ET">
                                        Ethiopian Airlines
                                      </option>
                                      <option value="EY">Etihad Airways</option>
                                      <option value="EW">Eurowings</option>
                                      <option value="BR">EVA Airways</option>
                                      <option value="FJ">Fiji Airways</option>
                                      <option value="AY">Finnair</option>
                                      <option value="FY">Firefly</option>
                                      <option value="F8">Flair Airlines</option>
                                      <option value="BE">Flybe</option>
                                      <option value="FZ">flydubai</option>
                                      <option value="XY">flynas</option>
                                      <option value="F9">
                                        Frontier Airlines
                                      </option>
                                      <option value="GA">
                                        Garuda Indonesia
                                      </option>
                                      <option value="GM">
                                        Germania Flug AG
                                      </option>
                                      <option value="4U">Germanwings</option>
                                      <option value="G3">
                                        GOL Linhas Aereas S.A.
                                      </option>
                                      <option value="ZK">
                                        Great Lakes Airlines
                                      </option>
                                      <option value="GF">Gulf Air</option>
                                      <option value="HU">
                                        Hainan Airlines
                                      </option>
                                      <option value="HA">
                                        Hawaiian Airlines
                                      </option>
                                      <option value="HX">
                                        Hong Kong Airlines
                                      </option>
                                      <option value="IB">Iberia</option>
                                      <option value="FI">Icelandair</option>
                                      <option value="JY">
                                        interCaribbean Airways
                                      </option>
                                      <option value="4O">Interjet</option>
                                      <option value="03">Involatus</option>
                                      <option value="JL">Japan Airlines</option>
                                      <option value="9W">Jet Airways</option>
                                      <option value="B6">
                                        JetBlue Airways
                                      </option>
                                      <option value="DV">
                                        JSC Aircompany SCAT
                                      </option>
                                      <option value="KQ">Kenya Airways</option>
                                      <option value="KL">KLM</option>
                                      <option value="KE">Korean Air</option>
                                      <option value="B0">La Compagnie</option>
                                      <option value="LR">LACSA</option>
                                      <option value="QV">Lao Airlines</option>
                                      <option value="LP">
                                        LATAM Airlines Group
                                      </option>
                                      <option value="LA">
                                        LATAM Airlines Group
                                      </option>
                                      <option value="JJ">
                                        LATAM Airlines Group
                                      </option>
                                      <option value="XL">
                                        LATAM Airlines Group
                                      </option>
                                      <option value="4M">
                                        LATAM Airlines Group
                                      </option>
                                      <option value="W4">LC Peru</option>
                                      <option value="LI">Liat</option>
                                      <option value="LO">
                                        LOT-Polish Airlines
                                      </option>
                                      <option value="LH">Lufthansa</option>
                                      <option value="LG">Luxair</option>
                                      <option value="MH">
                                        Malaysia Airlines
                                      </option>
                                      <option value="OD">Malindo Air</option>
                                      <option value="2M">
                                        Maya Island Air
                                      </option>
                                      <option value="7M">Mayair</option>
                                      <option value="OM">
                                        MIAT-Mongolian Airlines
                                      </option>
                                      <option value="ME">
                                        Middle East Airlines
                                      </option>
                                      <option value="YM">Montenegro</option>
                                      <option value="8M">
                                        Myanmar Airways International
                                      </option>
                                      <option value="NO">Neos S.P.A.</option>
                                      <option value="RA">Nepal Airlines</option>
                                      <option value="NP">Nile Air</option>
                                      <option value="W/">
                                        NokScoot with baggage
                                      </option>
                                      <option value="DN">
                                        Norwegian Air Argentina
                                      </option>
                                      <option value="D8">
                                        Norwegian Air International Ltd
                                      </option>
                                      <option value="DY">
                                        Norwegian Air Shuttle
                                      </option>
                                      <option value="DI">
                                        Norwegian Air UK
                                      </option>
                                      <option value="Y/">
                                        Olympic Air with baggage
                                      </option>
                                      <option value="WY">Oman Air</option>
                                      <option value="8Q">Onur Air</option>
                                      <option value="8P">
                                        Pacific Coastal Airlines
                                      </option>
                                      <option value="PK">
                                        Pakistan International Airlines
                                      </option>
                                      <option value="ZM">Pegasus Asia</option>
                                      <option value="KS">PenAir</option>
                                      <option value="PR">
                                        Philippine Airlines
                                      </option>
                                      <option value="PU">
                                        Plus Ultra Lineas Aereas S. A.
                                      </option>
                                      <option value="PD">
                                        Porter Airlines
                                      </option>
                                      <option value="PW">PrecisionAir</option>
                                      <option value="P0">
                                        Proflight Zambia
                                      </option>
                                      <option value="QF">Qantas Airways</option>
                                      <option value="QR">Qatar Airways</option>
                                      <option value="7H">Ravn Alaska</option>
                                      <option value="WZ">
                                        Red Wings Airlines
                                      </option>
                                      <option value="4P">Regional Sky</option>
                                      <option value="AT">
                                        Royal Air Maroc
                                      </option>
                                      <option value="BI">
                                        Royal Brunei Airlines
                                      </option>
                                      <option value="RJ">
                                        Royal Jordanian
                                      </option>
                                      <option value="WB">Rwandair</option>
                                      <option value="SK">SAS</option>
                                      <option value="S4">
                                        SATA International-Azores Airlines S.A.
                                      </option>
                                      <option value="SV">
                                        Saudi Arabian Airlines
                                      </option>
                                      <option value="/Y">
                                        Scoot with baggage
                                      </option>
                                      <option value="BB">
                                        Seaborne Airlines
                                      </option>
                                      <option value="SC">
                                        Shandong Airlines
                                      </option>
                                      <option value="3U">
                                        Sichuan Airlines
                                      </option>
                                      <option value="3M">Silver Airways</option>
                                      <option value="SQ">
                                        Singapore Airlines
                                      </option>
                                      <option value="H2">Sky Airlines</option>
                                      <option value="GQ">Sky Express</option>
                                      <option value="IE">
                                        Solomon Airlines
                                      </option>
                                      <option value="SA">
                                        South African Airways
                                      </option>
                                      <option value="9X">
                                        Southern Airways
                                      </option>
                                      <option value="NK">
                                        Spirit Airlines
                                      </option>
                                      <option value="UL">
                                        SriLankan Airlines
                                      </option>
                                      <option value="2I">STAR PERU</option>
                                      <option value="6G">
                                        Sun Air Express
                                      </option>
                                      <option value="SY">
                                        Sun Country Airlines
                                      </option>
                                      <option value="PY">
                                        Surinam Airways
                                      </option>
                                      <option value="LX">
                                        Swiss International Air Lines
                                      </option>
                                      <option value="WO">Swoop</option>
                                      <option value="DT">
                                        TAAG Angola Airlines
                                      </option>
                                      <option value="TA">TACA Airlines</option>
                                      <option value="VR">
                                        TACV-Cabo Verde Airlines
                                      </option>
                                      <option value="5U">TAG Airlines</option>
                                      <option value="EQ">Tame</option>
                                      <option value="TP">TAP Portugal</option>
                                      <option value="RO">
                                        Tarom-Romanian Air Transport
                                      </option>
                                      <option value="TG">
                                        Thai Airways International
                                      </option>
                                      <option value="MT">
                                        Thomas Cook Airlines
                                      </option>
                                      <option value="/X">
                                        Tigerair Australia with Bag
                                      </option>
                                      <option value="IT">
                                        Tigerair Taiwan
                                      </option>
                                      <option value="/Z">
                                        Tigerair Taiwan with bag
                                      </option>
                                      <option value="TJ">
                                        Tradewind Aviation
                                      </option>
                                      <option value="9N">Tropic Air</option>
                                      <option value="TB">TUI fly</option>
                                      <option value="TK">
                                        Turkish Airlines
                                      </option>
                                      <option value="PS">
                                        Ukraine International Airlines
                                      </option>
                                      <option value="UA">United</option>
                                      <option value="UT">Utair Aviation</option>
                                      <option value="HY">
                                        Uzbekistan Airways
                                      </option>
                                      <option value="VN">
                                        Vietnam Airlines
                                      </option>
                                      <option value="VX">Virgin America</option>
                                      <option value="VS">
                                        Virgin Atlantic
                                      </option>
                                      <option value="VA">
                                        Virgin Australia
                                      </option>
                                      <option value="V2">
                                        Vision Airlines
                                      </option>
                                      <option value="VB">Viva Aerobus</option>
                                      <option value="F1">
                                        Viva Air Colombia
                                      </option>
                                      <option value="VV">
                                        Viva Airlines Peru
                                      </option>
                                      <option value="Y4">Volaris</option>
                                      <option value="V7">Volotea</option>
                                      <option value="VY">
                                        Vueling Airlines
                                      </option>
                                      <option value="WS">WestJet</option>
                                      <option value="WM">
                                        Windward Island Airways International
                                      </option>
                                      <option value="MF">
                                        Xiamen Airlines
                                      </option>
                                      <option value="SE">XL Airways</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end advanced-wrap -->
                    </div>
                    <!-- end tab-pane -->
                    <div
                      class="tab-pane fade multi-flight-wrap"
                      id="multi-city"
                      role="tabpanel"
                      aria-labelledby="multi-city-tab"
                    >
                      <div
                        class="contact-form-action multi-flight-field d-flex align-items-center"
                      >
                        <form
                          action="#"
                          class="row flex-grow-1 align-items-center"
                        >
                          <div class="col-lg-4 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying from</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-4 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying to</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-4">
                            <div class="input-box">
                              <label class="label-text">Departing</label>
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control date-multi-picker"
                                  id="date"
                                  type="text"
                                  name="daterange-single"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                        </form>
                        <div class="multi-flight-delete-wrap pt-3 ps-3">
                          <button class="multi-flight-remove" type="button">
                            <i class="la la-remove"></i>
                          </button>
                        </div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col-lg-3 pe-0">
                          <div class="form-group">
                            <button
                              class="theme-btn add-flight-btn margin-top-40px w-100"
                              type="button"
                            >
                              <i class="la la-plus me-1"></i>Add another flight
                            </button>
                          </div>
                        </div>
                        <div class="col-lg-3 pe-0">
                          <div class="input-box">
                            <label class="label-text">Passengers</label>
                            <div class="form-group">
                              <div
                                class="dropdown dropdown-contain gty-container"
                              >
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
                                    >0 Adult</span
                                  >
                                  -
                                  <span
                                    class="children"
                                    data-text="Child"
                                    data-text-multi="Children"
                                    >0 Child</span
                                  >
                                </a>
                                <div class="dropdown-menu dropdown-menu-wrap">
                                  <div class="dropdown-item">
                                    <div
                                      class="qty-box d-flex align-items-center justify-content-between"
                                    >
                                      <label>Adults</label>
                                      <div
                                        class="qtyBtn d-flex align-items-center"
                                      >
                                        <div class="qtyDec">
                                          <i class="la la-minus"></i>
                                        </div>
                                        <input
                                          type="text"
                                          name="adult_number"
                                          value="0"
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
                                      <div
                                        class="qtyBtn d-flex align-items-center"
                                      >
                                        <div class="qtyDec">
                                          <i class="la la-minus"></i>
                                        </div>
                                        <input
                                          type="text"
                                          name="child_number"
                                          value="0"
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
                                      <label>Infants</label>
                                      <div
                                        class="qtyBtn d-flex align-items-center"
                                      >
                                        <div class="qtyDec">
                                          <i class="la la-minus"></i>
                                        </div>
                                        <input
                                          type="text"
                                          name="infants_number"
                                          value="0"
                                        />
                                        <div class="qtyInc">
                                          <i class="la la-plus"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end dropdown -->
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-3 -->
                        <div class="col-lg-3 pe-0">
                          <div class="input-box">
                            <label class="label-text">Coach</label>
                            <div class="form-group select2-container-wrapper">
                              <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                  <option value="1" selected>Economy</option>
                                  <option value="2">Business</option>
                                  <option value="3">First class</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-3 -->
                        <div class="col-lg-3">
                          <a
                            href="flight-search-result.html"
                            class="theme-btn w-100 text-center margin-top-20px"
                            >Search Now</a
                          >
                        </div>
                      </div>
                    </div>
                    <!-- end tab-pane -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="hotel"
                  role="tabpanel"
                  aria-labelledby="hotel-tab"
                >
                  <div class="contact-form-action">
                    <form action="#" class="row align-items-center">
                      <div class="col-lg-3 pe-0">
                        <div class="input-box">
                          <label class="label-text"
                            >Destination / Hotel name</label
                          >
                          <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Enter city or property"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3 pe-0">
                        <div class="input-box">
                          <label class="label-text">Check in</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3 pe-0">
                        <div class="input-box">
                          <label class="label-text">Check out</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3">
                        <div class="input-box">
                          <label class="label-text">Guests and Rooms</label>
                          <div class="form-group">
                            <div
                              class="dropdown dropdown-contain gty-container"
                            >
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
                                  >0 Adult</span
                                >
                                -
                                <span
                                  class="children"
                                  data-text="Child"
                                  data-text-multi="Children"
                                  >0 Child</span
                                >
                              </a>
                              <div class="dropdown-menu dropdown-menu-wrap">
                                <div class="dropdown-item">
                                  <div
                                    class="qty-box d-flex align-items-center justify-content-between"
                                  >
                                    <label>Rooms</label>
                                    <div
                                      class="qtyBtn d-flex align-items-center"
                                    >
                                      <div class="qtyDec">
                                        <i class="la la-minus"></i>
                                      </div>
                                      <input
                                        type="text"
                                        name="room_number"
                                        value="0"
                                        class="qty-input"
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
                                    <label>Adults</label>
                                    <div
                                      class="qtyBtn d-flex align-items-center"
                                    >
                                      <div class="qtyDec">
                                        <i class="la la-minus"></i>
                                      </div>
                                      <input
                                        type="text"
                                        name="adult_number"
                                        value="0"
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
                                    <div
                                      class="qtyBtn d-flex align-items-center"
                                    >
                                      <div class="qtyDec">
                                        <i class="la la-minus"></i>
                                      </div>
                                      <input
                                        type="text"
                                        name="child_number"
                                        value="0"
                                      />
                                      <div class="qtyInc">
                                        <i class="la la-plus"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- end dropdown -->
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                    </form>
                  </div>
                  <div class="btn-box">
                    <a href="hotel-search-result.html" class="theme-btn"
                      >Search Now</a
                    >
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="package"
                  role="tabpanel"
                  aria-labelledby="package-tab"
                >
                  <div class="section-tab section-tab-2 pb-3">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="flight-hotel-tab"
                          data-bs-toggle="tab"
                          href="#flight-hotel"
                          role="tab"
                          aria-controls="flight-hotel"
                          aria-selected="true"
                        >
                          Flight + Hotel
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="flight-hotel-car-tab"
                          data-bs-toggle="tab"
                          href="#flight-hotel-car"
                          role="tab"
                          aria-controls="flight-hotel-car"
                          aria-selected="false"
                        >
                          Flight + Hotel + Car
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="flight-car-tab"
                          data-bs-toggle="tab"
                          href="#flight-car"
                          role="tab"
                          aria-controls="flight-car"
                          aria-selected="false"
                        >
                          Flight + Car
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="hotel-car-tab"
                          data-bs-toggle="tab"
                          href="#hotel-car"
                          role="tab"
                          aria-controls="hotel-car"
                          aria-selected="true"
                        >
                          Hotel + Car
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- end section-tab -->
                  <div class="tab-content" id="myTabContent2">
                    <div
                      class="tab-pane fade show active"
                      id="flight-hotel"
                      role="tabpanel"
                      aria-labelledby="flight-hotel-tab"
                    >
                      <div class="contact-form-action">
                        <form action="#" class="row align-items-center">
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying from</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying to</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text"
                                >Departing - Returning</label
                              >
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control"
                                  type="text"
                                  name="daterange"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3">
                            <div class="input-box">
                              <label class="label-text">Guests and Rooms</label>
                              <div class="form-group">
                                <div
                                  class="dropdown dropdown-contain gty-container"
                                >
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
                                      >0 Adult</span
                                    >
                                    -
                                    <span
                                      class="children"
                                      data-text="Child"
                                      data-text-multi="Children"
                                      >0 Child</span
                                    >
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                      <div
                                        class="qty-box d-flex align-items-center justify-content-between"
                                      >
                                        <label>Rooms</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="room_number"
                                            value="0"
                                            class="qty-input"
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
                                        <label>Adults</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="adult_number"
                                            value="0"
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
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="child_number"
                                            value="0"
                                          />
                                          <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end dropdown -->
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                        </form>
                      </div>
                      <div class="checkmark-wrap">
                        <div class="custom-checkbox d-inline-block mb-0 me-3">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="directFlightChb"
                          />
                          <label for="directFlightChb"
                            >Direct flights only</label
                          >
                        </div>
                        <div class="custom-checkbox d-inline-block mb-0">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="onlyHotelChb"
                          />
                          <label for="onlyHotelChb"
                            >I only need a hotel for part of my stay</label
                          >
                        </div>
                      </div>
                      <!-- end checkmark-wrap -->
                      <div class="btn-box pt-3">
                        <a href="activity-search-result.html" class="theme-btn"
                          >Search Now</a
                        >
                      </div>
                    </div>
                    <!-- end tab-pane -->
                    <div
                      class="tab-pane fade"
                      id="flight-hotel-car"
                      role="tabpanel"
                      aria-labelledby="flight-hotel-car-tab"
                    >
                      <div class="contact-form-action">
                        <form action="#" class="row align-items-center">
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying from</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying to</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text"
                                >Departing - Returning</label
                              >
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control"
                                  type="text"
                                  name="daterange"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3">
                            <div class="input-box">
                              <label class="label-text">Guests and Rooms</label>
                              <div class="form-group">
                                <div
                                  class="dropdown dropdown-contain gty-container"
                                >
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
                                      >0 Adult</span
                                    >
                                    -
                                    <span
                                      class="children"
                                      data-text="Child"
                                      data-text-multi="Children"
                                      >0 Child</span
                                    >
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                      <div
                                        class="qty-box d-flex align-items-center justify-content-between"
                                      >
                                        <label>Rooms</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="room_number"
                                            value="0"
                                            class="qty-input"
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
                                        <label>Adults</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="adult_number"
                                            value="0"
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
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="child_number"
                                            value="0"
                                          />
                                          <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end dropdown -->
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                        </form>
                      </div>
                      <div class="checkmark-wrap">
                        <div class="custom-checkbox d-inline-block mb-0 me-3">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="directFlightChb2"
                          />
                          <label for="directFlightChb2"
                            >Direct flights only</label
                          >
                        </div>
                        <div class="custom-checkbox d-inline-block mb-0">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="onlyHotelChb2"
                          />
                          <label for="onlyHotelChb2"
                            >I only need a hotel for part of my stay</label
                          >
                        </div>
                      </div>
                      <!-- end checkmark-wrap -->
                      <div class="btn-box pt-3">
                        <a href="activity-search-result.html" class="theme-btn"
                          >Search Now</a
                        >
                      </div>
                    </div>
                    <!-- end tab-pane -->
                    <div
                      class="tab-pane fade"
                      id="flight-car"
                      role="tabpanel"
                      aria-labelledby="flight-car-tab"
                    >
                      <div class="contact-form-action">
                        <form action="#" class="row align-items-center">
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying from</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Flying to</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="City or airport"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text"
                                >Departing - Returning</label
                              >
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control"
                                  type="text"
                                  name="daterange"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="input-box">
                              <label class="label-text">Passengers</label>
                              <div class="form-group">
                                <div
                                  class="dropdown dropdown-contain gty-container"
                                >
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
                                      >0 Adult</span
                                    >
                                    -
                                    <span
                                      class="children"
                                      data-text="Child"
                                      data-text-multi="Children"
                                      >0 Child</span
                                    >
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                      <div
                                        class="qty-box d-flex align-items-center justify-content-between"
                                      >
                                        <label>Rooms</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="room_number"
                                            value="0"
                                            class="qty-input"
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
                                        <label>Adults</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="adult_number"
                                            value="0"
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
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="child_number"
                                            value="0"
                                          />
                                          <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end dropdown -->
                              </div>
                            </div>
                          </div>
                        </form>
                        <!-- end row -->
                      </div>
                      <div class="checkmark-wrap">
                        <div class="custom-checkbox d-inline-block mb-0">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="directFlightChb3"
                          />
                          <label for="directFlightChb3"
                            >Direct flights only</label
                          >
                        </div>
                      </div>
                      <!-- end checkmark-wrap -->
                      <div class="btn-box pt-3">
                        <a href="activity-search-result.html" class="theme-btn"
                          >Search Now</a
                        >
                      </div>
                    </div>
                    <!-- end tab-pane -->
                    <div
                      class="tab-pane fade"
                      id="hotel-car"
                      role="tabpanel"
                      aria-labelledby="hotel-car-tab"
                    >
                      <div class="contact-form-action">
                        <form action="#" class="row align-items-center">
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Going to</label>
                              <div class="form-group">
                                <span class="la la-map-marker form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="Enter City or property"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text"
                                >Check in - Check-out</label
                              >
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control"
                                  type="text"
                                  name="daterange"
                                />
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3 pe-0">
                            <div class="input-box">
                              <label class="label-text">Room Type</label>
                              <div class="form-group select2-container-wrapper">
                                <div class="select-contain w-auto">
                                  <select class="select-contain-select">
                                    <option value="0">Select Type</option>
                                    <option value="1">Single</option>
                                    <option value="2">Double</option>
                                    <option value="3">Triple</option>
                                    <option value="4">Quad</option>
                                    <option value="5">Queen</option>
                                    <option value="6">King</option>
                                    <option value="7">Twin</option>
                                    <option value="8">Double-double</option>
                                    <option value="9">Studio</option>
                                    <option value="10">Suite</option>
                                    <option value="11">Mini Suite</option>
                                    <option value="12">President Suite</option>
                                    <option value="13">President Suite</option>
                                    <option value="14">Apartments</option>
                                    <option value="15">Connecting rooms</option>
                                    <option value="16">Murphy Room</option>
                                    <option value="17">Accessible Room</option>
                                    <option value="18">Cabana</option>
                                    <option value="19">Adjoining rooms</option>
                                    <option value="20">Adjacent rooms</option>
                                    <option value="21">Villa</option>
                                    <option value="22">Executive Floor</option>
                                    <option value="23">Smoking room</option>
                                    <option value="24">Non-Smoking Room</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                          <div class="col-lg-3">
                            <div class="input-box">
                              <label class="label-text">Guests and Rooms</label>
                              <div class="form-group">
                                <div
                                  class="dropdown dropdown-contain gty-container"
                                >
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
                                      >0 Adult</span
                                    >
                                    -
                                    <span
                                      class="children"
                                      data-text="Child"
                                      data-text-multi="Children"
                                      >0 Child</span
                                    >
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                      <div
                                        class="qty-box d-flex align-items-center justify-content-between"
                                      >
                                        <label>Rooms</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="room_number"
                                            value="0"
                                            class="qty-input"
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
                                        <label>Adults</label>
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="adult_number"
                                            value="0"
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
                                        <div
                                          class="qtyBtn d-flex align-items-center"
                                        >
                                          <div class="qtyDec">
                                            <i class="la la-minus"></i>
                                          </div>
                                          <input
                                            type="text"
                                            name="child_number"
                                            value="0"
                                          />
                                          <div class="qtyInc">
                                            <i class="la la-plus"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end dropdown -->
                              </div>
                            </div>
                          </div>
                          <!-- end col-lg-3 -->
                        </form>
                      </div>
                      <div class="btn-box pt-2">
                        <a href="activity-search-result.html" class="theme-btn"
                          >Search Now</a
                        >
                      </div>
                    </div>
                    <!-- end tab-pane -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="car"
                  role="tabpanel"
                  aria-labelledby="car-tab"
                >
                  <div class="contact-form-action">
                    <form action="#" class="row align-items-center">
                      <div class="col-lg-4 pe-0">
                        <div class="input-box">
                          <label class="label-text">Picking up</label>
                          <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="City, airport or address"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4 pe-0">
                        <div class="input-box">
                          <label class="label-text">Pick-up date</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4">
                        <div class="input-box">
                          <label class="label-text">Time</label>
                          <div class="form-group select2-container-wrapper">
                            <div class="select-contain w-auto">
                              <select class="select-contain-select">
                                <option value="1200AM">12:00AM</option>
                                <option value="1230AM">12:30AM</option>
                                <option value="0100AM">1:00AM</option>
                                <option value="0130AM">1:30AM</option>
                                <option value="0200AM">2:00AM</option>
                                <option value="0230AM">2:30AM</option>
                                <option value="0300AM">3:00AM</option>
                                <option value="0330AM">3:30AM</option>
                                <option value="0400AM">4:00AM</option>
                                <option value="0430AM">4:30AM</option>
                                <option value="0500AM">5:00AM</option>
                                <option value="0530AM">5:30AM</option>
                                <option value="0600AM">6:00AM</option>
                                <option value="0630AM">6:30AM</option>
                                <option value="0700AM">7:00AM</option>
                                <option value="0730AM">7:30AM</option>
                                <option value="0800AM">8:00AM</option>
                                <option value="0830AM">8:30AM</option>
                                <option value="0900AM" selected>9:00AM</option>
                                <option value="0930AM">9:30AM</option>
                                <option value="1000AM">10:00AM</option>
                                <option value="1030AM">10:30AM</option>
                                <option value="1100AM">11:00AM</option>
                                <option value="1130AM">11:30AM</option>
                                <option value="1200PM">12:00PM</option>
                                <option value="1230PM">12:30PM</option>
                                <option value="0100PM">1:00PM</option>
                                <option value="0130PM">1:30PM</option>
                                <option value="0200PM">2:00PM</option>
                                <option value="0230PM">2:30PM</option>
                                <option value="0300PM">3:00PM</option>
                                <option value="0330PM">3:30PM</option>
                                <option value="0400PM">4:00PM</option>
                                <option value="0430PM">4:30PM</option>
                                <option value="0500PM">5:00PM</option>
                                <option value="0530PM">5:30PM</option>
                                <option value="0600PM">6:00PM</option>
                                <option value="0630PM">6:30PM</option>
                                <option value="0700PM">7:00PM</option>
                                <option value="0730PM">7:30PM</option>
                                <option value="0800PM">8:00PM</option>
                                <option value="0830PM">8:30PM</option>
                                <option value="0900PM">9:00PM</option>
                                <option value="0930PM">9:30PM</option>
                                <option value="1000PM">10:00PM</option>
                                <option value="1030PM">10:30PM</option>
                                <option value="1100PM">11:00PM</option>
                                <option value="1130PM">11:30PM</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                    </form>
                    <form action="#" class="row align-items-center">
                      <div class="col-lg-4 pe-0">
                        <div class="input-box">
                          <label class="label-text">Drop-off</label>
                          <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Same as pick-up"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4 pe-0">
                        <div class="input-box">
                          <label class="label-text">Drop-off date</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4">
                        <div class="input-box">
                          <label class="label-text">Time</label>
                          <div class="form-group select2-container-wrapper">
                            <div class="select-contain w-auto">
                              <select class="select-contain-select">
                                <option value="1200AM">12:00AM</option>
                                <option value="1230AM">12:30AM</option>
                                <option value="0100AM">1:00AM</option>
                                <option value="0130AM">1:30AM</option>
                                <option value="0200AM">2:00AM</option>
                                <option value="0230AM">2:30AM</option>
                                <option value="0300AM">3:00AM</option>
                                <option value="0330AM">3:30AM</option>
                                <option value="0400AM">4:00AM</option>
                                <option value="0430AM">4:30AM</option>
                                <option value="0500AM">5:00AM</option>
                                <option value="0530AM">5:30AM</option>
                                <option value="0600AM">6:00AM</option>
                                <option value="0630AM">6:30AM</option>
                                <option value="0700AM">7:00AM</option>
                                <option value="0730AM">7:30AM</option>
                                <option value="0800AM">8:00AM</option>
                                <option value="0830AM">8:30AM</option>
                                <option value="0900AM" selected>9:00AM</option>
                                <option value="0930AM">9:30AM</option>
                                <option value="1000AM">10:00AM</option>
                                <option value="1030AM">10:30AM</option>
                                <option value="1100AM">11:00AM</option>
                                <option value="1130AM">11:30AM</option>
                                <option value="1200PM">12:00PM</option>
                                <option value="1230PM">12:30PM</option>
                                <option value="0100PM">1:00PM</option>
                                <option value="0130PM">1:30PM</option>
                                <option value="0200PM">2:00PM</option>
                                <option value="0230PM">2:30PM</option>
                                <option value="0300PM">3:00PM</option>
                                <option value="0330PM">3:30PM</option>
                                <option value="0400PM">4:00PM</option>
                                <option value="0430PM">4:30PM</option>
                                <option value="0500PM">5:00PM</option>
                                <option value="0530PM">5:30PM</option>
                                <option value="0600PM">6:00PM</option>
                                <option value="0630PM">6:30PM</option>
                                <option value="0700PM">7:00PM</option>
                                <option value="0730PM">7:30PM</option>
                                <option value="0800PM">8:00PM</option>
                                <option value="0830PM">8:30PM</option>
                                <option value="0900PM">9:00PM</option>
                                <option value="0930PM">9:30PM</option>
                                <option value="1000PM">10:00PM</option>
                                <option value="1030PM">10:30PM</option>
                                <option value="1100PM">11:00PM</option>
                                <option value="1130PM">11:30PM</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                    </form>
                    <!-- end row -->
                  </div>
                  <div class="advanced-wrap">
                    <a
                      class="btn collapse-btn theme-btn-hover-gray font-size-15"
                      data-bs-toggle="collapse"
                      href="#collapseSix"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseSix"
                    >
                      Advanced options <i class="la la-angle-down ms-1"></i>
                    </a>
                    <div class="pt-3 collapse" id="collapseSix">
                      <div class="row">
                        <div class="col-lg-3 pe-0">
                          <div class="input-box">
                            <label class="label-text">Car type</label>
                            <div class="form-group select2-container-wrapper">
                              <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                  <option value="1">No preference</option>
                                  <option value="2">Economy</option>
                                  <option value="3">Compact</option>
                                  <option value="4">Midsize</option>
                                  <option value="5">Standard</option>
                                  <option value="6">Fullsize</option>
                                  <option value="7">Premium</option>
                                  <option value="8">Luxury</option>
                                  <option value="9">Convertible</option>
                                  <option value="10">Minivan</option>
                                  <option value="11">Sport Utility</option>
                                  <option value="12">Sports car</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-3 -->
                        <div class="col-lg-3 pe-0">
                          <div class="input-box">
                            <label class="label-text">Rental car company</label>
                            <div class="form-group select2-container-wrapper">
                              <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                  <option value="">No preference</option>
                                  <option value="AC">ACE Rent A Car</option>
                                  <option value="AD">
                                    Advantage Rent-A-Car
                                  </option>
                                  <option value="AL">Alamo Rent A Car</option>
                                  <option value="ZI">Avis</option>
                                  <option value="ZD">Budget</option>
                                  <option value="ZR">Dollar Rent A Car</option>
                                  <option value="EY">Economy Rent a Car</option>
                                  <option value="ET">Enterprise</option>
                                  <option value="EP">Europcar</option>
                                  <option value="FX">Fox Rental Cars</option>
                                  <option value="ZE">Hertz</option>
                                  <option value="MW">Midway Car Rental</option>
                                  <option value="ZL">
                                    National Car Rental
                                  </option>
                                  <option value="NU">Nü Car</option>
                                  <option value="ZA">Payless</option>
                                  <option value="RO">Routes Car Rental</option>
                                  <option value="SX">Sixt</option>
                                  <option value="ZT">Thrifty Car Rental</option>
                                  <option value="SV">U-Save</option>
                                  <option value="SC">Silvercar</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-3 -->
                        <div class="col-lg-3">
                          <div class="input-box">
                            <label class="label-text">Discount code</label>
                            <div class="form-group select2-container-wrapper">
                              <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                  <option value="0">I don't have a code</option>
                                  <option value="1">
                                    Corporate or contracted
                                  </option>
                                  <option value="2">
                                    Special or advertised
                                  </option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-3 -->
                      </div>
                      <!-- end row -->
                    </div>
                  </div>
                  <!-- end advanced-wrap -->
                  <div class="btn-box pt-3">
                    <a href="car-search-result.html" class="theme-btn"
                      >Search Now</a
                    >
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="cruise"
                  role="tabpanel"
                  aria-labelledby="cruise-tab"
                >
                  <div class="contact-form-action">
                    <form action="#" class="row align-items-center">
                      <div class="col-lg-3 pe-0">
                        <div class="input-box">
                          <label class="label-text">Going to</label>
                          <div class="form-group select2-container-wrapper">
                            <div class="select-contain w-auto">
                              <select class="select-contain-select">
                                <option value="">Select destination</option>
                                <optgroup label="Most Popular">
                                  <option value="caribbean">Caribbean</option>
                                  <option value="bahamas">Bahamas</option>
                                  <option value="mexico">Mexico</option>
                                  <option value="alaska">Alaska</option>
                                  <option value="europe">Europe</option>
                                  <option value="bermuda">Bermuda</option>
                                  <option value="hawaii">Hawaii</option>
                                  <option value="nepal">Nepal</option>
                                  <option value="italy">Italy</option>
                                  <option value="canada-new-england">
                                    Canada / New England
                                  </option>
                                </optgroup>
                                <optgroup label="Other Destinations">
                                  <option value="arctic-antarctic">
                                    Arctic / Antarctic
                                  </option>
                                  <option value="middle-east">
                                    Middle East
                                  </option>
                                  <option value="africa">Africa</option>
                                  <option value="panama-canal">
                                    Panama Canal
                                  </option>
                                  <option value="asia">Asia</option>
                                  <option value="pacific-coastal">
                                    Pacific Coastal
                                  </option>
                                  <option value="australia-new-zealand">
                                    Australia / New Zealand
                                  </option>
                                  <option value="central-america">
                                    Central America
                                  </option>
                                  <option value="galapagos">Galapagos</option>
                                  <option value="getaway-at-sea">
                                    Getaway at Sea
                                  </option>
                                  <option value="transatlantic">
                                    Transatlantic
                                  </option>
                                  <option value="world-cruise">World</option>
                                  <option value="south-america">
                                    South America
                                  </option>
                                  <option value="south-pacific">
                                    South Pacific
                                  </option>
                                  <option value="transpacific">
                                    Transpacific
                                  </option>
                                </optgroup>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3 pe-0">
                        <div class="input-box">
                          <label class="label-text">Departs as early as</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3 pe-0">
                        <div class="input-box">
                          <label class="label-text">Departs as late as</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                      <div class="col-lg-3">
                        <div class="input-box">
                          <label class="label-text"
                            >Travelers in the cabin</label
                          >
                          <div class="form-group">
                            <div
                              class="dropdown dropdown-contain gty-container"
                            >
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
                                  >0 Adult</span
                                >
                                -
                                <span
                                  class="children"
                                  data-text="Child"
                                  data-text-multi="Children"
                                  >0 Child</span
                                >
                              </a>
                              <div class="dropdown-menu dropdown-menu-wrap">
                                <div class="dropdown-item">
                                  <div
                                    class="qty-box d-flex align-items-center justify-content-between"
                                  >
                                    <label>Adults</label>
                                    <div
                                      class="qtyBtn d-flex align-items-center"
                                    >
                                      <div class="qtyDec">
                                        <i class="la la-minus"></i>
                                      </div>
                                      <input
                                        type="text"
                                        name="adult_number"
                                        value="0"
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
                                    <div
                                      class="qtyBtn d-flex align-items-center"
                                    >
                                      <div class="qtyDec">
                                        <i class="la la-minus"></i>
                                      </div>
                                      <input
                                        type="text"
                                        name="child_number"
                                        value="0"
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
                                    <label>Infants</label>
                                    <div
                                      class="qtyBtn d-flex align-items-center"
                                    >
                                      <div class="qtyDec">
                                        <i class="la la-minus"></i>
                                      </div>
                                      <input
                                        type="text"
                                        name="infants_number"
                                        value="0"
                                        class="qty-input"
                                      />
                                      <div class="qtyInc">
                                        <i class="la la-plus"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- end dropdown -->
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-3 -->
                    </form>
                  </div>
                  <div class="btn-box">
                    <a href="cruise-search-result.html" class="theme-btn"
                      >Search Now</a
                    >
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="tour"
                  role="tabpanel"
                  aria-labelledby="tour-tab"
                >
                  <div class="contact-form-action">
                    <form action="#" class="row align-items-center">
                      <div class="col-lg-4 pe-0">
                        <div class="input-box">
                          <label class="label-text"
                            >Where would like to go?</label
                          >
                          <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Destination, city, or region"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4 pe-0">
                        <div class="input-box">
                          <label class="label-text">From</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                      <div class="col-lg-4">
                        <div class="input-box">
                          <label class="label-text">To</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange-single"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- end col-lg-4 -->
                    </form>
                  </div>
                  <div class="advanced-wrap">
                    <a
                      class="btn collapse-btn theme-btn-hover-gray font-size-15"
                      data-bs-toggle="collapse"
                      href="#collapseSeven"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseSeven"
                    >
                      Advanced search <i class="la la-angle-down ms-1"></i>
                    </a>
                    <div class="pt-3 collapse" id="collapseSeven">
                      <div class="slider-range-wrap">
                        <div class="price-slider-amount padding-bottom-20px">
                          <label for="amount" class="filter__label"
                            >Price Range</label
                          >
                          <input type="text" id="amount" class="amounts" />
                        </div>
                        <!-- end price-slider-amount -->
                        <div id="slider-range"></div>
                        <!-- end slider-range -->
                      </div>
                      <!-- end slider-range-wrap -->
                      <div class="checkbox-wrap padding-top-30px">
                        <h3 class="title font-size-15 pb-3">Tour Categories</h3>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb1"
                          />
                          <label for="tourChb1">Active Adventure Tours</label>
                        </div>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb2"
                          />
                          <label for="tourChb2">Ecotourism</label>
                        </div>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb3"
                          />
                          <label for="tourChb3">Escorted Tours</label>
                        </div>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb4"
                          />
                          <label for="tourChb4">Group Tours</label>
                        </div>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb5"
                          />
                          <label for="tourChb5">Ligula</label>
                        </div>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb6"
                          />
                          <label for="tourChb6">Family Tours</label>
                        </div>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb7"
                          />
                          <label for="tourChb7">City Trips</label>
                        </div>
                        <div class="custom-checkbox d-inline-block me-4">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="tourChb8"
                          />
                          <label for="tourChb8">National Parks Tours</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="btn-box pt-3">
                    <a href="tour-search-result.html" class="theme-btn"
                      >Search Now</a
                    >
                  </div>
                </div>
                <!-- end tab-pane -->
              </div>
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
        <svg
          class="hero-svg"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 100 10"
          preserveAspectRatio="none"
        >
          <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
        </svg>
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor
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

    <!-- ================================
    START ROUND-TRIP AREA
================================= -->
<section class="round-trip-flight section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title line-height-55">
                Most Popular Round-trip <br />
                Flight Destinations
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-12">
            <div class="flight-filter-tab text-center">
              <div class="section-tab section-tab-3">
                <ul
                  class="nav nav-tabs justify-content-center"
                  id="myTab4"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="new-york-tab"
                      data-bs-toggle="tab"
                      href="#new-york"
                      role="tab"
                      aria-controls="new-york"
                      aria-selected="false"
                    >
                      New York
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="hong-kong-tab"
                      data-bs-toggle="tab"
                      href="#hong-kong"
                      role="tab"
                      aria-controls="hong-kong"
                      aria-selected="false"
                    >
                      Hong Kong
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="beijing-tab"
                      data-bs-toggle="tab"
                      href="#beijing"
                      role="tab"
                      aria-controls="beijing"
                      aria-selected="false"
                    >
                      Beijing
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="tokyo-tab"
                      data-bs-toggle="tab"
                      href="#tokyo"
                      role="tab"
                      aria-controls="tokyo"
                      aria-selected="false"
                    >
                      Tokyo
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="seoul-tab"
                      data-bs-toggle="tab"
                      href="#seoul"
                      role="tab"
                      aria-controls="seoul"
                      aria-selected="false"
                    >
                      Seoul
                    </a>
                  </li>
                </ul>
              </div>
              <!-- end section-tab -->
            </div>
            <!-- end flight-filter-tab -->
            <div class="popular-round-trip-wrap padding-top-40px">
              <div class="tab-content" id="myTabContent4">
                <div
                  class="tab-pane fade show active"
                  id="new-york"
                  role="tabpanel"
                  aria-labelledby="new-york-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Los
                              Angeles
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img2.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i
                              >Barcelona
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img3.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Dallas
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img4.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>San
                              Francisco
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img5.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Miami
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img6.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>London
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="hong-kong"
                  role="tabpanel"
                  aria-labelledby="hong-kong-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i
                              >Singapore
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img2.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img3.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Seoul
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img4.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Manila
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img5.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Nepal
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img6.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i
                              >Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="seoul"
                  role="tabpanel"
                  aria-labelledby="seoul-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Nepal
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img2.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img3.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img4.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img5.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Hong kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img6.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Bangkok
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="tokyo"
                  role="tabpanel"
                  aria-labelledby="tokyo-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img2.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img3.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img4.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img5.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Hong kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img6.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Hanoi
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="beijing"
                  role="tabpanel"
                  aria-labelledby="beijing-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img2.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img3.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img4.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img5.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Hong
                              kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="images/airline-img6.png"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Hanoi
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
              </div>
              <!-- end tab-content -->
              <div
                class="tab-content-info d-flex justify-content-between align-items-center"
              >
                <p class="font-size-15">
                  <i class="la la-question-circle me-1"></i>Average round-trip
                  price per person, taxes and fees included.
                </p>
                <a href="#" class="btn-text font-size-15"
                  >Discover More <i class="la la-angle-right"></i
                ></a>
              </div>
              <!-- end tab-content-info -->
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end round-trip-flight -->
    <!-- ================================
    END ROUND-TRIP AREA
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