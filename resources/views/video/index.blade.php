@extends('layouts.AppUserLayout')

@section('content')

<section>
	<div class="gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="page-contents" class="row merged20">
						<div class="col-lg-3">
							<aside class="sidebar static left">
								<div class="widget stick-widget">
									<h4 class="widget-title">Watch</h4>
									<form class="video-search" method="post">
										<i class="">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i>
										<input type="text" placeholder="Search Video">
										<button type="submit"></button>
									</form>

									<ul class="video-links video-menu">
										<li>
											<a href="#" title="">
												<i class="">
													<img class="svgicon" src="{{ asset('style/images/svgicon/homeicon.svg') }}">
												</i>
												<h5>Home</h5>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="">
													<img class="svgicon" src="{{ asset('style/images/svgicon/videoicon.svg') }}">
												</i>
												<h5>Latest</h5>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="">
													<img class="svgicon" src="{{ asset('style/images/svgicon/trending.svg') }}">
												</i>
												<h5>Trending</h5>
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="">
													<img class="svgicon" src="{{ asset('style/images/svgicon/category.svg') }}">
												</i>
												<h5>Category</h5>
											</a>

											<div class="widgetFilter-box pl-3">
												<div class="form-check my-2">
													<input class="form-check-input" type="checkbox" value="" id="posted-1">
													<label class="form-check-label" for="posted-1">
														Company Jobs <b>(764)</b>
													</label>
												</div>
												<div class="form-check my-2">
													<input class="form-check-input" type="checkbox" value="" id="posted-2">
													<label class="form-check-label" for="posted-2">
														Consultant Jobs <b>(440)</b>
													</label>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</aside>
						</div>
						<div class="col-lg-9">
							<div class="main-wraper">
								<div class="main-title">Latest Videos</div>
								<div class="main-wraper">
									<div class="user-post video">
										<div class="friend-info">
											<figure>
												<img alt="" src="{{ asset('style/images/resources/user1.jpg') }}">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns">
														<i class="">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
														<ul>
															<li>
																<i class="icofont-pen-alt-1"></i>Edit Post
																<span>Edit This Post within a Hour</span>
															</li>
															<li>
																<i class="icofont-ban"></i>Hide Post
																<span>Hide This Post</span>
															</li>
															<li>
																<i class="icofont-ui-delete"></i>Delete Post
																<span>If inappropriate Post By Mistake</span>
															</li>
															<li>
																<i class="icofont-flag"></i>Report
																<span>Inappropriate content</span>
															</li>
														</ul>
													</div>
												</div>
												<ins><a title="" href="time-line.html">Jack Carter</a> Upload video <em><a class="folow" href="#" title="">Follow</a></em></ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<h4>When your private pictures are used against you</h4>
												<p>A film about a secret of a housewife which is revealed on her 3rd Wedding Anniversary</p>
												<iframe height="400" src="https://www.youtube.com/embed/zdow47FQRfQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>


												<div class="stat-tools">
													<div class="box">
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<!-- <div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div> -->
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<a title="" href="#" class="save-to"><i class="icofont-save-alt"></i> Save</a>

													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{ asset('style/images/resources/user1.jpg') }}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<div class="comments-act">
																		<a title="Like" href="#"><a class="Like__link"><i class="icofont-like"></i> Like</a></a>
																		<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i> Comment</a>
																	</div>
																</li>
																<li>
																	<figure><img alt="" src="{{ asset('style/images/resources/user2.jpg') }}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Ching xang</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																	</div>
																	<div class="comments-act">
																		<a title="Like" href="#"><a class="Like__link"><i class="icofont-like"></i> Like</a></a>
																		<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i> Comment</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div><!-- share youtube video -->
								<div class="main-wraper">
									<div class="user-post video">
										<div class="friend-info">
											<figure>
												<img alt="" src="{{ asset('style/images/resources/user2.jpg') }}">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns">
														<i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
														<ul>
															<li>
																<i class="icofont-pen-alt-1"></i>Edit Post
																<span>Edit This Post within a Hour</span>
															</li>
															<li>
																<i class="icofont-ban"></i>Hide Post
																<span>Hide This Post</span>
															</li>
															<li>
																<i class="icofont-ui-delete"></i>Delete Post
																<span>If inappropriate Post By Mistake</span>
															</li>
															<li>
																<i class="icofont-flag"></i>Report
																<span>Inappropriate content</span>
															</li>
														</ul>
													</div>
												</div>
												<ins><a title="" href="time-line.html">Farhea</a> Shared Vimeo Link <em><a href="#" title="">Follow</a></em></ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<h4>Hypoglycemia | Endocrinology Medicine Lectures | Medical Online Education | V-Learning</h4>
												<p>A film about a secret of a housewife which is revealed on her 3rd Wedding Anniversary</p>
												<iframe src="https://player.vimeo.com/video/464733913" height="350" allow="autoplay; fullscreen" allowfullscreen=""></iframe>

												<div class="stat-tools">
													<div class="box">
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<!-- <div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div> -->
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<a title="" href="#" class="save-to"><i class="icofont-save-alt"></i> Save</a>

													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{ asset('style/images/resources/user1.jpg') }}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<div class="comments-act">
																		<a title="Like" href="#"><a class="Like__link"><i class="icofont-like"></i> Like</a></a>
																		<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i> Comment</a>
																	</div>
																</li>
																<li>
																	<figure><img alt="" src="{{ asset('style/images/resources/user2.jpg') }}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Ching xang</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																	</div>
																	<div class="comments-act">
																		<a title="Like" href="#"><a class="Like__link"><i class="icofont-like"></i> Like</a></a>
																		<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i> Comment</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div><!-- share vimeo video -->
								<div class="main-wraper">
									<div class="wraper-title">
										<span><i class="icofont-video-alt"></i> Videos Play List</span>
										<a href="videos.html" title="">See all Videos</a>
									</div>
									<div class="videos-caro owl-carousel owl-theme owl-responsive-1000 owl-center owl-loaded">





									<div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 5520px; transform: translate3d(-1518px, 0px, 0px);"><div class="owl-item cloned" data-video="https://www.youtube.com/watch?v=8itUNRIWVIs" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=8itUNRIWVIs" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/8itUNRIWVIs/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/8itUNRIWVIs/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Maria K.</span>
											</div>
											<div class="vid-info">
												<span>2 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 1.1k</span>
											</div>
										</div></div><div class="owl-item cloned" data-video="https://www.youtube.com/watch?v=JpxsRwnRwCQ" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Jack Carter</span>
											</div>
											<div class="vid-info">
												<span>4 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 20k</span>
											</div>
										</div></div><div class="owl-item cloned" data-video="https://www.youtube.com/watch?v=WNeLUngb-Xg" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=WNeLUngb-Xg" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/WNeLUngb-Xg/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/WNeLUngb-Xg/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Fawad Jan</span>
											</div>
											<div class="vid-info">
												<span>1 Month ago</span>
												<span><i class="icofont-eye-open"></i> 8k</span>
											</div>
										</div></div><div class="owl-item active center" data-video="https://www.youtube.com/watch?v=8iZTb9NWbz8" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=8iZTb9NWbz8" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/8iZTb9NWbz8/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/8iZTb9NWbz8/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Frank J.</span>
											</div>
											<div class="vid-info">
												<span>1 year ago</span>
												<span><i class="icofont-eye-open"></i> 3.1k</span>
											</div>
										</div></div><div class="owl-item active" data-video="https://www.youtube.com/watch?v=8itUNRIWVIs" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=8itUNRIWVIs" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/8itUNRIWVIs/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/8itUNRIWVIs/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Maria K.</span>
											</div>
											<div class="vid-info">
												<span>2 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 1.1k</span>
											</div>
										</div></div><div class="owl-item" data-video="https://www.youtube.com/watch?v=JpxsRwnRwCQ" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Jack Carter</span>
											</div>
											<div class="vid-info">
												<span>4 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 20k</span>
											</div>
										</div></div><div class="owl-item" data-video="https://www.youtube.com/watch?v=WNeLUngb-Xg" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=WNeLUngb-Xg" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/WNeLUngb-Xg/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/WNeLUngb-Xg/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Fawad Jan</span>
											</div>
											<div class="vid-info">
												<span>1 Month ago</span>
												<span><i class="icofont-eye-open"></i> 8k</span>
											</div>
										</div></div><div class="owl-item cloned" data-video="https://www.youtube.com/watch?v=8iZTb9NWbz8" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=8iZTb9NWbz8" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/8iZTb9NWbz8/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/8iZTb9NWbz8/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Frank J.</span>
											</div>
											<div class="vid-info">
												<span>1 year ago</span>
												<span><i class="icofont-eye-open"></i> 3.1k</span>
											</div>
										</div></div><div class="owl-item cloned" data-video="https://www.youtube.com/watch?v=8itUNRIWVIs" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=8itUNRIWVIs" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/8itUNRIWVIs/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/8itUNRIWVIs/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Maria K.</span>
											</div>
											<div class="vid-info">
												<span>2 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 1.1k</span>
											</div>
										</div></div><div class="owl-item cloned" data-video="https://www.youtube.com/watch?v=JpxsRwnRwCQ" style="width: 537px; margin-right: 15px;"><div class="item-video" data-merge="2">
											<div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ" style="display: none;"></a><div class="owl-video-play-icon"></div><div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg" style="background-image: url(&quot;http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg&quot;); opacity: 1;"></div></div>
											<div class="posted-user">
												<img src="{{ asset('style/images/resources/user1.jpg') }}" alt="">
												<span>Jack Carter</span>
											</div>
											<div class="vid-info">
												<span>4 weeks ago</span>
												<span><i class="icofont-eye-open"></i> 20k</span>
											</div>
										</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
								</div><!-- video playlist carousel -->
								<div class="main-wraper">
									<div class="user-post video">
										<div class="friend-info">
											<figure>
												<img alt="" src="{{ asset('style/images/resources/user3.jpg') }}">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns">
														<i class="">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
														<ul>
															<li>
																<i class="icofont-pen-alt-1"></i>Edit Post
																<span>Edit This Post within a Hour</span>
															</li>
															<li>
																<i class="icofont-ban"></i>Hide Post
																<span>Hide This Post</span>
															</li>
															<li>
																<i class="icofont-ui-delete"></i>Delete Post
																<span>If inappropriate Post By Mistake</span>
															</li>
															<li>
																<i class="icofont-flag"></i>Report
																<span>Inappropriate content</span>
															</li>
														</ul>
													</div>
												</div>
												<ins><a title="" href="time-line.html">Fawad Khanzada</a> Shared video <em><a href="#" title="">Follow</a></em></ins>
												<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
											</div>
											<div class="post-meta">
												<h4>After watching this, your brain will not be the same..</h4>
												<p>In a classic research-based TEDx Talk, Dr. Lara Boyd describes how neuroplasticity gives you the power to shape the brain you ...</p>
												<iframe height="400" src="https://www.youtube.com/embed/LNHBMFCzznE" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
												
												<div class="stat-tools">
													<div class="box">
													  <div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
														<!-- <div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div> -->
													  </div>
													</div>
													<div class="box">
														<div class="Emojis">
														  <div class="Emoji Emoji--like">
															<div class="icon icon--like"></div>
														  </div>
														  <div class="Emoji Emoji--love">
															<div class="icon icon--heart"></div>
														  </div>
														  <div class="Emoji Emoji--haha">
															<div class="icon icon--haha"></div>
														  </div>
														  <div class="Emoji Emoji--wow">
															<div class="icon icon--wow"></div>
														  </div>
														  <div class="Emoji Emoji--sad">
															<div class="icon icon--sad"></div>
														  </div>
														  <div class="Emoji Emoji--angry">
															<div class="icon icon--angry"></div>
														  </div>
														</div>
													  </div>
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
													<a title="" href="#" class="save-to"><i class="icofont-save-alt"></i> Save</a>

													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
														<div class="comments-area">
															<ul>
																<li>
																	<figure><img alt="" src="{{ asset('style/images/resources/user1.jpg') }}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Jack Carter</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																		<span>you can view the more detail via link</span>
																		<a title="" href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
																	</div>
																	<div class="comments-act">
																		<a title="Like" href="#"><a class="Like__link"><i class="icofont-like"></i> Like</a></a>
																		<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i> Comment</a>
																	</div>
																</li>
																<li>
																	<figure><img alt="" src="{{ asset('style/images/resources/user2.jpg') }}"></figure>
																	<div class="commenter">
																		<h5><a title="" href="#">Ching xang</a></h5>
																		<span>2 hours ago</span>
																		<p>
																			i think that some how, we learn who we really are and then live with that decision, great post!
																		</p>
																	</div>
																	<div class="comments-act">
																		<a title="Like" href="#"><a class="Like__link"><i class="icofont-like"></i> Like</a></a>
																		<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i> Comment</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div><!-- share youtube video -->

								<div class="sp sp-bars"></div><!-- LOADER INDICATOR -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
