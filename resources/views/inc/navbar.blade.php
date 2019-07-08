<nav class="navbar navbar-icon-top navbar-expand-md navbar-dark" style="background-color:#15161D">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
              <img style="height:50px;" class="rounded-circle z-depth-0" alt="avatar image" id="logo-image" src="{{ asset('/storage/eShop_images/logo-eShop.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/"> <i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/about"><i class="fa fa-folder-open"></i> About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/services"><i class="fa fa-folder-open"></i> Servises</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/products/create"><i class="fa fa-folder-open"></i> Create Product</a>
              </li>


            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                    @if (Route::has('register'))


                          <li class="nav-item">

                        <div class='row'>
                              <form class="form-inline my-2 my-lg-0 mr-2" action="{{ route('login') }}" method="post">
                                @csrf

                              <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mr-sm-2" type="email" name="email" placeholder="Enter email" aria-label="email" value="{{ old('email') }}" required autofocus>
                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif

                              <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mr-sm-2" type="password" name="password" placeholder="Enter password" aria-label="Password">
                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif

                                <input class="nav-button btn btn-outline-primary" type="submit" value="Login"></input>
                            </form>
                      </div>

                        <div class='row'>{{-- Recover password --}}
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                      </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-button btn btn-outline-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fa fa-envelope-o">
                        <span class="badge badge-success">1</span>
                      </i>
                    Message
                    </a>
                  </li>
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img style="width:60px;" src="/storage/avatars/{{ Auth::user()->avatar }}" class="rounded-circle z-depth-0" alt="avatar image">{{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                          <a class="dropdown-item" href="/dashboard">Dashboard</a>

                          <a class="dropdown-item" href="/profile">User Profile</a>
                          {{-- Logout --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
