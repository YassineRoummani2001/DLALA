@extends('layouts.main')
@php
    use App\Models\User ;
    use App\Models\SousCategorie ;
    use App\Models\Etat ;
@endphp
@section('content')

@php
    $users=User::all() ;
    $sous_categories=SousCategorie::all() ;
    $etats=Etat::all();
@endphp

<style>

    /* MAIN STYLE */

.card {
    width: 400px;
    height: auto;
    padding: 15px;
    border: 1px #fff solid ;
    border-radius: 5px;
    overflow: hidden;
    background: #fff;
}

.card .top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.card p {
    font-size: 0.9rem;
    font-weight: 600;
    color: #878a9a;
}


.card button:hover {
	opacity: 0.8;
}

.card button:active {
	transform: translateY(5px);
}

.card .drag-area {
	width: 100%;
	height: 160px;
	border-radius: 5px;
	border: 2px dashed #3D464D;
	color: #3D464D;
	font-size: 0.9rem;
	font-weight: 500;
	position: relative;
	background: #e2df2641;
	display: flex;
	justify-content: center;
	align-items: center;
	user-select: none;
	-webkit-user-select: none;
	margin-top: 10px;
}

.card .drag-area .visible {
	font-size: 18px;
}
.card .select {
    color: #ffc107;
	margin-left: 5px;
	cursor: pointer;
	transition: 0.4s;
}

.card .select:hover {
	opacity: 0.6;
}

.card .container {
	width: 100%;
	height: auto;
	display: flex;
	justify-content: flex-start;
	align-items: flex-start;
	flex-wrap: wrap;
	max-height: 200px;
	overflow-y: auto;
	margin-top: 10px;
}

.card .container .image {
	width: calc(26% - 19px);
	margin-right: 15px;
	height: 75px;
	position: relative;
	margin-bottom: 8px;
}

.card .container .image img {
	width: 100%;
	height: 100%;
	border-radius: 5px;
}

.card .container .image span {
	position: absolute;
    color: red;
	top: -2px;
	right: -9px;
	font-size: 25px;
	cursor: pointer;
}

/* dragover class will used in drag and drop system */
.card .drag-area.dragover {
	background: #ffc10771;
}

.card .drag-area.dragover .on-drop {
	display: inline;
	font-size: 28px;
}

.card input,
.card .drag-area .on-drop,
.card .drag-area.dragover .visible {
	display: none;
}
</style>

 <!-- Breadcrumb Start -->
 <div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{url('/')}}">Accueil</a>
                <span class="breadcrumb-item active">Deposer Une Annonce</span>
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

