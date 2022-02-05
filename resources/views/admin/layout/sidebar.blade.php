<aside class="left-side sidebar-offcanvas">
    <section class="sidebar ">
    <div class="page-sidebar sidebar-nav">
    <div class="nav_icons">
    <ul class="sidebar_threeicons">
    <li>
    <a href="{{asset('/admin')}}">
    <i class="livicon" data-name="table" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
    </a>
    </li>
    <li>
    <a href="{{asset('/evenements/index')}}">
    <i class="livicon" data-c="#FE485B" title="Gérer évènements" data-hc="#FE485B" data-name="list-ul" data-size="25" data-loop="true"></i>
    </a>
    </li>
    <li>
    <a href="{{asset('/images/show')}}">
    <i class="livicon" data-name="image" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
    </a>
    </li>
    <li>
    <a href="{{asset('/liste')}}">
    <i class="livicon" data-name="users" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
    </a>
    </li>
    </ul>
    </div>
    <div class="clearfix"></div>
    <!-- BEGIN SIDEBAR MENU -->
    <ul id="menu" class="page-sidebar-menu">
    <li class="active">
    <a href="{{asset('/admin')}}">
    <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
    <span class="title">Tableau de bord</span>
    </a>
    </li>

    <li>
    <a href="#">
    <i class="livicon" data-name="users" data-size="18" data-c="#01BF6D" data-hc="#01BF6D" data-loop="true"></i>
    <span class="title">Gérer Bénévoles</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">

    <li>
    <a href="{{asset('/users/create')}}">
    <i class="fa fa-angle-double-right"></i> Ajouter Bénévoles
    </a>
    </li>
    <li>
    <a href="{{asset('/listeall')}}">
    <i class="fa fa-angle-double-right"></i> Liste des bénévoles
    </a>
    </li>
    <li>
    <a href="{{asset('/liste')}}">
    <i class="fa fa-angle-double-right"></i> Liste des utilisateurs supprimés
    </a>
    </li>

    <!-- <li>
    <a href="{{asset('showUsersprofile')}}">
    <i class="fa fa-angle-double-right"></i> View Profile
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/deleted_users.html')}}">
    <i class="fa fa-angle-double-right"></i> Deleted Users
    </a>
    </li>-->
    </ul>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="doc-portrait" data-c="#FE485B" data-hc="#FE485B" data-size="18" data-loop="true"></i>
    <span class="title">Gérer Activités</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('/activites/create')}}">
    <i class="fa fa-angle-double-right"></i> Ajouter une activité
    </a>
    </li>
    <li>
    <a href="{{asset('/activites/list')}}">
    <i class="fa fa-angle-double-right"></i> Liste des activites
    </a>
    </li>

    </ul></li>
    <li>
    <a href="{{asset('/eventcalendar')}}">
    <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
    <span class="badge badge-danger"></span> Calendrier
    </a>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="users-add" data-c="#01BF6D" data-hc="#01BF6D" data-size="18" data-loop="true"></i>
    <span class="title"></span>
    <span class="fa arrow"></span>Liste de participation
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('/admin/participation/list')}}">
    <i class="fa fa-angle-double-right"></i> Liste des demandes
    </a>
    </li>
    <li>
    <a href="{{asset('admin/participation/list_valide')}}">
    <i class="fa fa-angle-double-right"></i> Liste des participants
    </a>
    </li>

    </ul></li>
    <li>
    <a href="{{asset('/admin/statistiques')}}">
    <i class="livicon" data-c="#418BCA" data-hc="#418BCA" data-name="piechart" data-size="18" data-loop="true"></i>
    <span class="badge badge-danger"></span> Consulter Statistiques
    </a>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="alarm" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
    <span class="title">Gérer Appels Solidarités</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('admin/appels/list')}}">
    <i class="fa fa-angle-double-right"></i> Lister les appels
    </a>
    </li>
    <li>
    <a href="{{asset('admin/appels/create')}}">
    <i class="fa fa-angle-double-right"></i> Ajouter un appel
    </a>
    </li>



    </ul>
    </li>



    <li>
    <a href="#">
    <i class="livicon" data-name="piggybank" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
    <span class="title">Consulter les dons</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/Inbox.html')}}">
    <i class="fa fa-angle-double-right"></i> Inbox
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/compose.html')}}">
    <i class="fa fa-angle-double-right"></i> Compose
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/view_mail.html')}}">
    <i class="fa fa-angle-double-right"></i> Single Mail
    </a>
    </li>
    </ul>
    </li>










    <li>
    <a href="{{asset('/evenements/index')}}">
    <i class="livicon" data-c="#FE485B" data-hc="#FE485B" data-name="list-ul" data-size="18" data-loop="true"></i>
    <span class="badge badge-danger"></span> Gérer évènements
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('/evenements/create')}}">
    <i class="fa fa-angle-double-right"></i> Ajouter évènement
    </a>
    </li>
    <li>
    <a href="{{asset('/evenements/index')}}">
    <i class="fa fa-angle-double-right"></i> Liste des évènements
    </a>
    </li></ul></li>
    <li>
    <a href="#">
    <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
    <span class="title">Gérer galerie</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('/images/show')}}">
    <i class="fa fa-angle-double-right"></i> Galerie
    </a>
    </li>
    <li>
    <a href="{{asset('/images/create')}}">
    <i class="fa fa-angle-double-right"></i> Ajouter d'autres images
    </a>
    </li>
    <!-- <li>
    <a href="{{asset('josh/HTML Version/dropzone.html')}}">
    <i class="fa fa-angle-double-right"></i> Dropzone
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/imagecropping.html')}}">
    <i class="fa fa-angle-double-right"></i> Image Cropping
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/multiple_upload.html')}}">
    <i class="fa fa-angle-double-right"></i> Multiple File Upload
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/imgmagnifier.html')}}">
    <i class="fa fa-angle-double-right"></i> Image Magnifier
    </a>
    </li>-->
    </ul>
    </li>
    <!--
    <li>
    <a href="#">
    <i class="livicon" data-name="medal" data-size="18" data-c="#01BF6D" data-hc="#01BF6D" data-loop="true"></i>
    <span class="title">Builders</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/form_builder.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Builder
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/form_builder2.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Builder 2
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/buttonbuilder.html')}}">
    <i class="fa fa-angle-double-right"></i> Button Builder
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/page_builder.html')}}">
    <i class="fa fa-angle-double-right"></i> Page Builder
    </a>
    </li>
    </ul>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
    <span class="title">Forms</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/form_examples.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Examples
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/form_editor.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Editors
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/form_editor2.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Editors2
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/form_validation.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Validation
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/formelements.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Elements
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/dropdowns.html')}}">
    <i class="fa fa-angle-double-right"></i> Drop Downs
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/radio_check.html')}}">
    <i class="fa fa-angle-double-right"></i> Radio and Checkbox
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/ratings.html')}}">
    <i class="fa fa-angle-double-right"></i> Ratings
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/josh/HTML Version/form_layouts.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Layouts
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/formwizard.html')}}">
    <i class="fa fa-angle-double-right"></i> Form Wizards
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/accordionformwizard.html')}}">
    <i class="fa fa-angle-double-right"></i> Accordion Wizards
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/datepicker.html')}}">
    <i class="fa fa-angle-double-right"></i> Date Pickers
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/advanced_datepickers.html')}}">
    <i class="fa fa-angle-double-right"></i> Advanced Date Pickers
    </a>
    </li>
    </ul>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
    <span class="title">UI Features</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/animatedicons.html')}}">
    <i class="fa fa-angle-double-right"></i> Animated Icons
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/buttons.html')}}">
    <i class="fa fa-angle-double-right"></i> Buttons
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/advanced_buttons.html')}}">
    <i class="fa fa-angle-double-right"></i> Advanced Buttons
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/tabs_accordions.html')}}">
    <i class="fa fa-angle-double-right"></i> Tabs and Accordions
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/panels.html')}}">
    <i class="fa fa-angle-double-right"></i> Panels
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/icon.html')}}">
    <i class="fa fa-angle-double-right"></i> Font Icons
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/color.html')}}">
    <i class="fa fa-angle-double-right"></i> Color Picker Slider
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/grid.html')}}">
    <i class="fa fa-angle-double-right"></i> Grid Layout
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/carousel.html')}}">
    <i class="fa fa-angle-double-right"></i> Carousel
    </a>
    </li>
    <li> <a href="{{asset('josh/HTML Version/advanced_modals.html')}}"> <i class="fa fa-angle-double-right"></i> Advanced Modals </a> </li> <li> <a href="{{asset('josh/HTML Version/tagsinput.html')}}"> <i class="fa fa-angle-double-right"></i> Tags Input </a> </li> <li> <a href="{{asset('josh/HTML Version/nestable_list.html')}}"> <i class="fa fa-angle-double-right"></i> Nestable List </a> </li>
    <li>
    <a href="{{asset('josh/HTML Version/sortable_list.html')}}">
    <i class="fa fa-angle-double-right"></i> Sortable List
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/treeview_jstree.html')}}">
    <i class="fa fa-angle-double-right"></i> Treeview and jsTree
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/toastr_notification.html')}}">
    <i class="fa fa-angle-double-right"></i> Toastr Notifications
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/sweetalert.html')}}">
    <i class="fa fa-angle-double-right"></i> Sweet Alert
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/notifications.html')}}">
    <i class="fa fa-angle-double-right"></i> Notifications
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/session_timeout.html')}}">
    <i class="fa fa-angle-double-right"></i> Session Timeout
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/portlet_draggable.html')}}">
    <i class="fa fa-angle-double-right"></i> Draggable Portlets
    </a>
    </li>
    </ul>
    </li>
    --> <li>
    <a href="#">
    <i class="livicon" data-name="bookmark" data-c="#FE485B" data-hc="#FE485B" data-size="18" data-loop="true"></i>
    <span class="title">Gérer Partenaires</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('/partenaires/create')}}">
    <i class="fa fa-angle-double-right"></i> Ajouter un partenaire
    </a>
    </li>
    <li>
    <a href="{{asset('/partenaires/list')}}">
    <i class="fa fa-angle-double-right"></i> Liste des partenaires
    </a>
    </li>

    <li>
    <a href="{{asset('/partenaires/listdesac')}}">
    <i class="fa fa-angle-double-right"></i> Liste des partenaires désactivés
    </a>
    </li>

    <!-- <li>
    <a href="timeline.html">
    <i class="fa fa-angle-double-right"></i> Timeline
    </a>
    </li>
    <li>
    <a href="transitions.html">
    <i class="fa fa-angle-double-right"></i> Transitions
    </a>
    </li>
    <li>
    <a href="sliders.html">
    <i class="fa fa-angle-double-right"></i> Sliders
    </a>
    </li>
    <li>
    <a href="knob.html">
    <i class="fa fa-angle-double-right"></i> Circles Sliders
    </a>
    </li>-->
    </li>

    <!-- <li>
    <a href="#">
    <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
    <span class="title">Data Tables</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/simple_table.html')}}">
    <i class="fa fa-angle-double-right"></i> Simple tables
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/advanced_tables.html')}}">
    <i class="fa fa-angle-double-right"></i> Advanced Data Tables
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/advanced_tables2.html')}}">
    <i class="fa fa-angle-double-right"></i> Advanced Data Tables2
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/editable_table.html')}}"> <i class="fa fa-angle-double-right"></i> Editable Data Tables </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/responsive_tables.html')}}"> <i class="fa fa-angle-double-right"></i> Responsive Data Tables </a>
    </li>
    </ul>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="barchart" data-size="18" data-c="#01BF6D" data-hc="#01BF6D" data-loop="true"></i>
    <span class="title">Charts</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/charts.html')}}">
    <i class="fa fa-angle-double-right"></i> Flot Charts
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/piecharts.html">
    <i class="fa fa-angle-double-right')}}"></i> Pie Charts
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/charts_animation.html')}}">
    <i class="fa fa-angle-double-right"></i> Animated Charts
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/jscharts.html')}}">
    <i class="fa fa-angle-double-right"></i> JS Charts
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/sparklinecharts.html')}}">
    <i class="fa fa-angle-double-right"></i> Sparkline Charts
    </a>
    </li>
    </ul>
    </li>


    <li>
    <a href="#">
    <i class="livicon" data-name="map" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
    <span class="title">Maps</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/googlemaps.html')}}">
    <i class="fa fa-angle-double-right"></i> Google Maps
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/vectormaps.html')}}">
    <i class="fa fa-angle-double-right"></i> Vector Maps
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/advancedmaps.html')}}">
    <i class="fa fa-angle-double-right"></i> Advanced Maps
    </a>
    </li>
    </ul>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
    <span class="title">Blog</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/blog_list.html')}}"> <i class="fa fa-angle-double-right"></i> Blog Category List </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/blog_list2.html')}}"> <i class="fa fa-angle-double-right"></i> Blog List </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/add_newblog.html')}}"> <i class="fa fa-angle-double-right"></i> Add New Blog </a>
    </li>
    </ul>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="move" data-c="#FE485B" data-hc="#FE485B" data-size="18" data-loop="true"></i>
    <span class="title">News</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/news.html')}}">
    <i class="fa fa-angle-double-right"></i> News
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/news_details.html')}}">
    <i class="fa fa-angle-double-right"></i> News Details
    </a>
    </li>
    </ul>
    </li>
    <li>
    <a href="#">
    <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18" data-loop="true"></i>
    <span class="title">Pages</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('josh/HTML Version/lockscreen.html')}}">
    <i class="fa fa-angle-double-right"></i> Lockscreen
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/invoice.html')}}">
    <i class="fa fa-angle-double-right"></i> Invoice
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/login.html')}}">
    <i class="fa fa-angle-double-right"></i> Login
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/login2.html')}}">
    <i class="fa fa-angle-double-right"></i> Login 2
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/login.html#toregister')}}">
    <i class="fa fa-angle-double-right"></i> Register
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/register2.html')}}">
    <i class="fa fa-angle-double-right"></i> Register 2
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/404.html')}}">
    <i class="fa fa-angle-double-right"></i> 404 Error
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/500.html')}}">
    <i class="fa fa-angle-double-right"></i> 500 Error
    </a>
    </li>
    <li>
    <a href="{{asset('josh/HTML Version/blank.html')}}">
    <i class="fa fa-angle-double-right"></i> Blank Page
    </a>
    </li>
    </ul>
    </li>--></ul>

    <li>
    <a href="#">
    <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
    <span class="title">Gérer presse</span>
    <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
    <li>
    <a href="{{asset('admin/presses/create')}}">
    <i class="fa fa-angle-double-right"></i> Ajouter presse
    </a>

    <li>
    <a href="{{asset('admin/presses/list')}}">
    <i class="fa fa-angle-double-right"></i> Liste des presses
    </a>
    </li></ul></li>

    <!-- END SIDEBAR MENU -->
    </div>
    </section>
    <!-- /.sidebar -->
    </aside>
