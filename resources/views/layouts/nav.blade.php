  <!-- Navigation Bar including Search Form -->
  <div class="container-fluid fixed-top" id="outerNavbar">
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
  </div>
