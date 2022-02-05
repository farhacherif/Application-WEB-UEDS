@extends("master")


@section('content')

    <!-- ##### Header Area End ##### -->
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url( {{asset('images/galerie.jpg)')}}">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h5>Galerie</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<section class="ftco-gallery">
    <div class="d-md-flex">
        @foreach ($images as $image)
            @foreach ($evenements as $evenement)
                @if ($evenement->id == $image->evenement_id)
                    <a href="{{url('/images/'.$image->image)}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image:url({{url('/images/'.$image->image)}})">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                @endif
            @endforeach

        @endforeach

    </div>
</section>

<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="faith-blog-posts">
                    <div class="row">
                    @foreach ($images as $image)
                        @foreach ($evenements as $evenement)
                            @if ($evenement->id == $image->evenement_id)
                        <!-- Single Blog Area -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-area mb-100">

                                <div class="blog-thumbnail">

                                    <img src="{{url('/images/'.$image->image)}}" alt="">
                                    <div class="post-date">
                                        <a href= "{{url('accueil/images/'.$evenement->id) }}">{{$evenement->libelle}}</a>
                            
                                    </div>

                                </div>

                            </div>


                        </div>
                 @endif
                    @endforeach

                    @endforeach
                        <!-- Single Blog Area -->


                    </div>
                </div>

                <div class="pagination-area">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            {{$images->links()}}
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-12 col-lg-2">
                <div class="faith-blog-sidebar-area">

                    <!-- Widget -->
                    <div class="blog-widget-area">
                        <h5>Archives</h5>
                        <div class="contenu-blanc-avec-scroll">
                        @foreach ($evenements as $evenement)
                        <div class="single-latest-blog-post d-flex mb-30">

                            <div class="latest-blog-post-content">
                            <a href="{{url('accueil/images/'.$evenement->id)}}">{{$evenement->libelle}}</a>

                            </div>
                        </div>


                        @endforeach
                        </div>
                    </div>

                    <!-- Widget -->
                    <div class="blog-widget-area">
                        <h5>Dates importantes</h5>
                        <div class="contenu-blanc-avec-scroll">
                        @foreach ($evenements as $evenement)

                            <div class="single-latest-blog-post d-flex mb-30">


                                <div class="latest-blog-post-content">
                                    <a href="{{url('accueil/images/'.$evenement->id) }}" class="post-title">{{$evenement->date}}</a>
                               
                                </div>
                                </div>

                        @endforeach
                        </div>
                    </div>
                    <style>
                        .contenu-blanc-avec-scroll{
                            max-height: 300px;
                            overflow:scroll;
                        }
                    </style>

                    <!-- Widget -->
                    <div class="blog-widget-area">
                        <h5>Lieux</h5>
                        <div class="contenu-blanc-avec-scroll">
                    @foreach ($evenements as $evenement)
                        <!-- Single Latest Blog Post -->
                        <div class="single-latest-blog-post d-flex mb-30">

                            <div class="latest-blog-post-content">
                                <a href="{{url('accueil/images/'.$evenement->id )}}"  class="post-title">{{$evenement->lieu}}</a>
                                
                            </div>
                        </div>
                    @endforeach
                        </div>

                        <!-- Single Latest Blog Post -->


                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->
@endsection