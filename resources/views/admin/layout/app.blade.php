<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.layout.head')

</head>

    @include('admin.layout.header')

    @include('admin.layout.sidebar')

    @section('main-content')
    @show


<script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- EASY PIE CHART JS -->
<script src="{{asset('josh/HTML Version/vendors/jquery.easy-pie-chart/js/easypiechart.min.js')}}"></script>
<script src="{{asset('josh/HTML Version/vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('josh/HTML Version/js/jquery.easingpie.js')}}"></script>
<!--end easy pie chart -->
<!--for calendar-->
<script src="{{asset('josh/HTML Version/vendors/moment/js/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/fullcalendar/js/fullcalendar.min.js')}}" type="text/javascript"></script>
<!--   Realtime Server Load  -->
<script src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.resize.js')}}" type="text/javascript"></script>
<!--Sparkline Chart-->
<script src="{{asset('josh/HTML Version/vendors/sparklinecharts/jquery.sparkline.js')}}"></script>
<!-- Back to Top-->
<script type="text/javascript" src="{{asset('josh/HTML Version/vendors/countUp.js/js/countUp.js')}}"></script>
<!--   maps -->
<script src="{{asset('josh/HTML Version/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('josh/HTML Version/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('josh/HTML Version/vendors/chartjs/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('josh/HTML Version/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<!--  todolist-->
<script src="{{asset('josh/HTML Version/js/pages/todolist.js')}}"></script>
<script src="{{asset('josh/HTML Version/js/pages/dashboard.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
<script type="text/javascript" src="{{asset('josh/HTML Version/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('josh/HTML Version/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>



</html>