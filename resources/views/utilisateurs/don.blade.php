@extends("master")


@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <b><h4 style="color: #ff5157">Historique de mes dons</h4></b>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                       Date
                      </th>
                      <th>
                      Montant
                      </th>


                    </thead>
                    @foreach ($donateurs as $donateur)

                    <tbody>
                      <tr>
                        <td>
                     <b>{{ $donateur->created_at }}</b>
                        </td>
                        <td>
                            <b>  {{ $donateur->montant }} Dt</b>
                        </td>


                      </tr>



                    </tbody>

                    @endforeach
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
