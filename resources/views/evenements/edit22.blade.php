<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modifier évènement </title>
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
    <link href="{{asset('josh/HTML Version/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('josh/HTML Version/vendors/select2/css/select2.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('josh/HTML Version/vendors/select2/css/select2-bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('josh/HTML Version/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('josh/HTML Version/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('josh/HTML Version/vendors/iCheck/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('josh/HTML Version/css/pages/wizard.css')}}" type="text/css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('josh/HTML Version/vendors/summernote/summernote.css')}}" rel="stylesheet"  type="text/css"/>
   
    <link href="{{asset('josh/HTML Version/css/pages/editor.css')}}" rel="stylesheet" type="text/css"/>
  
    <!--end of page level css-->
</head>

<body class="skin-josh">
@include('admin.layout.header')

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layout.sidebar')


    {{--<!-- Right side column. Contains the navbar and content of the page -->--}}
    <aside class="right-side">
        <section class="content-header">
            <h1>Modifier évènement</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#">Evènements</a>
                </li>
                <li class="active">Modifier évènement </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Modifier évènement
                            </h3>
                            <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <!-- errors -->
                            <!--main content--> 
                              <form role="form" method="post"  action="{{url('/evenements/update/'.$evenement->id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="box-body">
                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">Nom</label>
                                        <input type="text" name="libelle" class="form-control"  placeholder="Enter le nom" value="{{ $evenement->libelle}}">

                                    </div>
                                    
                                    <div class="form-group" >
                                        <label for="exampleInputCode">Description de l'évènement</label>
                                    <div class="form-group">
                                        <textarea name="description" id="summernote" class="form-controller" cols="30" rows="10">{!! strip_tags($evenement->description) !!}</textarea>
                                       </div>
                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">Date</label>
                                        <input type="date" name="date" class="form-control"  placeholder="Enter le date" value="{{ $evenement->date}}">

                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">Lieu</label>
                                        <input type="text" name="lieu" class="form-control"  placeholder="Enter le lieu" value="{{ $evenement->lieu}}">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="caption">  
                                        <img src="{{url('/images/'.$evenement->image)}}" alt="" style="width:150px; height:150px">
                                        <input type="file" name="image" id="image" >
                                    </div>

<br>
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
<script src="{{asset('josh/HTML Version/vendors/moment/js/moment.min.js')}}"></script>
<script src="{{asset('josh/HTML Version/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/select2/js/select2.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/bootstrapwizard/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('josh/HTML Version/js/pages/adduser.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/summernote/summernote.min.js')}}" type="text/javascript"></script>
  
<script type="text/javascript">$("#summernote").summernote();</script>
<!-- end of page level js -->
<script>
    $(document).ready(function() {

        $("#dob").datetimepicker({
            format: 'YYYY-MM-DD',
            widgetPositioning:{
                vertical:'bottom'
            },
            keepOpen:false,
            useCurrent: false,
            maxDate: new Date()
        });
    });
</script>
</body>

</html>