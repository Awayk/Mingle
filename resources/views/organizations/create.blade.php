@extends('layouts.master')


@section('content')


  <h1>Create a Page for your Organization</h1>

  <form class="" action="/organizations" method="post">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Organization name</label>
      <input type="text" class="form-control" id="name" placeholder="My Organization" name="organization">
    </div>

    <div class="form-group">
      <label for="short_description">Short description</label>
      <textarea class="form-control" id="short_description" rows="3" name="short_description"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>

@endsection
