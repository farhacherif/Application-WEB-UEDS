
@extends("master")


@section('content')
<h1 class="text-center">

</h1>

    <div class="row">
        <div class="col-12">
            <div class="donate-slides owl-carousel">
                @foreach ($search as $evenement)
                    <div class="row">
                        <!-- Single Blog Area -->
                        <div class="col-12 col-lg-12">

                            <div class="single-blog-area mb-100">
                                <div class="blog-thumbnail">
                                    <img src="{{url('/images/'.$evenement->image)}}" alt="" style="height:300px; weight:300px">
                                    <div class="post-date">
                                        <a href="#">{{ $evenement->date}}</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-title">{{$evenement->libelle}}</a>
                                    <p>{{substr ($evenement->description,0,67) }}</p>
                                    <a>{{ $evenement->lieu}}</a>
                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>









@endsection