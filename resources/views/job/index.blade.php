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
									<div class="widget stick-widget ">

										<div class="widgetFilter-wrap">
											<div class="widgetFilter-head d-flex justify-content-space-between row mb-3">
												<h5 class="forange bold">Filters</h4>
												<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear all filter</button>
											</div>

											<div class="widgetFilter-body">

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between">
															<h6 class="font-weight-bold">Skills</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-group">
																<input type="text" class="form-control" placeholder="Search skill">
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
															<h6 class="font-weight-bold">Experience Level</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="experience-level-1">
																<label class="form-check-label" for="experience-level-1">
																	Internship <b>(764)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="experience-level-2">
																<label class="form-check-label" for="experience-level-2">
																	Entry level <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="experience-level-3">
																<label class="form-check-label" for="experience-level-3">
																	Associate <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="experience-level-4">
																<label class="form-check-label" for="experience-level-4">
																	Mid-Senior level <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="experience-level-5">
																<label class="form-check-label" for="experience-level-5">
																	Director <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="experience-level-6">
																<label class="form-check-label" for="experience-level-6">
																	Executive <b>(440)</b>
																</label>
															</div>

															<!-- <div class="w-100 mt-3 pl-4">
																<a href="#" class="btn-link">View more</a>
															</div> -->
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Company type</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
															  <input class="form-check-input" type="checkbox" value="" id="company-type-1">
															  <label class="form-check-label" for="company-type-1">
															    Corporate <b>(764)</b>
															  </label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="company-type-2">
																<label class="form-check-label" for="company-type-2">
																	Foreign MNC <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="company-type-3">
																<label class="form-check-label" for="company-type-3">
																	Indian MNC <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="company-type-4">
																<label class="form-check-label" for="company-type-4">
																	Startup <b>(440)</b>
																</label>
															</div>

															<!-- <div class="w-100 mt-3 pl-4">
																<a href="#" class="btn-link">View more</a>
															</div> -->
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
															<h6 class="font-weight-bold">Job Type</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="job-type-1">
																<label class="form-check-label" for="job-type-1">
																	Full time <b>(764)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="job-type-2">
																<label class="form-check-label" for="job-type-2">
																	Part time <b>(764)</b>
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
																<label class="form-check-label" for="industry-1">
																	Engineering & Construction <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="industry-2">
																<label class="form-check-label" for="industry-2">
																	Industrial Equipment <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="industry-3">
																<label class="form-check-label" for="industry-3">
																	Oil & Gas <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="industry-4">
																<label class="form-check-label" for="industry-4">
																	IT Services & Consulting Companies <b>(440)</b>
																</label>
															</div>

															<!-- <div class="w-100 mt-3 pl-4">
																<a href="#" class="btn-link">View more</a>
															</div> -->
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Job Function</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="job-function-1">
																<label class="form-check-label" for="job-function-1">
																	Lorem ipsum dolor sit amet <b>(440)</b>
																</label>
															</div>

															<!-- <div class="w-100 mt-3 pl-4">
																<a href="#" class="btn-link">View more</a>
															</div> -->
														</div>
													</form>
												</div>




												<!-- <div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Availablilty</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
															  <input class="form-check-input" type="radio" name="jobs_availablilty" id="jobs_availablilty-Hourly" value="Hourly">
															  <label class="form-check-label" for="jobs_availablilty-Hourly">Hourly</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="radio" name="jobs_availablilty" id="jobs_availablilty-Part-Time" value="Part Time">
																<label class="form-check-label" for="jobs_availablilty-Part-Time">Part Time</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="radio" name="jobs_availablilty" id="jobs_availablilty-Full-Time" value="Full Time" checked>
																<label class="form-check-label" for="jobs_availablilty-Full-Time">Full Time</label>
															</div>
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Job Type</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<select class="form-control" id="">
													      <option value="" disabled selected>Select job type</option>
													      <option value="Job 1">Job 1</option>
													      <option value="Job 2">Job 2</option>
													      <option value="Job 3">Job 3</option>
													      <option value="Job 4">Job 4</option>
													    </select>
														</div>
													</form>
												</div>



												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Province</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<select class="form-control" id="">
													      <option value="" disabled selected>Select province</option>
													      <option value="Jakarta">Jakarta</option>
													      <option value="Jawa Tengah">Jawa Tengah</option>
													      <option value="Jawa Timur">Jawa Timur</option>
													      <option value="Jawa Barat">Jawa Barat</option>
													    </select>
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Salary Range</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<select class="form-control" id="">
													      <option value="" disabled selected>Select salary</option>
													      <option value="">0 > Rp. 4.000.000</option>
													      <option value="">Rp. 4.000.000 > Rp. 8.000.000</option>
													      <option value="">Rp. 8.000.000 > Rp. 10.000.000</option>
													      <option value="">Rp. 10.000.000 >=</option>
													    </select>
														</div>
													</form>
												</div>



												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Role category</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
															  <input class="form-check-input" type="checkbox" value="" id="role-category-1">
															  <label class="form-check-label" for="role-category-1">
															    Engineering <b>(764)</b>
															  </label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="role-category-2">
																<label class="form-check-label" for="role-category-2">
																	Contruction Engineering <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="role-category-3">
																<label class="form-check-label" for="role-category-3">
																	Operations Maintenance <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="role-category-4">
																<label class="form-check-label" for="role-category-4">
																	Production & Manufacturing <b>(440)</b>
																</label>
															</div>

															<div class="w-100 mt-3 pl-4">
																<a href="#" class="btn-link">View more</a>
															</div>
														</div>
													</form>
												</div>

												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Posted by</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
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

															<div class="w-100 mt-3 pl-4">
																<a href="#" class="btn-link">View more</a>
															</div>
														</div>
													</form>
												</div>


												<div class="widgetFilter-item mb-4">
													<form class="" action="" method="post">
														<div class="widgetFilter-head d-flex justify-content-space-between mb-2">
															<h6 class="font-weight-bold">Top companies</h6>
															<button type="button" name="button" class="btn-link text-right fsoftgrey">Clear</button>
														</div>
														<div class="widgetFilter-box">
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="top-companies-1">
																<label class="form-check-label" for="top-companies-1">
																	Larsen & Toubro <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="top-companies-2">
																<label class="form-check-label" for="top-companies-2">
																	Cyient <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="top-companies-3">
																<label class="form-check-label" for="top-companies-3">
																	HCLTech <b>(440)</b>
																</label>
															</div>
															<div class="form-check my-2">
																<input class="form-check-input" type="checkbox" value="" id="top-companies-4">
																<label class="form-check-label" for="top-companies-4">
																	Tecnimont <b>(440)</b>
																</label>
															</div>

															<div class="w-100 mt-3 pl-4">
																<a href="#" class="btn-link">View more</a>
															</div>
														</div>
													</form>
												</div> -->

											</div>
										</div>

									</div>
								</aside>
							</div>
							<div class="col-lg-6">

								<div class="main-wraper py-2 mb-4">
									<div class="row dflex align-items-center">
										<div class="col-md-6">
											<div class="elipsis-1">
												1 - 20 of 4469 <b> Engineering Jobs</b>
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

								<div class="w-100">
									<?php
					          for ($i = 1; $i <= 9; $i++): ?>
	                <div class="card p-3 mb-3">
	                  <div class="row">
	                    <div class="col-md-8">
												<div class="jobCol-content">
													<div class="row">
														<div class="col-lg-2 px-2">
															<div class="jobImg">
																<a href="{{route('job.index')}}/job_detail"><img src="{{ asset('style/images/logobaker.jpg') }}" alt=""></a>
															</div>
														</div>
														<div class="col-lg-10 px-2">
															<h5>
																<a href="{{route('job.index')}}/job_detail" class="font-weight-bold">Mechanical Project Enginer</a>
															</h5>
															<p class="jobCorporate">Baker Hughes</p>

															<ul class="jobUl my-1">
																<li>Dumai</li>
																<li>Riau</li>
																<li>Indonesia</li>
															</ul>
															<ul class="jobUl my-1">
																<li>Permanent</li>
																<li>Remote Area</li>
																<li>100 applicant</li>
															</ul>

															<div class="jobPublish my-2">
																<div class="row">
																	<div class="col-md-6">
																		<span>Posted at:</span> 01 Sept 2023
																	</div>
																	<div class="col-md-6">
																		<span>Closed at:</span> 12 Sept 2023
																	</div>
																</div>
															</div>

															<ul class="jobCategory my-2">
																<li>Senior Supervisor</li>
																<li>Automation</li>
																<li>Due diligence</li>
																<li>SAP</li>
															</ul>
														</div>
													</div>
												</div>
	                    </div>

											<div class="col-md-4">
												<div class="jobCol-action">
		                      <div class="">
		                        <a href="{{route('job.index')}}/job_detail" class="button grey circle mb-2 w-100 d-flex align-items-center justify-content-center">Lihat Lamaran</a>

		                        <a href="#" class="button primary circle w-100 mb-2  d-flex align-items-center justify-content-center">Kirim Lamaran</a>
		                      </div>
		                    </div>
											</div>


											<div class="stat-tools mr-3">
												<div class="box">
													<div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
													</div>
												</div>
												<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
												<a title="" href="#" class="save-to"><i class="icofont-save-alt"></i> Save</a>
											</div>

	                  </div>
	                </div>
									<?php endfor; ?>
								</div>

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
	</section>

    @endsection
