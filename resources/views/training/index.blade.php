@extends('layouts.AppUserLayout')

@section('content')

<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">

							<div class="row">
								<div class="col-lg-3">
									<aside class="sidebar static left">
										<div class="widget ">

											<div class="widgetFilter-wrap">
												<div class="widgetFilter-head d-flex justify-content-space-between row mb-3">
													<h5 class="forange bold">Filters</h5>
													<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear all filter</button>
												</div>

												<div class="widgetFilter-body">

													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between">
																<h6 class="font-weight-bold">Training</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Search Training">
																</div>
															</div>
														</form>
													</div>

													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between">
																<h6 class="font-weight-bold">Date Posted</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-group">
																	<input type="date" class="form-control">
																</div>
															</div>
														</form>
													</div>

													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
																<h6 class="font-weight-bold">Kategori</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<select class="form-control" id="">
																	<option value="all" selected>All</option>
																	<option value="kimia">Kimia</option>
																	<option value="civil">Civil</option>
																	<option value="arsitektur">Arsitektur</option>
																	<option value="mesin material">Mesin & Material</option>
																	<option value="electrical instrument">Electrical & Instrument</option>
																	<option value="tambang">Tambang</option>
																	<option value="other">Other</option>
																</select>
															</div>
														</form>
													</div>

													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
																<h6 class="font-weight-bold">Provider</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="provider-1">
																	<label class="form-check-label" for="provider-1">
																		BNSP <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="provider-2">
																	<label class="form-check-label" for="provider-2">
																		KEMENAKER <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="provider-3">
																	<label class="form-check-label" for="provider-3">
																		MIGAS <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="provider-4">
																	<label class="form-check-label" for="provider-4">
																		ASME <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="provider-5">
																	<label class="form-check-label" for="provider-5">
																		API <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="provider-6">
																	<label class="form-check-label" for="provider-6">
																		NACE <b>(764)</b>
																	</label>
																</div>

															</div>
														</form>
													</div>


													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
																<h6 class="font-weight-bold">Training Topic</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-1">
																	<label class="form-check-label" for="training-topic-1">
																		Marketing & Business Development <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-2">
																	<label class="form-check-label" for="training-topic-2">
																		Project Management <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-3">
																	<label class="form-check-label" for="training-topic-3">
																		Finance <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-4">
																	<label class="form-check-label" for="training-topic-4">
																		Engineering & Design <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-5">
																	<label class="form-check-label" for="training-topic-5">
																		Fabrication & Manufacturing <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-6">
																	<label class="form-check-label" for="training-topic-6">
																		Inspection & Testing <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-7">
																	<label class="form-check-label" for="training-topic-7">
																		Construction & Installation <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-8">
																	<label class="form-check-label" for="training-topic-8">
																		Operation <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-9">
																	<label class="form-check-label" for="training-topic-9">
																		Maintenance Repair Overhaul <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-10">
																	<label class="form-check-label" for="training-topic-10">
																		Safety <b>(440)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-topic-11">
																	<label class="form-check-label" for="training-topic-11">
																		Other <b>(440)</b>
																	</label>
																</div>

															</div>
														</form>
													</div>


													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
																<h6 class="font-weight-bold">Pricing</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-check my-2">
																  <input class="form-check-input" type="radio" name="pricing" id="pricing-free-training" value="Free Training">
																  <label class="form-check-label" for="pricing-free-training">Free Training</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="radio" name="pricing" id="pricing-paid-training" value="Paid Training">
																	<label class="form-check-label" for="pricing-paid-training">Paid Training</label>
																</div>
															</div>
														</form>
													</div>


													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
																<h6 class="font-weight-bold">Location</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="location-1">
																	<label class="form-check-label" for="provider-1">
																		Online <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="location-2">
																	<label class="form-check-label" for="location-2">
																	 	Offline <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="location-3">
																	<label class="form-check-label" for="location-3">
																	 	Hybrid <b>(764)</b>
																	</label>
																</div>

															</div>
														</form>
													</div>


													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
																<h6 class="font-weight-bold">Training Type</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-type-1">
																	<label class="form-check-label" for="training-type--1">
																		Certification <b>(764)</b>
																	</label>
																</div>
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="training-type--2">
																	<label class="form-check-label" for="training-type--2">
																	 	Non-certified <b>(764)</b>
																	</label>
																</div>

															</div>
														</form>
													</div>

													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between">
																<h6 class="font-weight-bold">Location</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Search Location">
																</div>
															</div>
														</form>
													</div>

													<div class="widgetFilter-item mb-4">
														<form class="" action="" method="post">
															<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
																<h6 class="font-weight-bold">Industry</h6>
																<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
															</div>
															<div class="widgetFilter-box">
																<div class="form-check my-2">
																	<input class="form-check-input" type="checkbox" value="" id="industry-1">
																	<label class="form-check-label" for="industry--1">
																		Lorem ipsum dolor <b>(764)</b>
																	</label>
																</div>

															</div>
														</form>
													</div>


												</div>
											</div>

										</div>
									</aside>
								</div>

								<div class="col-lg-6">

									<div class="w-100">
										<ul class="d-flex --ulunstyle gap-1">
											<li>
												<a href="#" class="btn-c">Paid</a>
											</li>
											<li>
												<a href="#" class="btn-c btn-grey">Free</a>
											</li>
										</ul>
									</div>

									<div class="main-wraper py-2 mb-4">
										<div class="row dflex align-items-center">
											<div class="col-md-6">
												<div class="elipsis-1">
													1 - 20 of 4469 <b> Training / Event Found</b>
												</div>
											</div>
											<div class="col-md-6">
												<div class="d-flex align-items-center justify-content-end">
													<!-- <h6 class="text-primary mr-3 mb-0"><a href="#">Send me jobs like these</a></b></h6> -->
													<select class="form-control filterTop" id="">
														<option>sort by: <b>Relevance</b></option>
														<option>sort by: <b>Last</b></option>
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="w-100 my-3">
										<div class="row remove-ext30">

											<?php
												for ($i = 1; $i <= 10; $i++): ?>
											<div class="col-lg-6 col-md-6 col-sm-6 mb-3">
												<div class="blog-grid bgwhite">
													<a href="{{route('training.index')}}/training-detail" title="">
														<figure>
															<img src="{{ asset('style/images/industrimigas.png') }}" alt="">
														</figure>
													</a>
													<div class="blog-meta">
														<div class="blog-head">
															<ul class="postby">
																<li>
																	<figure><img src="{{ asset('style/images/resources/postby1.jpg') }}" alt=""></figure>
																	<span>Saden joe</span>
																</li>
																<li><i class="icofont-heart"></i><span>1.3k</span></li>
															</ul>
															<div class="blog-content d-flex">
																<div class="date-c ">06 Aug</div>
																<h4 class="blog-title"><a href="{{route('training.index')}}/training-detail" title="">Oddo is coming to dubai in 2020</a></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php endfor; ?>


										</div>
									</div><!-- courses posts -->

									<div class="load mt-0 mb-5">
										<ul class="pagination">
											<li><a title="" href="#"><i class="icofont-arrow-left"></i></a></li>
											<li><a title="" href="#" class="active">1</a></li>
											<li><a title="" href="#">2</a></li>
											<li><a title="" href="#">3</a></li>
											<li><a title="" href="#">4</a></li>
											<li><a title="" href="#">5</a></li>
											<li>....</li>
											<li><a title="" href="#">10</a></li>
											<li><a title="" href="#"><i class="icofont-arrow-right"></i></a></li>
										</ul>
									</div><!-- pagination -->
								</div>

								<div class="col-lg-3">
									<div class="sidebar static right">

										@include('layouts/partial/sidebar/_widget-events')
										@include('layouts/partial/sidebar/_widget-popular-e-knowledge')
										@include('layouts/partial/sidebar/_widget-popular-training')

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
