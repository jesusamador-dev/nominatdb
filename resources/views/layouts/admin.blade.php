<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Styles -->
    
		<link href="{{ asset('css/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/waves.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('js/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/theme-green.css') }}" rel="stylesheet">
    
</head>
<body class="theme-green">
	<!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Espere...</p>
        </div>
    </div>
		<!-- #END# Page Loader -->
		<!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
		@include('layouts.header')
		@include('layouts.sidebar')
        <section class="content">
		    @yield('content')
        </section>

		<!-- Jquery Core Js -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--DataTable-->
    <script src="{{ asset('js/DataTables/jquery.dataTables.min.js') }}"></script>  
    <script src="{{ asset('js/DataTables/dataTables.bootstrap.min.js') }}"></script>  
    <script src="{{ asset('js/DataTables/dataTable.js') }}"></script>  

    <script src="{{ asset('js/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/bootstrap-notify/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('js/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
     
    <!-- Waves Effect Plugin Js -->
	<script src="{{ asset('js/node-waves/waves.min.js') }}"></script>   
    <script src="{{ asset('js/admin.js') }}"></script>  
    <script src="{{ asset('js/notifications.js') }}"></script>  
    <script src="{{ asset('js/ligaxm.js') }}"></script>  
    @yield('calendar')

</body>
</html>