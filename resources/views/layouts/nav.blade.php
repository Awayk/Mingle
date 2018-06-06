



<!-- Navigation Bar including Search Form -->
<div class="container-fluid fixed-top" id="outerNavbar">
  <div class="d-flex flex-row justify-content-end">
    <div class="container mr-auto">
      <nav class="navbar navbar-expand-lg py-0" id="navBar">
        <a class="navbar-brand" href="/"><img class="img-responsive" width="45" height="40" src="{{asset('img/MLetterLogo.png')}}" alt="Mingle"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fas fa-bars fa-lg" id="navToggler"></span></button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"> <a class="nav-link" href="/minglenet">MingleNet</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Roadmap</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="organization-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organizations<span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                <a class="dropdown-item" href="/organizations/silbernetz">Silbernetz</a>
                <a class="dropdown-item" href="#">Organization 2</a>
                <a class="dropdown-item" href="#">Organization 3</a>
                <a class="dropdown-item" href="#">Organization 4</a>
                <a class="dropdown-item" href="#">Organization 5</a>
                <a class="dropdown-item" href="#">Organization 6</a>
                <a class="dropdown-item" href="#">Organization 7</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/organizations">Overview</a>
              </div>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="philsophy-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Philosophy<span class="caret"></span></a>
                <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                  <a class="dropdown-item" href="#">Education - <span class="fas fa-university"></span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Collaboration - <span class="fas fa-handshake"></span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Connection - <span class="fas fa-users"></span></a>
                </div>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <!-- Search Form -->
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Type here ..." aria-label="Search" id="searchForm">
            <button class="btn my-2 my-sm-0" type="submit" id="searchButton"><span class="fas fa-search fa-lg"></span> </button>
          </form>
          <!-- Login Button  -->
          @if (Auth::guest())
              <button type="button" class="btn nav-item ml-2" id="loginButton" data-toggle="modal" data-target="#loginModal"><span class="fas fa-user fa-lg"></span></button>
          @else


                          <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              <button type="button" class="btn nav-item ml-2" id="logoutButton"><span class="fas fa-user fa-lg" style="color: blue"></span></button>
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>

          @endif

        </div>
      </nav>
    </div>
    <!-- Twitter-Feed -->
    <div class="d-flex my-2">
      <a class="dropdown-toggle" href="#" id="twitterFeedIcon" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fab fa-twitter fa-2x"></span></a>
      <div class="dropdown-menu" aria-labelledby="twitterDropdown" id="twitterFeedDropdown">
        <div class="dropdown-item">
          <a class="twitter-timeline" href="https://twitter.com/LonelinessEU?ref_src=twsrc%5Etfw">Tweets by LonelinessEU</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal/Popup  -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="LoginPopup" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MingleNet - Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <input id="email" type="email" class="form-control mb-2 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail-Address">

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <input id="password" type="password" class="form-control mb-2 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif


            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}


            <hr>
            <div class="form-group row mb-0">

                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-outline-primary">
                        {{ __('Login') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Navigation Bar including Search Form -->
{{-- <div class="container-fluid fixed-top" id="outerNavbar">
  <div class="d-flex flex-row justify-content-end">
    <div class="container mr-auto">
      <nav class="navbar navbar-expand-lg py-0" id="navBar">
        <a class="navbar-brand" href="/"><img class="img-responsive" width="45" height="40" src="{{asset('img/MLetterLogo.png')}}" alt="Mingle"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fas fa-bars fa-lg" id="navToggler"></span></button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Roadmap</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organizations<span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                <a class="dropdown-item" href="/organizations/silbernetz">Silbernetz</a>
                <a class="dropdown-item" href="#">Organization 2</a>
                <a class="dropdown-item" href="#">Organization 3</a>
                <a class="dropdown-item" href="#">Organization 4</a>
                <a class="dropdown-item" href="#">Organization 5</a>
                <a class="dropdown-item" href="#">Organization 6</a>
                <a class="dropdown-item" href="#">Organization 7</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/organizations">Show All Institutions</a>
              </div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item">
              @if (Auth::guest())
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
              @else

                              <a class="nav-link" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  {{ Auth::user()->name }} | Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>

              @endif
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Type here ..." aria-label="Search" id="searchForm">
            <button class="btn my-2 my-sm-0" type="submit" id="searchButton"><span class="fas fa-search fa-lg"></span> </button>
          </form>
        </div>
      </nav>
    </div>
    <div class="d-flex my-2">
      <a class="dropdown-toggle" href="#" id="twitterFeedIcon" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fab fa-twitter fa-2x"></span></a>
      <div class="dropdown-menu" aria-labelledby="twitterDropdown" id="twitterFeedDropdown">
        <div class="dropdown-item">
          <a class="twitter-timeline" href="https://twitter.com/LonelinessEU?ref_src=twsrc%5Etfw">Tweets by LonelinessEU</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
</div> --}}
</div>
