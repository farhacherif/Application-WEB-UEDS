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
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<!-- Styles -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

</head>

<body class="skin-josh">
 @include('admin.layout.header')
 
 <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
@include('admin.layout.sidebar')
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
           
<h1>Editer l'evenement</h1>
<form method ="POST" action ="{{ route('evenements.update', $evenement)}}"  enctype="multipart/form-data">
    {{csrf_field() }} 
    <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="exampleInputLibelle">Libelle :</label>
    <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Libelle?" value="{{ old('libelle') ? old('libelle') : $evenement->libelle}}">
  </div>
   {!! $errors->first('libelle','<p class="error">:message</p>') !!}


  <div class="form-group">
    <label for="exampleInputdate">Date :</label>
    <input type="date" class="form-control" name="date" id="date" placeholder="date?" value="{{ $evenement->date}}">
  </div>


  <div class="form-group">
    <label for="exampleInputLieu">Lieu</label>
    <input type="text" class="form-control" name="lieu" id="lieu" placeholder="Lieu?" value="{{ $evenement->lieu}}">
  </div>


  <div class="form-group">
    
    <label for="exampleInputDescription">Description</label>
    <textarea name="description" id="content" class="form-controller" cols="30" rows="10">{{ $evenement->description }}</textarea>
</textarea>
  </div>
 {!! $errors->first('description','<p class="error">:message</p>') !!}

  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <div class="caption">  
    <img src="{{url('/images/'.$evenement->image)}}" alt="" style="width:150px; height:150px">
    <input type="file" name="image" id="image" >
</div>
  <button type="submit" class="btn btn-success">Modifier un evenement</button>
</form>
<p><a href="">Annuler</a></p> 
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