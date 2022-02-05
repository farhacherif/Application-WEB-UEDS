@extends('layoutsadmin.app')

@section('content')


<div class="row text-center">
        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">

     <img src="/uploads/avatars/{{ Auth::admin()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
        <h2> Profil de {{ Auth::admin()->name }}</h2>
        <form enctype="multipart/form-data" action="/profileadmin" method="POST">
<label>Modifier votre image de profil </label>
<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" class="pull-right btn btn-sm btn-success">
</form> 
    </div>
    </div>
</div>

@endsection