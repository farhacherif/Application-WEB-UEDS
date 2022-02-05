@extends("master")


@section('content')
<br>
<br>
<br>
<hr>
<div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
         @if(Session::has('alert-' . $msg))

         <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
         @endif
        @endforeach
        </div>
      <div class="content text-center">
        <div class="row text-center" >
          <div class="col-md-12 text-center">
                <form method ="POST" action ="{{ url('utilisateurs/faire_don/store') }}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="col-md-6 text-center">
                <div class="form-group">
                  <label>Montant</label>
                  <input name="montant" id="montant"  type="number" step="0.01" required="required" class="form-control" placeholder="Entrer le montant à verser" />
 
                </div>
              </div>

              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-danger btn-round">Verser le montant</button>
              </div>
            </form>
      </div>
<hr>

    </div>
  </div>

</body>
@endsection
