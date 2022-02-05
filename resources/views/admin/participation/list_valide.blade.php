<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Participants aux événements | Josh Admin Template</title>
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
            <h1>Participants aux événements</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Participants aux événements</a>
                </li>
                <li class="active">Liste des Participants aux événements</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-success ">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="partenaire" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Liste des Participants aux événements
                        </h4>
                    </div>
                    <br />
                    <div class="panel-body">
                        <table class="table table-bordered " id="table">
                            <thead>



                            <tr class="filters">
                                         <th>Nom</th>
                                       <th>L'événement</th>
                                        <th>Demande le</th>
                                        <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>


                          @foreach ($evenements as $evenement )
                                             @foreach ($users as $user )

                                              @foreach($evenement_user as $event_user)
                                              @if($event_user->evenement_id == $evenement->id && $event_user->user_id == $user->id)


                                <tr>

                                    <td>{{$user->name}}</td>

                                    <td class="success">{{$evenement->libelle}}</td>




                                    <td>{{$event_user->created_at}}</td>


                                    <td>

                                       <a href="{{url('/participation/activer',$event_user->id)}}" class="btn default btn-xs purple">
                                                        <i class="livicon" data-name="user-add" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                                        Accepter
                                                    </a>
                                                    <hr>
                                                    <a href="#" class="btn default btn-xs purple">
                                                        <i class="livicon" data-name="user-remove" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                                        Refuser
                                                    </a>

                                    </form>

                                    </td>


                                </tr>

                                               @endif
                                        @endforeach
                                           @endforeach
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
