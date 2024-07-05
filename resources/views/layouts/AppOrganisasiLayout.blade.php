<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>kerjateknik.com | Dashboard</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{ asset('style/dashboard/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/dashboard/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('style/dashboard/css/responsive.css') }}">
	<!-- <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">{{ asset('style/dashboard/css/main.min.css') }} -->

</head>
<body>

<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="res-logo"><img src="{{ asset('style/images/logo.png') }}" alt=""></div>
		
		<div class="user-avatar mobile">
			<a href="profile.html" title="View Profile"><img alt="" src="images/resources/user.jpg"></a>
			<div class="name">
				<h4>Saim Turan</h4>
				<span>Antalaya, Turky</span>
			</div>
		</div>
		<div class="right-compact">
			<div class="menu-area">
				<div id="nav-icon3">
					<i>
<svg class="feather feather-grid" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><rect height="7" width="7" y="3" x="3"/><rect height="7" width="7" y="3" x="14"/><rect height="7" width="7" y="14" x="14"/><rect height="7" width="7" y="14" x="3"/></svg>
						</i>
				</div>
				<ul class="drop-menu">
				  	<li><a title="profile.html" href="profile.html"><i class="icofont-user-alt-1"></i>Your Profile</a></li>
					<li><a title="" href="#"><i class="icofont-question-circle"></i>Help</a></li>
					<li><a title="" href="#"><i class="icofont-gear"></i>Setting</a></li>
					<li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i>Dark Mode</a></li>
					<li><a title="" href="login-register.html" class="logout"><i class="icofont-logout"></i>Logout</a></li>
				</ul>
			</div>
			<div class="res-search">
				<span><i>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i></span>
			</div>
		</div>
		<div class="restop-search">
			<span class="hide-search"><i class="icofont-close-circled"></i></span>
			<form method="post">
				<input type="text" placeholder="Search...">
			</form>
		</div>
	</div><!-- responsive header -->
	
	<header class="">
		<div class="topbar stick">
			<div class="logo"><img alt="" src="{{ asset('style/images/logo.png') }}"></div>
		
			<ul class="web-elements">
				<li>
					<div class="user-dp">
						<a href="{{route('organisasi.dashboard')}}" title="">
							<img src="images/resources/user.jpg" alt="">
							<div class="name">
								<h4>{{Auth::user()->organisasiprofile->nama_perusahaan}}</h4>
							</div>
						</a>	
					</div>
				</li>
				<li>
					<a href="{{route('organisasi.dashboard')}}" title="Home" data-toggle="tooltip">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></i>
					</a>
				</li>
				
				
		
				<li>
					<a title="" href="#">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
						</i>
					</a>
					<ul class="dropdown">
						<li><a href="{{route('organisasi.profile')}}" title=""><i class="icofont-user-alt-3"></i> Your Profile</a></li>
						<li><a href="add-new-course.html" title=""><i class="icofont-plus"></i> New Job</a></li>
						<li class="logout"><a href="sign-in.html" title=""><i class="icofont-power"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
	</header><!-- header -->
	
	<div class="top-sub-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="menu-btn">
						<i class="">
<svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
					</div>
					<div class="page-title">
						<h4>Dashboard</h4>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<ul class="breadcrumb">
						<li><a href="#" title="">Home</a></li>
						<li><a href="#" title="">Dashboard</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div><!-- top sub bar -->
	
	<nav class="sidebar">
		<ul class="menu-slide">
			<li class="active">
				<a class="" href="{{route('organisasi.dashboard')}}" title="">
					<i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></i> Dashboard
				</a>
			</li>
		
			<li class="">
				<a class="" href="{{route('organisasi.profile')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					Profile
				</a>
			</li>
		
			<li class="">
				<a class="{{route('organisasi.job')}}" href="{{route('organisasi.job')}}" title=""><i class="">
<svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i>Job List
				</a>
			</li>
			
		
		
			
			
		
			
		</ul>
	</nav><!-- sidebar -->

    @yield('content')

    </div>
	
	<script src="{{ asset('style/dashboard/js/main.min.js') }}"></script>
	<script src="{{ asset('style/dashboard/js/vivus.min.js') }}"></script>
	<script src="{{ asset('style/dashboard/js/script.js') }}"></script>
	
	<script src="{{ asset('style/dashboard/plugins/apex/apexcharts.min.js') }}"></script>
	<script src="{{ asset('style/dashboard/js/graphs-scripts.js') }}"></script>

	

</body>	
</html>