@extends("master")


@section('content')



<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
    <!-- Single Hero Slide -->
    <div class="single-hero-slide bg-img bg-overlay" style="background-image: url(images/slide3.jpg);">
    <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-end">
    <div class="col-12 col-lg-7">
    <!-- Slides Content -->
    <div class="hero-slides-content">
    <h6 class="date" data-animation="fadeInUp" data-delay="100ms">UN ENFANT DES SOURIRES</h6>
    <h3 data-animation="fadeInUp" data-delay="300ms">Au cœur de notre bataille, l’ENFANT.</h3>
    <h4 data-animation="fadeInUp" style="color: #ff5157" data-delay="500ms"> L’enfant dans toute son innocence, sa fragilité, sa recherche de repères, son besoin d’amour, d’affection et de tendresse.</h4>
    <p data-animation="fadeInUp" data-delay="700ms"> UEDS fait de la pauvreté son cheval de bataille mais aussi de l’ignorance, de l’inculture et de l’irresponsabilité citoyenne.</p>
    </div>

    </div>
    </div>
    </div>
    <!-- Event Button -->
    <div class="next-event-btn" data-animation="bounceInDown" data-delay="900ms">
    <div class="container">
    <div class="row">
    <div class="col-12 text-right">
    <a href="/login" class="btn faith-btn active">Devenir bénévole</a>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- Single Hero Slide -->
    <div class="single-hero-slide bg-img bg-overlay" style="background-image: url(images/slide5.jpeg);">
    <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-end">
    <div class="col-12 col-lg-7">
    <!-- Slides Content -->
    <div class="hero-slides-content">
    <h6 class="date" data-animation="fadeInUp" data-delay="100ms">UN ENFANT DES SOURIRES</h6>
    <h3 data-animation="fadeInUp" data-delay="300ms">Au cœur de notre bataille, l’ENFANT.</h3>
    <h4 style="color: #ff5157" data-animation="fadeInUp" data-delay="500ms"> L’enfant dans toute son innocence, sa fragilité, sa recherche de repères, son besoin d’amour, d’affection et de tendresse.</h4>
    <p data-animation="fadeInUp" data-delay="700ms"> UEDS fait de la pauvreté son cheval de bataille mais aussi de l’ignorance, de l’inculture et de l’irresponsabilité citoyenne.</p>
    </div>
    </div>
    </div>
    </div>
    <!-- Event Button -->
    <div class="next-event-btn" data-animation="bounceInDown" data-delay="900ms">
    <div class="container">
    <div class="row">
    <div class="col-12 text-right">
    <a href="/login" class="btn faith-btn active">Devenir bénévole</a>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Single Hero Slide -->
    <div class="single-hero-slide bg-img bg-overlay" style="background-image: url(images/slide5.jpeg);">
    <div class="container h-100">
    <div class="row h-100 align-items-center">
    <div class="col-12 col-lg-7">
    <!-- Slides Content -->
    <div class="hero-slides-content">
    <h6 class="date" data-animation="fadeInUp" data-delay="100ms">UN ENFANT DES SOURIRES</h6>
    <h3 data-animation="fadeInUp" data-delay="300ms">Au cœur de notre bataille, l’ENFANT.</h3>
    <h4 style="color: #ff5157" data-animation="fadeInUp" data-delay="500ms"> L’enfant dans toute son innocence, sa fragilité, sa recherche de repères, son besoin d’amour, d’affection et de tendresse.</h4>
    <p data-animation="fadeInUp" data-delay="700ms"> UEDS fait de la pauvreté son cheval de bataille mais aussi de l’ignorance, de l’inculture et de l’irresponsabilité citoyenne.</p>
    </div>
    </div>
    </div>
    </div>
    <!-- Event Button -->
    <div class="next-event-btn" data-animation="bounceInDown" data-delay="900ms">
    <div class="container">
    <div class="row">
    <div class="col-12 text-right">
    <a href="/login" class="btn faith-btn active">Devenir bénévole</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
   </section>
<!-- ##### Hero Area End ##### -->

