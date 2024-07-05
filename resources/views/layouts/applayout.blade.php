<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	   <title>KerjaTeknik.com</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('style/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/custom.css') }}">
    <link rel='stylesheet' href='https://yaireo.github.io/tagify/dist/tagify.css'>

</head>
<body>
  <div class="responsive-header" style="will-change: transform; transform: translateZ(0px);">
    <div class="logo res"><img src="{{ asset('style/images/logo.png') }}" alt=""></div>

    <div class="right-compact">
      <div class="sidemenu">
        <i>
          <svg id="side-menu2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><path d="M3,12L21,12" style="stroke-dasharray: 18, 38; stroke-dashoffset: 0;"></path><path d="M3,6L21,6" style="stroke-dasharray: 18, 38; stroke-dashoffset: 0;"></path><path d="M3,18L21,18" style="stroke-dasharray: 18, 38; stroke-dashoffset: 0;"></path></svg></i>
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
  </div>
  <header class="transparent">
		<div class="topbar">
			<div class="logo"><a href="{{route('/')}}"><img src="{{ asset('style/images/logo.png') }}" alt=""></img></a></div>
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
			<ul>
				<li><a class="join-butn" href="{{route('login')}}" title="">Masuk Sebagai Personal</a></li>
				<li><a class="join-butn-org" href="{{route('organisasi.login')}}" title="">Masuk Sebagai Organisasi</a></li>

			</ul>
		</div>
  </header>
  <nav class="sidebar">
    <ul class="menu-slide ps-container ps-theme-default" data-ps-id="df5fad90-aba9-6f90-ed46-c10e352bc93f">
      <li class="my-2">
        <a class="join-butn" href="{{route('login')}}" title="">Masuk Sebagai Personal</a>
      </li>
      <li class="my-2">
        <a class="join-butn-org" href="{{route('organisasi.login')}}" title="">Masuk Sebagai Organisasi</a>
      </li>
    </ul>
  </nav>

@yield('content')
<footer>
		<div class="gap">
			<div class="bg-image" style="background-image: url(images/resources/footer-bg.png)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="web-info">
							<div class="logo"><img src="{{ asset('style/images/logo.png') }}" alt=""></div>
							<p>Subscribe our newsletter for getting notifications and alerts</p>
							<div class="contact-little">
								<span><i class="icofont-phone-circle"></i> +1-235-099-34</span>
								<span><i class="icofont-email"></i> info@akedmic.com</span>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Company</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">About Us</a></li>
								<li><a href="#" title="">Career</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Terms</a></li>
								<li><a href="#" title="">FAQ</a></li>
								<li><a href="#" title="">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<!-- <div class="widget">
							<div class="widget-title">
								<h4>Quick Links</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title="">Product</a></li>
								<li><a href="#" title="">Market</a></li>
								<li><a href="#" title="">Courses</a></li>
								<li><a href="#" title="">Services</a></li>
								<li><a href="#" title="">Enterprise</a></li>
								<li><a href="#" title="">Sitemap</a></li>
							</ul>
						</div> -->
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Follow Us</h4>
							</div>
							<ul class="quick-links">
								<li><a href="#" title=""><i class="icofont-facebook"></i>facebook</a></li>
								<li><a href="#" title=""><i class="icofont-twitter"></i>twitter</a></li>
								<li><a href="#" title=""><i class="icofont-google-plus"></i>google +</a></li>
								<li><a href="#" title=""><i class="icofont-whatsapp"></i>whatsapp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget">
							<div class="widget-title">
								<h4>Newsletter</h4>
							</div>
							<div class="news-lettr">
								<form class="newsletter">
									<input type="text" placeholder="Email Address">
									<button type="submit"><i class="icofont-paper-plane"></i></button>
								</form>
								<p>
									it is a long established fact that a reader will be distracted by.
								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->

	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="">&copy; copyright All rights kerjateknik.com 2023</span>
				</div>
			</div>
		</div>
	</div><!-- bottombar -->

</div>
  <script src="{{ asset('style/js/jquery.js') }}"></script>
  <script src='https://yaireo.github.io/tagify/dist/tagify.js'></script>
  <script src='https://yaireo.github.io/tagify/dist/jQuery.tagify.min.js'></script>

	<script src="{{ asset('style/js/main.min.js') }}"></script>
	<script src="{{ asset('style/js/counterup.min.js') }}"></script>
	<script src="{{ asset('style/js/counterup-t-waypoint.js') }}"></script>
	<script src="{{ asset('style/js/typed.js') }}"></script>
	<script src="{{ asset('style/js/script.js') }}"></script>


</body>
</html>
