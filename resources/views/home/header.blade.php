<!-- header inner -->
<header>
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
                                   <a class="nav-link" href="{{url('/')}}">Home</a>
                               </li>
                             
                               <li class="nav-item">
                                   <a class="nav-link" href="{{url('our_rooms')">Our room</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="{{url('hotel_gallary'}}">Gallery</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="{{url('contact_us'}}">Contact Us</a>
                               </li>
                           </ul>
                           <!-- Kode PHP -->
                           @if (Route::has('login'))
                               <ul class="navbar-nav ml-auto">
                                   @auth
                                       <li class="nav-item" style="padding-right: 15px;">
                                          <a href="{{ route('profile.show') }}" class="nav-item btn btn-success">Update Profile</a>
                                      </li>
                                      
                                       <li class="nav-item">
                                           <form method="POST" action="{{ route('logout') }}">
                                               @csrf
                                               <a href="{{ route('logout') }}" class="nav-item btn btn-danger" onclick="event.preventDefault(); this.closest('form').submit(); return confirm('Apakah Anda Yakin Ingin Log Out?')">Logout</a>
                                           </form>
                                       </li>
                                   @else
                                   <li class="nav-item" style="padding-right: 15px;">
                                       <a class="btn btn-success" href="{{url('login')}}">Login</a>
                                    </li>
   
                                       @if (Route::has('register'))
                                       <li class="nav-item">
                                           <a class="btn btn-primary" href="{{url('register')}}">Register</a>
                                        </li>
                                       @endif
                                   @endauth
                               </ul>
                           @endif
                           <!-- /Kode PHP -->
                       </div>
                   </nav>
               </div>
           </div>
       </div>
   </div>
</header>
