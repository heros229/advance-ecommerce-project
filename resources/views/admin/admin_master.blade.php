<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico')}}">

    <title>Sunny Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('links')

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    <!-- Pour le header  -->
    @include('admin.body.header')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- Sidebar  -->
        @include('admin.body.sidebar')

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('admin')
    </div>
    <!-- /.content-wrapper -->
    @include('admin.body.footer')



    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- Vendor JS -->
<script src="{{ asset('backend/js/vendors.min.js')}}"></script>
<script src="{{ asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
<script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
<script src="{{ asset('../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js')}}"></script>
<script src="{{ asset('js/pages/toastr.js')}}"></script>
<script src="{{ asset('js/pages/notification.js')}}"></script>

<!-- Sunny Admin App -->
<script src="{{ asset('backend/js/template.js')}}"></script>
<script src="{{ asset('backend/js/pages/dashboard.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
        switch(type){
            case'info':
            toastr.info("{{ Session::get('message') }}");
            break;

            case'success':
            toastr.success("{{ Session::get('message') }}");
            break;

            case'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

            case'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        }
    @endif
</script>

@yield('scripts')
</body>
</html>
