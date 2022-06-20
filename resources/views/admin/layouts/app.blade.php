<!doctype html>
<html lang="en">
<head>
    <title>Birel Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin_panel/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/vendor/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin_panel/vendor/charts-c3/plugin.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('admin_panel/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/vendor/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/vendor/toastr/toastr.min.css')}}">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin_panel/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin_panel/css/color_skins.css')}}">
    <style>
    .table-responsive > #DataTables_Table_0_wrapper {
        padding:0 15px;
    }
    .mt-30 {
    margin-top:30px;
    }
    </style>
</head>
<body class="theme-purple">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/icon-light.svg" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">


    @include('admin.layouts.components.navbar')
    @include('admin.layouts.components.left-sidebar')
    @yield('content')

</div>

<!-- Javascript -->
<script src="{{asset('admin_panel/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('admin_panel/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('admin_panel/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('admin_panel/bundles/chartist.bundle.js')}}"></script>
<script src="{{asset('admin_panel/js/toastr/toastr.js')}}"></script>
<script src="{{asset('admin_panel/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('admin_panel/js/index.js')}}"></script>

    @yield('scripts')

</body>
</html>
