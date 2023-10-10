@extends('layouts.auth');

@section('content')
    <div class="page-content page-auth" id="register">
    <div class="section-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-4 mx-auto">
            <h2>
              Memulai baca buku <br />
              dengan cara terbaru
            </h2>
            <form class="mt-3">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control is-valid" aria-describedby="nameHelp" v-model="name" autofocus />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control is-invalid" aria-describedby="emailHelp" v-model="email" />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" />
              </div>

              <button type="submit" class="btn btn-primary btn-block mt-4">
                Sign Up Now
              </button>
              <button type="submit" class="btn btn-light btn-block mt-2">
                Back to Sign In
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
     <script src="vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>
  <script>
    Vue.use(Toasted);

    var register = new Vue({
      el: "#register",
      mounted() {
        AOS.init();
        this.$toasted.error(
          "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
          {
            position: "top-center",
            className: "rounded",
            duration: 2000,
          }
        );
      },
      data: {
        name: "Akbar Bintang",
        email: "akbar@gmail.com",
        password: "",
      },
    });
  </script>
@endpush