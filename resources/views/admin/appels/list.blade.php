<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Appels| Un Enfant Des Sourires</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, appel-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><![endif]-->
    <!-- global css -->

    <link href="{{asset('josh/HTML Version/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('josh/HTML Version/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('josh/HTML Version/css/pages/editor.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('josh/HTML Version/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('josh/HTML Version/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('josh/HTML Version/css/pages/editor.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('josh/HTML Version/vendors/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('josh/HTML Version/vendors/ckeditor/js/ckeditor.js')}}" type="text/javascript"></script>
    <script src="{{asset('josh/HTML Version/vendors/ckeditor/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('josh/HTML Version/vendors/ckeditor/js/config.js')}}" type="text/javascript"></script>
    <script src="{{asset('josh/HTML Version/js/pages/editor1.js')}}" type="text/javascript"></script>
</head>

<body class="skin-josh">
@include('admin.layout.header')


<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layout.sidebar')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Appels de solidarité</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Appels de solidarité</a>
                </li>
                <li class="active">Liste des appels de solidarité</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="activity" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Liste des appels de solidarité
                        </h4>
                    </div>
                    <br />
                    <div class="panel-body">
                        <table class="table table-bordered " id="table">
                            <thead>



                            <tr class="filters">
                                <th>Titre</th>

                                <th>Lieu</th>
                                <th>Description</th>

                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($appels as $appel)

                                <tr>

                                    <td>{{$appel->libelle}}</td>

                                    <td>{{$appel->lieu}}</td>



                                 <td>{!! $appel->description !!}</td>
                                 <td name="image" id="image"> <img src="{{url('/images/'.$appel->image)}}" alt="" style="width:100px; height:100px"></td>



                                    <td>

                                        </a>
                                       <!-- <a href="{{url('appels/destroy',$appel->id)}}" data-toggle="modal" data-target="#delete_confirm">
                                            <i class="livicon" data-name="partenaire-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete partenaire"></i>
                                        </a>-->
                                        <form action="" method="post">
                                        {{ csrf_field() }}
                                        <a href="{{url('admin/appels/edit',$appel->id)}}" class="btn btn-warning"><i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>Modifier</a>
                                        <hr>
                                        <a href="{{url('/appels/destroy',$appel->id)}}" class="btn btn-danger" onclick="return confirm('Voulez vous vraiment desactiver ce appel ?')"class="btn btn-default" ><i class="livicon" data-name="trash" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>Supprimer</a>

                                    </form>

                                    </td>
                                 <!--   <td>
                                    <form action="{{url('/appel/destroy',$appel)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                    <input type="submit" value="Supprimer">
                                    </form>

                                </td>-->

                                </tr>

                            @endforeach


                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row-->
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
<script type="text/javascript" src="{{asset('josh/HTML Version/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('josh/HTML Version/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#table').dataTable();
    });
</script>
<!-- end of page level js -->
</body>

</html>
