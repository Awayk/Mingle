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
  @foreach ($sponsors as $sponsor)
    <div class="">
      <img class="img img-fluid" src="{{asset('/storage/'.$sponsor->logo)}}" alt="">
      <h4>{{ $sponsor->name }}</h4>
    </div>

  @endforeach
</section>


@endsection
