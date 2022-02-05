
@extends("master")


@section('content')
<div class="breadcumb-area bg-img" style="background-image:url({{url('/images/partenaire2.jpg')}})">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                    <div class="breadcumb-text">
                        
                        <h2>Nos partenaires</h2>
                 
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
                        <img src="img/core-img/cross.png" alt="">
                        <h3>Nos partenaires</h3>
                        <p>Chaque jour un rêve d’enfant se réalise. L’engagement des entreprises à nos côtés est donc essentiel. 
Quels que soient la taille, le nombre de collaborateurs et le secteur d’activité de nos partenaires, notre mission ensemble est d'accompagner les enfants issus de régions défavorisées dans leur scolarité en essayant de leurs assurer les meilleures conditions.

.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($partenaires as $partenaire)
<div class="col-12 col-sm-6 col-lg-4">

        <div class="single-ministry mb-100">
   
        <img src="{{url('/images/'.$partenaire->image)}}" alt="" style="height:350px; weight:300px">
            <div class="ministry-content">
       
                <h6>{{$partenaire->nom}}</h6>
                <p>{{$partenaire->description}}</p>
                
               
            </div>
      
    
        </div>
     
        </div>
        @endforeach
    </div>
    </div>
    </div>
    </section>
    
@endsection