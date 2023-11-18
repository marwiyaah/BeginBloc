<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="stylesheet" href="C:\xampp\htdocs\BeginBloc\resources\css\navbar.css">

{{-- <nav class="navbar navbar-expand-lg" id="navbar" 
  style="background: linear-gradient(180deg, rgba(29, 136, 123, 0.55) 0%, rgba(66, 235, 215, 0.01) 100%);">
  
    <div class="container-fluid">

      <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">{{config('app.name', 'BeginBloc')}}</span>
          </a>
    
          <ul class="nav nav-pills" >
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="/posts/index" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="/posts/create" class="nav-link">Create Post</a></li>
          </ul>

          
        </header>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}

        
      {{-- </div>
    
    
  </nav> --}} 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  {{-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />


  <style>
    body {
        margin: 0;
        background: linear-gradient(120deg, #F6F8FA 0%, #D2E4ED 100%);
        font-family: 'Raleway', sans-serif;
        color: rgba(0, 0, 0, 0.8); /* Adjust text color as needed */
    }

    .jumbotron {
        background: none;
    }

    .jumbotron h1,
    .jumbotron p {
        color: #568F9B;
    }

    .btn-primary,
    .btn-success {
        background-color: #568F9B;
        border-color: #568F9B;
    }

    .btn-primary:hover,
    .btn-success:hover {
        background-color: #2A6877;
        border-color: #2A6877;
    }

    .jumbotron p {
        color: #568F9B;
    }

    .custom-text {
        margin-top: 20px; /* Adjust the margin-top value as needed */
        color: rgba(0, 0, 0, 0.20);
        font-size: 60px;
        font-weight: 700;
        line-height: 76px;
        letter-spacing: 0.50px;
        word-wrap: break-word;
    }
</style>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow fixed-top mt-4 start-0 end-0" id="navbar" style="width: 80%; margin-left: auto; margin-right: auto; border-radius: 20px; background: white">
    <div class="container-fluid">
        <div class="container-fluid">
            <header class="d-flex flex-wrap justify-content-center align-items-center py-1 mb-4">
                <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="/">
                    <svg class="bi me-2" width="40" height="20"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4">{{config('app.name', 'BeginBloc')}}</span>
                </a>

                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-1">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navigation"></div>

                <ul class="navbar-nav mx-auto d-flex align-items-center">
                    <li class="nav-item">
                      <a class="nav-link d-flex align-items-center me-2 {{ Request::is('/') ? 'active text-primary' : '' }}" href="/">
                        <i class="fa fa-home opacity-6 text-dark me-1"></i> Home
                    </a>
                    
                    </li>
            <li class="nav-item">
              <a  href="/about" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                <i class="fa fa-info-circle opacity-6 text-dark me-1"></i>
                About
              </a>
            </li>
            <li class="nav-item">
              <a  href="/services" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                <i class="fa fa-info-circle opacity-6 text-dark me-1"></i>
                Services
              </a>
            </li>
            <li class="nav-item">
              <a  href="#" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                <i class="fa fa-info-circle opacity-6 text-dark me-1"></i>
                FAQs
              </a>
            </li>
            <li class="nav-item">
              <a  href="/posts/index" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                <i class="fa fa-info-circle opacity-6 text-dark me-1"></i>
                Blogs
              </a>
            </li>
            <li class="nav-item">
              <a  href="/posts/create" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                <i class="fa fa-info-circle opacity-6 text-dark me-1"></i>
                Create post
              </a>
            </li>
          </ul>
        </header>        
      </div>
    
    
  </nav>

  <!-- End Navbar -->