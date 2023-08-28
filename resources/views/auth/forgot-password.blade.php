@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Forgot your password ?</span></h2>
<div class="row px-xl-5">
<div class="col-lg-7 mb-5">
    <div class="contact-form bg-light p-30">
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="control-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class=" text-dark btn-primary ">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

</div>
</div>
<div class="col-lg-5 mb-5">
    <div class="bg-light p-30 mb-20">
        <img style="width: 90%; height: 90%;"
        src="{{asset('assets/img/Forgot password-pana.png')}}"
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </div>
</div>
</div>
</div>
@endsection
