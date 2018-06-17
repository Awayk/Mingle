@extends('layouts.master')


@section('content')


<section id="mingleNetSection">
  <div class="container-fluid" id="mingleNetContainer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 align-self-center">
          <h1 class="display-4">All Sponsor</h1>
        </div>
        <div class="col-md-5">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="section2">
  <div class="container-fluid">
    <div class="d-flex flex-wrap">
      @foreach ($sponsors as $sponsor)
        <figure class="figure p-2">
          <img src="{{asset('/storage/'.$sponsor->logo)}}" class="figure-img img-fluid rounded sponsorLogo" alt="{{ $sponsor->name }}">
          <figcaption class="figure-caption text-center sponsorLogoCaption">{{ $sponsor->name }}</figcaption>
        </figure>

      @endforeach
    </div>

    <div class="row">
      <a href="sponsors/create" class="btn btn-outline-primary">Create new Sponsor</a>
    </div>
  </div>




</section>


@endsection
