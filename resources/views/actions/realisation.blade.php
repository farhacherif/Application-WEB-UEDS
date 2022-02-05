@extends("master")


@section('content')

<section id="photo">
    <!-- <h3>Photos</h3> -->
    <div id="galerie">
    
    <img src="{{url('/images/realisation1')}}" alt="" />
    <img src="{{url('/images/realisation2')}}" alt="" />
    <img src="{{url('/images/realisation3')}}" alt="" />
    <img src="{{url('/images/realisation4')}}" alt="" />
    <img src="{{url('/images/realisation5')}}" alt="" />
    <img src="{{url('/images/realisation6')}}" alt="" />
    <img src="{{url('/images/realisation7')}}" alt="" />
    <img src="{{url('/images/realisation8')}}" alt="" />
    <img src="{{url('/images/realisation9')}}" alt="" />
    <img src="{{url('/images/realisation10')}}" alt="" />

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
    border: 1px solid #28323B;
    border-radius: 5px;
    border-color: #ff5157;
    box-shadow: 2px 2px 2px #28323B;
    transform: scale(1);
    transition: transform 1s;
    }
   
    #galerie img:hover {
    transform-origin: 50% 50%;
    transform: scale(2);
    z-index: 999;
    border-radius: 5px;
    box-shadow: none;
    }
   </style>
   </body>
   
   @endsection