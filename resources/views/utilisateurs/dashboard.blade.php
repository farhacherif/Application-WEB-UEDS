@extends("master")

@section('content')
      <!-- Navbar -->
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content container mb-30 mt-30">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8 tab">
                    <div class="numbers">
                      <p class="card-category" style="color:black;"><strong>Bénévole</strong></p>
<br>
                      <p class="card-category"style="color:black;">{{ (new Carbon\Carbon($user->created_at))->diffForHumans() }}

                        <p>
                    </div>
                  </div>
                  <style>
                  .tab{
                      width: 50px;
                      height: 80px;
                  }


                  </style>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8 tab">
                    <div class="numbers">
                            <p class="card-category" style="color:black;"><strong>Total Dons</strong></p>

                            <p class="card-title">{{ $donateur_count }}DT
                        <p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8 tab">
                    <div class="numbers">
                            <p class="card-category" style="color:black;"><strong>Evénéments participés</strong></p>
                      <p class="card-title">{{ $evenement_count }}
                        <p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8 tab">
                    <div class="numbers">
                            <p class="card-category" style="color:black;"><strong>Mentions j'aime</strong></p>
                      <p class="card-title">5
                        <p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
         <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                 @if(Session::has('alert-' . $msg))

                 <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                 @endif
                @endforeach
                </div>
<br>
<br>
<br>
        <div class="row">
            <div class="col-lg-12">
                <h3  style="color: black;">Les événements à venir</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($evenements as $evenement)
             @if($evenement->date>$now)
            <div class="col-lg-6 col-md-6 col-sm-6">

              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">

                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                          <img src="{{url('/images/'.$evenement->image)}}"alt="" style="height:150px;width:200px;">
                      </div>
                    </div>
                    <div class="col-7 col-md-8">


                      <div class="numbers">
                       <p class="card-category" style="color: #FE485B"><strong>{{$evenement->libelle}}</strong></p>
                        <h6 class="card-category" style="color: black;">{!! substr ($evenement->description,0,120) !!}
                          </h6>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                   <form action="" method="post">
                                        {{ csrf_field() }}
                  <a href="{{url('/utilisateurs/participer',$evenement->id)}}" class="btn monBoutton3 faith-btn btn-2 m-1">Participer</a>
                     <a href="/evenements/show/{{ $evenement->id}}" class="btn monBoutton3 faith-btn btn-2 m-1">Plus d'info</a>
                </form>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach
            </div>
          </div>
      <!--
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Users Behavior</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of emails sent
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
              </div>
              <div class="card-body">
                <canvas id="speedChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr/>
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    -->
@endsection
