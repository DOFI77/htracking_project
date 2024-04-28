@extends('pages.app')
@section('content')
    <style>
   .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}

    </style>
        <section class="vh-100 my-4">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form3Example3">Email</label>
                      <input type="email" name="email"  class="form-control form-control-lg" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
          
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                      <label class="form-label" for="form3Example4">Mot de passe</label>
                      <input type="password" name="password"  class="form-control form-control-lg"/>
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
          
                    <div class="d-flex justify-content-between align-items-center">
                        
                      <a href="#!" class="text-body">Mot de passe oublié?</a>
                    </div>
          
                    <div class="text-center text-lg-start mt-4 pt-2">
                      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                      <p class="small fw-bold mt-2 pt-1 mb-0">j'ai pas un compte? <a href="#!"
                          class="link-danger">S'inscrire</a></p>
                    </div>
          
                  </form>
                </div>
              </div>
            </div>
     
          </section>
        
    @endsection
