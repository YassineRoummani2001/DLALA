@extends('layouts.main')
@section('annonce')

<style>

.view-modal, .popup{
position: absolute;
left: 15%;
margin-top: 5px;

border: 2px solid #ffc107;
}
button{
outline: none;
cursor: pointer;
font-weight: 500;
border-radius: 4px;
border: 2px solid transparent;
transition: background 0.1s linear, border-color 0.1s linear, color 0.1s linear;
}
.view-modal{
top: 65%;
color: #333;
font-size: 18px;
padding: 10px 10px;
background: #fff;
transform: translate(-50%, -50%);
}
.view-modal:hover{
color: #fff;
background: #0f131f ;
}
.popup{
background: #fff;
padding: 25px;
border-radius: 15px;
top: -150%;
max-width: 380px;
width: 100%;
opacity: 0;
pointer-events: none;
box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
transform: translate(-50%, -50%) scale(1.2);
transition: top 0s 0.2s ease-in-out, opacity 0.2s 0s ease-in-out, transform 0.2s 0s ease-in-out;

}
.popup.show{
top: 0%;
left: 15%;
opacity: 1;
pointer-events: auto;
transform:translate(-50%, -50%) scale(1);
transition: top 0s 0s ease-in-out,
opacity 0.2s 0s ease-in-out,
transform 0.2s 0s ease-in-out;

}
.popup :is(header, .icons, .field){
display: flex;
align-items: center;
justify-content: space-between;
}
.popup header{
padding-bottom: 15px;
border-bottom: 1px solid #ebedf9;
}
header span{
font-size: 21px;
font-weight: 600;
}
header .close, .icons a{
display: flex;
align-items: center;
border-radius: 50%;
justify-content: center;
transition: all 0.3s ease-in-out;
}
header .close{
color: #111;
font-size: 25px;
background: #fff;
height: 33px;
width: 33px;
cursor: pointer;
}
header .close:hover{
background: #fff;
}
.popup .content{
margin: 20px 0;
}
.popup .icons{
margin: 15px 0 20px 0;
}
.content p{
font-size: 16px;
}
.content .icons a{
height: 50px;
width: 50px;
font-size: 20px;
text-decoration: none;
border: 1px solid transparent;
}
.icons a i{
transition: transform 0.3s ease-in-out;
}
.icons a:nth-child(1){
color: #1877F2;
border-color: #b7d4fb;
cursor: pointer;
}
.icons a:nth-child(1):hover{
background: #1877F2;
}
.icons a:nth-child(2){
color: #46C1F6;
border-color: #b6e7fc;
cursor: pointer;
}
.icons a:nth-child(2):hover{
background: #46C1F6;
}
.icons a:nth-child(3){
color: #e1306c;
border-color: #f5bccf;
cursor: pointer;
}
.icons a:nth-child(3):hover{
background: radial-gradient(circle at 33% 100%, #fed373 4%, #f15245 30%, #d92e7f 62%, #9b36b7 85%, #515ecf) ;
}
.icons a:nth-child(4){
color: #25D366;
border-color: #bef4d2;
cursor: pointer;
}
.icons a:nth-child(4):hover{
background: #25D366;
}
.icons a:nth-child(5){
color: #0088cc;
border-color: #b3e6ff;
cursor: pointer;
}
.icons a:nth-child(5):hover{
background: #0088cc;
}
.icons a:hover{
color: #fff;
border-color: transparent;
}
.icons a:hover i{
transform: scale(1.2);
}
.content .field{
margin: 12px 0 -5px 0;
height: 45px;
border-radius: 4px;
padding: 0 5px;
border: 1px solid #e1e1e1;
}
.field.active{
border-color: #ffc107;
}
.field i{
width: 50px;
font-size: 18px;
text-align: center;
}
.field.active i{
color: #7d2ae8;
}
.field input{
width: 100%;
height: 100%;
border: none;
outline: none;
font-size: 15px;
}
.field button{
color: #fff;
padding: 5px 18px;
background: #ffc107;
}
.field button:hover{
background: #333;
}
@media (max-width: 550px) {
.view-modal, .popup{
position: absolute;
left: 29%;
top: 90%;
border: 2px solid #ffc107;
}
.popup.show{
top: 50%;
left: 50%;
opacity: 1;
pointer-events: auto;
transform:translate(-50%, -50%) scale(1);
transition: top 0s 0s ease-in-out,
        opacity 0.2s 0s ease-in-out,
        transform 0.2s 0s ease-in-out;
}
}
</style>

<!-- Breadcrumb Start -->
<div class="container-fluid">
<div class="row px-xl-5">
    <div class="col-12">
        <nav class="breadcrumb bg-light mb-30">
            <a class="breadcrumb-item text-dark" href="{{url('/')}}">Accueil</a>
            <span class="breadcrumb-item active">Partager</span>
        </nav>
    </div>
</div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light ">
                    <div class="carousel-item active">
                        <img width="400" height="400"  src="{{asset('assets/uploads/annonces/'.$annonce->photo1)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img  width="400" height="400"  src="{{asset('assets/uploads/annonces/'.$annonce->photo2)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img  width="400" height="400"  src="{{asset('assets/uploads/annonces/'.$annonce->photo3)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img  width="400" height="400"  src="{{asset('assets/uploads/annonces/'.$annonce->photo4)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                </div>
                <a class="carousel-control-prev " href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-primary"></i>
                </a>
                <a class="carousel-control-next " href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-primary"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <h3>{{$annonce->designation}}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(99 Reviews)</small>
                </div>
                <h3 class=" text-primary font-weight-semi-bold mb-4">{{$annonce->prix}} DH</h3>
                <p class="mb-4">{{$annonce->description}}</p>

                <button class="view-modal">Partager &nbsp;&nbsp;  <i class="fa fa-share-alt text-primary "></i></button>
                <div class=" popup">
                    <header>
                    <span>Partager sur :</span>
                    <div class="close"><i class="fa fa-window-close"></i></div>
                    </header>
                    <div class="content">
                    <p>Partagez Ce Lien Via : </p>
                    <ul class="icons">
                        <a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://web.telegram.org/"><i class="fab fa-telegram-plane"></i></a>
                    </ul>
                    <p>Or copy link</p>
                    <div class="field">
                        <i class="url-icon uil uil-link"></i>
                        <input type="text" readonly value="https://www DLALA .com/{{('annonce/' . $annonce->id . '/share') }}">
                        <button> Copy </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->

<script>
    const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    field = popup.querySelector(".field"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");
    viewBtn.onclick = ()=>{
        popup.classList.toggle("show");
    }
    close.onclick = ()=>{
        viewBtn.click();
    }
    copy.onclick = ()=>{
        input.select(); //select input value
        if(document.execCommand("copy")){ //if the selected text copy
        field.classList.add("active");
        copy.innerText = "Copied";
        setTimeout(()=>{
            window.getSelection().removeAllRanges(); //remove selection from document
            field.classList.remove("active");
            copy.innerText = "Copy";
        }, 3000);
        }
    }
    </script>

@endsection
