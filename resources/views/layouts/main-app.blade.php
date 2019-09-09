<!DOCTYPE html>
<html>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SimpleWorkManagement</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
    </head>
    <body class="hold-transition skin-green sidebar-mini">
    
        <div class="wrapper">
            @include('layouts.header')
            @include('layouts.sidebar')
            <!-- main content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        TEST
                        <small>Test 01</small>
                    </h1>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            @yield('content')
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Main content -->
            <footer class="main-footer">
                <div class="pull-right">
    				<small>Theme by <a href="https://adminlte.io">Almsaeed</a>. <small>Modify ang64Docx 2019</small></small>
                </div>
    			appVersion:0.09-08.209
            </footer>
        </div>
    
        <script src="{{ asset('asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('asset/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('asset/dist/js/demo.js') }}"></script>
    </body>
</html>