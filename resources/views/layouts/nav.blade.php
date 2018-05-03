  <!-- Navigation Bar -->
  <div class="container-fluid" id="outerNavbar">
    <div class="container">
      <nav class="navbar navbar-expand py-0" id="navBar">
        <a class="navbar-brand" href="#"><img class="img-responsive" width="45" height="40" src="{{asset('img/MLetterLogo.png')}}" alt="Mingle"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Activities</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organizations<span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                <a class="dropdown-item" href="#">Organization 1</a>
                <a class="dropdown-item" href="#">Organization 2</a>
                <a class="dropdown-item" href="#">Organization 3</a>
                <a class="dropdown-item" href="#">Organization 4</a>
                <a class="dropdown-item" href="#">Organization 5</a>
                <a class="dropdown-item" href="#">Organization 6</a>
                <a class="dropdown-item" href="#">Organization 7</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Show All Institutions</a>
              </div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Type here ..." aria-label="Search" id="searchForm">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" id="searchButton">Search</button>
          </form>
        </div>
      </nav>
    </div>
  </div>
