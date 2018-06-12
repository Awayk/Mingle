@extends('layouts.master')


@section('content')


<section id="mingleNetSection">
  <div class="container-fluid" id="mingleNetContainer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 align-self-center">
          <h1 class="display-4">Edit Post</h1>
        </div>
        <div class="col-md-5">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="section2">
  <div class="container">
    <h1>Edit Post</h1>

    <form class="" action="/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">

      @method('PATCH')
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title of your post</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" placeholder="Why loneliness is rising in a time of social networks">
      </div>

      @if ($post->lead_img != "")
        <img id="imgUploadPreview" class="img img-fluid" src="{{asset('storage/'.$post->lead_img)}}" alt="">
      @endif

      <div class="custom-file">
        <input type="file" class="custom-file-input imgInput" id="lead_img" name="lead_img" >
        <label class="custom-file-label" for="lead_img">{{ $post->lead_img }}</label>
        <small id="lead_img_help" class="form-text text-muted">The maximum filesize is 5MB | possible formats are JPG and PNG | The image will be resized and cropped to 1500px*500px</small>
        <div id="help_filetype"></div>
        <div id="help_filesize"></div>
      </div>

      <hr> {{--
      <div class="form-group">
        <label for="body">Short Summary of what to expect</label>
        <textarea class="form-control" id="lead" name="lead_description" maxlength="200" rows="2" value="{{ old('lead_description') }}" placeholder="Even though we can contact our friends 24/7 we are as lonely as never before. Technology is not the cure it is the incubator"></textarea>
        <small id="lead_description_help" class="form-text text-muted">Limited to 200 characters</small>
      </div> --}}

      <div class="form-group">
        <label for="body">Post Body</label>
        <textarea class="form-control summernote" id="body" name="body">{!! $post->body !!}</textarea>
      </div>

      <div class="form-group">
        <label for="organization_id">Post as</label>
        <select class="form-control" name="organization_id" id='organization_id'>
              <optgroup label="You">
                <option value="0">
                  Yourself (Your name will be displayed as author)
                </option>
              </optgroup>
              <optgroup label="One of your manged organizations">
              @foreach (Auth::user()->organizations as $organization)
                <option value="{{ $organization->name }}">
                  {{ $organization->name}}
                </option>
              @endforeach
            </select>
            </optgroup>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>







  </div>

</section>


@endsection

@section('pageJS')



@endsection
