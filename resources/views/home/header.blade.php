<div class="full_bg">
    <!-- header -->
    <header class="header-area">
       <div class="container-fluid">
          <div class="row d_flex">
             <div class=" col-md-2 col-sm-3">
                <div class="logo">
                   <a href="index.html">Rong<span>Krishi</span></a>
                </div>
             </div>
             <div class="col-md-8 col-sm-9">
                <div class="navbar-area">
                   <nav class="site-navbar">
                      <ul>
                         <li><a class="active" href="index.html">Home</a></li>
                         <li><a href="about.html">About</a></li>
                         <li><a href="service.html">Service</a></li>
                          <li><a href="Javascript:void(0)">Projects</a></li>
                           <li><a href="testimonail.html">Testimonail</a></li>
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="contact.html">Contact</a></li>
                         <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i>
                         </a>
                      </li>
                      </ul>
                      <button class="nav-toggler">
                      <span></span>
                      </button>
                   </nav>
                </div>
             </div>
             <div class="col-md-2 padd_0 d_none">
                <ul class="email text_align_right">
                   {{-- Login Starts --}}
                     @if (Route::has('login'))
                            @auth
                            <div>
                              <div class="dropdown bottom-right open">
                                <a href="#dropDown" aria-expanded="false" data-toggle="collapse">
                                    <img
                                      src="/images/avatar-7.jpg"
                                      class="rounded-circle"
                                      style="height: 30px; width:30px; boder-radius:60%; margin-right:10px; margin-top:1px;"
                                      alt="Black and White Portrait of a Man"
                                      loading="lazy"
                                    />
                                  </a>
                                  <ul
                                    id="dropDown"
                                    class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="navbarDropdownMenuAvatar"
                                     style="background-color: #1d2129;left:auto!important; right:0!important;"
                                  >
                                    <li>
                                      <a class="dropdown-item" href="/user/profile">My profile</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="{{url('log_out')}}">Logout</a>
                                    </li>
                                  </ul>
                              </div>
                            </div>                                
                            @else
                            <div class="logo">
                               <li><a href="{{route('login')}}">Lo<span>GIN</span></a></li>
                            </div>
                            @endauth
                        @endif
                     {{-- login ends --}}
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </header>
    <!-- end header inner -->