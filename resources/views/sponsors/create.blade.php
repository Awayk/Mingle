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

    <form class="" action="/sponsors" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Name of the Sponsor</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Why loneliness is rising in a time of social networks">
      </div>

      <div class="form-group">
        <span class="switch">
          <span id="switchLabelBefore">Upload Sponosor Logo</span>
          <input type="checkbox" class="switch" id="switchLogoIcon" name="switchLogoIcon">
          <label for="switchLogoIcon">Use a generic icon</label>
        </span>
      </div>

      <div class="custom-file" id="logoUpload">
        <input type="file" class="custom-file-input imgInput" id="logo" name="logo" value="{{ old('logo')}}">
        <label class="custom-file-label" for="logo">Upload a Logo for your sponsor</label>
        <small id="logo_help" class="form-text text-muted">The maximum filesize is 5MB | possible formats are JPG and PNG </small>
        <div id="help_filetype"></div>
        <div id="help_filesize"></div>
      </div>

      <hr>



      <div class="form-group" id="iconSelection">
        <div class="form-check ">
          @php $icons = Storage::disk('public')->allFiles('logos\sponsors\icons');
          @endphp

          @foreach ($icons as $icon)

          <label class="form-check-label iconRadios" for="icon{{$loop->index}}">
                <input class="form-check-input" type="radio" name="icon" id="icon{{$loop->index}}" value="{{ $icon }}">
                <img src="{{asset('storage/'.$icon)}}" alt="">
              </label>

          @endforeach

        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>







  </div>

</section>



@endsection

@section('pageJS')

<script>
  $(function() {
    $("#switchLabelBefore").click(function(){$("#switchLogoIcon").click(); return false;});

    toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
    //this will call our toggleFields function every time the selection value of our underAge field changes
    $("#switchLogoIcon").change(function () {
        toggleFields();
    });

  });

  function toggleFields() {
      if ($("#switchLogoIcon").prop("checked")) {
        $("#iconSelection").show();
        $("#logoUpload").hide();
      }
      else {
        $("#iconSelection").hide();
        $("#logoUpload").show();
      }
  }
</script>


@endsection
