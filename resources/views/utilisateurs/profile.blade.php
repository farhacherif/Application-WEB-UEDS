@extends('master')

@section('content')

<div class="col-lg-3">
</div>
<div class="row text-center mt-30">
        <div class="container">

</div>
</div>

<div class="row text-center">

<div class="container">
    <div class="row justify-content-center mb-30">
        <div class="col-md-7">

     <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
        <h2> Profil de {{ $user->name }}</h2>
        <form enctype="multipart/form-data" action="/profile" method="POST">
<label>Modifier votre image de profil </label>
<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" class="pull-right btn btn-sm btn-faith">
</form>
<br><br><br>
<center>
<table class="table table-bordered">
<tr><br><br>
<h2>Vos informations</h2>
  <td class="active">Votre nom et prenom</td>
  <td class="active">{{ $user->name}} </td>
  </tr>
  <tr>
  <td class="active">Votre date de naissance</td>
  <td class="active">{{ $user->date}} </td>
  </tr>
  <tr>
  <td class="success">Votre cadre</td>
  <td class="success">{{$user->cadre}}</td>
  </tr>
  <tr>
  <td class="success">Votre numéro de téléphone</td>
  <td class="success">{{$user->tel}}</td>
  </tr><tr>
  <td class="success">Votre présentation</td>
  <td class="success">{{$user->presentation}}</td>
  </tr><tr>
  <td class="success">Votre périmetre de disponibilité</td>
  <td class="success">{{$user->perimetre}}</td>
  </tr>
  <tr>
  <td class="warning">Votre Email</td>
  <td class="warning">{{$user->email}}</td>
</tr>
</table>
<a class="btn faith-btn btn-lg  btn-block" href=" {{ url('editprofil') }} "> Modifier</a>
</center>

    </div>
    </div>

</div>
</div>

@endsection
