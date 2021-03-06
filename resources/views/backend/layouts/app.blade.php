<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>SPC backend | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/css/metisMenu/metisMenu-vertical.css">
    
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="/css/modals.css">
    <link rel="stylesheet" href="/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
         {{--GRAFICAS DE GOOGLE--}}
         <script src="https://www.gstatic.com/charts/loader.js"></script>
         <script>
           google.charts.load('current', {packages: ['corechart']});
           google.charts.setOnLoadCallback(drawChart);
           ...
         </script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">

                <a href="index.html"><img class="main-logo" src="/img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        {{-- SECCION DE EDUCACION--}}
                        {{--<li class="active">
                            <a class="has-arrow" href="index.html">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Education</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>--}}
                      {{--  <li>
                            <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                        </li> --}}
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Entrenadores</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">Todos los entrenadores</span></a></li>
                                <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Agregar Entrenador</span></a></li>
                               {{--  <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li> --}}
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Estudiantes</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('alumnos.index') }}"><span class="mini-sub-pro">Todos los Estudiantes</span></a></li>

                                <li><a title="Add Students" href="{{ route('alumnos.create') }}"><span class="mini-sub-pro">Registrar estudiantes</span></a></li>
                               {{--  <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Edit Student</span></a></li>
                                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li>--}}
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"> <i class="fa fa-money" aria-hidden="true"></i> <span class="mini-click-non">Pagos</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{ route('Pagos.index') }}"><span class="mini-sub-pro">Todos los Pagos</span></a></li>
                                <li><a title="Add Courses" href="{{ route('Pagos.create') }}"><span class="mini-sub-pro">Añadir pago</span></a></li>
                               {{-- <li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="Product Payment" href="course-payment.html"><span class="mini-sub-pro">Courses Payment</span></a></li>--}}
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"> <i class="fa fa-bar-chart"></i> <span class="mini-click-non">Avances</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{ route('Avance.index') }}"><span class="mini-sub-pro">Ver avances</span></a></li>
                                <li><a title="Add Courses" href="{{ route('Avance.create') }}"><span class="mini-sub-pro">Añadir avance</span></a></li>
                               {{-- <li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="Product Payment" href="course-payment.html"><span class="mini-sub-pro">Courses Payment</span></a></li>--}}
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"> <i class="fa fa-book" aria-hidden="true"></i> <span class="mini-click-non">Blog</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

                                <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">Todas las Entradas</span></a></li>
                                <li><a title="Add Courses" href="add-course.html"><span class="mini-sub-pro">Añadir entrada</span></a></li>
                               {{-- <li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="Product Payment" href="course-payment.html"><span class="mini-sub-pro">Courses Payment</span></a></li>--}}
                            </ul>
                        </li>


                        {{--
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="library-assets.html"><span class="mini-sub-pro">Library Assets</span></a></li>
                                <li><a title="Add Library" href="add-library-assets.html"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                                <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
                                <li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Add Departments</span></a></li>
                                <li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
                            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                                <li><a title="Google Map" href="google-map.html"><span class="mini-sub-pro">Google Map</span></a></li>
                                <li><a title="Data Maps" href="data-maps.html"><span class="mini-sub-pro">Data Maps</span></a></li>
                                <li><a title="Pdf Viewer" href="pdf-viewer.html"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="code-editor.html"><span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="tree-view.html"><span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="preloader.html"><span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="images-cropper.html"><span class="mini-sub-pro">Images Cropper</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                                <li><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                                <li><a title="Rounded Charts" href="rounded-chart.html"><span class="mini-sub-pro">Rounded Charts</span></a></li>
                                <li><a title="C3 Charts" href="c3.html"><span class="mini-sub-pro">C3 Charts</span></a></li>
                                <li><a title="Sparkline Charts" href="sparkline.html"><span class="mini-sub-pro">Sparkline Charts</span></a></li>
                                <li><a title="Peity Charts" href="peity.html"><span class="mini-sub-pro">Peity Charts</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="static-table.html"><span class="mini-sub-pro">Static Table</span></a></li>
                                <li><a title="Data Table" href="data-table.html"><span class="mini-sub-pro">Data Table</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="advance-form-element.html"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                                <li><a title="Password Meter" href="password-meter.html"><span class="mini-sub-pro">Password Meter</span></a></li>
                                <li><a title="Multi Upload" href="multi-upload.html"><span class="mini-sub-pro">Multi Upload</span></a></li>
                                <li><a title="Text Editor" href="tinymc.html"><span class="mini-sub-pro">Text Editor</span></a></li>
                                <li><a title="Dual List Box" href="dual-list-box.html"><span class="mini-sub-pro">Dual List Box</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
                            <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                                <li><a title="Modals" href="modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                                <li><a title="Buttons" href="buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                                <li><a title="Tabs" href="tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                                <li><a title="Accordion" href="accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                <li><a title="404 Page" href="404.html"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.html"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul>
                        </li>--}}
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">




                        <a href="index.html"><img class="main-logo" src="/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                 <ul class="dropdown-menu">
                                                     <li>
                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                             Logout
                                                            </a>

                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                             {{ csrf_field() }}
                                                            </form>
                                                     </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Entrenadores <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Todos</a></li>

                                                <li><a href="analytics.html">Agregar</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Estudiantes <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">Todos</a>
                                                </li>
                                                <li><a href="add-professor.html">Agregar</a>
                                                </li>
                                                
                                            
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Pagos <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">Todos</a>
                                                </li>
                                                <li><a href="add-student.html">Agregar</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Avances <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">Agregar avance</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Blog<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html"> Todas las entradas </a>
                                                </li>
                                                <li><a href="add-library-assets.html">Agregar entrada</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                       
                                      
                                      
                                      
                                        
                                       
                                      
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                   
                                  
                                    
                                          <center> <h3> <b>PANEL DE ADMNISTRACIÓN</b></h3> </center>
                                            
                                           
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
@yield('content')



@yield('footer')
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020. Hecho por Ruux</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="/js/counterup/jquery.counterup.min.js"></script>
    <script src="/js/counterup/waypoints.min.js"></script>
    <script src="/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="/js/metisMenu/metisMenu.min.js"></script>
    <script src="/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="/js/morrisjs/raphael-min.js"></script>
    <script src="/js/morrisjs/morris.js"></script>
    <script src="/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="/js/calendar/moment.min.js"></script>
    <script src="/js/calendar/fullcalendar.min.js"></script>
    <script src="/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->/
  
</body>

</html>