
@extends("master")


@section('content')
<div class="breadcumb-area bg-img" style="background-image:url({{url('/images/pressejournal1.jpg')}})">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    
                    <h2>On parle de nous...</h2>
             
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ministries-area section-padding-100-0">
        <div class="container">
            <div class="row">
            <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <img src="images/presseanimation.gif" alt="" >
                        <h3>Retrouvez ici nos passages dans les medias </h3>
                        <p>Vous découvrirez ci-dessous quelques articles parus dans la presse.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($presses as $presse)
<div class="col-12 col-sm-6 col-lg-4">

        <div class="single-ministry mb-100">
   
        <img src="{{url('/images/'.$presse->image)}}" alt="" style="height:350px; weight:300px">
            <div class="ministry-content">
       
                <h3>{{$presse->nom}}</h3>
                
               
            </div>
      
    
        </div>
     
        </div>
        @endforeach
    </div>
    </div>
    </div>
    </section>
    
@endsection