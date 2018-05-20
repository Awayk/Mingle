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
  <form class="" action="/organizations/{{ strtolower($organization->name) }}/services/{{ $service->id }}" method="post">

    @method('PATCH') {{ csrf_field() }}

    <div class="form-group">
      <label for="icon_id">Icon</label>



      <div class="row text-center">
        <select class="form-control col-6" name="icon_id" id='icon_id'>
            @foreach ($icons as $icon)
              {{-- if the icon id matches the current icon_id of the service save its class in $initialIcon for the first #iconPreview --}}
              @if ( $icon->id === $service->icon_id)
                @php
                  $initialIcon = $icon->html_class;
                @endphp
              @endif
              {{-- create an option for each DB icon entry --}}
              <option value="{{ $icon->id }}" {{ $icon->id === $service->icon_id  ? 'selected' : '' }}>
                {{ substr($icon->html_class, 7) }}
              </option>
            @endforeach
          </select>
        <div class="col-6">
          <i id="iconPreview" class="{{ $initialIcon }}" style="font-size: 5em"></i>
        </div>
      </div>

      <div class="form-group">
        <label for="title">Service Title</label>
        <input type="text" class="form-control" id="title" placeholder="Help Telephone" name="title" value="{{ $service->title }}">
      </div>

      <div class="form-group">
        <label for="description">Short description <span class="text-muted">| later displayed as bullet points</span></label>
        <textarea class="form-control" id="description" rows="3" name="description">{{ $service->description }}</textarea>
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
