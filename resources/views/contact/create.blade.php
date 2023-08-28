@extends('layouts.main')
@php
    use App\Models\User ;
@endphp

@php
    $users=User::all() ;
@endphp

@section('content')


 <!-- Breadcrumb Start -->
 <div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{url('/')}}">Accueil</a>
                <span class="breadcrumb-item active">Contact</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Alert Start -->
@if(session('success'))
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-2">
                <div class="alert alert-success d-flex align-items-center col-12" role="alert">
                    <i class="fa fa-check-circle text-success mr-3" ></i>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
@endif
<!-- Alert End -->



<!-- Contact Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">CONTACTEZ-NOUS</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form method="POST" action="{{url('contact/create')}}" enctype="multipart/form-data"   name="sentMessage" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="control-group">
                        <label> <span class="text-danger"> * </span> Prenom : </label>
                        <input type="text" class="form-control" id="first_name" name="user_id" placeholder="Prenom" value="{{ Auth::user()->first_name }}"
                            required="required" data-validation-required-message="Veuillez entrer votre prenom" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label> <span class="text-danger"> * </span> Nom : </label>
                        <input type="text" class="form-control" id="name" name="user_id"  placeholder="Nom" value="{{ Auth::user()->name }}"
                            required="required" data-validation-required-message="Veuillez entrer votre name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label> <span class="text-danger"> * </span> Email : </label>
                        <input type="email" class="form-control" id="email" name="user_id" placeholder=" Email" value="{{ Auth::user()->email }}"
                        required="required" data-validation-required-message="Veuillez entrer votre email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label> <span class="text-danger"> * </span> Subject : </label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required
                            required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label> <span class="text-danger"> * </span> Message : </label>
                        <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message" required
                            required="required"
                            data-validation-required-message="Please enter Votre message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" > Envoyer  </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="bg-light p-30 mb-30">
                <iframe style="width: 100%; height: 250px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26497.6648312016!2d-5.056201844436232!3d33.88429388890018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8871fc8e880d%3A0xa4407bfc72e90aee!2sAin%20Cheggag!5e0!3m2!1sen!2sma!4v1678966968829!5m2!1sen!2sma"                 frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="bg-light p-30 mb-3">
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Ain Chggag ,Fes, Maroc</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>DLALA@gmail.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+212 606 203862</p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection
