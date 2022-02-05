<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modifier évènement | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('josh/HTML Version/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('josh/HTML Version/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('josh/HTML Version/css/pages/editor.css')}}" rel="stylesheet" type="text/css" />

    <!--end of page level css-->

    <script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
    </script>
</head>

<body class="skin-josh">
@include('admin.layout.header')

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layout.sidebar')


    {{--<!-- Right side column. Contains the navbar and content of the page -->--}}
    <aside class="right-side">
        <section class="content-header">
            <h1>Evènement</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#">Evènement</a>
                </li>
                <li class="active">Modifier un évènement </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="calendar" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Modifier un évènement
                            </h3>
                            <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                        </div>
                        <div class="panel-body">
  <form method ="Post" action ="{{url('/evenements/update/'.$evenement->id)}}"  enctype="multipart/form-data">
      {{csrf_field() }}
    <div class="form-group">
      <label for="exampleInputLibelle">Nom de l'évènement:</label>
    <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Nom" value="{{ $evenement->libelle}}">
    </div>
     {!! $errors->first('libelle','<p class="error">:message</p>') !!}


    <div class="form-group">
      <label for="exampleInputdate">Date de l'évènement</label>
      <input type="date" class="form-control" name="date" id="date" placeholder="Date" value="{{ $evenement->date}}">
    </div>


    <div class="form-group">
      <label for="exampleInputLieu">Lieu de l'évènement</label>
      <input type="text" class="form-control" name="lieu" id="lieu" placeholder="Lieu" value="{{ $evenement->lieu}}">
    </div>



    <div class="box-body">
        <label for="exampleInputDescription">Description de l'évènement</label>
        <div class="form-group">

                    <textarea class="description" name="description" id="tinymce_full" class="form-controller" cols="30" rows="10">{{ $evenement->description }}</textarea>
      </div>
   {!! $errors->first('description','<p class="error">:message</p>') !!}

   <div class="box-body">
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <div class="caption">
        <img src="{{url('/images/'.$evenement->image)}}" alt="" style="width:150px; height:150px">
        <input type="file" name="image" id="image" >
    </div>


    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier</button>

      <button type="reset" class="btn btn-primary" value="Anuler">Annuler</button>
  </div>  
  </form>



</section>
    </aside>
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->

</body>

<!-- end of global js -->
<!-- begining of page level js -->
<!-- Bootstrap WYSIHTML5 -->



<script src="{{asset('/josh/HTML Version/vendors/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/josh/HTML Version/vendors/ckeditor/js/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{asset('/josh/HTML Version/vendors/ckeditor/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('/josh/HTML Version/vendors/ckeditor/js/config.js')}}" type="text/javascript"></script>
<script src="{{asset('/josh/HTML Version/js/pages/editor1.js')}}" type="text/javascript"></script>
</html>
