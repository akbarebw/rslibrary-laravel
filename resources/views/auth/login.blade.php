@extends('layouts.auth');

@section('content')
 <div class="page-content page-auth">
      <div class="section-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center">
              <img
                src="/images/login.png"
                alt=""
                class="w-50 mb-4 mb-lg-none"
              />
            </div>
            <div class="col-lg-5">
              <h3>
                Berkembang melalui Buku, <br />
               Pusat Pengetahuan.
              </h3>
              <form class="mt-3">
                <div class="form-group">
                  <label>Email address</label>
                  <input
                    type="email"
                    class="form-control w-75"
                    aria-describedby="emailHelp"
                  />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control w-75" />
                </div>
                <a
                  class="btn btn-primary btn-block w-75 mt-4"
                  href="{{ url('home') }}"
                >
                  Sign In to My Account
                </a>
                <a class="btn btn-light w-75 mt-2" href="{{ url('register') }}">
                  Sign Up
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

