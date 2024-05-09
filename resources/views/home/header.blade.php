<!-- header inner -->
<div class="header">
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
             <div class="full">
                <div class="center-desk">
                   <div class="logo">
                      <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
             <nav class="navigation navbar navbar-expand-md navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                   <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                         <a class="nav-link" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="about.html">About</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="room.html">Our room</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="gallery.html">Gallery</a>
                      </li>
                     
                      <li class="nav-item">
                         <a class="nav-link" href="contact.html">Contact Us</a>
                      </li>


                     @if (Route::has('login'))
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                       Dashboard
                                    </a> 
                                @else
                                <li class="nav-item" style="padding-right: 10px;">
                                    <a class="btn btn-success" href="{{url('login')}}">Login</a>
                                 </li>

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="btn btn-primary" href="{{url('register')}}">Register</a>
                                     </li>
                                    @endif
                                @endauth
                        @endif
                   </ul>
                </div>
             </nav>
          </div>
       </div>
    </div>
 </div>