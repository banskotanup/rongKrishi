<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @include('home.css')
      @include('home.custom_css')
      @include('home.res_css')
   </head>
   <!-- body -->
   <body class="main-layout" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-ofset="90">
      {{-- @include('home.header') --}}
      <div class="full_bg">
         <!-- header -->
         <header class="header_wrapper">
           <nav class="navbar navbar-expand-lg fixed-top">
               <div class="container">
                 <a class="navbar-brand" href="{{url('/')}}">
                   <img src="images/logo.png" alt="logo" class="img-fluid" style="height: 50px; transform: scale(1.2);">
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <!-- <span class="navbar-toggler-icon"></span> -->
                   <i class="fas fa-stream navbar-toggler-icon"></i>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                   <ul class="navbar-nav menu-navbar-nav">
                       <li class="nav-item">
                           <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">Home</a>
                       </li>
                       <li class="nav-item" style="position: relative; display: inline-block;">
                         <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                           <li class="nav-item">
                             <a class="nav-link {{ Request::is('about') ? 'active' : ''}}" href="{{url('about')}}">About</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link {{ Request::is('testimonial') ? 'active' : ''}}" href="{{url('testimonial')}}">Testimonial</a>
                         </li>
                         </ul>
                      </li>
                       <li class="nav-item">
                           <a class="nav-link {{ Request::is('product') ? 'active' : ''}}" href="{{url('product')}}">Products</a>
                       </li>
                       
                       <li class="nav-item">
                           <a class="nav-link {{ Request::is('faq') ? 'active' : ''}}" href="{{url('faq')}}">FAQ</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link {{ Request::is('contact') ? 'active' : ''}}" href="{{url('contact')}}">Contact</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2"></path></svg>
                         </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link">
                          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="1.5em" height="1.5em" viewBox="0 0 50 50">
                             <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
                             </svg>
                        </a>
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
      @include('home.product')
      @include('home.js')
   </body>
</html>