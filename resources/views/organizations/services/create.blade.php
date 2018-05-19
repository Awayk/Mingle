@extends('layouts.master')




@section('content')


  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">Create a Service for your Organization's Page</h1>
              </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container" id="section2">
    <br>
    <br>
    <form class="" action="/organizations/{{ strtolower($organization->name) }}/services" method="post">

      {{ csrf_field() }}

      {{-- <div class="form-group">
        <label for="icon_id">Icon ID</label>
        <input type="number" class="form-control" id="icon_id" placeholder="225" name="icon_id" value="{{ old('icon_id') }}">
      </div> --}}

      <div class="form-group">
        <label for="icon_id">Icon</label>

        <div class="row text-center">
          <select class="form-control col-6" name="icon_id" id='icon_id'>
            @foreach ($icons as $icon)
              <option value="{{ $icon->id }}">
                <i class="{{ substr($icon->html_class, 7) }}" style="font-size: 5em"></i>{{ substr($icon->html_class, 7) }}
              </option>
            @endforeach

          </select>
          <div class="col-6" >
            <i id="iconPreview" class="fas fa-address-book" style="font-size: 5em"></i>
          </div>
        </div>


      </div>


      <div class="form-group">
        <label for="title">Service Title</label>
        <input type="text" class="form-control" id="title" placeholder="Help Telephone" name="title" value="{{ old('title') }}">
      </div>

      <div class="form-group">
        <label for="description">Short description <span class="text-muted">| later displayed as bullet points</span></label>
        <textarea class="form-control" id="description" rows="3" name="description" value="{{ old('description') }}"></textarea>
        <small id="description_help" class="form-text text-muted">Use ; (semicolon) to start a new bullet point</small>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

         @include('layouts.errors')

    </form>
    <br>
  </div>


  <script type="text/javascript">
    $(function(){
      var oldClass = $("#iconPreview").attr('class');
      $("#icon_id").change(function(){
        var newClass = "fas fa-"+$("#icon_id option:selected").text().trim();
        console.log(oldClass);
        console.log(newClass);
        $("#iconPreview").removeClass(oldClass).addClass(newClass);
        oldClass = newClass;
      });
    });
  </script>

@endsection
