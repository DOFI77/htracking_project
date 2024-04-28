@extends('pages.app')
@section('content')
    <section class="vh-100 bg-image pt-2 pb-2"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form  method="POST" action="{{ route('register') }}">  
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label for="">Nom</label>
                                            <input type="text" name="nom" class="form-control  form-control-lg w-100" :value="old('nom')">
                                            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                                        </div>
                                        <div class="col">
                                            <label for="">Prénom</label>
                                            <input type="text" name="prenom" class="form-control  form-control-lg w-100" :value="old('prenom')">
                                            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <div class="col-lg-6">
                                            <label for="">N° Identité</label>
                                            <input type="text" name="num_identite" class="form-control  form-control-lg" :value="old('num_identite')">
                                            <x-input-error :messages="$errors->get('num_identite')" class="mt-2" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Téléphone</label>
                                            <input type="text" name="telephone" class="form-control  form-control-lg" :value="old('telephone')">
                                            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control  form-control-lg">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" :value="old('email')" />
                                    </div>
                                    <div class="row mt-2">
                                        <label for="">Mot de passe</label>
                                        <input type="password" name="password" class="form-control form-control-lg">
                                        <x-input-error :messages="$errors->get('password')" :value="old('password')" class="mt-2" />
                                    </div>
                                    <div class="row mt-2">
                                        <label for="">Confirmer le mot de passe</label>
                                        <input type="password" name="password_confirmation" :value="old('password_confirmation')" class="form-control  form-control-lg">
                                        <x-input-error :messages="$errors->get('password_confirmation')"  class="mt-2" />
                                    </div>

                                    <div class="d-flex justify-content-center mt-2">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">S'inscrire</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Déja j'ai un compte? <a href="#!"
                                            class="fw-bold text-body"><u>Connexion</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
