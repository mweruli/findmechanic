<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html.psdtohtmlexpert.com/admin/sunny-admin-template/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 10:07:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://html.psdtohtmlexpert.com/admin/sunny-admin-template/images/favicon.ico">

    <title>Sunny Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('theme/main/css/vendors_css.css') }}">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('theme/main/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/main/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/icons/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/icons/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/icons/font-awesome2/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/icons/MaterialDesign-Webfont-master/css/materialdesignicons.min.css') }}">
    @stack('css')  
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
  @include('layouts.backend.includes.navbar')
  @include('layouts.backend.includes.sidebar')

     @yield('content')


</div>

</body>
	<!-- Vendor JS -->
	<script src="{{ asset('theme/main/js/vendors.min.js') }}"></script>
    <script src="{{ asset('theme/assets/icons/feather-icons/feather.min.js') }}"></script>	
	<script src="{{ asset('theme/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
	<script src="{{ asset('theme/assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
	<script src="{{ asset('theme/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	
	<!-- Sunny Admin App -->
	<script src="{{ asset('theme/main/js/template.js') }}"></script>
	<script src="{{ asset('theme/main/js/pages/dashboard.js') }}"></script>
   
	<script src="{{ asset('theme/main/js/pages/data-table.js') }}"></script>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js')}}"></script>

	@stack('js')
</body>

<!-- Mirrored from html.psdtohtmlexpert.com/admin/sunny-admin-template/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 10:08:38 GMT -->
</html>
