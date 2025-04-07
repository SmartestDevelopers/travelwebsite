@extends('layouts.front')

@section('content')

<div class="container">

<div style="margin-top:150px;" class="modal-content">
            <div class="modal-header">
              <div>
                <h5 class="modal-title title" id="exampleModalLongTitle2">
                  Login
                </h5>
                <p class="font-size-14">Hello! Welcome to your account</p>
              </div>
            </div>
            <div class="modal-body">
              <div class="contact-form-action">
                <form method="post">
                  <div class="input-box">
                    <label class="label-text">Username</label>
                    <div class="form-group">
                      <span class="la la-user form-icon"></span>
                      <input class="form-control" type="text" name="text" placeholder="Type your username">
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box">
                    <label class="label-text">Password</label>
                    <div class="form-group mb-2">
                      <span class="la la-lock form-icon"></span>
                      <input class="form-control" type="text" name="text" placeholder="Type your password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="custom-checkbox mb-0">
                        <input type="checkbox" class="form-check-input" id="rememberchb">
                        <label for="rememberchb">Remember me</label>
                      </div>
                      <p class="forgot-password">
                        <a href="recover.html">Forgot Password?</a>
                      </p>
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="btn-box pt-3 pb-4">
                    <button type="button" class="theme-btn w-100">
                      Login Account
                    </button>
                  </div>
                  <div class="action-box text-center">
                    <p class="font-size-14">Or Login Using</p>
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