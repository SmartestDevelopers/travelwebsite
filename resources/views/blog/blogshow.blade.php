@extends('layouts.admin')

@section('content')

<section class="dashboard-area">
  <div class="dashboard-nav dashboard--nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="menu-wrapper">
            <div class="logo me-5">
              <a href="index.html"><img src="{{ asset('travel-website/images/logo2.png') }}" alt="logo" /></a>
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
                <h2 class="sec__title font-size-30 text-white">Blogs</h2>
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
                <li>Blogs</li>
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
          <!-- Blog Form -->
          <div class="col-md-6">
            <div class="form-box">
              <div class="form-title-wrap">
                <h3 class="title">Blog Form</h3>
              </div>
              <div class="form-content pb-2">
                <div class="table-responsive">
                  <form action="{{ url('store-blog') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" required>
                      <small class="form-text text-muted">Enter the blog title.</small>
                    </div>

                    <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" id="image" name="image" required>
                      <small class="form-text text-muted">Upload a blog image.</small>
                    </div>

                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                      <small class="form-text text-muted">Enter the blog description.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- end form-box -->
          </div>

          <!-- Blog List -->
          <div class="col-md-6">
            <div class="form-box">
              <div class="form-title-wrap">
                <!-- Success Message -->
                @if (session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif

                <h3 class="title">Blog List</h3>
              </div>
              <div class="form-content pb-2">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($bloglists as $blog)
                        <tr>
                          <td>{{ $blog->id }}</td>
                          <td>{{ $blog->title }}</td>
                          <td>
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="50">
                          </td>
                          <td>{{ Str::limit($blog->description, 50, '...') }}</td>
                          <td>
                            <a href="{{ url('edit-blog/' . $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('delete-blog/' . $blog->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end form-box -->
          </div>
          <!-- end col-md-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end dashboard-main-content -->
  </div>
  <!-- end dashboard-content-wrap -->
</section>

@endsection