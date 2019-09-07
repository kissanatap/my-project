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

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><strong>EDMS</strong> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<small>Hello, {{ Auth::user()->name }}  <i class="fa fa-caret-down"></i> </small>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, {{ Auth::user()->name }}</small> </h5>
                                </div>

                                <!-- item-->
                                

                                <!-- Logout Button -->
                                <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
						<a class="{{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}"><i class="fa fa-fw fa-area-chart"></i><span> Dashboard </span> </a>
                    </li>

					<li class="submenu">
                        <a class="{{ Request::is('edocuments*') ? 'active' : '' }}" href="{{ route('edocuments.index') }}"><i class="fa fa-fw fa-file-text-o"></i><span> E-document </span> </span></a>
                    </li>
					
					<li class="submenu">
                        <a class="{{ Request::is('typedoc*') ? 'active' : '' }}" href="{{ route('typedoc.index') }}"><i class="fa fa-fw fa-files-o"></i> <span> EDMS Type </span> </span></a>
					</li>

            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

					
							<div class="row">
									<div class="col-xl-12">
											<div class="breadcrumb-holder">
													<h1 class="main-title float-left">@yield('page')</h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Home</li>
														<li class="breadcrumb-item active">@yield('page')</li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
							</div>
							<!-- end row -->

							
							<div class="row">
									<div class="col-xl-12">									
									    @yield('content')
									</div>
							</div>



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">ap4you.com</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://app4you-f4c72.web.app"><b>App4you</b></a>
		</span>
	</footer>

</div>
<!-- END main -->

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