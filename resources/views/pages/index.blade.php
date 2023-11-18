{{-- @extends('layouts.app')

@section('content')

    <style>
        body {
            background: #D5E5E9;
        }
    </style>

    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the project from the team BeginBloc of Software Engineering lab.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>

    {{-- <div style="width: 660px; height: 425px; flex-shrink: 0; overflow: hidden;">
        <img src="homepage_photo.jpg" alt="Your Image Description" style="width: 100%; height: 100%; object-fit: cover;">
    </div> --}}

    {{-- <div style="width: 100%; color: rgba(0, 0, 0, 0.20); font-size: 60px; font-family: Raleway; font-weight: 700; line-height: 76px; letter-spacing: 0.50px; word-wrap: break-word">
        <br/>Let's start the start-ups!<br/>
    </div> --}}
    
{{-- @endSection  --}}

{{-- homepage --}}

@extends('layouts.app')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')

    <style>
        body {
            margin: 0;
            background: linear-gradient(120deg, #F6F8FA 0%, #D2E4ED 100%);
            color: rgba(0, 0, 0, 0.8); /* Adjust text color as needed */
            /* background-image: url('peakpx.jpg'); */
            background-image: url('<?php echo "/BeginBloc/resources/views/pages/homepage_photo.jpg" ?>');
            background-size: cover;
        }
        @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    .custom-text {
        margin-top: 100px;
        color: rgba(0, 0, 0, 0.20);
        font-size: 60px;
        font-weight: 700;
        line-height: 76px;
        letter-spacing: 0.50px;
        word-wrap: break-word;
        animation: fadeIn 3s ease-out; /* Adjust the animation duration as needed */
    }        
    
    .video-background {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }

        .video-content {
            position: relative;
            z-index: 1;
        }

    .card-body form {
        max-width: 500px;
        background-color: transparent
        /* margin: 0 auto; */
    }

    .card-body input {
        width: 100%;
        padding: 12px;
        /* margin-bottom: 15px; */
        /* border: 1px solid #ddd;
        box-sizing: border-box; */
        border-radius: 5px;
    }

    .form-check {
        margin-bottom: 15px;
    }

    .form-check-label {
        margin-left: 5px;
    }

    .text-center button {
        padding: 12px;
        width: 100%;
        border: none;
        border-radius: 5px;
        background-color: #568F9B;
        color: #fff;
        cursor: pointer;
    }

    .text-center button:hover {
        background-color: #2A6877;
    }
    </style>

    <div class="video-background">
      <video autoplay muted loop poster="background-poster.jpg" id="bgvid">
        <source src="video.mp4" type="video/mp4">
       <!-- Add other video sources as needed for different browsers -->
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-content">
      <div class="custom-text">
          <br/>Let's start the start-ups!<br/>
      </div>
    </div>
    
    <main class="main-content  mt-0">
      <section>
        <div class="page-header min-vh-100">
          <div class="container">
            <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto" style="width: 70%; max-width: 400px; margin: 20px 0 0 0; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 20px; background-color: rgba(200.81, 200.81, 200.81, 0.62);">
                <div class="card card-plain" style="display: flex; flex-direction: column; align-items: center; gap: 20px; background-color: transparent; border: none;">
                  <div class="card-header pb-0 text-start" >
                    <h4 class="font-weight-bolder" style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px;">Sign In</h4>
                    <p class="mb-0">Enter your email and password to sign in</p>
                  </div>
                  <div class="card-body">
                    <form role="form">
                      <div class="mb-3" style="align-items: left">
                        <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                      </div>
                      <div class="mb-3">
                        <input type="email" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                      <div class="text-center">
                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                      Don't have an account?
                      <a href="/register" class="text-primary text-gradient font-weight-bold">Sign up</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image:url('peakpx.jpg'); background-size: cover;">
                  <span class="mask bg-gradient-primary opacity-6"></span>
                  <h4 class="mt-5 text-black font-weight-bolder position-relative">"Welcome to BeginBloc!"</h4>
                  <p class="text-black position-relative">Let's do business with ideas. Join us to see what we have for you.</p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
@endSection