<!-- ##### CTA Area Start ##### -->
 <div class="col-12">
 <div class="sticky-container">
 <ul class="sticky">

 <li>
 <img src="{{ url('/images/fb.png') }}" width="32" height="32">
 <p><a href="https://www.facebook.com/Association-Un-enfant-des-sourires-198016143574755/" target="_blank">Suivez nous sur <br>Facebook</a></p>
 </li>
 <li>
 <img src="{{url('/images/insta.png')}}" width="32" height="32">
 <p><a href="https://www.instagram.com/un_enfant_des_sourires/?hl=fr" target="_blank">Suivez nous sur <br>Instagram</a></p>
 </li>
 <li>
 <img src="{{url('/images/youtube.png')}}" width="32" height="32">
 <p><a href="https://www.youtube.com/channel/UCbv9TNa4LCUD-e8nRNpI-Pg" target="_blank">Suivez nous sur<br> Youtube</a></p>
 </li>
 <li>
 <img src="{{url('/images/google.png')}}" width="32" height="32">
 <p><a href="https://myaccount.google.com/?utm_source=OGB&tab=wk&utm_medium=act&pli=1" target="_blank">Suivez nous sur<br> Google +</a></p>
 </li>
 </ul>
</div>
<style>.sticky-container{
 padding:0px;
 margin:0px;
 position:fixed;
 right:-170px;
 top:230px;
 width:210px;
 z-index: 1100;

}
.sticky li{
 list-style-type:none;
 background-color:#fff;
 color:#efefef;
 height:43px;
 padding:0px;
 margin:0px 0px 1px 0px;
 -webkit-transition:all 0.25s ease-in-out;
 -moz-transition:all 0.25s ease-in-out;
 -o-transition:all 0.25s ease-in-out;
 transition:all 0.25s ease-in-out;
 cursor:pointer;

}
.sticky li:hover{
 margin-left:-115px;

}
.sticky li img{
 float:left;
 margin:5px 4px;
 margin-right:5px;

}
.sticky li p{
 padding-top:5px;
 margin:0px;
 line-height:16px;
 font-size:11px;

}
.sticky li p a{
 text-decoration:none;
 color:#FE85A7;

}
.sticky li p a:hover{
 text-decoration:underline;

}
.single-donate-slide {
    border:0;
}
</style>
<div class="faith-cta-area">
 <div class="container">
 <div class="row">
 <div class="col-12">
 <div class="cta-text d-flex justify-content-between align-items-center">
 <h5>Voulez vous être un de nos partenaire?</h5>
 <a href="devenir_partenaire/partenaire" class="btn faith-btn">Devenir partenaire</a>
 </div>
 </div>
 </div>
 </div>
</div>
<!-- ##### CTA Area End ##### -->
<section class="church-activities-area section-padding-100-0">
 <div class="container">

 <div class="col-12">
 <div class="upcoming-events mb-100">

 </div>
 </div>

 <div class="col-12">
 <div class="faith-cool-facts-area">
 <div class="row">

 <!-- Single Cool Fact -->
 <div class="col-12 col-sm-6 col-md-3">
 <div class="single-cool-fact text-center mb-100">
 <h3><span class="counter">{{ $userscount }}</span></h3>
 <h4>Bénévoles</h4>
 </div>
 </div>

 <!-- Single Cool Fact -->
 <div class="col-12 col-sm-6 col-md-3">
 <div class="single-cool-fact text-center mb-100">
 <h3><span class="counter">{{ $donscount }}</span> dt</h3>
 <h4>Dons</h4>
 </div>
 </div>

 <!-- Single Cool Fact -->
 <div class="col-12 col-sm-6 col-md-3">
 <div class="single-cool-fact text-center mb-100">
 <h3><span class="counter">{{ $partenairescount }}</span></h3>
 <div class="line"></div>
 <h4>Partenaires</h4>
 </div>
 </div>

 <!-- Single Cool Fact -->
 <div class="col-12 col-sm-6 col-md-3">
 <div class="single-cool-fact text-center mb-100">
 <h3><span class="counter">{{ $evenementscount }}</span></h3>
 <div class="line"></div>
 <h4>Evenements</h4>
 </div>
 </div>
 </div>
 </div>
 </div>


 <div class="row">

 <div class="col-12 col-lg-8">
 <!-- Upcoming Events -->
 <div class="upcoming-events mb-100">
 <!-- Headline -->
 <div class="headline">
 <?php $count = 0; ?>
 @foreach ($evenements as $evenement)
 @if($evenement->date>$now)
 <?php if($count == 4) break; ?>

    <?php $count++; ?>
 </div>


 <!-- Single Upcoming Events -->
 <div class="single-upcoming-events d-flex align-items-center">
 <!-- Events Date & Thumbnail -->
 <div class="event-date-thumbnail d-flex align-items-center">
        <?php
        setlocale(LC_TIME, 'French');

     ?>
 <div class="event-date">
 <h6 style="font-size: 18px;">{{  (new Carbon\Carbon($evenement->date))->format('d F Y') }}</h6>


 </div>
 <div class="event-thumbnail bg-img" style="background-image:url({{url('/images/'.$evenement->image)}})"></div>
 </div>
 <!-- Events Content -->
 <div class="events-content">
 <a href="#">
 <h6>&nbsp; <b>{{$evenement->libelle}}</b></h6>
 </a>
 <p style="color:black;">&nbsp; <b> {!!substr ($evenement->description,0,100) !!}...</b> </p>
