

@extends (auth()->check() ? 'layouts.AppUserLayout' : 'layouts.applayout')



@section('content')
<section>
       
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							
							<div class="col-lg-12">
								<div class="group-feed">
									<div class="group-avatar">
										<img src="{{ asset('style/images/resources/profile-banner.jpg') }}" alt="">
										<a href="#" title=""><i class="icofont-check-circled"></i>Follow</a>
										<figure class="group-dp"><img src="{{ asset('style/images/resources/user.jpg') }}" alt=""></figure>
									</div>
									<div class="grp-info about">
                                        @if($tipe == 'organisasi')
                                            <h4>{{$data->nama_perusahaan}} <span> {{'@'}}{{$data->username}}</span></h4>
                                        @else
                                            <h4>{{$data->nama_depan}} {{$data->nama_belakang}} <span> {{'@'}}{{$data->username}}</span></h4>
                                        @endif
										
										<ul class="joined-info">
											<li><span>Joined:</span> {{ date('M Y',strtotime($data->user->created_at)) }}</li>
											<li><span>Followers:</span> 2.2K</li>
											<li><span>Posts:</span> 932</li>
										</ul>
									
										
									</div>
									<div class="main-wraper">
										<div class="grp-about">
											<div class="row">
												<div class="col-lg-8 col-md-6">
													<h4>About Me!</h4>
													<p>Hi! My name is Georg Peeter but some people may know me as peeter! I have a Twitch channel where I stream, play and review all the newest games.</p>
													<ul class="badges">
														<li><img src="images/badges/badge2.png" alt=""></li>
														<li><img src="images/badges/badge3.png" alt=""></li>
														<li><img src="images/badges/badge4.png" alt=""></li>
														<li><img src="images/badges/badge5.png" alt=""></li>
														<li><img src="images/badges/badge7.png" alt=""></li>
														<li><img src="images/badges/badge8.png" alt=""></li>
													</ul>
												</div>
												<div class="col-lg-4 col-md-6">
													<div class="share-article">
														<span>Share Profile</span>
														<a href="#" title="" class="facebook"><i class="icofont-facebook"></i></a>
														<a href="#" title="" class="pinterest"><i class="icofont-pinterest"></i></a>
														<a href="#" title="" class="instagram"><i class="icofont-instagram"></i></a>
														<a href="#" title="" class="twitter"><i class="icofont-twitter"></i></a>
														<a href="#" title="" class="google"><i class="icofont-google-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											
												
												
												
												<div class="tab-pane active fade show" id="about">
													<div class="row merged20">
														<div class="col-lg-8">
															<div class="main-wraper">
																<h5 class="main-title">Personal</h5>
																<div class="info-block-list">
																	<ul>
																		<li>Date of Birth: <span>Dec, 17 1980</span></li>
																		<li>Location: <span>Los Angeles, California</span></li>
																		<li>Web: <span>www.sample.com</span></li>
																		<li>Email: <span>sample123@yourmail.com</span></li>
																		<li>Location: <span>Los Angeles, California</span></li>
																		<li>Occupation: <span>Doctor</span></li>
																		<li>Location: <span>Los Angeles, California</span></li>
																	</ul>	
																</div>	
															</div>
															<div class="main-wraper">
																<h5 class="main-title">Interests</h5>
																<div class="info-block-list">
																  <div class="info-block">
																	<h6>Favourite TV Shows</h6>
																	<p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy, The Last Windbender, Game of Wars.</p>
																  </div>
																  <div class="info-block">
																	<h6>Favourite Music Bands / Artists</h6>
																	<p>Iron Maid, DC/AC, Megablow, Kung Fighters, System of a Revenge, Rammstown.</p>
																  </div>
																  <div class="info-block">
																	<h6>Favourite Movies</h6>
																	<p>The Revengers Saga, The Scarred Wizard and the Fire Crown, Crime Squad, Metal Man, The Dark Rider, Watchers, The Impossible Heist.</p>
																  </div>
																  <div class="info-block">
																	<h6>Favourite Books</h6>
																	<p>The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</p>
																  </div>
																  <div class="info-block">
																	<h6>Favourite Games</h6>
																	<p>The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto.</p>
																  </div>
																</div>
															</div>
														</div>
														<div class="col-lg-4">
															<aside class="sidebar">
															
																<div class="widget">
																	<h4 class="widget-title">User stats</h4>
																	<ul class="user-stat">
																		<li><i class="icofont-lollipop"></i><span>Last Post <em>2 hours ago</em></span></li>
																		<li><i class="icofont-spotify"></i><span>Last comment <em>6 hours ago</em></span></li>
																		<li><i class="icofont-like"></i><span>Most Liked Post<em>540 Likes</em></span></li>
																		<li><i class="icofont-user-alt-4"></i><span>Last Friend Added <em>2 days ago</em></span></li>
																	</ul>
																</div><!-- complete profile widget -->
															</aside>	
														</div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    @endsection