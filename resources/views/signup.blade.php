@extends('layouts.front')

@section('content')


<div class="container">

<div class="modal-content">
            <div class="modal-header">
              <div>
                <h5 class="modal-title title" id="exampleModalLongTitle">
                  Sign Up
                </h5>
                <p class="font-size-14">Hello! Welcome Create a New Account</p>
              </div> 
            </div>

                <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
            <div class="modal-body">
              <div class="contact-form-action">
                <form method="post" action="{{ url('/register') }}">
                @csrf
                  <div class="input-box">
                    <label class="label-text">Username</label>
                    <div class="form-group">
                      <span class="la la-user form-icon"></span>
                      <input class="form-control" type="text" name="username" placeholder="Type your username">
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Email Address</label>
                    <div class="form-group">
                      <span class="la la-envelope form-icon"></span>
                      <input class="form-control" type="email" name="email" placeholder="Type your email">
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Password</label>
                    <div class="form-group">
                      <span class="la la-lock form-icon"></span>
                      <input class="form-control" type="password" name="password" placeholder="Type password">
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Repeat Password</label>
                    <div class="form-group">
                      <span class="la la-lock form-icon"></span>
                      <input class="form-control" type="password" name="password_confirmation" placeholder="Type again password">
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="btn-box pt-3 pb-4">
                    <button type="submit" class="theme-btn w-100">
                      Register Account
                    </button>
                  </div>
                  <div class="action-box text-center">
                    <p class="font-size-14">Or Sign up Using</p>
                    <ul class="social-profile py-3">
                      <li>
                        <a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <!-- end contact-form-action -->
            </div>
          </div>
          
</div>

@endsection