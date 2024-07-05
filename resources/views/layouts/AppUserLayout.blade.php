<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Socimo | Social Media Network Template</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('style/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/custom.css') }}">
    <link rel='stylesheet' href='https://yaireo.github.io/tagify/dist/tagify.css'>

</head>
<body>

<div class="theme-layout">

	<div class="responsive-header">
		<div class="logo res"><img src="{{ asset('style/images/logo.png') }}" alt=""></div>
		<div class="user-avatar mobile">
			<a href="profile.html" title="View Profile"><img alt="" src="{{ asset('style/images/resources/user.jpg') }}"></a>
			<div class="name">
				<h4>Danial Cardos</h4>
				<span>Ontario, Canada</span>
			</div>
		</div>
		<div class="right-compact">
			<div class="sidemenu">
				<i>
<svg id="side-menu2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
			</div>
			<div class="res-search">
				<span>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
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
			<div class="logo"><img src="{{ asset('style/images/logo.png') }}" alt=""></div>
			<div class="searches">
				<form method="post">
					<input type="text" placeholder="Search...">
					<button type="submit"><i class="icofont-search"></i></button>
					<span class="cancel-search"><i class="icofont-close"></i></span>
					<div class="recent-search">
						<h4 class="recent-searches">Your's Recent Search</h4>
						<ul class="so-history">
							<li>
								<div class="searched-user">
									<figure><img src="images/resources/user1.jpg" alt=""></figure>
									<span>Danial Carabal</span>
								</div>
								<span class="trash"><i class="icofont-close-circled"></i></span>
							</li>



						</ul>
					</div>
				</form>
			</div>

			<ul class="web-elements">
				<li>
					<div class="user-dp">
						<a href="{{route('user.profile')}}" title="">
							<img alt="" src="{{ asset('style/images/resources/user.jpg') }}">
							@if(Auth::User()->roles()->first()->name == 'organisasi')
								<div class="name">
									<h4>{{Auth::user()->organisasiprofile->nama_perusahaan}}</h4>
								</div>
							@else
							<div class="name">
								<h4>{{Auth::user()->profile->nama_depan}} {{Auth::user()->profile->nama_belakang}}</h4>
							</div>
							@endif

						</a>
					</div>
				</li>

				<li>
					<a href="index.html" title="Home" data-toggle="tooltip">
					<i>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
					</i>
					</a>
				</li>


				<li>
					<a class="create" href="#" title="Add New" data-toggle="tooltip">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></i>					</a>
				</li>


					<li>
					<a class="create" href="#" title="Add New" data-toggle="tooltip">
						<i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>
          </a>
				</li>

				<li>
					<a href="#" title="">
						<i>
              <img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-newpost.svg') }}" />
						</i>
					</a>

					@if(Auth::User()->roles()->first()->name == 'organisasi')
						<ul class="dropdown">
							<li><a href="{{route('user.profile')}}" title=""><i class="icofont-user-alt-3"></i> Profile Kamu</a></li>
							<li><a href="#" title=""><i class="icofont-plus"></i> Posting Job</a></li>
							<li><a href="#" title=""><i class="icofont-plus"></i> Posting Training</a></li>
							<li><a href="#" title=""><i class="icofont-plus"></i> Posting Video</a></li>

							<li class="logout"><a href="{{route('user.logout')}}" title=""><i class="icofont-power"></i> Logout</a></li>

						</ul>
					@else
						<ul class="dropdown">
							<li><a href="{{route('user.profile')}}" title=""><i><img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-profile.svg') }}" /></i> My Profile</a></li>
							<li><a href="#" title=""><i><img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-newpost.svg') }}" /></i> New Post</a></li>
							<li><a href="#" title=""><i><img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-group.svg') }}" /></i> Group Discussion</a></li>
							<li>
                <a href="{{route('job.index')}}" title="">
                  <i>
                    <img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-jobs.svg') }}" />
                  </i> My Jobs
                </a>
              </li>
							<li>
                <a href="{{route('training.index')}}" title="">
                  <i>
                    <img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-training.svg') }}" />
                  </i> My Training
                </a>
              </li>
							<li>
                <a href="#" title="">
                  <i>
                    <img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-eknowledge.svg') }}" />
                  </i> My E-kownledge
                </a>
              </li>
							<li>
                <a href="#" title="">
                  <i>
                    <img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-video.svg') }}" />
                  </i> My Video
                </a>
              </li>
							<li>
                <a href="#" title="">
                  <i>
                    <img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-membership.svg') }}" />
                  </i>
                  Membership
                </a>
              </li>
							<li>
                <a href="#" title="">
                  <i>
                    <img class="svgicon" src = "{{ asset('style/images/svgicon/icn-b-setting.svg') }}" />
                  </i>
                  Setting
                </a>
              </li>

							<li class="logout"><a href="{{route('user.logout')}}" title=""><i class="icofont-power"></i> Logout</a></li>
						</ul>
					@endif

				</li>
			</ul>
		</div>

	</header><!-- header -->

	<section>
		<div class="white-bg">
			<div class="container-fluid">
				<div class="menu-caro">
					<div class="row">
						<div class="col-lg-2">

						</div>
						<div class="col-lg-8">
							<div class="page-caro d-flex justify-content-center">
								<div class="link-item">
                  <a class="{{ Request::routeIs('user.dashboard') ? 'active' : '' }}" href="{{route('user.dashboard')}}" title="">
										<i class="">
											<img class="svgicon" src = "{{ asset('style/images/svgicon/homeicon.svg') }}" />
										</i>
										<p>Home</p>
									</a>
								</div>


								<div class="link-item">
                  <a class="{{ (request()->segment(1) == 'job') ? 'active' : '' }}" href="{{route('job.index')}}" title="">
										<i class="">
										<img class="svgicon" src = "{{ asset('style/images/svgicon/jobicon.svg') }}" />
										</i>
										<p>Jobs</p>
									</a>
								</div>

								<div class="link-item">
                  <a class="{{ (request()->segment(1) == 'training') ? 'active' : '' }}" href="{{route('training.index')}}" title="">
										<i class="">
										<img class="svgicon" src = "{{ asset('style/images/svgicon/trainingicon.svg') }}" />
										</i>
										<p>Training</p>
									</a>
								</div>

								<div class="link-item">
                  <a class="{{ (request()->segment(1) == 'e-knowledge') ? 'active' : '' }}" href="{{route('eknowledge.index')}}" title="">
										<i class="">
										<img class="svgicon" src = "{{ asset('style/images/svgicon/eknowicon.svg') }}" />
										</i>
										<p>E-Knowledge</p>
									</a>
								</div>

								<div class="link-item">
                  <a class="{{ (request()->segment(1) == 'video') ? 'active' : '' }}" href="{{route('video.index')}}" title="">
										<i class="">
										<img class="svgicon" src = "{{ asset('style/images/svgicon/videoicon.svg') }}" />
										</i>
										<p>Video</p>
									</a>
								</div>

							</div>
						</div>
						<div class="col-lg-2">

						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- carousel menu -->


    @yield('content')

    <div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; copyright All rights reserved by kerjateknik.com 2020</span>
				</div>
			</div>
		</div>
	</div><!-- bottombar -->

	<div class="wraper-invite">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></i> Invite Colleagues</h5>
				</div>
				<div class="invitation-meta">
					<p>
						Enter an email address to invite a colleague or co-author to join you on socimo. They will receive an email and, in some cases, up to two reminders.
					</p>
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Email">
						<button type="submit" class="main-btn">Invite</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- invite colleague popup -->






</div>
	<script src="{{ asset('style/js/jquery.js') }}"></script>
  <script src='https://yaireo.github.io/tagify/dist/tagify.js'></script>
  <script src='https://yaireo.github.io/tagify/dist/jQuery.tagify.min.js'></script>

  <script src="{{ asset('style/js/uikit.min.js') }}"></script>
	<script src="{{ asset('style/js/main.min.js') }}"></script>
	<script src="{{ asset('style/js/date-time.js') }}"></script>
	<script src="{{ asset('style/js/script.js') }}"></script>


	@yield('customscript')
</body>
</html>
