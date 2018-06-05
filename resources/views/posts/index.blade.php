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
    <div class="row">
      <div class="card text-center col-12">
        <div class="card-body">
          <h3 class="card-title">{{ $post->title }}</h3>
          <p class="card-text">{{ str_limit(str_replace("&nbsp;", ' ', strip_tags($post->body)), 400) }}</p>
          <a href="/posts/{{$post->id}}" class="btn btn-outline-primary">Read the full Post</a>
        </div>
        <div class="card-footer text-muted">
          {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}
        </div>
      </div>
    </div>
    <br>
    @endforeach

    <a href="/posts/create" class="btn btn-outline-primary">Write a new Post</a>

  </div>

</section>


@endsection

@section('pageJS')

<script>
  $(function() {
    $('img').addClass('img img-fluid');
  });
</script>

@endsection
