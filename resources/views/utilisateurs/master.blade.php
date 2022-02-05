<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Un Enfant Des Sourires
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('member/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('member/assets/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('member/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">

    <div class="main-panel">

@include('utilisateurs.header')
@yield('content')
@include('utilisateurs.navbar')

    </div>
  </div>
  <!--   Core JS Files   -->
  <link href="{{asset('member/assets/demo/demo.css')}}" rel="stylesheet" />
  <script src="{{asset('member/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('member/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('member/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('member/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('member/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('member/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('member/assets/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('member/assets/demo/demo.js')}}"></script>

  <script type="text/javascript">

    var url = "{{url('/like')}}";
    var url_dis = "{{url('/dislike')}}";
      var token ="{{ Session::token()}}";

    </script>
</body>

</html>
