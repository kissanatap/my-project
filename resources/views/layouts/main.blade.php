<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>@yield('title')</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

		<!-- Switchery css -->
		<link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
		
		<!-- Bootstrap CSS -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />	
		
		<!-- BEGIN CSS for this page -->

		<!-- END CSS for this page -->
				
</head>

	<div itemid="contnet">
		@yield('content')
	</div>


<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>

<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/pikeadmin.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- BEGIN Java Script for this page -->

<!-- END Java Script for this page -->

<!-- Footer -->
@yield('footer')
</body>
</html>