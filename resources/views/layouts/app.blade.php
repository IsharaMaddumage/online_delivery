<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ensiz Deliver System') }}</title>

    <!-- Styles -->

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('/vendor/bootstrap/css/bootstrap.min.css')}}"" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{URL::asset('/vendor/datatables-plugins/dataTables.bootstrap.css')}}">
    <!-- DataTables Responsive CSS -->
    <link href="{{URL::asset('/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::asset('/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{URL::asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Autocomplete CSS -->
    <link href="{{ URL::asset('/css/autocomplete/jquery-ui.css') }}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{URL::asset('/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Autocomplete jQuery -->
    <script src="{{URL::asset('/js/autocomplete/jquery-1.12.4.js')}}"></script>
    <script src="{{URL::asset('/js/autocomplete/jquery-ui.js')}}"></script>
    <!-- Datetimepicker -->
    <script src="{{URL::asset('/js/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('/vendor/metisMenu/metisMenu.min.js')}}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{URL::asset('/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{URL::asset('/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/morrisjs/morris.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('/dist/js/sb-admin-2.js')}}"></script>
    <script>

        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

        var url = "{!! url(''); !!}";
    </script>


</head>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('includes.navbar_header')
            @includeIf('includes.navbar_top_links')
            @include('includes.navbar_side')

         </nav>
         <div id="page-wrapper">
             @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>
</html>
