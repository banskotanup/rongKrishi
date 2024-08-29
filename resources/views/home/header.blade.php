<div class="full_bg">
    <!-- header -->
    <header class="header_wrapper">
      <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="images/logo.png" alt="logo" class="img-fluid" style="height: 50px; transform: scale(1.2);">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <!-- <span class="navbar-toggler-icon"></span> -->
              <i class="fas fa-stream navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav menu-navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#services">Products</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#portfolio">Testinomial</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#blog">FAQ</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('log_out')}}">Logout</a>
                    </li>                            
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                  </li>  
                  @endauth
                  @endif
              </ul>
            </div>
          </div>
        </nav>
  </header>
    <!-- end header inner -->