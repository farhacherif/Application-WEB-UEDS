@extends('master')

@section('content')

<div class="container">
    <br>
    <br>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Nom et prénom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                       <div class="form-group row">
                                                        <label for="sexe" class="col-md-4 col-form-label text-md-right monlabel" class="radio-inline">{{ __('Sexe') }}</label>
                                                        <div class="col-md-6">

                                                            <input type="radio" name="sexe" id="sexe1" value="Homme"> Homme

                                                            <input type="radio" name="sexe" id="sexe2" value="Femme"> Femme
                                                            @if ($errors->has('sexe'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('sexe') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                            </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Date de naissance') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                                    <label for="cadre" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Cadre') }}</label>
                                    <div class="col-md-6">
                                <select name="cadre" id="cadre" value="{{ old('cadre') }}" class="form-control"  >
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
                            <label for="tel" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Numéro de téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="number" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" placeholder="Composé de 8 chiffres" required autofocus>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="presentation" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Présentation') }}</label>

                            <div class="col-md-6">
                                <input id="presentation" class="form-control{{ $errors->has('presentation') ? ' is-invalid' : '' }}" name="presentation" value="{{ old('presentation') }}" placeholder="Qui êtes vous?" required>

                                @if ($errors->has('presentation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('presentation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perimetre" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Perimetre de disponibilité') }}</label>

                            <div class="col-md-6">
                                <input id="perimetre" type="text" class="form-control{{ $errors->has('perimetre') ? ' is-invalid' : '' }}" name="perimetre" value="{{ old('perimetre') }}" placeholder="Exemple(Sidi bou said,Carthage,Toute la Tunisie...)" required autofocus>

                                @if ($errors->has('perimetre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('perimetre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
<div class="form-group row">
            <label for="pays" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Pays') }}</label>
            <div class="col-md-6">
        <select name="pays" id="pays" value="{{ old('pays') }}" class="form-control"  >
        <option value="" disabled selected>choisis votre pays</option>

                                <option value="Afghanistan">Afghanistan </option>
                                    <option value="Afrique du Sud">Afrique du Sud</option>
                                    <option value="Albanie">Albanie</option>
                                    <option value="Algérie">Algérie</option>
                                    <option value="Allemagne">Allemagne</option>
                                    <option value=" Andorre"> Andorre</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                    <option value="Arabie saoudite">Arabie saoudite</option>
                                    <option value="Argentine">Argentine</option>
                                    <option value="Arménie">Arménie</option>
                                    <option value="Australie">Australie</option>
                                    <option value="Autriche">Autriche</option>
                                    <option value="Azerbaïdjan"> Azerbaïdjan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahreïn">Bahreïn</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbade">Barbade</option>
                                    <option value="Belgique">Belgique</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Bénin">Bénin</option>
                                    <option value="Bhoutan">Bhoutan</option>
                                    <option value="Biélorussie">Biélorussie</option>
                                    <option value="Birmanie">Birmanie</option>
                                    <option value="Bolivie">Bolivie</option>
                                    <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brésil">Brésil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgarie">Bulgarie</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodge">Cambodge</option>
                                    <option value="Cameroun">Cameroun</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cap-Vert">Cap-Vert</option>
                                    <option value="République centrafricaine">République centrafricaine</option>
                                    <option value="Chili">Chili</option>
                                    <option value="Chine">Chine</option>
                                    <option value="Chypre">Chypre</option>
                                    <option value="Colombie">Colombie</option>
                                    <option value="Comores">Comores</option>
                                    <option value="République du Congo">République du Congo</option>
                                    <option value="République démocratique du Congo">République démocratique du Congo</option>
                                    <option value="Îles Cook">Îles Cook</option>
                                    <option value="Corée du Nord">Corée du Nord</option>
                                    <option value="Corée du Sud">Corée du Sud</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                                    <option value="Croatie">Croatie</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Danemark">Danemark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="République dominicaine">République dominicaine</option>
                                    <option value="Dominique">Dominique</option>
                                    <option value="Égypte">Égypte</option>
                                    <option value="Émirats arabes unis">Émirats arabes unis</option>
                                    <option value="Équateur">Équateur</option>
                                    <option value="Érythrée">Érythrée</option>
                                    <option value="Espagne">Espagne</option>
                                    <option value="Estonie">Estonie</option>
                                    <option value="États-Unis">États-Unis</option>
                                    <option value="Éthiopie">Éthiopie</option>
                                    <option value="Fidji">Fidji</option>
                                    <option value="Finlande">Finlande</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambie">Gambie</option>
                                    <option value="Géorgie">Géorgie</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Grèce">Grèce</option>
                                    <option value="Grenade">Grenade</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinée">Guinée</option>
                                    <option value="Guinée-Bissau">Guinée-Bissau</option>
                                    <option value="Guinée équatoriale">Guinée équatoriale</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haïti">Haïti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hongrie">Hongrie</option>
                                    <option value="Inde">Inde</option>
                                    <option value="Indonésie">Indonésie</option>
                                    <option value="Irak">Irak</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Irlande">Irlande</option>
                                    <option value="Islande">Islande</option>
                                    <option value="Israël">Israël</option>
                                    <option value="Italie">Italie</option>
                                    <option value="Jamaïque">Jamaïque</option>
                                    <option value="Japon">Japon</option>
                                    <option value="Jordanie">Jordanie</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kirghizistan">Kirghizistan</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Koweït">Koweït</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Lettonie">Lettonie</option>
                                    <option value="Liban">Liban</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libye">Libye</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lituanie">Lituanie</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macédoine du Nord">Macédoine du Nord</option>
                                    <option value="Madagascar"> Madagascar</option>
                                    <option value="Malaisie">Malaisie</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malte">Malte</option>
                                    <option value="Maroc">Maroc</option>
                                    <option value="Îles Marshall">Îles Marshall</option>
                                    <option value="Maurice">Maurice</option>
                                    <option value="Mauritanie">Mauritanie</option>
                                    <option value="Mexique">Mexique</option>
                                    <option value="Micronésie">Micronésie</option>
                                    <option value="Moldavie">Moldavie</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolie">Mongolie</option>
                                    <option value="Monténégro">Monténégro</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Namibie">Namibie</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Népal">Népal</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norvège">Norvège</option>
                                    <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Ouganda">Ouganda</option>
                                    <option value="Ouzbékistan">Ouzbékistan</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palaos">Palaos</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panamá">Panamá</option>
                                    <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Pays-Bas">Pays-Bas</option>
                                    <option value="Pérou">Pérou</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pologne">Pologne</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Roumanie">Roumanie</option>
                                    <option value="Royaume-Uni">Royaume-Uni</option>
                                    <option value="Russie">Russie</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint-Christophe-et-Niévès">Saint-Christophe-et-Niévès</option>
                                    <option value="Saint-Marin">Saint-Marin</option>
                                    <option value="Saint-Vincent-et-les Grenadines">Saint-Vincent-et-les Grenadines</option>
                                    <option value="Sainte-Lucie">Sainte-Lucie</option>
                                    <option value="Îles Salomon">Îles Salomon</option>
                                    <option value="Salvador">Salvador</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="São Tomé-et-Principe">São Tomé-et-Principe</option>
                                    <option value="Sénégal">Sénégal</option>
                                    <option value="Serbie">Serbie</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapour">Singapour</option>
                                    <option value="Slovaquie">Slovaquie</option>
                                    <option value="Slovénie">Slovénie</option>
                                    <option value="Somalie">Somalie</option>
                                    <option value="Soudan">Soudan</option>
                                    <option value="Soudan du Sud">Soudan du Sud</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Suède">Suède</option>
                                    <option value="Suisse">Suisse</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Syrie">Syrie</option>
                                    <option value="Tadjikistan">Tadjikistan</option>
                                    <option value="Tanzanie">Tanzanie</option>
                                    <option value="Tchad">Tchad</option>
                                    <option value="République tchèque">République tchèque</option>
                                    <option value="Thaïlande">Thaïlande</option>
                                    <option value="Timor oriental">Timor oriental</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                                    <option value="Tunisie" >Tunisie</option>
                                    <option value="Turkménistan">Turkménistan</option>
                                    <option value="Turquie">Turquie</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican">Vatican</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viêt Nam">Viêt Nam</option>
                                    <option value="Yémen">Yémen</option>
                                    <option value="Zambie">Zambie</option>
                                    <option value="Zimbabwe">Zimbabwe</option>

        </select>
                @if ($errors->has('ville'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ville') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
                                    <div class="form-group row">
                                    <label for="ville" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Ville') }}</label>
                                    <div class="col-md-6">
                                <select name="ville" id="ville" value="{{ old('ville') }}" class="form-control"  >
                                <option value="" disabled selected>choisis votre ville</option>

                                <option value="aucune">Aucune (internationnal) </option>
                                    <option value="Tunis" >Tunis</option>
                                    <option value="Ariana">Ariana</option>
                                    <option value="Beja">Beja</option>
                                    <option value="Ben arous">Ben Arous</option>
                                    <option value="Bizerte">Bizerte</option>
                                    <option value="Gabes">Gabes</option>
                                    <option value="Gafsa">Gafsa</option>
                                    <option value="Jendouba">Jendouba</option>
                                    <option value="Kairouan">Kairouan</option>
                                    <option value="Kasserine">Kasserine</option>
                                    <option value="Kebili">Kébili</option>
                                    <option value="La manouba">La Manouba</option>
                                    <option value="Le kef">Le kef</option>
                                    <option value="Mahdia">Mahdia</option>
                                    <option value="Medenine">Medenine</option>
                                    <option value="Monastir">Monastir</option>
                                    <option value="Nabeul">Nabeul</option>
                                    <option value="Sfax">Sfax</option>
                                    <option value="Sidi bouzid">Sidi Bouzid</option>
                                    <option value="Siliana">Siliana</option>
                                    <option value="Sousse">Sousse</option>
                                    <option value="Tataouine">Tataouine</option>
                                    <option value="Tozeur">Tozeur</option>
                                    <option value="Zaghouan">Zaghouan</option>
                                </select>
                                        @if ($errors->has('ville'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('ville') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        </div>
                                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Code postal') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="number" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code') }}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="activite_id" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Activités recherchées') }}</label>
                            <div class="col-md-6">
                            <select name="activite_id" id="activite_id" value="{{ old('activite_id') }}" class="form-control"  >
                            <option value="" disabled selected>choisis votre activité</option>

                            @foreach ($activites as $activite)
                            <option value="{{ $activite->id }}">{{ $activite->nom }}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('activite_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('activite_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Mot de passe') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right monlabel">{{ __('Répéter le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn monboutton">
                                    {{ __('Créer un compte') }}
                                </button>
                            </div>
                        </div>
                        <style>
                        .monboutton{
                            background-color: #FE485B;
                            color:white;
                        }
                        .monlabel{
                            font-size:120%;
                        }
                        </style>
                    </form>
                </div>
        </div>        </div>

    </div>
</div>

@endsection
