<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>statistique | Josh Admin Template</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{asset('josh/HTML Version/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="{{asset('josh/HTML Version/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
        <![endif]-->
        <!-- global css -->
        <link href="{{asset('josh/HTML Version/css/app.css')}}" rel="stylesheet" type="text/css" />
        <!-- end of global css -->
        <!--page level css -->
        <link type="text/css" rel="stylesheet" href="{{asset('josh/HTML Version/css/pages/flot.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--end of page level css-->
    </head>

    <body class="skin-josh">
    @include('admin.layout.header')

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            @include('admin.layout.sidebar')

            <!--right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <!--section starts-->
                    <h1>Graphiques périodiques</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Tableau de bord
                            </a>
                        </li>
                        <li>
                            <a href="#">Graphiques</a>
                        </li>
                        <li class="active">Graphiques périodiques</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Stack charts strats here-->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Tableau des dons mensuels
                                    </h3>
                                    <span class="pull-right">
                                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div id="monthlyDonationChart"></div>
                                    <!--div id="basicFlotLegend" class="flotLegend"></div>
                                    <div id="bar-chart-stacked" class="flotChart1"></div-->
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <!-- toggling series charts strats here-->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Tableau des bénévoles mensuels
                                    </h3>
                                    <span class="pull-right">
                                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div id="userChart"></div>
                                    <!--div id="bar-chart" class="flotChart"></div-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Tracking charts strats here-->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Tableau des dons quotidien
                                    </h3>
                                    <span class="pull-right">
                                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <form action="{{url('/admin/statistiques')}}" method="GET" id="donation-form">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" id="donations-range" class="form-control">
                                            <input type="hidden" name="from" id="from">
                                            <input type="hidden" name="to" id="to">
                                        </div>
                                    </form>
                                    <div id="donationChart"></div>
                                    <!--div id="basicFlotLegend1" class="flotLegend"></div>
                                    <div id="spline-chart" class="flotChart1"></div-->
                                </div>
                            </div>
                        </div>
                
                    <!-- row -->
                    <div class="col-lg-6">
                      <!-- toggling series charts strats here-->
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h3 class="panel-title">
                                  <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Tableau des evenements mensuels
                              </h3>
                              <span class="pull-right">
                                  <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                  <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                              </span>
                          </div>
                          <div class="panel-body">
                              <div id="evenementChart"></div>
                              <!--div id="bar-chart" class="flotChart"></div-->
                          </div>
                      </div>
                  </div>
              </div>
                    <div class="col-lg-6">
                      <!-- toggling series charts strats here-->
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h3 class="panel-title">
                                  <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Tableau des partenaires mensuels
                              </h3>
                              <span class="pull-right">
                                  <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                  <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                              </span>
                          </div>
                          <div class="panel-body">
                              <div id="partenaireChart"></div>
                              <!--div id="bar-chart" class="flotChart"></div-->
                          </div>
                      </div>
                  </div>
              </div>
                </section>
                <!-- content -->
            </aside>
            <!-- right-side -->
        </div>
        <!-- ./wrapper -->
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
            <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
        </a>
        <!-- global js -->
        <script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
        <!-- end of global js -->
        <!-- begining of page level js -->
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.crosshair.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.time.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.selection.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.symbol.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/splinecharts/jquery.flot.spline.js')}}"></script>
        <script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/vendors/flot.tooltip/js/jquery.flot.tooltip.js')}}"></script>
        {{--<script language="javascript" type="text/javascript" src="{{asset('josh/HTML Version/js/pages/customcharts.js')}}"></script>--}}
        <script language="javascript" type="text/javascript" src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
               
        <script language="javascript" type="text/javascript" src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        
        <!-- end of page level js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script type="text/javascript">
$( document ).ready(function() {	
  $('#userChart').highcharts({
    chart: {
        height: 300,
        type: 'areaspline'
    },      
    title: {
      text: 'Nombre des bénévoles par mois {{ date("Y") }}',
      x: -20 //center
    },
    subtitle: {
      text: '',
      x: -20
    },
    xAxis: {
      categories: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre']
    },
    yAxis: {
      title: {
        text: ' Bénévoles'
      },
      plotLines: [{
        value: 0,
        width: 2,
        color: '#808080'
      }]
    },
    legend: {
      layout: 'vertical',
      align: 'left',
      verticalAlign: 'middle',
      borderWidth: 0
    },
    series: [
    {
      name: '',
      data: {{  json_encode($userChart) }} 
    }     
    ]
  });
  $('#evenementChart').highcharts({
    chart: {
        height: 300,
        type: 'areaspline'
    },      
    title: {
      text: 'Nombre des évènements par mois {{ date("Y") }}',
      x: -20 //center
    },
    subtitle: {
      text: '',
      x: -20
    },
    xAxis: {
      categories: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre']
    },
    yAxis: {
      title: {
        text: ' évènements'
      },
      plotLines: [{
        value: 0,
        width: 2,
        color: '#808080'
      }]
    },
    legend: {
      layout: 'vertical',
      align: 'left',
      verticalAlign: 'middle',
      borderWidth: 0
    },
    series: [
    {
      name: '',
      data: {{  json_encode($evenementChart) }} 
    }     
    ]
  });
  $('#partenaireChart').highcharts({
    chart: {
        height: 300,
        type: 'areaspline'
    },      
    title: {
      text: 'Nombre des partenaires par mois {{ date("Y") }}',
      x: -20 //center
    },
    subtitle: {
      text: '',
      x: -20
    },
    xAxis: {
      categories: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre']
    },
    yAxis: {
      title: {
        text: ' partenaires'
      },
      plotLines: [{
        value: 0,
        width: 2,
        color: '#808080'
      }]
    },
    legend: {
      layout: 'vertical',
      align: 'left',
      verticalAlign: 'middle',
      borderWidth: 0
    },
    series: [
    {
      name: '',
      data: {{  json_encode($partenaireChart) }} 
    }     
    ]
  });
  $('#monthlyDonationChart').highcharts({
    chart: {
        height: 300,
        //type: 'areaspline'
        type: 'column'
    },      
    title: {
      text: 'Montant de dons par mois {{ date("Y") }}',
      x: -20 //center
    },
    subtitle: {
      text: '',
      x: -20
    },
    xAxis: {
      categories: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre']
    },
    yAxis: {
      title: {
        text: ' Dons'
      },
      plotLines: [{
        value: 0,
        width: 2,
        color: '#808080'
      }]
    },
    tooltip: {
        valueSuffix: ' Dt'
    },    
    legend: {
      layout: 'vertical',
      align: 'left',
      verticalAlign: 'middle',
      borderWidth: 0
    },
    series: [
    {
      name: '',
      data: {{  json_encode($monthlyDonationChart) }} 
    }     
    ]
  });
 

  $('#donationChart').highcharts({
    chart: {
        height: 300,
        type: 'areaspline'
    },        
    title: {
      text: 'Donations from {{app('request')->input('from')}} to {{app('request')->input('to')}}',
      x: -20 //center
    },
    subtitle: {
      text: '',
      x: -20
    },
    xAxis: {
        type : 'category'
    },
    yAxis: {
      title: {
        text: ' Dons'
      },
      plotLines: [{
        value: 0,
        width: 2,
        color: '#808080'
      }]
    },
    tooltip: {
        valueSuffix: ' Dt'
    },    
    legend: {
      layout: 'vertical',
      align: 'left',
      verticalAlign: 'middle',
      borderWidth: 0
    },
    series: [
    {
      name: '',
      data: {!! $donationChart !!}
    }     
    ]
  });	

  $('#donations-range')
  .daterangepicker({
    startDate: moment().startOf('month'),
    endDate: moment().endOf('month'),
    locale: {
            format: 'YYYY-MM-DD'
        }      
  })
  .on('apply.daterangepicker', function(ev, picker) {
    $('#from').val($('#donations-range').data('daterangepicker').startDate.format('YYYY-MM-DD'));
    $('#to').val($('#donations-range').data('daterangepicker').endDate.format('YYYY-MM-DD'));
    $('#donation-form').submit();
  });  
});	
</script>     
    </body>

    </html>