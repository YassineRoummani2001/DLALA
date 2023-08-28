<div class="container-fluid">
    {{-- <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Deposer Une Annonce</span></h2> --}}
<div class="row px-xl-5">
<div class="col-lg-7 mb-5">
    <div class="contact-form bg-light p-30">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        {{-- <div class="control-group">
            <input type="text" class="form-control" id="email" name="name" placeholder="Your Email"
                value="old('name', $user->name)"
                required="required" data-validation-required-message="Please enter your email" />
                <x-input-error :messages="$errors->get('email')" class="help-block text-danger" />
        </div><br> --}}
        <div  class="control-group">
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div><br>

        <div class="control-group">
            <x-input-label for="first_name" :value="__('Prenom')" />
            <x-text-input id="first_name" name="first_name" type="text" class="form-control" :value="old('first_name', $user->first_name)" required autofocus autocomplete="first_name" />
            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
        </div><br>

        <div class="control-group">
            <x-input-label for="adresse" :value="__('Adress')" />
            <x-text-input id="adresse" name="adresse" type="text" class="form-control" :value="old('adresse', $user->adresse)" required autofocus autocomplete="adresse" />
            <x-input-error class="mt-2" :messages="$errors->get('adresse')" />
        </div><br>

        <div class="control-group">
            <x-input-label for="ville" :value="__('Ville')" />
            <x-text-input id="ville" name="adresse" type="text" class="form-control" :value="old('ville', $user->ville)" required autofocus autocomplete="ville" />
            <x-input-error class="mt-2" :messages="$errors->get('ville')" />
        </div><br>

        <div class="control-group">
            <x-input-label for="tele" :value="__('Tele')" />
            <x-text-input id="tele" name="adtele" type="text" class="form-control" :value="old('tele', $user->tele)" required autofocus autocomplete="tele" />
            <x-input-error class="mt-2" :messages="$errors->get('tele')" />
        </div><br>

        <div class="control-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div><br>

        <div class="flex items-center gap-4">
            <x-primary-button class=" text-dark btn-primary ">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    </div>
</div>
<div class="col-lg-5 mb-5">
    <div class="bg-light p-30 mb-20">
        <img style="width: 90%; height: 90%;"
        src="{{asset('assets/img/Privacy policy-pana.png')}}"
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </div>
</div>
</div>
</div>
