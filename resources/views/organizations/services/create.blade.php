@extends('layouts.master')


@section('content')


  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">Create a Service for your Organization's Page</h1>
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
    <form class="" action="/organizations/{{ strtolower($organization->name) }}/services" method="post">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="icon_id">Icon ID</label>
        <input type="number" class="form-control" id="icon_id" placeholder="225" name="icon_id" value="{{ old('icon_id') }}">
      </div>

      <div class="form-group">
        <label for="title">Service Title</label>
        <input type="text" class="form-control" id="title" placeholder="Help Telephone" name="title" value="{{ old('title') }}">
      </div>

      <div class="form-group">
        <label for="description">Short description <span class="text-muted">| later displayed as bullet points</span></label>
        <textarea class="form-control" id="description" rows="3" name="description" value="{{ old('description') }}"></textarea>
        <small id="description_help" class="form-text text-muted">Use ; (semicolon) to start a new bullet point</small>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

         @include('layouts.errors')

    </form>
    <br>
  </div>



@endsection
