<!-- login.blade.php -->

@extends('master')

@section('content')
   <!-- Right Side Of Navbar -->
   <body>
   <div class="row">
   <ul class="navbar-nav col-sm-2">
    <!-- Authentication Links -->
    @guest

        @if (Route::has('register'))
            <li class="nav-item">

                <a  href="{{ route('register') }}" class="nav-link btn faith-btn">{{ __('S\'inscrire') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;" v-pre>
            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; position:absolute; top:10px; left:10px; border-radius:50%">

                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('profile') }}"
                  >
                    {{ __('Profile') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Déconnexion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
</div>
</div>
</nav>

        <div class="col-sm-9 ml-auto">
            <div class="panel panel-default">
         <!--       <div class="panel-heading">Se connecter</div> -->
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @if ($message = Session::get('success'))
<div class="alert alert-success">
<p> {{ $message }} </p>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning">
<p> {{ $message }} </p>
</div>
@endif
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Votre adresse mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Votre mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Mot de passe oublié ?
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-danger">
                                    Se connecter
                                </button>


                            </div>
                        </div>
                        <br />
                      <!--  <p style="margin-left:265px">OU</p> -->
                        <br />
                        <div class="row">
                            <div class="col-sm-4">
                              <a href="{{url('/redirect')}}" class="btn "><img border="0"  src="{{ url('/images/facebook.png') }}"  width="65" height="65"></a>

                              <a href="{{ url('/redirect_google') }}" class="btn"><img border="0"  src="{{ url('/images/mail.png') }}"  width="50" height="50"></a></a>
                            </div>

                        </div>
                        <br><br><br>                        <br><br><br>
                        <br><br><br>

                    </form>
                </div>
            </div>


</div>
</div>
</div>
</body>
<style>
        #info {border-style: outset;
          border-color: #FE85A7;}
          body{
          /* The image used */
          /* Used if the image is unavailable */
          height: 500px; /* You must set a specified height */
          /* Center the image */
          background-repeat: no-repeat; /* Do not repeat the image */
          background-size: cover; /* Resize the background image to cover the entire container */
      }
      </style>
@endsection
