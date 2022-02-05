
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Un Enfant Des Sourires</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>
<body>
<!-- ##### Search Wrapper Start ##### -->
<div class="search-wrapper d-flex align-items-center justify-content-center bg-img foo-bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
    <div class="close--icon">
        <i class="fa fa-times"></i>
    </div>

    <!-- Logo -->
    <a href="index.html" class="search-logo"><img src="images/ueds.png" alt=""></a>
    <!-- Search Form -->
    <div class="search-form">
        <form action="{{asset('/search')}}" method="POST">
            {{ csrf_field() }}
            <input type="search" name="q" placeholder="Rechercher un événement">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    <!-- Copwrite Text -->
    <div class="copywrite-text">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            All rights reserved | Un Enfant Des Sourires vous souhaite la bienvenue <i class="fa fa-heart-o" aria-hidden="true"></i>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
</div>
<!-- ##### Search Wrapper End ##### -->

<!-- ##### Preloader ##### -->


<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">


                    <div class="top-header-content h-100 d-flex align-items-center justify-content-end">
                        <!-- Next Events Countdown -->
                        <div class="next-events-countdown d-flex align-items-center">
                            <p>Nos prochains évènements :  </p>
                            <p>  {{ $evenement->libelle}} Date : {{date('d-m-Y', strtotime($evenement->date))}}</p>
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

                    <a class="nav-brand" href="{{asset('/accueil')}}"><img src=" {{asset('images/ueds.png')}}" style="height:40px; weight:50px" alt=""></a>

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
                                        <li><a href="{{asset('/ueds/presentation')}}">Présentation</a></li>
                                        <li><a href="{{asset('accueil/galerie')}}">Galerie</a></li>
                                        <li><a href="{{asset('/presses')}}">Presse</a></li>
                                        <li><a href="{{asset('contact.html')}}">Nos Actus</a></li>
                                    </ul>
                                </li>


                                </li>

                                <li><a href="#">Actions</a>
                                    <ul class="dropdown">
                                        <li><a href="{{asset('/actions/calendar')}}">Agenda</a></li>
                                        <li><a href="{{asset('index.html')}}">Nos réalisations</a></li>
                                        <li><a href="{{asset('/actions/evenements')}}">Nos événements</a></li>
                                        <li><a href="{{asset('ministries.html')}}">Nos appels</a></li>


                                    </ul>
                                </li>

                                </li>
                                <li><a href="ministries.html">Partenaires</a>
                                    <ul class="dropdown">

                                        <li><a href="{{asset('/devenir_partenaire/nos_partenaires')}}"> Partenaires</a></li>
                                        <li><a href="{{asset('/devenir_partenaire/partenaire')}}">Devenir partenaire</a></li>
                                        <li><a href="{{asset('ministries.html')}}">Les témoignages</a></li>

                                    </ul>



                                </li>
                                <li><a href="sermons.html">Agir</a>
                                    <ul class="dropdown">
                                        <li><a href="{{asset('/login')}}">Devenir bénévole</a></li>
                                        <li><a href="{{asset('elements.html')}}">Organiser collecte</a></li>
                                        <li><a href="{{asset('/donateurs/create')}}">Don en urgence</a></li>

                                    </ul>

                                </li>

                                <li><a href="{{asset('/contact')}}">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                            <!-- Donate Button -->
                            <div class="donate-btn">
                                <a href="{{asset('donateurs/create')}}">Faire un don</a>
                            </div>


                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <!--page level css -->
    <link href="{{asset('josh/HTML Version/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('josh/HTML Version/vendors/fullcalendar/css/fullcalendar.print.css')}}" rel="stylesheet" media='print' type="text/css">

    <!--page level styles ends-->






<!-- Right side column. Contains the navbar and content of the page -->

        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>


<a  href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="{{asset('josh/HTML Version/js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="{{asset('josh/HTML Version/vendors/moment/js/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('josh/HTML Version/vendors/iCheck/js/icheck.js')}}" type="text/javascript"></script>

<script src="{{asset('bower_components/fullcalendar/dist/locale/fr.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
<br>
    <br>
    <style>.fc-toolbar { text-transform: capitalize; }</style>
    <br><script>
            $(document).ready(function() {


                /* Calendar */
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        };

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0 //  original position after the drag
                        });

                    });
                }
                ini_events($('#external-events div.external-event'));


                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();
                $('#calendar').fullCalendar({
                    lang: 'fr',
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: ''
                    },
                    //Random events
                    eventSources: [
                            {
                                events: <?=json_encode($events);?>
                            }
                        ],
                    editable: true,
                    droppable: true,
                    height:450,
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });

                /* ADDING EVENTS */
                var defaultColor = "#A9B6BC";
                var lettercolor = "#fff"; //default
                $("#color-chooser-btn").css({ "background-color": defaultColor, "color": lettercolor });
                //Color chooser button
                var colorChooser = $("#color-chooser-btn");
                $("#color-chooser > li > a").click(function(e) {
                    e.preventDefault();
                    //Save color
                    currColor = $(this).css("background-color");
                    //Add color effect to button
                    colorChooser
                        .css({
                            "background-color": currColor,
                            "border-color": currColor
                        })
                        .html($(this).text() + ' <span class="caret"></span>');
                });
                $("#add-new-event").click(function(e) {
                    e.preventDefault();
                    //Get value and make sure it is not null
                    var val = $("#new-event").val();
                    if (val.length == 0) {
                        return;
                    }

                    //Create event
                    var event = $("<div />");
                    event.css({
                        "background-color":currColor,
                        "border-color": currColor,
                        "color": "#fff"
                    }).addClass("external-event");
                    event.html(val).append('<i class="fa fa-times event-clear" aria-hidden="true"></i>');
                    $('#external-events').prepend(event);

                    //Add draggable funtionality
                    ini_events(event);

                });
                //Remove event from text input
                $('.createevent_btn').on("click", function() {
                    $("#new-event").val(" ");
                });
                $(document).on('click', '.event-clear', function() {
                    $(this).closest('div').remove();
                });
            });
            $('input[type="checkbox"].custom-checkbox').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                increaseArea: '20%'
            });
            </script>
        </section>
@include('../footer');

<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<script src="{{ asset('js/plugins/audioplayer.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>
