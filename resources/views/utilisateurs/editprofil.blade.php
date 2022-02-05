@extends("master")
@section('content')
<br>
<br>
<br>
<br>
<br>
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier votre profil') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('updateprofil') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom et prenom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ $user->date }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                                    <label for="cadre" class="col-md-4 col-form-label text-md-right">{{ __('cadre') }}</label>
                                    <div class="col-md-6">
                                <select name="cadre" id="cadre" value="{{ $user->cadre }}" class="form-control"  >
                                    <option value="Etudiant">Etudiant </option>
                                    <option value="Professionnel">Professionnel</option>
                                    <option value="Retraité">Retraité</option>
                                    <option value="Sans emploi">Sans emploi</option>
                                </select>
                                        @if ($errors->has('cadre'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('cadre') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        </div>
                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Numero de telephone') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="number" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ $user->tel }}" placeholder="Composé de 8 chiffres" required autofocus>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="presentation" class="col-md-4 col-form-label text-md-right">{{ __('Présentation') }}</label>

                            <div class="col-md-6">
                                <input id="presentation" class="form-control{{ $errors->has('presentation') ? ' is-invalid' : '' }}" name="presentation" value="{{ $user->presentation }}" placeholder="Qui êtes vous?" required>

                                @if ($errors->has('presentation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('presentation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perimetre" class="col-md-4 col-form-label text-md-right">{{ __('Perimetre de disponibilité') }}</label>

                            <div class="col-md-6">
                                <input id="perimetre" type="text" class="form-control{{ $errors->has('perimetre') ? ' is-invalid' : '' }}" name="perimetre" value="{{ $user->perimetre }}" placeholder="Exemple(Sidi bou said,Carthage,Toute la Tunisie...)" required autofocus>

                                @if ($errors->has('perimetre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('perimetre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>


                        <div class="form-group row">
                            <label for="activite_id" class="col-md-4 col-form-label text-md-right">{{ __('Activités recherchées') }}</label>
                            <div class="col-md-6">
                            <select name="activite_id" id="activite_id" value="{{ $user->activite_id }}" class="form-control"  >
                            @foreach ($activites as $activite)
                            <option value="{{ $activite->id }}">{{ $activite->nom }}</option>
                            @endforeach
                            </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Répéter le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Modifier mon compte') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    </div>
</div>
@endsection
