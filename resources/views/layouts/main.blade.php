<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('img/icon57.png')}}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{asset('img/icon72.png')}}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{asset('img/icon76.png')}}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{asset('img/icon114.png')}}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{asset('img/icon120.png')}}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{asset('img/icon144.png')}}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{asset('img/icon152.png')}}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{asset('img/icon180.png')}}" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
        <link rel="stylesheet" href="{{asset('css/sweetalert2/sweetalert2.min.css')}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{asset('css/themes.css')}}">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="{{asset('js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('js/vendor/modernizr.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <div id="page-wrapper">
            <!-- navbar -->
            @include('layouts.navbar')
            <!-- END navbart -->
                    <!-- Page content -->
                    <div id="page-content">
                        
                        @yield('section')                        
                        <!-- END Content page-->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    @include('layouts.footer')
                    <!-- END Footer -->
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/sweet-alert.js')}}"></script>

        <script src="{{asset('js/helpers/ckeditor/ckeditor.js')}}"></script>
        <!-- code used only in this page datatable -->
        <script src="{{asset('js/pages/tablesDatatables.js')}}"></script>

        <script>$(function(){ TablesDatatables.init(); });</script>
        <!-- end code  page datatable -->

        @if (session('swal'))
		<script>
			Swal.fire(@json(session('swal')))
		</script>
	    @endif

        @stack('js')
    </body>
</html>