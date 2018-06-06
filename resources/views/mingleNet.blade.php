@extends('layouts.master')


@section('content')

<section id="mingleNetSection">
  <div class="container-fluid">
    <div class="background-wrap" id="mingleNetBackground">
      <video autoplay muted loop id="mingleNetVideo">
          <source src="/img/AnimatedNetwork.mp4" type="video/mp4">
            Your Browser unfortunately does not support Backgroud-Videos
          </video>
    </div>
    <div class="" id="mingleNetHeader">
      <h1 class="display-3">MingleNet</h1>
      <p id="mingleNetParagraph">An innovative Network interconnecting Organizations with the same goal: Prevailling over Loneliness</p>
    </div>
  </div>
</section>

<section id="infoSection11">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <h3 class="text-center">Network</h3>
        <hr id="headingRuler">
        <img class="d-block w-100 mb-4" src="/img/MingleNet3.png" alt="Visual Description">
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-12 text-center pt-4 px-5">
        </div>
      </div>
    </div>
  </section>

<section id="infoSection12">
  <div class="container py-5 text-center">
    <h3 class="text-center">Roadmap</h3>
    <hr class="pb-3" id="headingRuler">
    <div class="carousel slide" id="infoCarousel" data-slide="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active text-center">
          <h3>Headline</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="carousel-item text-center">
          <h3>Headline 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="carousel-item text-center">
          <h3>Headline 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <a class="left carousel-control" href="#infoCarousel" role="button" data-slide="prev" id="carouselControl">
        <span class="fas fa-arrow-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#infoCarousel" role="button" data-slide="next" id="carouselControl">
        <span class="fas fa-arrow-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

  <!-- Informative Section: Text & Picture -->
  <section id="infoSection13">
    <div class="container py-5">
      <div class="row vertical-align">
        <div class="col-md-7 align-self-center" id="textualColumn">
          <h4 class="mb-4">Building Strong Relationships Between Every Party Involved</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-md-5">

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="/img/MingleAnimation1.mp4" autoplay muted loop></iframe>
          </div>
          {{-- <video  src="/img/MingleAnimation1.mp4" autoplay loop poster="/img/MingleNet2.PNG">
            MingleNet Relations
          </video> --}}
          {{-- <img class="d-block w-100" src="/img/MingleAnimation1.mp4" alt="MingleNet Relations"> --}}
        </div>
      </div>
    </div>
  </section>



  @endsection
