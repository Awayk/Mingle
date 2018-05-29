@extends('layouts.master')

{{-- to change the standard head attributes like title use the following sytax --}}
{{-- <head>
  <title>Mingle Mingle Mingle</title>
</head> --}}

@section('content')


  <!-- Network Promotion Section: Promotion of MingleNet & Possibility to join Network / New responsive Version -->
  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">Join MingleNet</h1>
            <p>The world's first Network of Organizations commited to fighting Loneliness</p>
            <a href="/register" class="btn btn-light btn-outline-light">Become Part of it!</a>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Informative Section: Text & Picture -->
  <section id="infoSection1">
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

  <!-- Informative Section 2: Text & Picture-->
  <section id="infoSection2">
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

  <!-- Info Cards: Our Approach to Fighting Loneliness -->
  <section id="infoCardSection">
    <div class="container">
      <h3 class="text-center">Our Approach</h3>
      <hr id="headingRuler">
      <div class="card-deck py-5">
        <div class="card rounded" id="infoCard">
          <div class="text-center mt-4"><span class="fas fa-university fa-5x"></span></div>
          <div class="card-body text-center">
            <h5 class="card-title">Education</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Learn more</button>
          </div>
        </div>
        <div class="card rounded" id="infoCard">
          <div class="text-center mt-4"><span class="fas fa-handshake fa-5x"></span></div>
          <div class="card-body text-center">
            <h5 class="card-title">Collaboration</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Learn more</button>
          </div>
        </div>
        <div class="card rounded" id="infoCard">
          <div class="text-center mt-4"><span class="fas fa-users fa-5x"></span></div>
          <div class="card-body text-center">
            <h5 class="card-title">Connection</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscription Section: Subsription to Newsletter -->
  <section id="subscriptionSection">
    <div class="container-fluid text-center my-5">
      <h1 class="display-5">Subscribe for Updates:</h1>
      <form class="form">
        <div class="row justify-content-md-center">
          <div class="col-md-5">
            <input class="form-control sm my-3" type="text" placeholder="E-Mail ..." aria-label="Email-Subscription" id="subscriptionField">
            <button class="btn" type="submit" id="subscribeButton">Subscribe</button>
          </div>
        </div>
      </form>
    </div>
  </section>

<!-- Social Media Section: Links to Profiles for popular Platforms -->
<section id="socialMediaSection">
  <div class="container">
    <h3 class="text-center">Social Media</h3>
    <hr id="headingRuler">
  <div class="row my-5">
    <div class="col-md-3 text-center">
      <a href="#"><span class="fab fa-twitter fa-5x mb-2" id="twitterLink"></span></a>
      <h5 id="socialMediaHeader">Twitter</h5>
      <a href="#">Follow us on Twitter</a>
    </div>
    <div class="col-md-3 text-center">
      <a href="#"><span class="fab fa-facebook fa-5x mb-2" id="facebookLink"></span></a>
      <h5 id="socialMediaHeader">Facebook</h5>
      <a href="#">Like us on Facebook</a>
    </div>
    <div class="col-md-3 text-center">
      <a href="#"><span class="fab fa-instagram fa-5x mb-2" id="instagramLink"></span></a>
      <h5 id="socialMediaHeader">Instagram</h5>
      <a href="#">Check us out on Instagram</a>
    </div>
    <div class="col-md-3 text-center">
      <a href="#"><span class="fab fa-reddit-square fa-5x mb-2" id="redditLink"></span></a>
      <h5 id="socialMediaHeader">Reddit</h5>
      <a href="#">Read about us on Reddit</a>
    </div>
  </div>
</div>
</section>


@endsection
