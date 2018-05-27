@extends('layouts.master')


@section('content')


  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">Create a Page for your Organization</h1>
              </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container" id="section2">
    <br>
    <br>
    <form class="" action="/organizations" method="post" enctype="multipart/form-data">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Organization name</label>
        <input type="text" class="form-control" id="name" placeholder="My Organization" name="name" value="{{ old('name') }}">
      </div>

      <input type="file" name="logo" value="">

      {{-- <div class="custom-file">
        <label class="custom-file-label" for="logo">Upload Your Organization's Logo</label>
        <input type="file" class="custom-file-input" id="logo" name="logo">
      </div> --}}

      <div class="form-group">
        <label for="lead_description">Short description </label>
        <textarea class="form-control" id="lead_description" rows="3" name="lead_description" value="{{ old('lead_description') }}"></textarea>
        <small id="lead_description_help" class="form-text text-muted">Use ; (semicolon) to start a new paragraph</small>
      </div>

      <div class="form-group">
        <label for="link">Organization Homepage</label>
        <input type="text" class="form-control" id="link" placeholder="www.your-organization.com" name="link" value="{{ old('link') }}">
      </div>

      <div class="form-group">
        <label for="mail">Contact Mail</label>
        <input type="email" class="form-control" id="mail" placeholder="name@organization.com" name="mail" value="{{ old('mail') }}">
      </div>

      <div class="form-group">
        <label for="telephone">Contact Telephone Number</label>
        <input type="text" class="form-control" id="telephone" placeholder="01234/56789" name="telephone" value="{{ old('telephone') }}">
      </div>

      <div class="form-group">
        <label for="location_name">Location Name</label>
        <input type="text" class="form-control" id="location_name" placeholder="Our Organization in the Highlight Towers" name="location_name" value="{{ old('location_name') }}">
      </div>

      <div class="form-group">
        <label for="zip">ZIP Code</label>
        <input type="text" class="form-control" id="zip" placeholder="24937" name="zip" value="{{ old('zip') }}">
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" id="location" placeholder="Flensburg" name="location" value="{{ old('location') }}">
      </div>

      <div class="form-group">
        <label for="street">Street</label>
        <input type="text" class="form-control" id="street" placeholder="Hudson Road" name="street" value="{{ old('street') }}">
      </div>

      <div class="form-group">
        <label for="street_number">Street Number</label>
        <input type="text" class="form-control" id="street_number" placeholder="37c" name="street_number" value="{{ old('street_number') }}">
      </div>

      <div class="form-group">
        <label for="donate_link">Organization's Donate Link</label>
        <input type="text" class="form-control" id="donate_link" placeholder="www.your-organization.com/donate" name="donate_link" value="{{ old('donate_link') }}">
      </div>

      <div class="form-group">
        <label for="sponsor_message">Message to your Sponsors and Donators visiting your Page </label>
        <textarea class="form-control" id="sponsor_message" rows="3" name="sponsor_message" value="{{ old('sponsor_message') }}"></textarea>
        <small id="sponsor_message_help" class="form-text text-muted">Use ; (semicolon) to start a new paragraph</small>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>


         @include('layouts.errors')

    </form>
    <br>
  </div>



@endsection
