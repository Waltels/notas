            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>UE </strong>Alemania</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Cargando..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <div id="page-container" class="header-fixed-top sidebar-partial sidebar-visible-lg sidebar-no-animations">

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="index.html" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>UE </strong>Alemania</span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                        <img src="{{asset('img/placeholders/avatars/avatar2.jpg')}}" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name"> 
                                    <h5>{{ auth()->user()->name }}</h5></div>
                            </div>
                            <!-- END User Info -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="{{route('dashboard')}}"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a data-toggle="tooltip"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Acciones</span>
                                </li>
                                <li>
                                    <a href="{{route('config')}}"><i class="gi gi-cogwheel sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Configuración U E</span></a>
                                </li>
                                <li>
                                    <a href="{{route('admin.areas.index')}}"><i class="gi gi-sort sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Areas</span></a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-parents sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Docentes</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{route('admin.docentes.index')}}">Registro de Docentes</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.asignacions.index')}}">Asignación de Docentes</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-parents sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Estudiantes</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{route('student.estudiantes.create')}}">Inscripcion</a>
                                        </li>
                                        <li>
                                            <a href="{{route('student.estudiantes.index')}}">Lista de estudiantes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-parents sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Calificaciones</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{route('student.notas.index')}}">Registro de calificaciones</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.asignacions.index')}}">Asignación de Docentes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Estudiantes</span></a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-book sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Cursos</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_ui_draggable_blocks.html">Años de Escolaridad</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_buttons_dropdowns.html">Calificaciones</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_navigation_more.html">Centralizadores</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Estadisticas</span></a>
                                </li>
                                <li>
                                    <a href="page_widgets_social.html"><i class="gi gi-share_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Social</span></a>
                                </li>
                                </li>
                            </ul>
                            <!-- END Sidebar Navigation -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    
                    <header class="navbar navbar-default navbar-fixed-top">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
            
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right ">
                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('img/placeholders/avatars/avatar2.jpg')}}" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Mi cuenta</li>
                                    <p class="text-center">{{ auth()->user()->name }}</p>
                                    <li>
                                        <a href="page_ready_user_profile.html">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Perfil
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <a href="#modal-user-settings" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Opciones
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="mx-2">
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <a href=""  onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="fa fa-ban fa-fw pull-right"></i> Salir</a>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    