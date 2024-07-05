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

									<div class="widget">
										<h4 class="widget-title">Complete Your Profile</h4>
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



									@if(Auth::User()->roles()->first()->name == 'user')
									<div class="widget stick-widget" style="">
										<h4 class="widget-title">Follow Profesional Account</h4>
										<ul class="followers">
											@if(!$profesional_account->isEmpty())
											@foreach($profesional_account as $pa)
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/friend-avatar.jpg') }}"></figure>

												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">{{$pa->nama_depan}} {{$pa->nama_belakang}}</a>
														<!-- <span>Dept colleague</span> -->
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											@endforeach
											@endif




										</ul>
									</div>


									<div class="widget stick-widget" style="">
										<h4 class="widget-title">Follow Oragnisasi Account</h4>
										<ul class="followers">
											@if(!$organisasi->isEmpty())
											@foreach($organisasi as $or)
											<li>
												<figure><img alt="" src="{{ asset('style/images/resources/friend-avatar.jpg') }}"></figure>

												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">{{$or->nama_perusahaan}}</a>
														<span>{{$or->tipe}}</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											@endforeach
											@endif




										</ul>
									</div>

									@endif


								</aside>
							</div>
							<div class="col-lg-6">
								@if( Auth::User()->roles()->first()->name == 'organisasi')
								<div class="main-wraper">
									<span class="new-title">Create New Post</span>
									<div class="new-post">
										<form method="post">
											<i class="icofont-pen-alt-1"></i>
											<input type="text" placeholder="Create New Post">
										</form>
										<ul class="upload-media">
											<li>
												<a href="#" title="">
													<i><img src="{{ asset('style/images/image.png') }}" alt=""></i>
													<span>Photo/Video</span>
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i><img src="{{ asset('style/images/activity.png') }}" alt=""></i>
													<span>Jurnal Artikel</span>
												</a>
											</li>

										</ul>
									</div>
								</div>
								@else
								@if(Auth::user()->profile->is_profesional_akun == '1')
								<div class="main-wraper">
									<span class="new-title">Create New Post</span>
									<div class="new-post">
										<form method="post">
											<i class="icofont-pen-alt-1"></i>
											<input type="text" placeholder="Create New Post">
										</form>
										<ul class="upload-media">
											<li>
												<a href="#" title="">
													<i><img src="{{ asset('style/images/image.png') }}" alt=""></i>
													<span>Photo/Video</span>
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i><img src="{{ asset('style/images/activity.png') }}" alt=""></i>
													<span>Jurnal Artikel</span>
												</a>
											</li>

										</ul>
									</div>
								</div>
								@endif
								@endif

								@foreach($feed as $fd)
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<em>
													<svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
												<img alt="" src="{{ asset('style/images/resources/user3.jpg') }}">
											</figure>
											<div class="friend-name">


												<ins>
												@if($fd->user_type == 'profesional')
												  <a title="" href="time-line.html">{{$fd->user->profile->nama_depan}} {{$fd->user->profile->nama_belakang}}</a> Create Post
												@else
												  <a title="" href="time-line.html">{{$fd->user->organisasiprofile->nama_perusahaan}}</a> Create Post
												@endif
												</ins>

												<span><i class="icofont-globe"></i> published: {{$fd->created_at}}</span>
											</div>
											<div class="post-meta">
												<p>{{$fd->whats_on_your_mind}}</p>
												<figure>
													@if($fd->type == 'link')
														@php
															$metadata = json_decode($fd->link_metadata);

													    @endphp

														@if($metadata->site_name == 'YouTube')

															<div class="post-meta">
															<a href="{{$fd->url}}" class="post-title">{{$metadata->title}}</a>
															<p>
																{{$metadata->description}}
															</p>
															<iframe width="560" height="315" src="{!! $metadata->video_url !!}"></iframe>
														@else
															<div class="post-meta">
															<a href="{{$fd->url}}" class="post-title">{{$metadata->title}}</a>
															<p>
																{{$metadata->description}}
															</p>
														@endif
													@else
														{{$fd->file}}
													@endif
												</figure>


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
								</div>

								@endforeach




							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right">

									@include('layouts/partial/sidebar/_widget-events')
									@include('layouts/partial/sidebar/_widget-popular-e-knowledge')
									@include('layouts/partial/sidebar/_widget-popular-training')

								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- content -->




	<div class="post-new-popup">
		<div class="popup" style="width: 800px;">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>Create New Post</h5>
				</div>
				<div class="post-new">
					<div class="post-newmeta">
						<ul class="post-categoroes">
							<li><i class="icofont-camera"></i> Photo / Video</li>
							<li><i class="icofont-link"></i> Post Link Video</li>
							<li><i class="icofont-globe"></i> Post File</li>
						</ul>
						<form method="post" class="dropzone" action="/upload-target">
							<div class="fallback">
								<input name="file" type="file" multiple />
							</div>
						</form>
					</div>
					<form method="post" class="c-form">
						<textarea id="emojionearea1" placeholder="What's On Your Mind?"></textarea>
						<button type="submit" class="main-btn mt-5">Publish</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- New post popup -->
@endsection
