
@extends("master")


@section('content')
<div class="breadcumb-area bg-img" style="background-image: url(images/contactt.jpg);">
<!--<div class="breadcumb-area bg-img" >-->
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h2>Contacter nous</h2>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-info-area">
                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-12 col-lg-6">
                            <div class="contact-information">
                                <h5>Informations</h5>
                                <!-- Single Contact Area -->

                                <!-- Single Contact Area -->
                                <div class="single-contact-area mb-30">
                                    <p>Tél :</p>
                                    <span style="color:black;"> (+216) 24. 975 .201</span>
                                </div>

                                <!-- Single Contact Area -->
                                <div class="single-contact-area mb-30">
                                    <p>Email:</p>
                                    <span style="color:black;">associationueds@gmail.com</span>
                                </div>
                                <div class="single-contact-area mb-30">
                                    <p>RIB:</p>
                                    <span style="color:black;">08 106 000 76200 8276175</span>
                                </div>
                                <div class="single-contact-area mb-30">
                                    <p>IBAN: </p>
                                    <span style="color:black;">TN59 0810 6000 7620 0827 6175</span>
                                    • BIC: BIATTNTT AGENCE BIAT ARIANA FORUM
                                </div>
                                <div class="single-contact-area mb-30">
                                    <p>BIC: </p>
                                    <span style="color:black;">BIATTNTT AGENCE BIAT ARIANA FORUM</span>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="col-12 col-lg-6">
                            <div class="contact-form-area">
                                <h5>NOUS CONTACTER</h5>
                                <form method="post" action="{{url('contact/send')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group form-group-default">
                                        <label> Type de la demande</label>
                                        <select name="demande">

                                            <option value="Benevolat">Bénévolat </option>
                                            <option value="Partenariat">Partenariat </option>
                                            <option value="Demande d'aide">Demande d'aide </option>
                                            <option value="Don(reçu fiscale, probléme..)">Don(reçu fiscale, probléme..)</option>
                                            <option value="Don en nature">Don en nature( vêtements, fourniture scolaire..)</option>
                                            <option value="Demande de presse">Demande de presse</option>
                                            <option value="Autres">Autres</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter votre nom</label>
                                        <input type="text" name="name" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Entrer votre mail</label>
                                        <input type="mail" name="email" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Entrer votre message</label>
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="send" class="btn faith-btn" value="Envoyer" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<!-- ##### Google Maps ##### -->
<br>
<br>
<br>
<br>
<br>
<div class="map-area">
    <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51070.372896286106!2d10.13534027312983!3d36.86885291302967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb4e31471bf3%3A0x65bc5efbce842198!2sAriana!5e0!3m2!1sfr!2stn!4v1552140479622" width="1600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>

@endsection
