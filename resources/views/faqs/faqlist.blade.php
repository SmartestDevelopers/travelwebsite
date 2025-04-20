@extends('layouts.admin')

@section('content')

<section class="dashboard-area">
  <div class="dashboard-nav dashboard--nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="menu-wrapper">
            <div class="logo me-5">
              <a href="index.html"><img src="images/logo2.png" alt="logo" /></a>
              <div class="menu-toggler">
                <i class="la la-bars"></i>
                <i class="la la-times"></i>
              </div>
              <!-- end menu-toggler -->
              <div class="user-menu-open">
                <i class="la la-user"></i>
              </div>
              <!-- end user-menu-open -->
            </div>
            <div class="dashboard-search-box">
              <div class="contact-form-action">
                <form action="#">
                  <div class="form-group mb-0">
                    <input
                      class="form-control"
                      type="text"
                      name="text"
                      placeholder="Search"
                    />
                    <button class="search-btn">
                      <i class="la la-search"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="nav-btn ms-auto">
              <div class="notification-wrap d-flex align-items-center">
                <!-- Add notification and user menu here if needed -->
              </div>
            </div>
            <!-- end nav-btn -->
          </div>
          <!-- end menu-wrapper -->
        </div>
        <!-- end col-lg-12 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container-fluid -->
  </div>
  <!-- end dashboard-nav -->
  <div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="breadcrumb-content">
              <div class="section-heading">
                <h2 class="sec__title font-size-30 text-white">FAQs</h2>
              </div>
            </div>
            <!-- end breadcrumb-content -->
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="breadcrumb-list text-end">
              <ul class="list-items">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li>Dashboard</li>
                <li>FAQs</li>
              </ul>
            </div>
            <!-- end breadcrumb-list -->
          </div>
          <!-- end col-lg-6 -->
        </div>
        <!-- end row -->
      </div>
    </div>
    <!-- end dashboard-bread -->
    <div class="dashboard-main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-box">
              <div class="form-title-wrap">
                <h3 class="title">FAQs List</h3>
              </div>
              <div class="form-content pb-2">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>What is the refund policy?</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>How can I change my booking?</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>David Martin</td>
                        <td>david.martin@example.com</td>
                        <td>Are there any discounts available?</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end form-box -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h4 class="mt-4">Additional Section</h4>
            <p>This is where you can add more content or actions related to FAQs.</p>
          </div>
        </div>
        <!-- end row align-items-center -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end dashboard-main-content -->
  </div>
  <!-- end dashboard-content-wrap -->
</section>

<div class="container-fluid">
    <h1 class="mb-4">FAQs List</h1>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-content pb-2">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqlists as $faq)
                        <tr>
                            <td>{{ $faq->id }}</td>
                            <td>{{ $faq->name }}</td>
                            <td>{{ $faq->email }}</td>
                            <td>{{ $faq->message }}</td>
                            <td>{{ $faq->created_at }}</td>
                            <td>{{ $faq->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection