@extends('layouts.front')

@section('content')


<!-- 
<section id="about-us">

    <div class="container">
    <h1>About Us</h1>
        <h2>Discover Nature, Embrace Culture, Experience Spirituality with Travel Pakistan Now</h2>
        <p>Welcome to <strong>Travel Pakistan Now</strong>, your premier travel partner for unforgettable tourism experiences in Pakistan. We are committed to showcasing the rich cultural heritage, breathtaking natural landscapes, and deep spiritual sites of Pakistan, offering journeys that are as enriching as they are awe-inspiring.</p>
        
        <p>We specialize in providing a variety of exceptional travel services designed to meet the needs of every type of traveler:</p>
        
        <p><strong>Nature Sightseeing:</strong> Immerse yourself in the diverse beauty of Pakistan’s natural wonders. From the snow-capped peaks of the Karakoram and Himalayas to lush valleys, serene lakes, and ancient forests, our nature sightseeing tours offer you a chance to explore the country’s most stunning and untouched landscapes.</p>

        <p><strong>Trekking Adventures:</strong> For the adventurous traveler, we provide expert-led trekking expeditions across some of the world’s most breathtaking mountain ranges. Whether it’s hiking through the rugged terrains of the Karakoram or the grandeur of the Himalayas, our trekking tours promise unforgettable experiences in the heart of Pakistan’s northern highlands.</p>

        <p><strong>Religious Tourism:</strong> Pakistan’s rich spiritual heritage is a cornerstone of its identity. Our religious tourism services take you to sacred sites that reflect the diverse faiths that have shaped the country, from historic mosques and shrines to significant spiritual landmarks that connect you with the soul of Pakistan.</p>

        <p>At <strong>Travel Pakistan Now</strong>, we pride ourselves on crafting customized itineraries that cater to your specific travel interests. Whether you’re looking for a peaceful sightseeing experience, a thrilling trekking adventure, or a deep spiritual exploration, we ensure seamless travel arrangements and exceptional service throughout your journey.</p>

        <p>With years of experience and a genuine passion for promoting the beauty and culture of Pakistan, we are dedicated to making your travel experience truly unforgettable. Let us guide you on a journey to discover the incredible landscapes, vibrant cultures, and spiritual depth of this magnificent country.</p>

        <p><strong>Start your journey with Travel Pakistan Now and explore the magic of Pakistan today!</strong></p>
    </div>
</section> -->


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
                    Travel Pakistan Now is Your Trusted <br />
                    Travel Companion.
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
    START ABOUT AREA
================================= -->
    <section class="about-area padding-bottom-90px overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading margin-bottom-40px">
              <h2 class="sec__title">About Us</h2>
              <h4 class="title font-size-16 line-height-26 pt-4 pb-2">
              <strong></strong>Pakistan offers a variety of breathtaking destinations for honeymooners, from serene hill stations to exotic beaches. Each spot is unique, providing couples with romantic escapes in nature’s embrace.
              </h4>
              <p class="sec__desc font-size-16 pb-3"><strong></strong> Murree, located near Islamabad, is a popular destination for honeymooners, with its cool weather, lush green hills, and beautiful viewpoints. Couples can enjoy scenic walks, shopping, and cozy evenings in charming cottages. Similarly, Hunza Valley, with its snow-capped peaks, clear blue lakes, and rich culture, offers a peaceful and picturesque environment perfect for a romantic getaway.</p>
              <p class="sec__desc font-size-16 pb-3">
              <strong></strong>For beach lovers, the coastal city of Gwadar and the serene beach of Clifton in Karachi offer tranquility and beautiful seascapes. In addition, Skardu’s beautiful lakes, such as Shangrila Resort and Upper Kachura Lake, along with the surrounding mountains, create a magical atmosphere for newlyweds to enjoy. Whether it's adventure or relaxation, Pakistan’s honeymoon spots provide unforgettable experiences.
              </p>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-5 ms-auto">
            <div class="image-box about-img-box">
              <img
                src="{{ asset('travel-website/images/hun.jpg')}}"
                alt="about-img"
                class="img__item img__item-1"
              />
              <img
                src="{{ asset('travel-website/images/mal.jpg')}}"
                alt="about-img"
                class="img__item img__item-2"
              />
            </div>
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end about-area -->
    <!-- ================================
    END ABOUT AREA
================================= -->




@endsection