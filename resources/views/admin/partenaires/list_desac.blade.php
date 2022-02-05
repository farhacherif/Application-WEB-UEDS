<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Partenaires | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, partenaire-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><![endif]-->
    <!-- global css -->
    <link href="{{asset('josh/HTML Version/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('josh/HTML Version/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link href="{{asset('josh/HTML Version/css/pages/tables.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of page level css -->
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
            <h1>Partenaires</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Partenaires</a>
                </li>
                <li class="active">Liste des partenaires</li>
            </ol>
        </section>
        <!-- Main content -->
                  
<h3 style="color: #FE485B;">        &nbsp &NonBreakingSpace;{{$partenaires->count()}} {{ str_plural('partenaire', $partenaires->count())}} non activés </h3> 
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="partenaire" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Liste des partenaires
                        </h4>
                    </div>
                    <br />
                    <div class="panel-body">
                        <table class="table table-bordered " id="table">
                            <thead>



                            <tr class="filters">
                                    <th>Nom du partenaire</th>
                                    <th>Logo</th>
                                    <th>  E-mail  </th>
                                    <th>Téléphone</th>
                                  
                                    
                                    <th>  Adresse  </th>
                                    <th>Code</th>
                                    <th>Présentation de l'entreprise</th>
                                    <th>Ajouté le </th>
                                    <th>Actions</th>
                                </tr>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($partenaires as $partenaire)

                                <tr>

                                 
                                        <td>{{$partenaire->nom}}</td>
                                        <td name="image" id="image"> <img src="{{url('/images/'.$partenaire->image)}}" alt="" style="width:100px; height:100px"></td>
    
                                        <td>{{$partenaire->email}}</td>
                                        <td>{{$partenaire->tel}}</td>
    

                                 <!--   <td><img src="{{asset( $partenaire->image )}}" width="50px" height="50px"></td> -->
                                 <td>{{ $partenaire->adresse }}</td>
                                 <td>{{$partenaire->code}}</td>

                             
                                 <td>{{$partenaire->description}}</td>

                                    <td>{{ $partenaire->created_at }}</td>


                                    <td>
                                  
                                     
                                        <form action="" method="post">
                                        {{ csrf_field() }}
                                        <a href="{{url('/partenaires/valider',$partenaire->id)}}" class="btn btn-warning" onclick="return confirm('Voulez vous vraiment activer ce partenaire ?')"class="btn btn-default" >Activer</a>
                                        <a href="{{url('/partenaires/destroy',$partenaire->id)}}" class="btn btn-danger" onclick="return confirm('Voulez vous vraiment supprimer déffinitivement ce partenaire ?')"class="btn btn-default" >Supprimer</a>
                                    </form>
                                   
                                    </td>
                           
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