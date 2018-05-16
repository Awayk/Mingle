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
    <form class="" action="/organizations" method="post">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Organization name</label>
        <input type="text" class="form-control" id="name" placeholder="My Organization" name="name">
      </div>

      <div class="form-group">
        <label for="lead_description">Short description </label>
        <textarea class="form-control" id="lead_description" rows="3" name="lead_description"></textarea>
        <small id="lead_description_help" class="form-text text-muted">Use ; (semicolon) to start a new paragraph</small>
      </div>

      <div class="form-group">
        <label for="link">Organization Homepage</label>
        <input type="text" class="form-control" id="link" placeholder="www.your-organization.com" name="link">
      </div>

      <div class="form-group">
        <label for="mail">Contact Mail</label>
        <input type="email" class="form-control" id="mail" placeholder="name@organization.com" name="mail">
      </div>

      <div class="form-group">
        <label for="telephone">Contact Telephone Number</label>
        <input type="text" class="form-control" id="telephone" placeholder="01234/56789" name="telephone">
      </div>

      <div class="form-group">
        <label for="location_name">Location Name</label>
        <input type="text" class="form-control" id="location_name" placeholder="Our Organization in the Highlight Towers" name="location_name">
      </div>

      <div class="form-group">
        <label for="zip">ZIP Code</label>
        <input type="text" class="form-control" id="zip" placeholder="24937" name="zip">
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" id="location" placeholder="Flensburg" name="location">
      </div>

      <div class="form-group">
        <label for="street">Street</label>
        <input type="text" class="form-control" id="street" placeholder="Hudson Road" name="street">
      </div>

      <div class="form-group">
        <label for="street_number">Street Number</label>
        <input type="text" class="form-control" id="street_number" placeholder="37c" name="street_number">
      </div>

      <div class="form-group">
        <label for="donate_link">Organization's Donate Link</label>
        <input type="text" class="form-control" id="donate_link" placeholder="www.your-organization.com/donate" name="donate_link">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

         @include('layouts.errors')

    </form>
    <br>
  </div>



@endsection
