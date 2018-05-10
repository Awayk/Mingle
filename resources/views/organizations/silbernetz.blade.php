@extends('layouts.master')

@section('content')


  <!-- Top Section - MingleNet -->
  <section id="section1">
    <img class="d-block w-100" src="{!! asset('/img/sunsetLonelyTreeFittedMirror.jpg') !!}" alt="Network" id="headImage">
    <div class="carousel-caption">
      <div class="container float-right" id="captionContainer">
        <h1 class="display-4">Silbernetz</h1>
        <p>The network for lonely and isolated senior people</p>
        <p>Help-telphone, friendly turns, access point for local activities</p>

        <button class="btn btn-light btn-outline-light" type="button" name="button">Donate</button>
      </div>
    </div>
  </section>

{{-- general information --}}
  <section id="section2" class="sectionContent">
    {{-- <div class="container-fluid my-5"> --}}
      {{-- <div class="jumbotron jumbotron-fluid"> --}}
        <div class="container">
          <h2 class="display-4">General Information</h2>
          <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">website</th>
                <td>  <a href="https://www.silbernetz.org">Silbernetz Hompage</a></td>
              </tr>
              <tr>
                <th scope="row">email</th>
                <td>silbernetz@hvb-bb.de</td>
              </tr>
              <tr>
                <th scope="row">telephone</th>
                <td>030 2354 48 22</td>
              </tr>
              <tr>
                <th scope="row">address</th>
                <td>
                  <address>
                    <strong>Silbernetz im HVD BB</strong><br>
                    Sprengelstraße 15<br>
                    13353 Berlin<br>
                  </address>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      {{-- </div> --}}
    {{-- </div> --}}
  </section>

  <section id="section3" class="sectionContent">
    <div class="container">
      <h2 class="text-center">Services</h2>
      <hr>

      <div class="row">

        <div class="col-md-4 text-center">
          <i class="fas fa-phone" style="font-size: 5em"></i>
          <h3>Emergency-Relief</h3>
          <hr>
          <ul class="text-left">
            <li>Hotline: 0800 470 80 90 (free of costs)</li>
            <li>24/7</li>
            <li>confitential, anonymous, free of costs hotline</li>
            <li>Finding og a "Silbernetz-Friend" possible</li>
            <li><strong>You can receive first support and get usefull information</strong></li>
          </ul>
        </div>

        <div class="col-md-4 text-center">
          <i class="fas fa-user-friends" style="font-size: 5em"></i>
          <h3>Silbernetz-Friend</h3>
          <hr>
          <ul class="text-left">
            <li>making friends by a regular phone call</li>
            <li>receiving information about local activities</li>
            <li><strong>Silbernetz-Friends support you first steps</strong></li>
          </ul>
        </div>

        <div class="col-md-4 text-center">
          <i class="far fa-compass" style="font-size: 5em"></i>
          <h3>local cooperation</h3>
          <hr>
          <ul class="text-left">
            <li>cooperation wirh supplier of regional and local services</li>
            <li>providing information about local services</li>
            <li>giving support for using regional services</li>
          </ul>
        </div>

      </div>
    </div>
  </section><!-- Ende section 3-->

  <section id="section4" style="background-color: rgb(249, 206, 173)" class="sectionContent">
    <div class="container">
      <h2 class="text-center">Sponsors</h2>
      <hr>


        <p>We would like to thank all of our sponsors, private, corporate or governmental, for their ongoing support</p>

        <h3>Our top Sponsors</h3>
        <hr>
        <div class="row text-center">
          <figure class="figure col-md-2">
              <img src="{{asset('img/icons/full-color/helicopter.png')}}" class="figure-img img-fluid" alt="Helicopter Example Company">
              <figcaption class="fiure-caption">Helicopter Example Company</figcaption>
          </figure>
          <figure class="figure col-md-2">
              <img src="{{asset('img/icons/full-color/shipwheel.png')}}" class="figure-img img-fluid" alt="Nautics Social Responsibility">
              <figcaption class="fiure-caption">Nautics Social Responsibility</figcaption>
          </figure>
          <figure class="figure col-md-2">
              <img src="{{asset('img/icons/full-color/briefcase.png')}}" class="figure-img img-fluid" alt="Group of Social Advocates">
              <figcaption class="fiure-caption">Group of Social Advocates</figcaption>
          </figure>
          <figure class="figure col-md-2">
              <img src="{{asset('img/icons/full-color/profile.png')}}" class="figure-img img-fluid" alt="Our many private Donators">
              <figcaption class="fiure-caption">Our many private Donators</figcaption>
          </figure>

        </div>

        <hr>
        <button class="btn btn-lg btn-primary" type="button" name="button">Become a Sponsor</button>





    </div>
  </section>

@endsection
