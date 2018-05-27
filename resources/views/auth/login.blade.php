@extends('layouts.master')

@section('content')

  <!-- Network Promotion Section: Promotion of MingleNet & Possibility to join Network / New responsive Version -->
  <section id="mingleNetSection">
    <div class="container-fluid" id="mingleNetContainer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 align-self-center">
            <h1 class="display-4">Login to the MingleNet</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-4 col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-6 col-md-8">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-4 col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-6 col-md-8">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-outline-light">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </form>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Informative Section: Text & Picture -->
  <section id="infoSection1">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-7 align-self-center" id="textualColumn">
          <h3 class="text-muted">Your Organization is not yet participating?</h3>
          <h4 class="mb-4">Collaboration is Necessary - Now More Than Ever</h4>
          <p>In a world subject to rapid changes with thousands of possibilities<br>for people to connect, loneliness is a greater problem than suspected.</p>
          <p>We as organizations and communities need to work together closely<br>in order to assist in matters like this.</p>
          <a href="/register" class="btn btn-primary">Become a part of MingleNet</a>
        </div>
        <div class="col-md-5">
          <img class="d-block w-100 rounded" src="/img/Globe.jpg" alt="Globe">
        </div>
      </div>
    </div>
  </section>




  </div>
@endsection
