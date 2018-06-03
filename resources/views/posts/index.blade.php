@extends('layouts.master')


@section('content')


  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">All Posts</h1>
              </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="section2">
    <div class="container">

      @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>Intro: {{ str_limit(str_replace("&nbsp;", ' ', strip_tags($post->body)), 200) }} </p>
        {!! $post->body !!}
      @endforeach




    </div>

  </section>


@endsection

@section('pageJS')

  <script>
    $(function(){
      $('img').addClass('img img-fluid');
    });
  </script>

@endsection
