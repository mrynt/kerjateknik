@extends('layouts.AppUserLayout')

@section('content')

<section>
	<div class="gap pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="page-contents" class="row merged20">

						<div class="col-lg-12">
							<div class="main-wraper">
								<div class="row">
									<div class="col-lg-7 col-md-7">
										<div class="course-details">
											<ul class="rating-stars">
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
												<li><i class="icofont-star"></i></li>
												<li><span>4.5</span></li>
											</ul>
											<h4>Learn Basic Java Scripts</h4>
											<span class="course-price">$19.99 <del>29.99</del></span>
											<p>
												Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
											</p>
											<div class="create-by">
												<figure><img src="{{ asset('style/images/resources/user1.jpg') }}" alt=""></figure>
												<div>
													<span>Kim Carter</span>
													<em>Last Update: Aug, 27 2021</em>
												</div>
											</div>
											<a href="#" title="">Follow</a>
											<ul class="statistic">
												<li><i class="icofont-eye-alt"></i> 1450</li>
												<li><i class="icofont-thumbs-up"></i> 200</li>
												<li><i class="icofont-thumbs-down"></i> 80</li>
												<li><i class="icofont-share-alt"></i> Share</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-5 col-md-5">
										<div class="course-video">
											<figure>
												<img src="{{ asset('style/images/resources/course-2.jpg') }}" alt="">
												<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title"><i class="icofont-play"></i></a>
											</figure>

											<div class="w-100 d-flex gap-2 justify-content-center">
												<a class="main-btn --cst" href="#" title="">Registrasi</a>
												<a class="wish-btn" href="#" title="">Add to Wishlist</a>
											</div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="desc-course">
											<h4 class="main-title">Description:</h4>
											<p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
											<p>
												Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
											</p>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="desc-course">
											<h4 class="main-title">Curriculum</h4>
											<div class="question-collaps">
												<div id="accordion">
													<div class="card">
													<div class="card-header" id="headingOne">
														<h5 class="mb-0">
														<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
															1- Basic Html Introduction <span>03 videos</span>
														</button>
														</h5>
													</div>

													<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
														<div class="card-body">
														<ul class="video-lecture">
															<li>
																<i class="icofont-play-alt-1"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Html Intro Lecture</a>
																<span>29min</span>
															</li>
															<li>
																<i class="icofont-play-alt-1"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Html Basic Lecture</a>
																<span>45min</span>
															</li>
															<li>
																<i class="icofont-lock"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Html Tags Lecture</a>
																<span>20min</span>
															</li>
														</ul>
														</div>
													</div>
													</div>
													<div class="card">
													<div class="card-header" id="headingTwo">
														<h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
															Css3 Advanced Lectures
															<span>10 videos</span>
														</button>
														</h5>
													</div>
													<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
														<div class="card-body">
														<ul class="video-lecture">
															<li>
																<i class="icofont-play-alt-1"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Css3 Intro Lecture</a>
																<span>29min</span>
															</li>
															<li>
																<i class="icofont-lock"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Css3 Basic Lecture</a>
																<span>45min</span>
															</li>
															<li>
																<i class="icofont-lock"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Css3 Tags Lecture</a>
																<span>20min</span>
															</li>
														</ul>
														</div>
													</div>
													</div>
													<div class="card">
													<div class="card-header" id="headingThree">
														<h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
															JQuery Advance Lectures
															<span>20 videos</span>
														</button>
														</h5>
													</div>
													<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
														<div class="card-body">
														<ul class="video-lecture">
															<li>
																<i class="icofont-play-alt-1"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Html Intro Lecture</a>
																<span>29min</span>
															</li>
															<li>
																<i class="icofont-play-alt-1"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Html Basic Lecture</a>
																<span>45min</span>
															</li>
															<li>
																<i class="icofont-play-alt-1"></i>
																<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&feature=emb_title">Html Tags Lecture</a>
																<span>20min</span>
															</li>
														</ul>
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
		</div>
	</div>
</section>

@endsection
