<header class="header-area">
    <!-- Top Header Area -->

    <div class="top-header">

        <div class="container h-100">

            <div class="row h-100">

                <div class="col-12 h-100">


                    <div class="top-header-content h-100 d-flex align-items-center justify-content-end">



                        <div class="next-events-countdown d-flex align-items-center">

                            <p>Nos prochains événements : </p>
                            <p>  {{ $evenement->libelle}} Date : {{ $evenement->date}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="faith-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="faithNav">

                    <!-- Logo -->

                    <a class="nav-brand" href="{{url('/')}}"><img src=" {{asset('images/ueds.png')}}" style="height:40px; weight:50px" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a>UEDS</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/ueds/presentation')}}">Présentation</a></li>
                                   <!--     <li><a href="{{url('ministries.html')}}">Histoire</a></li>-->
                                        <li><a href="{{url('accueil/galerie')}}">Galerie</a></li>
                                        <li><a href="{{url('/presses')}}">Presse</a></li>
                                        <li><a href="{{url('/evenements/actualite')}}">Nos Actus</a></li>
                                    </ul>
                                </li>


                                </li>

                                <li><a href="#">Actions</a>
                                    <ul class="dropdown">
                                 <!--       <li><a href="{{url('/actions/calendar')}}">Agenda</a></li>-->
                                        <li><a href="{{url('/realisation')}}">Nos réalisations</a></li>
                                        <li><a href="{{url('/actions/evenements')}}">Nos événements</a></li>
                                        <li><a href="{{url('/appels/show')}}">Nos appels</a></li>
                                        <li><a href="{{url('devenir_partenaire/nos_partenaires')}}"> Nos partenaires</a></li>


                                    </ul>
                                </li>

                                </li>


                                <li><a href="{{url('/actions/calendar')}}">Agenda</a></li>

                     <!--           <li><a href="ministries.html">Partenaires</a>
                                    <ul class="dropdown">

                                        <li><a href="{{url('devenir_partenaire/nos_partenaires')}}">Partenaires</a></li>
                                        <li><a href="{{url('devenir_partenaire/partenaire')}}">Devenir partenaire</a></li>
                                        <li><a href="{{url('ministries.html')}}">Les témoignages</a></li>

                                    </ul>



                                </li>-->



                        <!--        <li><a href="sermons.html">Agir</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/login')}}">Devenir bénévole</a></li>
                                        <li><a href="{{url('/login')}}">Proposer collecte</a></li>
                                        <li><a href="{{url('/donateurs/create')}}">Don en urgence</a></li>

                                    </ul>

                                </li>

                                <li><a href="{{url('/contact')}}">Contact</a></li>
                            -->
                            <li><a href="{{url('/contact')}}">Contact</a></li>

                            @guest
                            <li><a href="{{url('/login')}}">Se connecter</a></li>
                            @else
                            <li><a href="#">Mon profil</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/utilisateurs') }}">Récap</a></li>
                                    <li><a href="{{ url('utilisateurs/don') }}">Mes dons </a></li>
                                    <li><a href="{{ url('utilisateurs/mes_evenements') }}">Mes événements</a></li>
                                    <li><a href="{{ url('/chat') }}">Messagerie</a></li>
                                    <li><a href="{{ url('/profile') }}">Mon profil</a></li>
                                    <li><a href="{{ url('utilisateurs/organiser') }}">Proposer une action</a></li>
                                    <li><a href="{{ url('utilisateurs/faire_don') }}">Faire un don</a></li>
                                   <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>
                                    </li> 
                                </ul>

                            </li>
                            @endif


                            </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            <!-- Search Button -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                            <!-- Donate Button -->
                            <div class="donate-btn">
                                <a href="{{url('donateurs/create')}}">Faire un don</a>
                            </div>


                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
