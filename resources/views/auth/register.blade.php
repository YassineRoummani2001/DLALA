@extends('layouts.main')
@section('content')


    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Register</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <x-guest-layout>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                        <div class="control-group">
                            <label><span class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span> les champs avec (<span class="text-danger"> *</span> ) sont obligatoires </label>
                        </div>
                        <!-- Name -->
                        <div class="control-group">
                            <label>Nom<span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Entrer Nom"
                                :value="old('name')" required autofocus autocomplete="name"
                                required="required" data-validation-required-message="Please enter your name" />
                                <x-input-error :messages="$errors->get('name')" class="help-block text-danger" />
                        </div><br>

                        <!-- First Name -->
                        <div class="control-group">
                            <label>Prenom<span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Entrer Prenom"
                                :value="old('first_name')" required autofocus autocomplete="first_name"
                                required="required" data-validation-required-message="Please enter your first first name" />
                                <x-input-error :messages="$errors->get('first_name')" class="help-block text-danger" />
                        </div><br>

                        <!-- Adresse -->
                        <div class="control-group">
                            <label>Adresse<span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer Adresse"
                                :value="old('adresse')" required autofocus autocomplete="adresse"
                                required="required" data-validation-required-message="Please enter your first address" />
                                <x-input-error :messages="$errors->get('adresse')" class="help-block text-danger" />
                        </div><br>

                        <!-- Ville -->
                        <div class="control-group">
                            <label>Ville<span class="text-danger"> *</span></label>
                            {{-- <input type="text" class="form-control" id="ville" name="ville" placeholder="Entrer Ville"
                                :value="old('ville')" required autofocus autocomplete="ville"
                                required="required" data-validation-required-message="Please enter your first city" /> --}}
                                <select name="ville" class="form-control" class="form-control" id="ville" name="ville" placeholder="Entrer Ville" required autofocus autocomplete="ville"
                                required="required" data-validation-required-message="Please enter your first city">
                                    <option value="">Sélectionnez une ville</option>
                                    <option value="Agadir">Agadir</option>
                                    <option value="Asilah">Asilah</option>
                                    <option value="Azemmour">Azemmour</option>
                                    <option value="Azrou">Azrou</option>
                                    <option value="Beni Mellal">Beni Mellal</option>
                                    <option value="Bouznika">Bouznika</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Chefchaouen">Chefchaouen</option>
                                    <option value="El Jadida">El Jadida</option>
                                    <option value="Essaouira">Essaouira</option>
                                    <option value="Fes">Fes</option>
                                    <option value="Ifrane">Ifrane</option>
                                    <option value="Kenitra">Kenitra</option>
                                    <option value="Khenifra">Khenifra</option>
                                    <option value="Khouribga">Khouribga</option>
                                    <option value="Laayoune">Laayoune</option>
                                    <option value="Marrakech">Marrakech</option>
                                    <option value="Meknes">Meknes</option>
                                    <option value="Mohammedia">Mohammedia</option>
                                    <option value="Nador">Nador</option>
                                    <option value="Ouarzazate">Ouarzazate</option>
                                    <option value="Oujda">Oujda</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Safi">Safi</option>
                                    <option value="Sefrou">Sefrou</option>
                                    <option value="Settat">Settat</option>
                                    <option value="Tangier">Tangier</option>
                                    <option value="Taza">Taza</option>
                                    <option value="Tetouan">Tetouan</option>
                                    <option value="Zagora">Zagora</option>
                                  </select>

                                <x-input-error :messages="$errors->get('ville')" class="help-block text-danger" />
                        </div><br>

                        <!-- Tele -->
                        <div class="control-group">
                            <label>Tele<span class="text-danger"> *</span></label>
                            <input type="tel" class="form-control" id="tele" name="tele" placeholder="Entrer Tele"
                                :value="old('tele')" required autofocus autocomplete="tele"
                                required="required" data-validation-required-message="Please enter your first tele" />
                                <x-input-error :messages="$errors->get('tele')" class="help-block text-danger" />
                        </div><br>

                        <!-- Active -->
                        <div class="control-group">
                            <label>Active<span class="text-danger"> *</span> : </label> &nbsp;&nbsp;
                            <input type="checkbox" checked id="active" name="active" placeholder="Entrer Active"
                                value="1" required autofocus autocomplete="active"
                                required="required" data-validation-required-message="Please enter your first active" />
                                <x-input-error :messages="$errors->get('active')" class="help-block text-danger" />
                        </div><br>

                        <!-- Email Address -->
                        <div class="control-group">
                            <label>Email<span class="text-danger"> *</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Entrer Email"
                                :value="old('email')" required autofocus autocomplete="email"
                                required="required" data-validation-required-message="Please enter your email" />
                                <x-input-error :messages="$errors->get('email')" class="help-block text-danger" />
                        </div><br>

                        <!-- Password -->
                        <div class="control-group">
                            <label>Password<span class="text-danger"> *</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Entrer Password"
                                required autofocus autocomplete="password"
                                required="required" data-validation-required-message="Please enter your password" />
                                <x-input-error :messages="$errors->get('password')" class="help-block text-danger" />
                        </div><br>

                        <!-- Confirm Password -->
                        <div class="control-group">
                            <label>Confirmation Password<span class="text-danger"> *</span></label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"
                                required autofocus autocomplete="new-password"
                                required="required" data-validation-required-message="Please enter your confirm password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="help-block text-danger" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                        <br>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </form>
                </x-guest-layout>
                </div>
            </div>

            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-20">
                    <img style="width: 70%; height: 70%;"
                    src="{{asset('assets/img/Sign up-amico.png')}}"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </div>
            </div>
        </div>
    </div>
@endsection
