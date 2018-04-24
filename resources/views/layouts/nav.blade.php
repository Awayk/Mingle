<!-- Navigation Bar -->
  <nav class="navbar navbar-light bg-light py-0">
    <a class="navbar-brand" href="#"><img class="img-responsive" width="180" height="70" src="{{asset('img/MLogo.png')}}" alt="Mingle"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Function 1</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown Menu 1<span class="caret"></span></a>
          <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
            <a class="dropdown-item" href="#">Item 1</a>
            <a class="dropdown-item" href="#">Item 2</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Item 3</a>
          </div>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Type here ..." aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
