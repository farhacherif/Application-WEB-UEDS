<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Calendar | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('josh/HTML Version/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('josh/HTML Version/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('josh/HTML Version/vendors/fullcalendar/css/fullcalendar.print.css')}}" rel="stylesheet" media='print' type="text/css">
    <link href="{{asset('josh/HTML Version/vendors/iCheck/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('josh/HTML Version/css/pages/calendar_custom.css')}}" rel="stylesheet" type="text/css" />
    
    <!--page level styles ends-->
</head>

<body class="skin-josh">
@include('admin.layout.header')
    <div class="wrapper row-offcanvas row-offcanvas-left">
@include('admin.layout.sidebar')
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Calendar</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                        </a>
                    </li>
                    <li>Calendar</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="box-title">
                                <h3>Travail à faire</h3>
                                <div class="pull-right box-toolbar">
                                    <a href="#" class="btn btn-link btn-xs" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div id='external-events'>
                                    <div class='external-event palette-warning fc-event'>Vérifier les demandes des rejoint <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event palette-primary fc-event'>Repondre aux messages <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event palette-danger fc-event'>Consulter E-mail <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event palette-info fc-event'>Consulter les dons <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <div class='external-event palette-success fc-event'>Réunion <i class="fa fa-times event-clear" aria-hidden="true"></i></div>
                                    <p class="well no-border no-radius">
                                        <input type='checkbox' class="custom-checkbox" id='drop-remove' style="opacity:1 !important" />
                                        <label for='drop-remove'>Enlever après la suppression</label>
                                    </p>
                                </div>
                            </div>
                            <div class="box-footer">
                                <a href="#" class="btn btn-success btn-block createevent_btn" data-toggle="modal" data-target="#myModal">Ajouter un evenement</a>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-md-9">
                        <div class="box">
                            <div class="box-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">
                                    <i class="fa fa-plus"></i> Create Event
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                                    <div class="input-group-btn">
                                        <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            Type
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" id="color-chooser">
                                            <li>
                                                <a class="palette-primary" href="#">Primary</a>
                                            </li>
                                            <li>
                                                <a class="palette-success" href="#">Success</a>
                                            </li>
                                            <li>
                                                <a class="palette-info" href="#">Info</a>
                                            </li>
                                            <li>
                                                <a class="palette-warning" href="#">warning</a>
                                            </li>
                                            <li>
                                                <a class="palette-danger" href="#">Danger</a>
                                            </li>
                                            <li>
                                                <a class="palette-default" href="#">Default</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /btn-group -->
                                </div>
                                <!-- /input-group -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                    Close
                                    <i class="fa fa-times"></i>
                                </button>
                                <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                    <i class="fa fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
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
</body>
    <style>.fc-toolbar { text-transform: capitalize; }</style>

<script>
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
        lang:'fr',
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
</html>
