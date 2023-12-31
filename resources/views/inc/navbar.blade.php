<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
 
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

    .navbar-nav .nav-item.active a {
        color: #007bff !important; /* Adjust the color as needed */
        font-weight: bold; /* Optionally, make the text bold */
    }
</style>

  <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow fixed-top mt-4 start-0 end-0" id="navbar" style="width: 90%; margin-left: auto; margin-right: auto; border-radius: 20px; background: white">
    <div class="container-fluid">
        <div class="container-fluid">
            <header class="d-flex flex-wrap justify-content-center align-items-center py-1 mb-4">
                <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="/">
                    {{-- <img src="{{ asset('images/United_International_University_Monogram.svg') }}" alt="UIU Monogram" width="80" height="50" class="me-2"> --}}
                    <span class="fs-4">BeginBloc</span>
                </a>

                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-1">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav mx-auto d-flex align-items-center">
        <!-- ... (existing menu items) ... -->
                    <ul class="navbar-nav mx-auto d-flex align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 {{ Request::is('/') ? 'active text-primary' : '' }}" href="{{ Auth::check() ? '/dashboard' : '/' }}">
                                        <i class="fa fa-home opacity-6 text-dark me-1"></i> Home
                                    </a>
                                </li>
                      
                              <li class="nav-item">
                                  <a  href="/about" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                                      <i class="fa fa-info-circle opacity-6 text-dark me-1"></i> About
                                  </a>
                              </li>
                      
                              <li class="nav-item">
                                  <a  href="/services" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                                      <i class="fa fa-info-circle opacity-6 text-dark me-1"></i> Services
                                  </a>
                              </li>
                      
                              <li class="nav-item">
                                  <a  href="/faq" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                                      <i class="fa fa-info-circle opacity-6 text-dark me-1"></i> FAQs
                                  </a>
                              </li>
                      
                              <!-- Add other menu items as needed -->
                              
                              <li class="nav-item">
                                  <a  href="/posts" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                                      <i class="fa fa-info-circle opacity-6 text-dark me-1"></i> Blogs
                                  </a>
                              </li>
                      
                              {{-- <li class="nav-item">
                                  <a  href="/posts/create" class="nav-link d-flex align-items-center me-2" aria-current="page" >
                                      <i class="fa fa-info-circle opacity-6 text-dark me-1"></i> Create post
                                  </a>
                              </li> --}}

                    </ul>
    </ul>

    <ul class="navbar-nav ms-auto justify-content-end d-flex align-items-center">
      @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2" href="{{ route('login') }}">
                      <i class="fa fa-sign-in-alt opacity-6 text-dark me-1"></i> Login
                  </a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2" href="{{ route('register') }}">
                      <i class="fa fa-user-plus opacity-6 text-dark me-1"></i> Register
                  </a>
              </li>
          @endif
      @else
            <!-- ... (existing authenticated user dropdown) ... -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
    
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a href="/dashboard" class="dropdown-item">Dashboard</a>
    
                    <a href="" class="dropdown-item">Notifications</a>
    
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: red;">
                        <i class="fa fa-sign-out-alt opacity-6 text-dark me-1"></i> Logout
                    </a>                    
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>
            </header>
        </div>
    </div>
</nav>


 