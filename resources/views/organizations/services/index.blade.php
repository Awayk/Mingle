@extends('layouts.master')


@section('content')


  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">All the Organizations currently participating</h1>
              </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="section2">
    <div class="container">

      @foreach ($services as $service)
        <div class="card">
          <h2 class="card-header">{{ $service->title }}</h2>
          <div class="card-body">
            {{-- <h5 class="card-title">Special title treatment</h5> --}}
            <p class="card-text">{{ $service->description }}</p>
            <a href="/organizations/{{ $organization->name }}/services/{{ $service->id }}/edit" class="btn btn-outline-secondary">Edit {{ $service->title }}</a>
          </div>
        </div>
      @endforeach

    </div>

  </section>

@endsection
