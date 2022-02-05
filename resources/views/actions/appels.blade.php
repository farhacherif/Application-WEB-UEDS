@extends("master")


@section('content')
    <section class="donate-our-charities section-padding-100 bg-img  container" style="background-image: url(images/slide7.jpg);weidth:1920px; height: 1000px">
        <div class="row">
            <div class="col-12">
                <div class="donate-slides owl-carousel">
                    @foreach ($appels as $appel)
                        <div class="row">
                            <!-- Single Blog Area -->
                            <div class="post col-12 col-lg-12" data-appelid=""{{$appel->id}}>

                                <div class="single-blog-area mb-100">
                                    <div class="blog-thumbnail">
                                        <img src="{{url('/images/'.$appel->image)}}" alt="" style="height:300px; weight:300px">
                                        
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="blog-title">{{$appel->libelle}}</a>
                                        <p>{!! substr ($appel->description,0,67) !!}</p>
                                        <a>{{ $appel->lieu}}</a>
                                    </div>
                                    <div class="faith-buttons-area mb-100">

     <a  class="btn btn-success" role="button" aria-pressed="true" href="{{url('/actions/evenements/show',$evenement)}}">Lire la suite</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        </div>

    </section>

    <style>

        button.like{
            width: 50px;
            height: 50px;
            margin: 0 auto;
            line-heigth: 50px;
            border-radius: 50%;
            color: rgba(0,150,136 ,1);
            background-color:rgba(38,166,154 ,0.3);
            border-color: rgba(0,150,136 ,1);
            border-width: 1px;
            font-size: 15px;
        }

        button.dislike{
            width: 50px;
            height: 50px;
            margin: 0 auto;
            line-heigth: 50px;
            border-radius: 50%;
            color: rgba(255,82,82 ,1);
            background-color: rgba(255,138,128 ,0.3);
            border-color: rgba(255,82,82 ,1);
            border-width: 1px;
            font-size: 15px;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script type="text/javascript">



    </script>

@endsection
