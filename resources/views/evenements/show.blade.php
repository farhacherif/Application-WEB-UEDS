<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gérer evenements</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('josh/HTML Version/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="{{asset('josh/HTML Version/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('josh/HTML Version/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!-- page level css -->
    <link href="{{asset('josh/HTML Version/css/pages/tables.css')}}" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
</head>

<body class="skin-josh">
 @include('admin.layout.header')
 
 <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
@include('admin.layout.sidebar')
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            
<h1>Les informations </h1>

<p><h3>Libelle de l'évenement :</h3>{{$evenement->libelle}} 
<p><h3>Date de l'évenement : </h3>{{$evenement->date}}
<p><h3>Lieu de l'évenement :</h3> {{$evenement->lieu}}
<p><h3>Description de l'évenement : </h3>{!! $evenement->description !!}
<div>
<img class="img-responsive" src="{{url('/images/'.$evenement->image)}}" alt="" style="width:150px; height:150px">
</div>
	<a href="{{ route('evenements.edit',$evenement)}}">Modifier</a>
<form action="{{route('evenements.destroy', $evenement) }}" method="POST">
	{{csrf_field()}}
	{{method_field('DELETE')}}
<input type="submit" value="Supprimer">
</form>
    <a href="/evenements/index">Tous les evenements</a>
    </aside>
        <!-- right-side -->
    </div>
    <!-- ./wrapper -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
</body>

</html>