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

      @include('layouts.pagination', ['items' => $organizations])

      @foreach ($organizations as $organization)
        <div class="card">
          <h2 class="card-header">{{ $organization->name }}</h2>
          <div class="card-body">
            {{-- <h5 class="card-title">Special title treatment</h5> --}}
            <p class="card-text">{{ $organization->lead_description }}</p>
            <a href="/organizations/{{ $organization->name }}" class="btn btn-primary">Visit {{ $organization->name }}</a>
          </div>
        </div>
      @endforeach

    </div>

  </section>

@endsection
