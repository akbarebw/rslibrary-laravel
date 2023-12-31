@extends('layouts.auth')

@section('content')
<div class="page-content page-auth">
  <div class="section-auth" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center row-login">
        <div class="col-lg-6 text-center">
          <img src="/images/login.png" alt="" class="w-50 mb-4 mb-lg-none" />
        </div>
        <div class="col-lg-5">
          <h3>
            Berkembang melalui Buku, <br />
            Pusat Pengetahuan.
          </h3>
          <form method="POST" action="{{ route('login') }}" class="mt-3">
            @csrf
            <div class="form-group">
              <label>Email address</label>
              <input id="email" type="email" class="form-control w-75 @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label>Password</label>
              <input id="password" type="password" class="form-control w-75 @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
              @error('password')
              <span class=" invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block w-75 mt-4">
              Sign In to My Account
            </button>
            <a class="btn btn-light w-75 mt-2" href="{{ route('register') }}">
              Sign Up
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection