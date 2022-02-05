<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->

    <!-- Title -->
    <title>Un Enfant Des Sourires</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ url('images/ueds.png') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('css')
</head>
<body>
<!-- ##### Search Wrapper Start ##### -->
<div class="search-wrapper d-flex align-items-center justify-content-center bg-img foo-bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
    <div class="close--icon">
        <i class="fa fa-times"></i>
    </div>

    <!-- Logo -->
    <a href="{{url('/accueil')}}" class="search-logo"><img src="{{ url('images/ueds.png') }}" alt=""></a>
    <!-- Search Form -->
    <div class="search-form">
        <form action="{{url('/search')}}" method="POST">
            {{ csrf_field() }}
            <input type="search" name="q" placeholder="Rechercher un événement">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    <!-- Copwrite Text -->
    <div class="copywrite-text">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  All rights reserved | Un Enfant Des Sourires vous souhaite la bienvenue <i class="fa fa-heart-o" aria-hidden="true"></i>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
</div>
@include('header')
@yield('content')
@include('footer')

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<script src="{{ asset('js/plugins/audioplayer.js') }}"></script>
<!-- Active js -->

<script src="{{ asset('js/active.js') }}"></script>
@yield('js')
</body>

</html>
