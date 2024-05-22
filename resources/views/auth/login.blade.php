<x-guest-layout>
    @session('status')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ $value }}
    </div>
    @endsession
    @include('auth.css')
    <div class="main">
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure><img src="{{ asset('assets/images/signin-image.jpg') }}" alt="sign up image"></figure>
              <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
            </div>
            <div class="signin-form">
              <h2 class="form-title">Sign in</h2>
              <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required autofocus autocomplete="username"/>
                </div>
                <div class="form-group">
                  <label for="password"><i class="zmdi zmdi-lock"></i></label>
                  <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password"/>
                </div>
                <div class="form-group">
                  <input type="checkbox" name="remember" id="remember-me" class="agree-term" />
                  <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                </div>
                <div class="flex items-center justify-end mt-4">
                  @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                    </a>
                  @endif
                </div>
                <div class="form-group form-button">
                  <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                </div>
              </form>
              <div class="social-login">
                <span class="social-label">Or login with</span>
                <ul class="socials">
                  <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                  <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                  <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </x-guest-layout>
  




{{-- <x-app-layout>
    <main class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email" value="{{ __('Email') }}"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email" :value="old('email')" required autofocus autocomplete="username"/>
                            </div>
                            <div class="form-group">
                                <label for="password" value="{{ __('Password') }}"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-app-layout> --}}