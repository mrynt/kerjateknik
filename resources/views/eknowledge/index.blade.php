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
															<h6 class="font-weight-bold">Rating</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<select class="form-control" id="">
																<option value="" selected>Select Rating</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
															</select>
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Eknowledge Type</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<select class="form-control" id="">
																<option value="" selected>Select Rating</option>
																<option value="journal">Journal</option>
																<option value="report">Report</option>
																<option value="lainnya">Lainnya</option>
															</select>
														</div>
													</form>
												</div>


												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Publisher</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="publisher-1">
																<label class="form-check-label" for="publisher-1">
																	Company <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="publisher-2">
																<label class="form-check-label" for="publisher-2">
																	Univ <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="publisher-3">
																<label class="form-check-label" for="publisher-3">
																	Lembaga <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="publisher-4">
																<label class="form-check-label" for="publisher-4">
																	Lainnya
																</label>
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
																<option value="" selected>Select Kategori</option>
																<option value="kimia">Kimia</option>
																<option value="civil">Civil</option>
																<option value="arsitektur">Arsitektur</option>
																<option value="mesin material">Mesin & Material</option>
																<option value="electrical instrument">Electrical & Instrument</option>
																<option value="tambang">Tambang</option>
															</select>
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Industrial Sector</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<select class="form-control" id="">
																<option value="" selected>Select Industrial Sector</option>
																<option value="">Power Generation – Conventional</option>
																<option value="">Power Generation – Renewable</option>
																<option value="">Oil & Gas</option>
																<option value="">Tambang & Mineral Processing</option>
																<option value="">Chemical & Petrochemical</option>
																<option value="">Oleochemical</option>
																<option value="">Automotive</option>
																<option value="">Fabrication & Manufacturing</option>
															</select>
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Topic</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<select class="form-control" id="">
																<option value="" selected>Select Topic</option>
																<option value="">Business</option>
																<option value="">Project Management</option>
																<option value="">Engineering & Design</option>
																<option value="">Construction</option>
																<option value="">Pre-commissioning & Commissioning</option>
																<option value="">Fabrication & Manufacturing</option>
																<option value="">Procurement & Import</option>
															</select>
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
																<input class="form-check-input" type="radio" name="pricing" id="pricing-free" value="Free">
																<label class="form-check-label" for="pricing-free">Free</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="radio" name="pricing" id="pricing-paid" value="Paid">
																<label class="form-check-label" for="pricing-paid">Paid</label>
															</div>
														</div>
													</form>
												</div>



											</div>
										</div>

									</div>
								</aside>
							</div>

							<div class="col-lg-9">

								<ul class="d-flex --ulunstyle gap-1">
									<li>
										<a href="#" class="btn-c">Journal</a>
									</li>
									<li>
										<a href="#" class="btn-c">Technical Paper</a>
									</li>
									<li>
										<a href="#" class="btn-c btn-grey">Book</a>
									</li>
								</ul>

								<div class="main-wraper mt-4">
									<div class="w-100 my-2">
										<div class="row col-xs-6">
											<?php
												for ($i = 1; $i <= 12; $i++): ?>
											<div class="col-lg-3 col-md-3 col-sm-6">
												<div class="book-post">
													<figure><a href="{{route('eknowledge.index')}}/e-knowledge-detail" title=""><img src="{{ asset('style/images/resources/book1.jpg') }}" alt=""></a></figure>
													<a href="book-detail.html" title="">Html5 Brick Breaker</a>
												</div>
											</div>
											<?php endfor; ?>

										</div>
									</div>

									<div class="load mb-5 mt-1">
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
