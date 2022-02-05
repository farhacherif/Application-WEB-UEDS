<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gallery | Josh Admin Template</title>
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
    <!-- Add fancyBox main CSS files -->
    <link rel="stylesheet" type="text/css" href="{{asset('josh/HTML Version/vendors/fancybox/jquery.fancybox.css')}}" media="screen" />
    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="{{asset('josh/HTML Version/vendors/fancybox/helpers/jquery.fancybox-buttons.css')}}" />
    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="{{asset('josh/HTML Version/vendors/fancybox/helpers/jquery.fancybox-thumbs.css')}}" />
    <!--page level css end-->
</head>

<body class="skin-josh">
@include('admin.layout.header')

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.layout.sidebar')

        <aside class="right-side">
            <section class="content-header">
                <h1>Galerie</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Galerie</a>
                    </li>
                    <li class="active">
                        Ajouter d'autres images
                    </li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary tabtop">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="image" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>Ajouter d'autres images
                                </h4>
                            </div>
<br><br><br><br>   <center>
                            <form action="/images/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<!--<div class="form-group">
<label for="libelle"> L'évenement</label>
<input type="text" name="name" class="form-control"  placeholder="Evenement?" >
</div>-->

<div class="form-group">
  <label for="libelle"> Evenement :</label>
<select name="evenement_id">

  @foreach($evenements as $evenement)
  <option value="{{$evenement->id}}"> {{$evenement->libelle}}</option>
  @endforeach
</select>
</div>

<div class="form-group">
    <label for="exampleInputFile">Image à ajouter</label>
    <input type="file" name="image" id="image">
</div>
<br /><br />
<input type="submit" class="btn btn-primary" value="Ajouter"/><br><br><br><br><br>
</form>
    </center>   
       
          
                        </div>
                    </div>
                </div>
                <!-- row-->
            </section>
        </aside>
    </div>
    <!-- wrapper-->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="{{asset('josh/HTML Version/vendors/fancybox/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('josh/HTML Version/vendors/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
    <script type="text/javascript" src="{{asset('josh/HTML Version/vendors/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="{{asset('josh/HTML Version/vendors/fancybox/helpers/jquery.fancybox-media.js')}}"></script>
    <script type="text/javascript" src="{{asset('josh/HTML Version/js/pages/gallery.js')}}"></script>
    <!-- end of page level js -->
</body>

</html>
