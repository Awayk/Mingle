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

    <a href="/posts"><i class="fas fa-angle-left"></i> back to all posts</a>
    <div class="card">
      @if ($post->lead_img != "")
        <img class="card-img-top" src="{{ asset('storage/'.$post->lead_img) }}" alt="Title Image">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">
          Posted by
          @if ($post->organization_name == "0" || $post->organization_name == null ||  $post->organization_name == "")
            {{ $post->user->name }}
          @else
            {{ $post->organization_name }}
          @endif
           | {{ $post->created_at->toFormattedDateString() }} | {{ $post->created_at->diffForHumans() }}
        </h6>
        <div class="card-text">{!! $post->body !!}</div>

      </div>
      <div class="card-footer text-muted">
        @if($prev)
          <a href="{{ route( 'posts.show', $prev ) }}" class="card-link">Previous</a>
        @endif
        @if($next)
          <a href="{{ route( 'posts.show', $next ) }}" class="card-link">Next</a>
        @endif
      </div>
    </div>
    @if (auth()->check()  && (auth()->user()->isAdmin() || auth()->user()->id == $post->user_id))
      <a href="{{ $post->id }}/edit"><button type="button" name="button" class="btn btn-outline-secondary">Edit</button></a>
    @endif



  </div>

</section>


@endsection

@section('pageJS')

<script>
  $(function() {
    //adding some basic styling classed to the purified Post Content to make it responsible
    $('img').addClass('img img-fluid');
    $('table').addClass('table table-bordered');
  });
</script>

@endsection
