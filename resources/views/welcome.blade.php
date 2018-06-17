@extends('layouts.master')

{{-- to change the standard head attributes like title use the following sytax --}}
{{-- <head>
  <title>Mingle Mingle Mingle</title>
</head> --}}

@section('content')


<div class="modal fade" tabindex="-1" role="dialog" id="choosePageMode">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title justify-content-center">Choose Page-Mode</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Welcome to Mingle. Our team is always looking to provide the best experience for users visiting our site.
          Since we don't want to save any of your personal data, this will require you to choose a Mode for the Webpage upon first arrival.<br><br>
          The Standard-Mode will be the choice to go if you are looking to explore the platform and learn more about it as well as loneliness and organizations working against it.<br>
          If you are looking for help for yourself or someone else, you should choose the Mingle-Mode to be guided through the platform and find a suitable organization or partner.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Standard-Mode</button>
        <button type="button" class="btn btn-dark" href="#">Mingle-Mode</button>
      </div>
    </div>

  </div>
</div>

</div>

  <!-- Network Promotion Section: Promotion of MingleNet & Possibility to join Network / New responsive Version -->
  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">Join MingleNet</h1>
            <p>The world's first Network of Organizations commited to fighting Loneliness</p>
            <a href="/register" class="btn btn-light btn-outline-light">Become Part of it!</a>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">


      {{-- <div class="card-deck">
        @foreach ($posts as $post)
          <div class="card text-center">
            @if ($post->lead_img != "")
              <img class="card-img-top" src="{{ asset('storage/'.$post->lead_img) }}" alt="Title Image">
            @endif
            <div class="card-body">
              <h3 class="card-title">{{ $post->title }}</h3>
              <!-- For the text preview: 1. take the $post->body | 2. delete everything between table tags to avoid display problems | 3. strip all html tags to get plain text | 4. exchange whitespace code with whitespace | 5. take the first 400 characters  -->
              <p class="card-text">{{ str_limit(str_replace("&nbsp;", ' ', strip_tags(preg_replace('#(<table.*?>).*?(</table>)#', '$1$2', $post->body))), 400) }}</p>
              <a href="/posts/{{$post->id}}" class="btn btn-outline-primary">Read the full Post</a>
            </div>
            <div class="card-footer text-muted">
              @if ($post->organization_name == "0" || $post->organization_name == null ||  $post->organization_name == "")
                {{ $post->user->name }}
              @else
                {{ $post->organization_name }}
              @endif
               | {{ $post->created_at->diffForHumans() }}
            </div>
          </div>
        @endforeach
      </div> --}}

      {{-- <div class="card-columns">
        @foreach ($posts as $post)
          <div class="card text-center">
            @if ($post->lead_img != "")
              <img class="card-img-top" src="{{ asset('storage/'.$post->lead_img) }}" alt="Title Image">
            @endif
            <div class="card-body">
              <h3 class="card-title">{{ $post->title }}</h3>
              <!-- For the text preview: 1. take the $post->body | 2. delete everything between table tags to avoid display problems | 3. strip all html tags to get plain text | 4. exchange whitespace code with whitespace | 5. take the first 400 characters  -->
              <p class="card-text">{{ str_limit(str_replace("&nbsp;", ' ', strip_tags(preg_replace('#(<table.*?>).*?(</table>)#', '$1$2', $post->body))), 200) }}</p>
              <a href="/posts/{{$post->id}}" class="btn btn-outline-primary">Read the full Post</a>
            </div>
            <div class="card-footer text-muted">
              @if ($post->organization_name == "0" || $post->organization_name == null ||  $post->organization_name == "")
                {{ $post->user->name }}
              @else
                {{ $post->organization_name }}
              @endif
               | {{ $post->created_at->diffForHumans() }}
            </div>
          </div>
        @endforeach

      </div> --}}
    </div>
  </section>

  <section>
    <div id="welcomePostsCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#welcomePostsCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#welcomePostsCarousel" data-slide-to="1"></li>
        <li data-target="#welcomePostsCarousel" data-slide-to="2"></li>
        <li data-target="#welcomePostsCarousel" data-slide-to="3"></li>
        <li data-target="#welcomePostsCarousel" data-slide-to="4"></li>
        <li data-target="#welcomePostsCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        @foreach ($posts as $post)
          @php
            $path = "";
            $preset = [];
            if ($post->lead_img != ""){
              $path = $post->lead_img;
            } else { //take one of the preset images at a random basis !could create topic img disruption
              for ($i=1; $i < 7; $i++) {
                $number = str_pad((string)$i, 2, "0", 0);
                array_push($preset, 'postImg/preset/'.$number.'.jpg');
              }
              $path =  $preset[rand(0, 5)];
            }
          @endphp
          <div class="carousel-item">
            <img class="d-block w-100 welcomePostsCarouselImg" src="{{asset('storage/'.$path)}}" alt="slide Image">
            <a href="/posts/{{ $post->id }}">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $post->title }}</h5>
                <p class="d-none d-sm-block">{{ str_limit(str_replace("&nbsp;", ' ', strip_tags(preg_replace('#(<table.*?>).*?(</table>)#', '$1$2', $post->body))), 200) }}</p>
              </div>
            </a>
          </div>

        @endforeach
      </div>
      <a class="carousel-control-prev" href="#welcomePostsCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#welcomePostsCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- Informative Section: Text & Picture -->
  <section id="infoSection1">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-7 align-self-center" id="textualColumn">
          <h4 class="mb-4">Collaboration is Necessary - Now More Than Ever</h4>
          <p>In a world subject to rapid changes with thousands of possibilities<br>for people to connect, loneliness is a greater problem than suspected.</p>
          <p>We as organizations and communities need to work together closely<br>in order to assist in matters like this.</p>
        </div>
        <div class="col-md-5">
          <img class="d-block w-100 rounded" src="/img/Globe.jpg" alt="Globe">
        </div>
      </div>
    </div>
  </section>

  <!-- Informative Section 2: Text & Picture-->
  <section id="infoSection2">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5">
          <img class="d-block w-100 rounded" src="/img/LongRoad.jpg" alt="Office Desk">
        </div>
        <div class="col-md-7 pl-5 align-self-center" id="textualColumn">
          <h4 class="mb-4">A Long Road - But We are Prepared to Take it on</h4>
          <p>In a world subject to rapid changes with thousands of possibilities<br>for people to connect, loneliness is a greater problem than suspected.</p>
          <p>We as organizations and communities need to work together closely<br>in order to assist in matters like this.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Cards: Our Approach to Fighting Loneliness -->
  <section id="infoCardSection">
    <div class="container">
      <h3 class="text-center">Our Approach</h3>
      <hr id="headingRuler">
      <div class="card-deck py-5">
        <div class="card rounded" id="infoCard">
          <div class="text-center mt-4"><span class="fas fa-university fa-5x"></span></div>
          <div class="card-body text-center">
            <h5 class="card-title">Education</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Learn more</button>
          </div>
        </div>
        <div class="card rounded" id="infoCard">
          <div class="text-center mt-4"><span class="fas fa-handshake fa-5x"></span></div>
          <div class="card-body text-center">
            <h5 class="card-title">Collaboration</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Learn more</button>
          </div>
        </div>
        <div class="card rounded" id="infoCard">
          <div class="text-center mt-4"><span class="fas fa-users fa-5x"></span></div>
          <div class="card-body text-center">
            <h5 class="card-title">Connection</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button id="readButton" class="btn btn-sm btn-disabled mb-2" type="button">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscription Section: Subsription to Newsletter -->
  <section id="subscriptionSection">
    <div class="container-fluid text-center my-5">
      <h1 class="display-5">Subscribe for Updates:</h1>
      <form class="form">
        <div class="row justify-content-md-center">
          <div class="col-md-5">
            <input class="form-control sm my-3" type="text" placeholder="E-Mail ..." aria-label="Email-Subscription" id="subscriptionField">
            <button class="btn" type="submit" id="subscribeButton">Subscribe</button>
          </div>
        </div>
      </form>
    </div>
  </section>

