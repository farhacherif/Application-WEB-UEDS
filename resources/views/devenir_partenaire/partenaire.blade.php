

@extends("master")


@section('content')


    {{--<!-- Right side column. Contains the navbar and content of the page -->--}}
    <aside class="right-side">
        <section class="text-center content-header">
            <hr>
            <h1>Demande de partenariat</h1>

        </section>
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                 @if(Session::has('alert-' . $msg))

                 <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                 @endif
                @endforeach
                </div>

        <section class="content">
            <div class="row">
                    <div class="col-md-3">

                        </div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            </h3>
                            <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <!-- errors -->
                            <!--main content-->   <form role="form" method="post"  action="{{ url('/devenir_partenaire/partenaire/store') }}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="box-body">
                                    <div class="form-group" >
                                        <label for="exampleInputNom">Nom :</label>
                                        <input type="text" name="nom" class="form-control"  placeholder="Enter votre nom (entreprise/association...)">

                                    </div>
                                    <div class="box-body">
                                                <div class="form-group"  >
                                                    <label for="exampleInputEmail">Email :</label>
                                                    <input type="email" name="email" class="form-control"  placeholder="Enter votre mail">

                                                </div>
                                                <div class="box-body">

                                    <div class="box-body">
                                    <div class="form-group" >
                                        <label for="exampleInputAdress">Adresse :</label>
                                        <input type="text" name="adresse" class="form-control"  placeholder="Enter adresse...">

                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleInputCode">Code :</label>
                                        <input type="number" name="code" class="form-control"  placeholder="Enter code (de votre adresse)...">

                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleInputCode">Téléphone :</label>
                                        <input type="number" name="tel" class="form-control"  placeholder="Enter code (de votre adresse)...">

                                    </div>

                                    <div class="box-body">
                                            <label for="exampleInputDescription">Présentation de votre entreprise :</label>
                                            <div class="form-group">

                                                        <textarea class="description" name="description" class="form-controller" cols="90" rows="10"></textarea>
                                          </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Votre Logo :</label>
                                        <input type="file" name="image" id="image">
                                    </div>



                                                <div class="box-footer">
                                                    <button type="submit" class="btn monBoutton">Ajouter</button>

                                                    <button type="reset" class="btn monBoutton1" value="Anuler">Annuler</button>
                                                </div>
                                              <!-- end .flash-message -->
                                              <style>
                                                .monBoutton {
                                                    background-color: #01BF6D;
                                                    color:white;

                                                  }
                                                  .monBoutton1 {
                                                    background-color: #FE485B;
                                                    color:white;

                                                  }
                                                  </style>
                            </form>



</section>

  @endsection
