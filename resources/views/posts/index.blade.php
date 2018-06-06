@extends('layouts.master')


@section('content')


<section id="mingleNetSection">
  <div class="container-fluid" id="mingleNetContainer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 align-self-center">
          <h1 class="display-4">All {{$posts->total()}} Posts</h1>
        </div>
        <div class="col-md-5">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="section2">
  <div class="container">

    @include('layouts.pagination', ['items' => $posts])

    @foreach ($posts as $post)
    <div class="row">
      <div class="card text-center w-100">
        {{-- <img class="card-img-top" src="{{asset('img/sunsetLonelyTree.jpg')}}" alt="Card image cap"> --}}
        <div class="card-body">
          <h3 class="card-title">{{ $post->title }}</h3>
          <!-- For the text preview: 1. take the $post->body | 2. delete everything between table tags to avoid display problems | 3. strip all html tags to get plain text | 4. exchange whitespace code with whitespace | 5. take the first 400 characters  -->
          <p class="card-text">{{ str_limit(str_replace("&nbsp;", ' ', strip_tags(preg_replace('#(<table.*?>).*?(</table>)#', '$1$2', $post->body))), 400) }}</p>
          <a href="/posts/{{$post->id}}" class="btn btn-outline-primary">Read the full Post</a>
        </div>
        <div class="card-footer text-muted">
          {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}
        </div>
      </div>
    </div>
    <br>
    @endforeach

    <div class="row">
        <a href="/posts/create" class="btn btn-outline-primary">Write a new Post</a>
    </div>


    @include('layouts.pagination', ['items' => $posts])




  </div>

</section>


@endsection

@section('pageJS')

<script>
  $(function() {
    $('img').addClass('img img-fluid');

  //   var pageNumber = 1;
  //   var articles;
  //   $.ajax({
  //       type : 'GET',
  //       url: "apiURL + '/pages?page=' + pageNumber",
  //       success : function(data){
  //           pageNumber +=1;
  //                  if(data.length == 0){
  //                     // :( no more articles
  //                  }else{
  //                      // Great we have more articles
  //                       articles = items .........
  //                  }
  //       },error: function(data){
  //
  //       },
  //   })
  // });
</script>

@endsection