200/1300
<div class="w3-progress-container w3-round-xlarge">
        <div class="w3-progressbar w3-round-xlarge" style="width:25%"></div>
      </div>
 <style>

     .w3-progress-container{width:100%;height:1em;position:relative;background-color:#FE85A7;}
.w3-progressbar{background-color:#FEDD02;height:100%;position:absolute;line-height:inherit}
.w3-round-xlarge{border-radius:16px!important}
 </style>

</div>

 @endif
 @endforeach

 </div>
 <div class="all-events-btn">
    <a href="evenements/actualite" class="btn faith-btn">Voir tous les événements</a>
    </div>




 </div>
 </div>
 <div class="col-12 col-lg-4">
 <!-- Latest Sermons -->
 <div class="latest-sermons mb-100">
 <div class="headline">
 </div>

 <!-- Single Sermons Area -->
 @foreach ($presses as $presse )


 <div class="single-sermons">
 <div class="sermons-content d-flex align-items-center">
 <!-- Sermons Thumbnail -->
 <div class="sermons-thumbnail bg-img" style="background-image:url({{ url('/images/'.$presse->image)}})"></div>


 <div class="sermons-text">
 <a href="#">
 <h6><b>{{ $presse->nom}}</b></h6>
 </a>

 <p class="date"><b>02 April, 2018</b></p>
 </div>
 </div>
 <div class="sermons-audio-player d-flex align-items-center">

 </div>
 </div>
 @endforeach

 <!-- Single Sermons Area -->


 <!-- Single Sermons Area -->

 </div>
 </div>

 </div>
</section>

 </div>
</div>
</div>
</div>
</section>
<div class="container">
    <div class="row">
    <div class="col-12">
    <div class="text-center mx-auto">

    <h2>Répondre à nos appels de solidarité</h2>

    </div>
    </div>
    </div>
    </div>
    <br>
    <br> <br>
    <br> <br>
<section class="donate-our-charities section-padding-100 bg-img " style="background-image: url(images/boy4.jpeg);weidth:1920px; height: 1000px">

    <div class="container">
 <div class="row">
 <div class="col-12">
 <div class="section-heading white text-center mx-auto">
 <img src="images/ueds.png" alt="">

 </div>
 </div>
 </div>

 <div class="row">
 <div class="col-12">
 <div class="donate-slides owl-carousel">
 @foreach ($appels as $appel)
 <!-- Single Donate Slide Area -->
 <div class="single-donate-slide">
 <img src="{{url('/images/'.$appel->image)}}" alt="" style="height:500px; weight:300px">
 <!-- Donate Content -->
 <div class="donate-content">
 <h4>{{$appel->libelle}}</h4>

 <p>{{ $appel->lieu}}</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="w3-progress-container w3-round-xlarge">
    <div class="w3-progressbar w3-round-xlarge" style="width:25%"></div>
  </div>
 </div>

 <!-- Donate Button -->

 <div class="donate-btn text-center">
        <button type="button" class="btn monBoutton" style="color:#ffff;">Participer</button>

        <button type="button" class="btn monBoutton" style="color:#ffff;">Faire un don</button>
        </div>



 </div>

 @endforeach
 <!-- Single Donate Slide Area -->
 <style>
 .monBoutton {
 background-color: #FE485B;

 }
 .monBoutton2 {
 background-color: #3BCAFD;
 width: 150px;
    position: absolute;
    bottom: 15px;
    left: 25%;
 }
 .single-blog-area {
    min-height: 650px;
    height: 650px;
 }
 </style>

 </div>
 </div>
 </div>
 </div>
</section>

<!-- ##### Donate Area End ##### -->

<!-- ##### Blog Area Start ##### -->

<div class="faith-blog-area section-padding-100-0" >
        <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="text-center mx-auto">
        <h2>Les évènements passés</h2>

        </div>
        </div>
        </div>
        </div>
       </div>
        <section class="donate-our-charities section-padding-100 bg-img" style="background-image: url(images/children22.jpg);weidth:1920px; height: 1000px">
        <div class="row">
        <div class="col-12">
        <div class="donate-slides owl-carousel">
        @foreach ($evenements as $evenement)
        <div class="row">
        <!-- Single Blog Area -->
        <div class="post col-12 col-lg-12" data-evenementid=""{{$evenement->id}}>

        <div class="single-blog-area mb-100">
        <div class="blog-thumbnail" >
        <img src="{{url('/images/'.$evenement->image)}}" alt="" style="height:300px; weight:300px">
        <div class="post-date">
        <a href="#">{{date('d-m-Y', strtotime($evenement->date))}}</a>
        </div>
        </div>
        <div class="blog-content">
        <a href="#" class="blog-title"><b>{{$evenement->libelle}}</b></a>
        <a>{{ $evenement->lieu}}</a>
        </div>
        <div class="faith-buttons-area mb-100">



        <!-- <button class="like" id="like" type="button" data-evenementid="{{$evenement->id}}">



        <button type="button" class="btn btn-success">like<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button>
        -->
        <!-- <button class="like" id="like" type="button">like<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button>
        -->
        <center>
        <a href="{{ url('/actions/evenements/show',$evenement)}}" class="btn monBoutton3 faith-btn btn-2 m-1">Plus d'info</a>
    </center>

       </div>
        </div>

        </div>

        </div>
        @endforeach
        </div>
        </div>
        </div>

        </div>

        <center>
            <div class="col-11" style="text-align:center;">
             <div class="row">

             <!-- Single Course Area -->
             <div class="col-12 col-sm-6 col-lg-4">
             <div class="single-feature-area mb-100">
             <div class="title d-flex align-items-end">
             <img src="images/contact0.jpg" alt="" width="90" height="40">
             <h3>CONTACTEZ-NOUS</h3>
             </div>
             <p style="color:black;">L'équipe de Un Enfant Des Sourires sont toujours à votre écoute.

             Vous pouvez nous contacter directement par email, téléphone ou courrier.

             Pour ne manquer aucune actualité, suivez-nous sur nos réseaux sociaux.</p>
             </div>
             </div>

             <!-- Single Course Area -->
             <div class="col-12 col-sm-6 col-lg-4">
             <div class="single-feature-area mb-100">
             <div class="title d-flex align-items-end">
             <img src="images/don.png" alt="" width="90" height="40">
             <h3>FAIRE UN DON</h3>
             </div>
             <p style="color:black;">La générosité des donateurs est essentielle pour le fonctionnement de Un Enfant Des Sourires. Sans les dons, nous ne pourrions par assurer nos missions sociales.</p>
             </div>
             </div>

             <!-- Single Course Area -->
             <div class="col-12 col-sm-6 col-lg-4">
             <div class="single-feature-area mb-100">
             <div class="title d-flex align-items-end">
             <img src="images/benevole.png" alt="" width="90" height="40">
             <h3>DEVENIR BÉNÉVOLE</h3>
             </div>
             <p style="color:black;">Toutes les bonnes volontés et les savoir-faire sont utiles pour développer les diverses actions de l’association. Postulez à une offre ou proposez votre aide ! </p>
             </div>
             </div>
            </center>

<section id="photo">
 <!-- <h3>Photos</h3> -->
 <div id="galerie">
 @foreach ($images as $image)
 <img src="{{url('/images/'.$image->image)}}" alt="" />
 @endforeach
 </div>
</section>

<style>
 /* PHOTOS */
 #photo {
 max-width: 100%;
 margin: auto;
 padding: 2rem 0;
 }

 #galerie {
 display: flex;
 flex-direction: row;
 flex-wrap: wrap;
 justify-content: center;
 }

 #galerie img {
 flex: 1 1 auto;
 width: auto;
 height: auto;
 max-width: 300px;
 max-height: 130px;
 margin: 0.5rem;
 object-fit: cover;
 transform: scale(1);
 transition: transform 1s;
 }

 #galerie img:hover {
 transform-origin: 50% 50%;
 transform: scale(2);
 z-index: 999;
 }
</style>

</body>

@endsection
