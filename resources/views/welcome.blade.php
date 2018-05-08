@extends('layouts.master')

{{-- to change the standard head attributes like title use the following sytax --}}
{{-- <head>
  <title>Mingle Mingle Mingle</title>
</head> --}}

@section('content')

  <!-- Top Section - MingleNet -->
  <section id="section1">
    <img class="d-block w-100" src="/img/NetworkFitted.jpg" alt="Network" id="homeImage">
    <div class="carousel-caption">
      <div class="container" id="captionContainer">
        <h1 class="display-4">Join MingleNet</h1>
        <p>The world's first Network of Organizations commited to fighting Loneliness</p>
        <button class="btn btn-light btn-outline-light" type="button" name="button">Become Part of it!</button>
      </div>
    </div>
  </section>

  <!-- Middle Section - Cards against Loneliness -->
  <section id="section2">
    <div class="container-fluid my-5">
      <h3 class="text-center my-5">Our Goals in fighting Loneliness</h3>
      <div class="card-deck">
        <div class="card">
          <img class="card-image-top w-100 d-block" src="/img/Waterglass.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Card Number 1</h4>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="card-footer">
              <small class="text-muted">Date: DD/MM/YYY</small>
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card-image-top w-100 d-block" src="/img/StayStrong.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Card Number 2</h4>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="card-footer">
              <small class="text-muted">Date: DD/MM/YYY</small>
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card-image-top w-100 d-block" src="/img/Globe.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Card Number 3</h4>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="card-footer">
              <small class="text-muted">Date: DD/MM/YYY</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
