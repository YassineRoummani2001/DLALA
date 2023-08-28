@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Log In</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <x-guest-layout class="col-lg-7 mb-5">
                        <!-- Session Status -->
                        <x-auth-session-status class="contact-form bg-light p-30" :status="session('status')" />

                    <form method="POST"  action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="control-group">
                            <label>Email<span class="text-danger"> *</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre E-mail"
                                :value="old('email')" required autofocus autocomplete="email"
                                required="required" data-validation-required-message="Please enter your email" />
                                <x-input-error :messages="$errors->get('email')" class="help-block text-danger" />
                        </div><br>

                        <!-- Password -->
                        <div class="control-group">
                            <label>Password<span class="text-danger"> *</span></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Votre Password"
                                :value="old('password')" required autofocus autocomplete="password"
                                required="required" data-validation-required-message="Please enter your password" />
                                <x-input-error :messages="$errors->get('password')" class="help-block text-danger" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <br>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">
                                {{ __('Log in') }}
                            </button>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </x-guest-layout>

                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-20">
                    <img style="width: 70%; height: 70%;"
                    src="{{asset('assets/img/Tablet login-bro.png')}}"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </div>
            </div>
        </div>
    </div>

@endsection
