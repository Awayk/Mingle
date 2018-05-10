@extends('layouts.master')

{{-- to change the standard head attributes like title use the following sytax --}}
{{-- <head>
  <title>Mingle Mingle Mingle</title>
</head> --}}

@section('content')


    <!-- Top Section - Promotion of MingleNet & Possibility to join Network -->
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

    <!-- Informative Section - Text & Picture -->
    <section id="section2">
      <div class="container py-5">
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
    </section>

    <!-- Informative Section 2 - Text & Picture-->
    <section id="section3">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-5">
            <img class="d-block w-100 rounded" src="/img/LongRoad.jpg" alt="Office Desk">
          </div>
          <div class="col-md-7 pl-5 align-self-center" id="textualColumn">
            <h4 class="mb-4">A Long Road - But We are Prepared to Take it on</h4>
            <p>In a world subject to rapid changes with thousands of possibilities<br>for people to connect, loneliness is a greater problem than suspected.</p>
            <p>We as organizations and communities need to work together closely<br>in order to assist in matters like this.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Lower Section - Info Cards -->
    <section id="section4">
      <div class="container">
        <div class="card-deck py-5">
          <div class="card rounded">
            <img class="card-image-top img-fluid w-100 rounded-top" src="/img/Waterglass.jpg" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">Providing a Platform</h5>
              <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Read more</button>
            </div>
          </div>
          <div class="card rounded">
            <img class="card-image-top img-fluid h-50 w-100 rounded-top" src="/img/StayStrong.jpg" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">Connecting Individuals</h5>
              <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Read more</button>
            </div>
          </div>
          <div class="card rounded">
            <img class="card-image-top img-fluid w-100 rounded-top" src="/img/Globe.jpg" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">Informing People</h5>
              <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Read more</button>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection
