<link rel="stylesheet" href="C:\xampp\htdocs\BeginBloc\resources\css\navbar.css">

<nav class="navbar navbar-expand-lg" id="navbar" 
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
            <li class="nav-item"><a href="/posts" class="nav-link">Blog</a></li>
          </ul>
        </header>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}

        
      </div>
    
    
  </nav>

