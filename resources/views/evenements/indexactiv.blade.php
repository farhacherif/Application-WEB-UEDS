@extends('layouts.app')
@section('content')
<section class="ftco-section bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4" style="color:#ff5157;">La liste des évènements de votre activité</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ftco-animate">
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    
                <div class="carousel-cause owl-carousel">
                    @foreach ($evenements as $evenement)
              
                    
                    <div class="item">
                        <div class="cause-entry">
                            <img src="{{url('/images/'.$evenement->image)}}"alt="" style="height:300px; weight:300px">
<br>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">{{$evenement->libelle}}</a></h3>
                                <p>{!!substr ($evenement->description,0,160) !!}</p>
                                <div class="toggle">
                                <div class="more">
                                    <p>{!! substr ($evenement->description,160,strlen($evenement->description)) !!} </p>
                                </div>
                                    <div class="less">
                                        <a class="button-read-more button-read" href="#read" style="color:deepskyblue"><b>Lire la suite</b></a>
                                        <a class="button-read-less button-read" href="#read" style="color:deepskyblue"><b>Replier</b></a>
                                    </div>
                                </div>

                                <span class="donation-time mb-3 d-block"> Date : {{ $evenement->date}}</span>
                                
                                <span class="fund-raised d-block">Lieu :{{ $evenement->lieu}}</span>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

    <style>
        .less.active .button-read-more, .button-read-less  {display: none}
        .less.active .button-read-less {display: block}
        .more {margin-top: 10px}
        .more p {margin: 0;padding: 0}
    </style>
    <script>/* <![CDATA[ */
    /*
    |-----------------------------------------------------------------------
    |  jQuery Multiple Toggle Script by Matt - www.skyminds.net
    |-----------------------------------------------------------------------
    |
    | Affiche et cache le contenu de blocs multiples.
    |
    */
    jQuery(document).ready(function() {
        $(".more").hide();
        jQuery('.button-read-more').click(function () {
            $(this).closest('.less').addClass('active');
            $(this).closest(".less").prev().stop(true).slideDown("1000");
        });
        jQuery('.button-read-less').click(function () {
            $(this).closest('.less').removeClass('active');
            $(this).closest(".less").prev().stop(true).slideUp("1000");
        });
    });
    /* ]]> */ </script>
</section>
@endsection