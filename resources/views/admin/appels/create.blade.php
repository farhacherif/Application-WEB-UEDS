<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ajouter appels | Josh Admin Template</title>
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
            <h1>Appel de solidarité</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#">Appel de solidarité</a>
                </li>
                <li class="active">Ajouter un appel de solidarité </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="alarm" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Ajouter un appel de solidarité
                            </h3>
                            <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <!-- errors -->
                            <!--main content-->   <form role="form" method="post"  action="{{ url('admin/appels/store') }}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="box-body">
                                    <div class="form-group" >
                                        <label for="exampleInputNom">Titre</label>
                                        <input type="text" name="libelle" class="form-control"  placeholder="Enter le nom">

                                    </div>
                                    <div class="box-body">
                                                <div class="form-group"  >
                                                    <label for="exampleInputEmail">Lieu</label>
                                                    <input type="text" name="lieu" class="form-control"  placeholder="Enter le lieu">

                                                </div>
                                                <div class="box-body">
                                                        <label for="exampleInputDescription">Description</label>
                                                        <div class="form-group">

                                                                    <textarea class="description" name="description" id="tinymce_full" class="form-controller" cols="30" rows="10"></textarea>
                                                      </div>
                                    <div class="row">

                                        </div>
                                    <div class="box-body">
                                    <div class="form-group" >
                                            <label for="exampleInputFile">Image</label>
                                            <input type="file" name="image" id="image">

                                    </div>

                                    <div class="box-body">






                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary">Ajouter</button>

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
