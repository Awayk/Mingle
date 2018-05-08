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

  <!-- Informative Section -->
  <section id="section2">
    <div class="container my-5">
      <div class="row">
        <div class="col-md-7 align-self-center" id="textualColumn">
          <h4 class="mb-4">Collaboration is Necessary - Now More Than Ever</h4>
          <p>In a world subject to rapid changes with thousands of possibilities<br>for people to connect, loneliness is a greater problem than suspected.</p>
          <p>We as organizations and communities need to work together closely<br>in order to assist in matters like this.</p>
        </div>
        <div class="col-md-5">
          <img class="d-block w-100 rounded" src="/img/Globe.jpg" alt="Globe">
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>


  <!-- Middle Section - Cards against Loneliness -->
  <section id="section3">
    <div class="container">
      <h1 id="section2Header" class="text-center pt-3">Headline</h1>
      <div class="card-deck">
        <div class="card rounded">
          <img class="card-image-top w-100 d-block rounded-top" src="/img/Waterglass.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Providing a Platform</h4>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="card-footer">
              <small class="text-muted">Further Information: ...</small>
            </div>
          </div>
        </div>
        <div class="card rounded">
          <img class="card-image-top w-100 d-block rounded-top" src="/img/StayStrong.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Connecting Individuals</h4>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="card-footer">
              <small class="text-muted">Further Information: ...</small>
            </div>
          </div>
        </div>
        <div class="card rounded">
          <img class="card-image-top w-100 d-block rounded-top" src="/img/Globe.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Informing People</h4>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="card-footer">
              <small class="text-muted">Further Information: ...</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
