@extends('layouts.front')

@section('content')
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-5">
      <div class="breadcrumb-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-content text-center">
                <div class="section-heading">
                  <h2 class="sec__title text-white">
                    How Can We Help You Today?
                  </h2>
                </div>
                <div class="row">
                  <div class="col-lg-6 mx-auto">
                    <div class="contact-form-action pt-4">
                      <form action="#">
                        <div class="form-group mb-0">
                          <input
                            class="form-control ps-3"
                            type="text"
                            name="text"
                            placeholder="Have a question? Ask or enter search term"
                          />
                          <button class="search-btn" type="submit">
                            <i class="la la-search"></i>
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="trending-search font-size-14 pt-2">
                      <span class="text-white font-weight-bold me-1">Try:</span>
                      <a href="#">getting started</a>
                    </div>
                  </div>
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
    START FAQ AREA
================================= -->
<section class="faq-area section-bg padding-top-100px padding-bottom-60px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">Frequently Asked Questions</h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-60px">
          <div class="col-lg-6">
            <div class="faq-item mb-5">
              <h3 class="title font-weight-bold">Cancellations</h3>
              <ul class="toggle-menu list-items list-items-flush pt-4">
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Can I cancel my booking?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Yes, you can cancel your booking with Travel Pakistan Now. To do so, simply contact our customer service team at support@travelpakistannow.com with your booking reference number. Please review our cancellation policy for any applicable fees. Once processed, you will receive a cancellation confirmation email.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    If I need to cancel my booking, will I pay a fee?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Cancellation fees may apply depending on the timing of your cancellation. Please refer to our cancellation policy for detailed information on fees. For further assistance, feel free to contact us at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Can I cancel or change my dates for a non-refundable
                    booking?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      For non-refundable bookings, cancellations or changes are generally not allowed. However, please contact our customer service team at support@travelpakistannow.com, and we’ll do our best to assist you with any special circumstances or alternative options.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    How do I know if my booking was cancelled?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Once your booking is successfully cancelled, you will receive a confirmation email from us. Please keep this email for your records. If you have not received it, feel free to contact our customer service team at support@travelpakistannow.com for assistance.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Where can I find my property's cancellation policy?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      You can find your property's cancellation policy in the booking confirmation email you received when you made the reservation. If it’s not listed there, visit the property’s official website and check sections like "Terms and Conditions," "Booking Policies," or "FAQs." Alternatively, you can contact the property’s customer service team directly for details about the cancellation policy.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- end faq-item -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="faq-item mb-5">
              <h3 class="title font-weight-bold">Payment</h3>
              <ul class="toggle-menu list-items list-items-flush pt-4">
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    What payment methods are accepted?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      At Travel Pakistan Now, we accept a wide range of payment methods to accommodate our international clients. These include major credit and debit cards such as Visa, MasterCard, and American Express. We also accept PayPal for global transactions, providing a secure and convenient option for clients from around the world. Additionally, bank transfers and digital wallets like NayaPay may be available, depending on your location. For more information on available payment methods, please visit our website or contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Can I pay with a deposit, or prepayment?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      At Travel Pakistan Now, we understand that payment preferences vary among our international clients. To accommodate this, we offer flexible payment options, including the possibility of securing your booking with a deposit or making a full prepayment. The specific terms, such as the deposit amount and payment deadlines, are detailed in your booking agreement. For precise information tailored to your reservation, please refer to your agreement or contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    I’ve been charged. Do I need to do anything?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Once you’ve been charged, there’s no immediate action required on your part if everything looks correct. You will receive a confirmation email detailing your booking and payment. If you notice any discrepancies or need assistance, please contact our customer service team at support@travelpakistannow.com to resolve the issue.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Where can I see the payment policy for my booking?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      You can view the payment policy for your booking in the confirmation email you received when making your reservation. Additionally, the payment terms are also available on our website under the "Terms and Conditions" section. If you have any further questions, feel free to contact us at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Why do I need to provide my card details?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Your card details are required to securely process your payment for the booking. This ensures that we can confirm your reservation and finalize the transaction. Rest assured, we use industry-standard encryption and security measures to protect your payment information. If you have any concerns, feel free to contact our customer service at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- end faq-item -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="faq-item mb-5">
              <h3 class="title font-weight-bold">Booking details</h3>
              <ul class="toggle-menu list-items list-items-flush pt-4">
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    How do I get more information about the room or property's
                    facilities?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      For more details about the room or property's facilities, you can visit the property’s official website, where detailed descriptions of amenities and services are available. Alternatively, you can contact our customer service team at support@travelpakistannow.com, and we’ll be happy to provide additional information.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Is it possible to get an extra bed or cot for a child?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Yes, it is possible to request an extra bed or cot for a child. Please inform us at the time of booking or contact our customer service team at support@travelpakistannow.com to arrange this request. Availability may vary depending on the property, so we recommend confirming in advance.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    How can I get an invoice?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      To receive an invoice for your booking, please contact our customer service team at support@travelpakistannow.com with your booking reference number. We will provide you with a detailed invoice for your transaction.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    I can't find my confirmation email. What should I do?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      If you can't find your confirmation email, please check your spam or junk folder first. If it’s still missing, contact our customer service team at support@travelpakistannow.com with your booking details, and we will resend the confirmation to you.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Will I pay the full price for my children?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Children’s pricing may vary depending on the property and the age of the child. Some properties offer discounted rates or free stays for children, while others may charge a reduced rate for extra beds or cots. For specific information, please check the property’s policy or contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- end faq-item -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="faq-item mb-5">
              <h3 class="title font-weight-bold">Room types</h3>
              <ul class="toggle-menu list-items list-items-flush pt-4">
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    What's the difference between a Double room and a Twin room?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      A Double room features one large bed, typically designed for two people sharing. In contrast, a Twin room has two separate single beds, which are ideal for two people who prefer to sleep in separate beds. Both room types are suitable for two guests, but the bed configuration differs.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    What do "non-refundable" and "free cancellation" mean?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      "Non-refundable" means that once you make the booking, you cannot get a refund if you cancel the reservation. "Free cancellation" means that you can cancel your booking without any charges within a specified time frame, typically before a certain deadline, such as 24 or 48 hours before check-in.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Can I request an extra bed in my room and will there be
                    extra costs?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Yes, you can request an extra bed in your room. Additional charges may apply depending on the property’s policy and the type of room. Please contact our customer service team at support@travelpakistannow.com to confirm availability and any associated costs.r
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Is it possible to get an extra bed or cot for a child?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Yes, it is possible to request an extra bed or cot for a child, depending on the property’s policy. Please inform us at the time of booking or contact our customer service team at support@travelpakistannow.com to arrange this request. Additional charges may apply.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- end faq-item -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="faq-item mb-5">
              <h3 class="title font-weight-bold">Pricing</h3>
              <ul class="toggle-menu list-items list-items-flush pt-4">
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Is breakfast included in the price?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      At Travel Pakistan Now, the inclusion of breakfast in your booking depends on the specific accommodation and package you choose. Many hotels in Pakistan offer complimentary breakfast as part of their room rates.To determine whether breakfast is included in your reservation, please review your booking details or contact our customer service team at support@travelpakistannow.com. They can provide specific information regarding your accommodation's amenities and any additional costs that may apply.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    What does the price include?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      The price typically includes accommodation, taxes, and any services or amenities specified in your booking. This may include things like Wi-Fi, air conditioning, or access to certain hotel facilities. For specific details about what is included in your booking, such as meals or additional services like breakfast, please refer to your booking confirmation or contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Are taxes included in the price?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Taxes are typically included in the price of your booking, but this may vary depending on the property or package you choose. Please check your booking confirmation for a breakdown of the price, including taxes. If you need further clarification, feel free to contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="faq-item mb-5">
              <h3 class="title font-weight-bold">Credit cards</h3>
              <ul class="toggle-menu list-items list-items-flush pt-4">
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Can I use a debit card to complete my reservation?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      At Travel Pakistan Now, we accept both credit and debit cards for reservations. You can use your debit card to complete your booking. However, please note that some international debit cards may incur foreign transaction fees. Additionally, if your card is not issued in Pakistan, ensure it is enabled for international transactions. For more information on payment methods, please visit our Payment Options page. If you have further questions, feel free to contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Can I make a reservation without a credit card?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Yes, you can use a debit card to complete your reservation, as long as it is accepted by our payment system. Debit cards with the Visa or MasterCard logo are typically supported. If you have any issues or questions, please contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Why do I need to give my credit card details?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Your credit card details are required to securely process your payment and confirm your reservation. This ensures that the booking is guaranteed and allows for any applicable charges or deposits to be processed. We use secure encryption to protect your payment information. If you have any concerns, feel free to contact us at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="toggle-menu-icon d-flex justify-content-between align-items-center"
                  >
                    Can I make a reservation for myself using someone else’s
                    credit card?
                    <i class="la la-angle-down"></i>
                  </a>
                  <ul class="toggle-drop-menu pt-2">
                    <li class="line-height-26">
                      Yes, you can make a reservation using someone else’s credit card, but the cardholder may need to provide authorization or verification for security reasons. Please ensure you have the cardholder’s consent and provide any necessary documentation if requested. For more details, feel free to contact our customer service team at support@travelpakistannow.com.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- end faq-item -->
          </div>
          <!-- end col-lg-6 -->
                      <!-- end faq-item -->

          <!-- end col-lg-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>

@endsection