@extends('layouts.master')


@section('content')

  <section id="organizationLeadSection">
    <div class="container-fluid" id="organizationLeadContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">{{ $organization->name }}</h1>
            @php
              $lead_descriptions = explode(';', $organization->lead_description);
            @endphp
            @foreach ($lead_descriptions as $lead)
              <p>{{ $lead}}</p>
            @endforeach

            <button class="btn btn-light btn-outline-light" type="button" name="button">Donate</button>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- general information --}}
  <section id="section2" class="sectionContent">

    {{-- <img src="/storage/logos/test3.jpg" alt=""> --}}
    {{-- <div class="container-fluid my-5"> --}}
      {{-- <div class="jumbotron jumbotron-fluid"> --}}
        <div class="container">
          <h2 class="display-4">
            General Information
            @if (auth()->check()  && (auth()->user()->isAdmin() || auth()->user()->id == $organization->user_id))
              <a href="{{ $organization->name }}/edit"><button type="button" name="button" class="btn btn-outline-secondary">Edit</button></a>
            @endif
          </h2>

          <div class="row">

            <table class="table table-striped col-6">
              <tbody>
                <tr>
                  <th scope="row">Website</th>
                  <td>  <a href="{{$organization->link}}">{{ $organization->name }} Hompage</a></td>
                </tr>
                <tr>
                  <th scope="row">E-Mail</th>
                  <td>{{ $organization->mail }}</td>
                </tr>
                <tr>
                  <th scope="row">Telephone</th>
                  <td>{{ $organization->telephone }}</td>
                </tr>
                <tr>
                  <th scope="row">Address</th>
                  <td>
                    <address>
                      <strong>{{ $organization->location_name }}</strong><br>
                      {{ $organization->street }} {{ $organization->street_number }}<br>
                      {{ $organization->zip }} {{ $organization->location }}<br>
                    </address>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="col-6">
              @if ($organization->logo !== "")
                <img src="{{asset('storage/'.$organization->logo)}}" class="img img-fluid" />
              @endif
              {{-- Exchange the img by a placeholder <img src="{{asset("storage/$organization->logo")}}" onerror="this.onerror=null;this.src='{{asset("img/MLetterLogo.png")}}';" class="img img-fluid" /> --}}
            </div>


          </div>

        </div>
      {{-- </div> --}}
    {{-- </div> --}}
  </section>


  <section id="section3" class="sectionContent">
    <div class="container">
      <h2 class="text-center">
        Services
        @if (auth()->check()  && (auth()->user()->isAdmin() || auth()->user()->id == $organization->user_id))
          <a href="{{ $organization->name }}/services"><button type="button" name="button" class="btn btn-outline-secondary">Edit</button></a>
        @endif
      </h2>
      <hr>

      <div class="row">

        @foreach ($organization->services as $service)
          <div class="col-md-4 text-center">
            <i class="{{ $service->icon->html_class }}" style="font-size: 5em"></i>
            <h3>{{ $service->title }}</h3>
            <hr>
            <ul class="text-left">
              @php
                $service_descriptions = explode(';', $service->description);
              @endphp
              @foreach ($service_descriptions as $description)
                <li>{{ $description }}</li>
              @endforeach
            </ul>
          </div>


        @endforeach

      </div>
    </div>
  </section><!-- Ende section 3-->

  <section id="section4" style="background-color: rgb(249, 206, 173)" class="sectionContent">
    <div class="container">
      <h2 class="text-center">
        Sponsors
        @if (auth()->check()  && (auth()->user()->isAdmin() || auth()->user()->id == $organization->user_id))
          <a href="#"><button type="button" name="button" class="btn btn-outline-secondary">Edit</button></a>
        @endif
      </h2>
      <hr>

        @php
          $sponsor_messages = explode(';', $organization->sponsor_message);
        @endphp
        @foreach ($sponsor_messages as $message)
          <p>{{ $message}}</p>
        @endforeach

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
