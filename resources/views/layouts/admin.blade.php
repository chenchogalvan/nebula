<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} @yield('title', ' | Panel')</title>

    <!-- STYLESHEETS -->
    <style type="text/css">
        [fuse-cloak],
        .fuse-cloak {
            display: none !important;
        }
    </style>

    <!-- Icons.css -->
    <link type="text/css" rel="stylesheet" href="../assets/icons/fuse-icon-font/style.css">
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
    <!-- PNotify -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/pnotify/pnotify.custom.min.css">
    <!-- Nvd3 - D3 Charts -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/nvd3/build/nv.d3.min.css"/>
    <!-- Perfect Scrollbar -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <!-- Fuse Html -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/fuse-html/fuse-html.min.css"/>
    <!-- Main CSS -->
    {{-- <link type="text/css" rel="stylesheet" href="../assets/css/main.css"> --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/nebula.css">
    <!-- / STYLESHEETS -->


</head>

<body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
    <div id="wrapper">

        {{-- MENU --}}

        <aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
            <div class="aside-content-wrapper">

                <div class="aside-content bg-primary-500 text-auto">

                    <div class="aside-toolbar">
                        <div class="logo">
                            <span class="logo-icon">N</span><span class="logo-text">NEBULA</span>
                        </div>
                        <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block"
                                data-fuse-aside-toggle-fold>
                            <i class="icon icon-backburger"></i>
                        </button>
                    </div>

                    <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">
                        <li class="subheader">
                            <span>MENU</span>
                        </li>    
                       
                         <li class="nav-item">
                            <a class="nav-link ripple active" href="{{ route('index') }}"
                               data-page-url="{{ route('index') }}">
                                <i class="icon s-4 icon-tile-four"></i>
                                <span>INICIO</span>
                            </a>
                        </li> 

                        <li class="nav-item" role="tab" id="heading-content">
                            <a class="nav-link ripple with-arrow collapsed fuse-ripple-ready" data-toggle="collapse" data-target="#collapse-content" href="#" aria-expanded="false" aria-controls="collapse-content" data-parent="#sidenav">
                                <i class="icon s-4 icon-note-multiple"></i>
                                <span>Editar contenido</span>
                            </a>
                            <ul id="collapse-content" class="collapse" role="tabpanel" aria-labelledby="heading-content" data-children=".nav-item">
                                <li class="nav-item">
                                    <a class="nav-link ripple fuse-ripple-ready" href="#" data-page-url="#">
                                        <span>Products</span>
                                    </a>
                                </li>                        
                            </ul>
                        </li>

                        <li class="nav-item" role="tab" id="heading-blog">
                            <a class="nav-link ripple with-arrow collapsed fuse-ripple-ready" data-toggle="collapse" data-target="#collapse-blog" href="#" aria-expanded="false" aria-controls="collapse-blog" data-parent="#sidenav">
                                <i class="icon s-4 icon-animation"></i>
                                <span>Blog</span>
                            </a>
                            <ul id="collapse-blog" class="collapse" role="tabpanel" aria-labelledby="heading-blog" data-children=".nav-item">
                                <li class="nav-item">
                                    <a class="nav-link ripple fuse-ripple-ready" href="#" data-page-url="#">
                                        <span>Nuevo</span>
                                    </a>
                                     <a class="nav-link ripple fuse-ripple-ready" href="#" data-page-url="#">
                                        <span>Ver lista</span>
                                    </a>
                                    <a class="nav-link ripple fuse-ripple-ready" href="#" data-page-url="#">
                                        <span>Multimedia</span>
                                    </a>
                                </li>                        
                            </ul>
                        </li>

                         <li class="nav-item" role="tab" id="heading-config">
                            <a class="nav-link ripple with-arrow collapsed fuse-ripple-ready" data-toggle="collapse" data-target="#collapse-config" href="#" aria-expanded="false" aria-controls="collapse-config" data-parent="#sidenav">
                                <i class="icon s-4 icon-animation"></i>
                                <span>Configuracion</span>
                            </a>
                            <ul id="collapse-config" class="collapse" role="tabpanel" aria-labelledby="heading-config" data-children=".nav-item">
                                <li class="nav-item">
                                    <a class="nav-link ripple fuse-ripple-ready" href="#" data-page-url="#">
                                        <span>Nuevo</span>
                                    </a>
                                     <a class="nav-link ripple fuse-ripple-ready" href="#" data-page-url="#">
                                        <span>Ver lista</span>
                                    </a>
                                    <a class="nav-link ripple fuse-ripple-ready" href="#" data-page-url="#">
                                        <span>Multimedia</span>
                                    </a>
                                </li>                        
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </aside>

        {{-- Contenido general --}}
        <div class="content-wrapper">            
            <nav id="toolbar" class="fixed-top bg-white">

                <div class="row no-gutters align-items-center flex-nowrap">

                    <div class="col">

                        <div class="row no-gutters align-items-center flex-nowrap">                       

                            <!-- <button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none"
                                    data-fuse-bar-toggle="aside">
                                <i class="icon icon-menu"></i>
                            </button>

                            <div class="toolbar-separator d-block d-lg-none"></div>
                            <div class="shortcuts-wrapper row no-gutters align-items-center px-0 px-sm-2">

                                <div class="shortcuts row no-gutters align-items-center d-none d-md-flex">

                                    <a href="apps-chat.html" class="shortcut-button btn btn-icon mx-1">
                                        <i class="icon icon-hangouts"></i>
                                    </a>

                                    <a href="apps-contacts.html" class="shortcut-button btn btn-icon mx-1">
                                        <i class="icon icon-account-box"></i>
                                    </a>

                                    <a href="apps-mail.html" class="shortcut-button btn btn-icon mx-1">
                                        <i class="icon icon-email"></i>
                                    </a>

                                </div>

                                <div class="add-shortcut-menu-button dropdown px-1 px-sm-3">

                                    <div class="dropdown-toggle btn btn-icon" role="button"
                                         id="dropdownShortcutMenu"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-star text-amber-600"></i>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownShortcutMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                <div class="row no-gutters align-items-center flex-nowrap">
                                                    <i class="icon icon-calendar-today"></i>
                                                    <span class="px-3">Calendar</span>
                                                </div>
                                                <i class="icon icon-pin s-5 ml-2"></i>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                <div class="row no-gutters align-items-center flex-nowrap">
                                                    <i class="icon icon-folder"></i>
                                                    <span class="px-3">File Manager</span>
                                                </div>
                                                <i class="icon icon-pin s-5 ml-2"></i>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                <div class="row no-gutters align-items-center flex-nowrap">
                                                    <i class="icon icon-checkbox-marked"></i>
                                                    <span class="px-3">To-Do</span>
                                                </div>
                                                <i class="icon icon-pin s-5 ml-2"></i>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="toolbar-separator"></div> -->

                        </div>
                    </div>

                    <div class="col-auto">

                        <div class="row no-gutters align-items-center justify-content-end">

                            <div class="user-menu-button dropdown">

                                <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4" role="button"
                                     id="dropdownUserMenu"
                                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar-wrapper">
                                        <img class="avatar" src="../assets/images/avatars/profile.jpg">
                                        <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                                    </div>
                                    <span class="username mx-3 d-none d-md-block">{{Auth::user()->name}}</span>
                                </div>

                                <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                    <a class="dropdown-item" href="#">
                                        <div class="row no-gutters align-items-center flex-nowrap">
                                            <i class="icon-account"></i>
                                            <span class="px-3">My Profile</span>
                                        </div>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-logout"></i>
                                                <span class="px-3">Logout</span>

                                            </div>
                                    </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    {{-- <a  href="#">
                                        
                                    </a> --}}

                                </div>
                            </div>

                            <div class="toolbar-separator"></div>

                            <button type="button" class="quick-panel-button btn btn-icon"
                                    data-fuse-bar-toggle="quick-panel-sidebar">
                                <i class="icon icon-format-list-bulleted"></i>
                            </button>

                            

                        </div>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div id="project-dashboard" class="page-layout simple right-sidebar tabbed">
                        <div class="page-content-wrapper">
                         {{-- CONTENIDO --}}
                            @yield('contenido')                            
                        </div>
                        {{-- aside derecho --}}
                 {{--    <aside class="page-sidebar" data-fuse-bar="dashboard-project-sidebar" data-fuse-bar-media-step="lg" data-fuse-bar-position="right">
                        <!-- WIDGET GROUP -->
                        <div class="widget-group">

                            <!-- NOW WIDGET -->
                            <div class="widget widget-now">

                                <div class="widget-header row no-gutters align-items-center justify-content-between pl-4 py-4">

                                    <div class="h6">Monday, 16:37:16</div>

                                    <button type="button" class="btn btn-icon" aria-label="Options">
                                        <i class="icon icon-dots-vertical"></i>
                                    </button>
                                </div>

                                <div class="widget-content d-flex flex-column align-items-center justify-content-center p-4 pb-6">
                                    <div class="month text-muted">May</div>
                                    <div class="day text-muted">8</div>
                                    <div class="year text-muted">2017</div>
                                </div>

                            </div>
                            <!-- / NOW WIDGET -->

                            <div class="divider"></div>

                            <!-- WEATHER WIDGET -->
                            <div class="widget widget-weather">

                                <div class="widget- header row no-gutters align-items-center justify-content-between pl-4 py-4">

                                    <div class="row no-gutters align-items-center">
                                        <i class="icon-map-marker mr-2"></i>
                                        <span class="h6">New York</span>
                                    </div>

                                    <button type="button" class="btn btn-icon" aria-label="Options">
                                        <i class="icon icon-dots-vertical"></i>
                                    </button>

                                </div>

                                <div class="d-flex flex-column align-items-center justify-content-center p-4 pb-8">

                                    <div class="today-weather row no-gutters align-items-center justify-content-center">
                                        <i class="icon-weather-pouring s-10 mr-4"></i>
                                        <span class="h1">22</span>
                                        <span class="h1 text-muted">&deg;</span>
                                        <span class="h1 text-muted">C</span>
                                    </div>

                                </div>

                                <div class="row no-gutters align-items-center justify-content-between p-4">

                                    <div class="row no-gutters align-items-center">
                                        <i class="icon-weather-windy icon mr-2 s-5"></i>
                                        <span>12</span>
                                        <span class="text-muted ml-1">KMH</span>
                                    </div>

                                    <div class="row align-items-center">
                                        <i class="icon-compass-outline icon mr-2 s-5"></i>
                                        <span>NW</span>
                                    </div>

                                    <div class="row no-gutters align-items-center">
                                        <i class="icon-umbrella icon mr-2 s-5"></i>
                                        <span>98%</span>
                                    </div>

                                </div>

                                <div class="row no-gutters align-items-center justify-content-between p-4">

                                    <span class="">Sunday</span>

                                    <div class="row no-gutters align-items-center">
                                        <i class="mr-4 icon-weather-pouring"></i>
                                        <span class="h5">21</span>
                                        <span class="h5 text-muted">&deg;</span>
                                        <span class="h5 text-muted">C</span>
                                    </div>

                                </div>

                                <div class="row no-gutters align-items-center justify-content-between p-4">

                                    <span class="">Sunday</span>

                                    <div class="row no-gutters align-items-center">
                                        <i class="mr-4 icon-weather-pouring"></i>
                                        <span class="h5">19</span>
                                        <span class="h5 text-muted">&deg;</span>
                                        <span class="h5 text-muted">C</span>
                                    </div>

                                </div>

                                <div class="row no-gutters align-items-center justify-content-between p-4">

                                    <span class="">Tuesday</span>

                                    <div class="row no-gutters align-items-center">
                                        <i class="mr-4 icon-weather-partlycloudy"></i>
                                        <span class="h5">24</span>
                                        <span class="h5 text-muted">&deg;</span>
                                        <span class="h5 text-muted">C</span>
                                    </div>

                                </div>
                            </div>
                            <!-- / WEATHER WIDGET -->

                            <div class="divider"></div>
                        </div>
                        <!-- / WIDGET GROUP -->
                    </aside> --}}
                </div>
            </div>
        </div>       
        
        {{-- Aside oculto --}}
        <div class="quick-panel-sidebar" fuse-cloak data-fuse-bar="quick-panel-sidebar" data-fuse-bar-position="right">
            <div class="list-group" class="date">

                <div class="list-group-item subheader">TODAY</div>

                <div class="list-group-item two-line">

                    <div class="text-muted">

                        <div class="h1"> Monday</div>

                        <div class="h2 row no-gutters align-items-start">
                            <span> 18</span>
                            <span class="h6">th</span>
                            <span> Sep</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="divider"></div>

            <div class="list-group">

                <div class="list-group-item subheader">Events</div>

                

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Group Meeting</h3>

                            <p>In 32 Minutes, Room 1B</p>
                        </div>

                    </div>
                

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Public Beta Release</h3>

                            <p>11:00 PM</p>
                        </div>

                    </div>
                

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Dinner with David</h3>

                            <p>17:30 PM</p>
                        </div>

                    </div>
                

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Q&A Session</h3>

                            <p>20:30 PM</p>
                        </div>

                    </div>                
            </div>
            <div class="divider"></div>

            <div class="list-group">

                <div class="list-group-item subheader">Notes</div>

                

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Best songs to listen while working</h3>

                            <p>Last edit: May 8th, 2015</p>
                        </div>

                    </div>
                

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Useful subreddits</h3>

                            <p>Last edit: January 12th, 2015</p>
                        </div>

                    </div>                
            </div>
            <div class="divider"></div>

            <div class="list-group">

                <div class="list-group-item subheader">Quick Settings</div>

                <div class="list-group-item">

                    <div class="list-item-content">
                        <h3>Notifications</h3>
                    </div>

                    <div class="secondary-container">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"/>
                            <span class="custom-control-indicator"></span>
                        </label>
                    </div>

                </div>

                <div class="list-group-item">

                    <div class="list-item-content">
                        <h3>Cloud Sync</h3>
                    </div>

                    <div class="secondary-container">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"/>
                            <span class="custom-control-indicator"></span>
                        </label>
                    </div>

                </div>

                <div class="list-group-item">

                    <div class="list-item-content">
                        <h3>Retro Thrusters</h3>
                    </div>

                    <div class="secondary-container">

                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"/>
                            <span class="custom-control-indicator"></span>
                        </label>

                    </div>
                </div>
            </div>
        </div>

    </div>
        
<!-- JAVASCRIPT -->
<!-- jQuery -->
<script type="text/javascript" src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<!-- Mobile Detect -->
<script type="text/javascript" src="../assets/vendor/mobile-detect/mobile-detect.min.js"></script>
<!-- Perfect Scrollbar -->
<script type="text/javascript"
        src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Popper.js -->
<script type="text/javascript" src="../assets/vendor/popper.js/index.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
<!-- Nvd3 - D3 Charts -->
<script type="text/javascript" src="../assets/vendor/d3/d3.min.js"></script>
<script type="text/javascript" src="../assets/vendor/nvd3/build/nv.d3.min.js"></script>
<!-- Data tables -->
<script type="text/javascript" src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
<!-- PNotify -->
<script type="text/javascript" src="../assets/vendor/pnotify/pnotify.custom.min.js"></script>
<!-- Fuse Html -->
<script type="text/javascript" src="../assets/vendor/fuse-html/fuse-html.min.js"></script>
<!-- Main JS -->
<script type="text/javascript" src="../assets/js/main.js"></script>
<!-- / JAVASCRIPT -->
<script type="text/javascript" src="../assets/js/apps/dashboard/project.js"></script>
</body>
</html>