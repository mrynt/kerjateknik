@extends('layouts.AppUserLayout')

@section('content')
<div class="gap no-gap">
		<div class="top-area mate-black low-opacity">
			<div class="bg-image" style="background-image: url(images/resources/top-bg.jpg)"></div>
			<a data-ripple="" title="" href="#" class="invite" style="    z-index: 99;
    background-color: #ff7100;
    border: 1px solid #ff7100;
    color: white;
    top: 20px;">Edit Banner</a>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="post-subject">
							<div class="university-tag">
								<figure><img id="clickimage" src="{{ asset('style/images/resources/user.jpg') }}" alt=""></figure>

								<input class="form-control col-md-2" type="file" id="my_file" style="display: none;" />

								@if(Auth::User()->roles()->first()->name == 'organisasi')
								<div class="uni-name">
									<h4>{{Auth::user()->organisasiprofile->nama_perusahaan}}<em></em></h4>

									 <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg>
									 <span>{{Auth::user()->organisasiprofile->tipe}}</span>


								</div>
								@else
								<div class="uni-name">
									<h4>{{Auth::user()->profile->nama_depan}} {{Auth::user()->profile->nama_belakang}} <em></em></h4>

 									@if(Auth::user()->profile->is_profesional_akun == '1')
									 <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg>
									 <span>Profesional Account</span>
									@else
									 <span>Member Account</span>
									@endif

								</div>
								@endif


							</div>
							@if(Auth::User()->roles()->first()->name == 'organisasi')
							<ul class="nav nav-tabs post-detail-btn">
								 <li class="nav-item"><a class="active" href="#myprofile" data-toggle="tab">My Profile</a></li>
								 <li class="nav-item"><a class="" href="#followers" data-toggle="tab">Followers</a></li>
								<li class="nav-item"><a class="" href="#jobs" data-toggle="tab">Jobs Listing</a></li>
							</ul>
							@else
							<ul class="nav nav-tabs post-detail-btn">
								 <li class="nav-item"><a class="active" href="#myprofile" data-toggle="tab">My Profile</a></li>
								 <li class="nav-item"><a class="" href="#followers" data-toggle="tab">Followers</a></li>
								 <li class="nav-item"><a class="" href="#follow" data-toggle="tab">Following</a></li>
								<li class="nav-item"><a class="" href="#jobs" data-toggle="tab">Jobs</a></li>
								<li class="nav-item"><a class="" href="#myactivity" data-toggle="tab">My Activity</a></li>
								<li class="nav-item"><a class="" href="#mytraining" data-toggle="tab">My Training</a></li>
								<li class="nav-item"><a class="" href="#myeknowladge" data-toggle="tab">My E-knowledge</a></li>
								<!-- <li class="nav-item"><a class="" href="#group" data-toggle="tab">Group Discussion</a></li> -->
							</ul>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- top Head -->



	<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
							@if(Auth::User()->roles()->first()->name == 'organisasi')
								@include('user_view._tab_profile.organisasi_tab')
							@else
								@include('user_view._tab_profile.user_tab')
							@endif
							</div>

							<div class="col-lg-3">
								<aside class="sidebar static right">

									<div class="widget">
										<h4 class="widget-title mb-0">Complete Your Profile</h4>
										<span>Your Profile is missing followings!</span>
										<div data-progress="tip" class="progress__outer" data-value="0.67">
											<div class="progress__inner">82%</div>
										</div>
										<ul class="prof-complete">
											<li><i class="icofont-plus-square"></i> <a href="#" title="">Upload Yout Picture</a><em>10%</em></li>
											<li><i class="icofont-plus-square"></i> <a href="#" title="">Add Infromation Akun</a><em>20%</em></li>
											<li><i class="icofont-plus-square"></i> <a href="#" title="">Add Your Job Experience</a><em>20%</em></li>
										</ul>
									</div><!-- complete profile widget -->


									<div class="widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers">
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/friend-avatar.jpg') }}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Kelly Bill</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/friend-avatar2.jpg') }}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Issabel</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/friend-avatar3.jpg') }}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Andrew</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/friend-avatar4.jpg') }}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Sophia</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/friend-avatar5.jpg') }}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Allen</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
										</ul>
									</div>

									<div class="widget">
										<h4 class="widget-title">Recent Blogs <a class="see-all" href="#" title="">See All</a></h4>
										<ul class="recent-links">
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/recentlink-1.jpg') }}"></figure>
												<div class="re-links-meta">
													<h6><a title="" href="#">Moira's fade reach much farther...</a></h6>
													<span>2 weeks ago </span>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/recentlink-2.jpg') }}"></figure>
												<div class="re-links-meta">
													<h6><a title="" href="#">Daniel asks The voice of doomfist...</a></h6>
													<span>3 months ago </span>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/recentlink-3.jpg') }}"></figure>
												<div class="re-links-meta">
													<h6><a title="" href="#">The socimo over watch scandals.</a></h6>
													<span>1 day before</span>
												</div>
											</li>
										</ul>
									</div><!-- recent blog -->

								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<figure class="bottom-mockup"><img src="images/footer.png" alt=""></figure>


@endsection
@section('customscript')
<script>

$("#clickimage").click(function() {
    $("input[id='my_file']").click();
});
</script>
@endsection
