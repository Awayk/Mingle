@extends('layouts.master')


@section('content')


<section id="mingleNetSection">
  <div class="container-fluid" id="mingleNetContainer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 align-self-center">
          <h1 class="display-4">Create a new Sponsor</h1>
        </div>
        <div class="col-md-5">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="section2">
  <div class="container">
    <h1>Write your new post</h1>

    <form class="" action="/sponsors" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Name of the Sponsor</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Why loneliness is rising in a time of social networks">
      </div>

      <div class="custom-file">
        <input type="file" class="custom-file-input imgInput" id="logo" name="logo" value="{{ old('logo')}}">
        <label class="custom-file-label" for="logo">Upload a Logo for your sponsor</label>
        <small id="logo_help" class="form-text text-muted">The maximum filesize is 5MB | possible formats are JPG and PNG </small>
        <div id="help_filetype"></div>
        <div id="help_filesize"></div>
      </div>

      <hr>



      <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            <img src="http://local.mingle.eu/storage/logos/sponsors/aperture.png" alt="">
          </label>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>







  </div>

</section>

<section id="section3">
  @php
    $files = Storage::disk('public')->allFiles('logos\sponsors');
  @endphp

  @foreach ($files as $file)

    <img src="{{asset('storage/'.$file)}}" alt="">

    {{ (string)$file }}

  @endforeach


</section>


@endsection
