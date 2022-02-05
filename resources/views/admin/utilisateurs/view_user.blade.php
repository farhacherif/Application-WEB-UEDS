<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Profil du bénévole </title>
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
    <link href="{{asset('josh/HTML Version/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('josh/HTML Version/vendors/x-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('josh/HTML Version/css/pages/user_profile.css" rel="stylesheet')}}" type="text/css" />
    <!--end of page level css-->
</head>
@include('admin.layout.header')
<body class="skin-josh">

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
@include('admin.layout.sidebar')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Profil du bénévole</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#">Bénévole</a>
                </li>
                <li class="active">Profil du bénévole</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav  nav-tabs ">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">
                                <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i> Profil du bénévole</a>
                        </li>
                     <!--   <li>
                            <a href="#tab2" data-toggle="tab">
                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i> Change Password</a>
                        </li>
                        <li>
                            <a href="user_profile.html">
                                <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i> Advanced Profil du bénévole</a>
                        </li>-->
                    </ul>
                    <div class="tab-content mar-top">
                        <div id="tab1" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                 Profil
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-file">
                                                            <img src="/uploads/avatars/{{ $user->avatar }}" width="200" class="img-responsive" height="150" >
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-max">
                                                        </div>
                                                  <!--      <div>
                                                                <span class="btn btn-default btn-file ">
                                                               <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="...">
                                                                </span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped" id="user">
                                                            <tr>
                                                                <td>Nom et prénom</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit User Name">{{$user->name}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>E-mail</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">{{$user->email}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Numéro de téléphone</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">{{$user->tel}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Presentation</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit Address">{{$user->presentation}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status</td>
                                                                <td>
                                                                    <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status">{{$user->status}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Crée à </td>
                                                                <td>
                                                                {{$user->created_at}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ville</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit City">{{$user->ville}}</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top">
                                    <form action="#" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="inputpassword" class="col-md-3 control-label">
                                                    Password
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                        <input type="password" id="inputpassword" placeholder="Password" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnumber" class="col-md-3 control-label">
                                                    Confirm Password
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                        <input type="password" id="inputnumber" placeholder="Confirm Password" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content -->
    </aside>
    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('josh/HTML Version/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/jquery-mockjax/js/jquery.mockjax.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/x-editable/js/bootstrap-editable.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/js/pages/user_profile.js" type="text/javascript')}}"></script>
<!-- end of page level js -->
</body>

</html>