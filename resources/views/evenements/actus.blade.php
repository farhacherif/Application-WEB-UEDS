@extends("master")


@section('content')
<div class="breadcumb-area bg-img" style="background-image: url( {{asset('images/bubble.jpg)')}}">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h5>Les événements à venir</h5>

                </div>
            </div>
        </div>
    </div>
</div>

  <br>
  <br>
  <br>
  <hr>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <!-- Single Sermons Area -->
        @foreach ($evenements as $evenement)
        @if($evenement->date > $now)
        <div class="single-sermons style-3">
            <div class="sermons-content d-flex align-items-center">
                <!-- Sermons Thumbnail -->

                <div class="sermons-thumbnail bg-img" style="background-image:url({{url('/images/'.$evenement->image)}})"></div>
                <!-- Sermons Content -->
                <div class="sermons-text">
                    <a href="#">
                        <h6>{{ $evenement->libelle }}</h6>
                    </a>
                    <p>{{ $evenement->lieu }}</p>
                    <p class="date">{{ date('d-m-Y',strtotime($evenement->date)) }}</p>
                    <p class="text">{!! $evenement->description !!}</p>

                  <br>
                 &nbsp &nbsp   <a href="#" class="btn faith-btn active">Participer</a>
                    <a href="#" class="btn faith-btn active">Faire un don</a>
                </div>

            </div>
        </div>



        <!-- ##### CTA Area Start ##### -->

        <br>
        <br>
        <hr>
        <br>
        <br>

        @endif
        @endforeach


@endsection
