@extends("master")

@section('content')

 <div class="card-footer ">
           
                  <div class="stats">
                   <form action="{{url('/utilisateurs/participer/store',$evenement)}}" method="post">
                                        {{ csrf_field() }}
                                        <div>
                                        Voulez vous vraiment participer à cet événement?</div>

 <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary">Oui je confirme</button>

                                                    <button type="reset" class="btn btn-primary" value="Annuler">Annuler</button>
 </div>                                            </div>
<br>
<br>
<br>
<br>


@endsection
