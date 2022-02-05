@extends("master")


@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"style="color: #ff5157"> <b>Historique des événements aux quels je vais participer</b></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      Nom
                      </th>
                      <th>
                        Date
                      </th>

                      <th>
                          Lieu
                      </th>
                    </thead>
                    @foreach ($evenement_user as $event_user)
@foreach ($evenements as $evenement)
@if($event_user->evenement_id == $evenement->id)
@if($evenement->date > $now)


                    <tbody>
                      <tr>
                        <td>
                                {{ $evenement->libelle}}

                        </td>

                        <td>
                                {{ $evenement->date}}
                        </td>
                        <td>
                                {{ $evenement->lieu}}
                        </td>

                      </tr>
                      @endif
                      @endif
                      @endforeach
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"style="color: #ff5157"> <b>Historique des événements aux quels j'ai participé </b></h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                          Nom
                          </th>
                          <th>
                            Date
                          </th>

                          <th>
                              Lieu
                          </th>
                        </thead>
                        @foreach ($evenement_user as $event_user)
    @foreach ($evenements as $evenement)
    @if($event_user->evenement_id == $evenement->id)

@if($evenement->date < $now)

                        <tbody>
                          <tr>
                            <td>
                                    {{ $evenement->libelle}}

                            </td>

                            <td>
                                    {{ $evenement->date}}
                            </td>
                            <td>
                                    {{ $evenement->lieu}}
                            </td>

                          </tr>
                          @endif
                          @endif
                          @endforeach
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>

    </div>
  </div>
</body>
@endsection