<!-- Social Media Section: Links to Profiles for popular Platforms -->
<section id="socialMediaSection">
  <div class="container">
    <h3 class="text-center">Social Media</h3>
    <hr id="headingRuler">
  <div class="row my-5">
    <div class="col-md-3 text-center">
      <a href="https://twitter.com/projectmingle"><span class="fab fa-twitter-square fa-5x mb-2" id="twitterLink"></span></a>
      <h5 id="socialMediaHeader">Twitter</h5>
      <a href="https://twitter.com/projectmingle">Follow us on Twitter</a>
    </div>
    <div class="col-md-3 text-center">
      <a href="https://www.facebook.com/projectmingle"><span class="fab fa-facebook-square fa-5x mb-2" id="facebookLink"></span></a>
      <h5 id="socialMediaHeader">Facebook</h5>
      <a href="https://www.facebook.com/projectmingle">Like us on Facebook</a>
    </div>
    <div class="col-md-3 text-center">
      <a href="https://www.instagram.com/projectmingle/?hl=de"><span class="fab fa-instagram fa-5x mb-2" id="instagramLink"></span></a>
      <h5 id="socialMediaHeader">Instagram</h5>
      <a href="https://www.instagram.com/projectmingle/?hl=de">Check us out on Instagram</a>
    </div>
    <div class="col-md-3 text-center">
      <a href="#"><span class="fab fa-snapchat-square fa-5x mb-2" id="snapchatLink"></span></a>
      <h5 id="socialMediaHeader">Snapchat</h5>
      <a href="#">Find us on Snapchat</a>
    </div>
  </div>
</div>
</section>


@endsection


@section('pageJS')
  <script>
    $('#welcomePostsCarousel').find('.carousel-item').first().addClass('active');
  </script>
@endsection
