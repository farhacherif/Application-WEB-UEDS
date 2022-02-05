@extends("master")


@section('css')
<style type="text/css">
    .stepwizard-step p {
        margin-top: 10px;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }
    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>
@endsection
@section('content')
<div class="container mt-30 mb-30">
    <div class="row text-center">

        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked ">

                <div id="sidebar" class="unit size1of3 lastUnit">
                    <div class="step-info">
                        <h3 style="color:#FE485B">Grâce à votre don</h3>
                        <div class="step-info-body">
                            <p>• nous d&eacute;fendons les enfants dont les droits sont bafou&eacute;s<br />
                                • nous prot&eacute;geons les enfants les plus vuln&eacute;rables<br />
                                • nous agissons pour un monde o&ugrave; les droits des enfants sont respect&eacute;s, prot&eacute;g&eacute;s et appliqu&eacute;s.<br />
                                Un Enfant Des Sourires est <strong>agr&eacute;&eacute; par le Comit&eacute; de la Charte</strong>.<br />
                                Cet agr&eacute;ment implique un contr&ocirc;le r&eacute;gulier de nos comptes et garantit le bon usage de vos dons.</p>

                                <p style="text-align: center;"><img alt="" src="https://cdn.iraiser.eu/4UeDOhlyLkDUKgmeHRit9Z2n0D+bvdFeTQO9AaqJCN4=/default/origin/ComiteCharteDonlogoRVB.gif" style="width: 49px; height: 49px; margin-top: 5px; margin-bottom: 5px;" /></p>

                            <p>Si les besoins relatifs &agrave; ce projet sont couverts, j&#39;autorise Un Enfant Des Sourires &agrave; r&eacute;affecter mon don &agrave; un autre projet.</p>

                        </div>
                    </div> <!-- End Step-info -->
                </div> <!-- End Sidebar -->
            </ul>
        </div>
        <div class="col-md-9">


            <div class="container">

                <div class="stepwizard" style="color:#bf5329">
                    <div class="stepwizard-row setup-panel" style="color:#bf5329">
                        <div class="stepwizard-step" style="color:#bf5329">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Step 1</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">2</a>
                            <p>Step 2</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">3</a>
                            <p>Step 3</p>
                        </div>
                    </div>
                </div>


                <form method ="POST" action ="/donateurs/store"  enctype="multipart/form-data">
                    {{csrf_field() }}
                    <div class="setup-content" id="step-1">
                            <div class="col-md-12">
                                <h1> Agir </h1>
                                <h3 style="color:#FE485B"> JE FAIS UN DON D'URGENCE POUR LES ENFANTS
                                    Le don ne peut être inférieur à 5DT </h3>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label> Je donne à Un Enfant Des Sourires</label>
                                    <select name="type" id="type" class="full-width form-control" required="required">
                                        <option value="">Choisir</option>
                                        <option value="Maintenant">Maintenant</option>
                                   <!--     <option value="Tous les mois">Tous les mois </option>-->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">  Montant à verser:</label>
                                    <input name="montant" id="montant"  type="number" step="0.01" required="required" class="form-control" placeholder="Entrer votre montant" />
                                </div>

                                <button class="btn faith-btn nextBtn btn-lg pull-right" type="button" >Continuer</button>

                            </div>
                    </div>
                    <div class="setup-content" id="step-2">
                        <div class="">
                            <div class="col-md-12">
                                <h3> Mes coordonnées</h3>

                                <div class="form-group">
                                    <label class="control-label">Nom :</label>
                                    <input maxlength="100" name="nom" id="nom" type="text" required="required" class="form-control" placeholder="Entrer votre nom" />
                                </div>


                                <div class="form-group">
                                    <label class="control-label">Prénom :</label>
                                    <input  maxlength="100" name="prenom" id="prenom" type="text" required="required" class="form-control" placeholder="Entrer votre prénom"  />
                                </div>
                                <div class="form-group">

                                    <label for="pays" class="control-label">Pays</label>

                                        <select name="pays" id="pays" class="form-control" required="required">
                                                <option value="">Choisir</option>
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
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Adresse compléte :</label>
                                    <input type="text" required="required"  name="adresse" id="adresse" class="form-control" placeholder="Entrer votre adresse" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email :</label>
                                    <input  name="mail" id="mail" type="email" required="required" class="form-control" placeholder="Votre adresse mail" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Numéro de téléphone :</label>
                                    <input  name="tel" id="tel" type="number" required="required" class="form-control" placeholder="Votre numéro de téléphone"  />
                                </div>

                            </div>

                            <button type="button" class="btn btn-success nextBtn btn-lg pull-right">Continuer</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="setup-content" id="step-3">
                <div class="">
                    <div class="col-md-12">
                        <h1> Step 3</h1>
                        <h3> Carte de crédit </h3>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active" required="required">
                                <input type="radio" name="carte" id="carte"><img src="/images/visa.png" style="height:30px; weight:30px;">
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="carte" id="carte"><img src="/images/master.png" style="height:30px; weight:30px;">
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="carte" id="carte"> <img src="/images/discover.jpg" style="height:30px; weight:30px;">
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="carte" id="carte"> <img src="/images/express.png" style="height:30px; weight:30px;">
                            </label>
                            <br>
                            <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Numéro de carte :</label>
                            <input maxlength="200" type="number" class="form-control" placeholder="Enter votre numéro de carte"  />
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Code sécurité :</label>
                            <input maxlength="200" type="number" class="form-control" placeholder="Enter votre code sécurité"  />
                        </div>
                        <button class="btn btn-lg pull-right" type="submit">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


@endsection


@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='number'],input[type='email'],input[type='url'],select"),
                isValid = true;

            $(".form-group input, .form-group select").removeClass("is-invalid");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group input, .form-group select").addClass("is-invalid");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
@endsection
