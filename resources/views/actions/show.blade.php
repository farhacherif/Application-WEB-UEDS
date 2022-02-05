

@extends("master")

@section('content')
<br>
<br>



<div class="container">
    <div class="row">
      <div class="col-sm-8" >
      <!-- Sermons Content -->
      <form   enctype="multipart/form-data">


              <h1>{{ $evenement->libelle}} </h1>

          <h3>{{$evenement->lieu}}</h3>
          <p class="date">{{date('d-m-Y', strtotime($evenement->date))}}</p>
          <p class="text">{!! $evenement->description !!}</p>

          <!-- Audio Player -->


</form>
      </div>


      <div class="col-sm-4">

  <div id="gallery">
      @foreach ($images as $image)
  @if($image->evenement_id==$evenement->id)
      <img alt="" src="{{url('/images/'.$image->image)}}"/>
      @endif
      @endforeach
    </div>

      </div>
    </div>
</div>
    <style>
      #info {border-style: outset;
        border-color: #FE85A7;}
        body{
        /* The image used */
        /* Used if the image is unavailable */
        height: 500px; /* You must set a specified height */
        /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
      #gallery {

  width: 610px;
  margin: 70px auto;
}

#gallery img {
  width: 300px;
  -webkit-transition-duration: 0.6s; /*Webkit: animation duration*/
  -moz-transition-duration: 0.6s; /*Mozilla: animation duration*/
  -o-transition-duration: 0.6s; /*Opera: animation duration*/
 /*initial opacity of the image*/
  z-index: 1; /*place non-hover images behind the hover image*/
  margin: 0; /*remove default margin for images*/
  position: relative; /*solve the problem with z-index in Chrome*/
}

#gallery img:hover {
  -webkit-transform: scale( 1.5 ); /*Webkit: increase size to 1.5x*/
  -moz-transform: scale( 1.5 ); /*Mozilla: scaling*/
  -o-transform: scale( 1.5 ); /*Opera: scaling*/
  box-shadow: 0px 0px 25px gray; /*CSS3 shadows: 25px fuzzy shadow around the entire image*/
  -webkit-box-shadow: 0px 0px 25px gray; /*Webkit: shadows*/
  -moz-box-shadow: 0px 0px 25px gray; /*Mozilla: shadows*/
  opacity: 1; /*default opacity*/
  z-index: 10; /*place hover image in front the non-hover images*/
}
      </style>
      </body>
@endsection