<!-- Annonce Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <form method="POST" action="{{url('annonce')}}" enctype="multipart/form-data" class="col-lg-8">
            @csrf
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Deposer Une Annonce</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="control-group">
                    <label><span class="text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span> les champs avec (<span class="text-danger"> *</span> ) sont obligatoires </label>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Prenom : </label>
                        <input type="text" class="form-control" id="first_name" name="user_id" placeholder="Prenom" value="{{ Auth::user()->first_name }}" readonly
                            required="required" data-validation-required-message="Veuillez entrer votre prenom" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Nom : </label>
                        <input type="text" class="form-control" id="name" name="user_id"  placeholder="Nom" value="{{ Auth::user()->name }}" readonly
                            required="required" data-validation-required-message="Veuillez entrer votre name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Email : </label>
                        <input type="email" class="form-control" id="email" name="user_id" placeholder=" Email" value="{{ Auth::user()->email }}" readonly
                        required="required" data-validation-required-message="Veuillez entrer votre email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Ville : </label>
                        <input type="text" class="form-control" id="ville" name="user_id" placeholder=" Ville" value="{{ Auth::user()->ville }}" readonly
                            required="required" data-validation-required-message="Veuillez entrer votre ville" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Adresse : </label>
                        <input type="text" class="form-control" id="adresse" name="user_id" placeholder=" Adresse" value="{{ Auth::user()->adresse }}" readonly
                            required="required" data-validation-required-message="Veuillez entrer votre adresse" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Numero De Telephone : </label>
                        <input type="tel" class="form-control" id="tele" name="user_id" placeholder=" Numero De Telephone" value="{{ Auth::user()->tele }}" readonly
                            required="required" data-validation-required-message="Veuillez entrer votre tele" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Designation : </label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder=" Designation" :value="old('designation')"
                            required="required" data-validation-required-message="Veuillez entrer votre designation" />
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Prix : </label>
                        <input type="number" min="0" class="form-control" id="prix" name="prix" step="any" min="0" placeholder=" Prix" :value="old('prix')"
                            required="required" data-validation-required-message="Veuillez entrer votre prix" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label><span class="text-danger">* </span> Sous Gategorie  : </label>
                        <select  name="sous_categorie_id" id="sous_categorie_id" class="custom-select">
                            @foreach ($sous_categories as $sous_categorie )
                            <option value="{{$sous_categorie->id}} ">{{$sous_categorie->sous_categorie}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger">* </span> Etat : </label>
                        <select name="etat_id" id="etat_id" class="custom-select">
                            @foreach ($etats as $etat )
                            <option value="{{$etat->id}}" >{{$etat->etat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> <span class="text-danger"> * </span> Active : </label><br>
                        &nbsp;&nbsp;&nbsp;    <input type="checkbox" checked value="1"  id="active" name="active" placeholder=" Active"
                            required="required" data-validation-required-message="Veuillez entrer votre active" />
                        <p class="help-block text-danger"></p>
                    </div>
                        <div class="card">
                            <label>
                                <span class="text-danger"> * </span>Photos
                                <span style=" font-size: 15px; font-weight: 600; color: #999;"><i class="fa fa-exclamation-circle text-danger" aria-hidden="true"></i> (Choisir 4) : </span>
                            </label>
                            <div class="drag-area">
                                <span class="visible">
                                    Drag & drop image here or
                                    <span class="select" role="button">Browse</span>
                                </span>
                                <span class="on-drop">Drop images here</span>
                                <input  name="images[]" min="4" max="4" multiple accept="jpg,png,jpeg,gif,svg" type="file" class="file"  />
                            </div>

                            <!-- IMAGE PREVIEW CONTAINER -->
                            <div class="container"></div>
                        </div>

                </div>
                <br>
                <div class="control-group">
                    <label> <span class="text-danger"> * </span> Description : </label>
                    <textarea class="form-control" rows="4" id="description" name="description" placeholder="Description" :value="old('description')"
                        required="required"
                        data-validation-required-message="Veuillez entrer votre description">
                    </textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary py-2 px-4" type="submit" >
                        Annoncer
                    </button>
                </div>
            </div>
        </form>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3"></span></h5>
            <div class="bg-light p-30 mb-5">
                <img style="width: 100%; height: 100%;"
                src="{{asset('assets/img/Mobile Marketing-pana.png')}}"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </div>
        </div>
    </div>
</div>

<!-- Annonce End -->
<script>

/** Variables */
let files = [],
dragArea = document.querySelector('.drag-area'),
input = document.querySelector('.drag-area input'),
button = document.querySelector('.card button'),
select = document.querySelector('.drag-area .select'),
container = document.querySelector('.container');

/** CLICK LISTENER */
select.addEventListener('click', () => input.click());

/* INPUT CHANGE EVENT */
input.addEventListener('change', () => {
	let file = input.files;

    // if user select no image
    if (file.length == 0) return;

	for(let i = 0; i < file.length; i++) {
        if (file[i].type.split("/")[0] != 'image') continue;
        if (!files.some(e => e.name == file[i].name)) files.push(file[i])
    }

	showImages();
});

/** SHOW IMAGES */
function showImages() {
	container.innerHTML = files.reduce((prev, curr, index) => {
		return `${prev}
		    <div class="image">
			    <span onclick="delImage(${index})">&times;</span>
			    <img src="${URL.createObjectURL(curr)}" />
			</div>`
	}, '');
}


/* DELETE IMAGE */
function delImage(index) {
   files.splice(index, 1);
   showImages();
}

/* DRAG & DROP */
dragArea.addEventListener('dragover', e => {
	e.preventDefault()
	dragArea.classList.add('dragover')
})

/* DRAG LEAVE */
dragArea.addEventListener('dragleave', e => {
	e.preventDefault()
	dragArea.classList.remove('dragover')
});

/* DROP EVENT */
dragArea.addEventListener('drop', e => {
	e.preventDefault()
    dragArea.classList.remove('dragover');

	let file = e.dataTransfer.files;
	for (let i = 0; i < file.length; i++) {
		/** Check selected file is image */
		if (file[i].type.split("/")[0] != 'image') continue;

		if (!files.some(e => e.name == file[i].name)) files.push(file[i])
	}
	showImages();
});


</script>




@endsection
