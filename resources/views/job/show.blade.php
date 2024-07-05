@extends('layouts.AppUserLayout')

@section('content')

<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">

								<div class="main-wraper">
									<div class="jobsWrap">
										<div class="jobsHead">
											<div class="jobsHead-img">
												<img src="https://media.licdn.com/dms/image/C511BAQFz6T6KABU7Jw/company-background_10000/0/1584482640225/medco_ep_indonesia_cover?e=1705802400&v=beta&t=zztIAMNCBAk8EvePzNmULXUuXLKUDbePwVQbaFOWXT4" alt="">
											</div>
										</div>


										<div class="jobCol-content my-4">
                      <div class="row">
                        <div class="col-1 px-2 mb-3">
                          <div class="jobImg --round">
                            <img src="https://media.licdn.com/dms/image/C4E0BAQE4CJSgGjKt_w/company-logo_200_200/0/1630655649902/bakerhughes_logo?e=1713398400&v=beta&t=m2y5mGyPlvJYEUPJjE5zTUH6Id01zH1pDsZfbGCfyKw" alt="">
                          </div>
                        </div>
                        <div class="col-lg-12 px-2">
                          <h5><b>Mechanical Project Enginer - Dumai</b></h5>
                          <p class="jobCorporate">Baker Hughes</p>

													<div class="row mt-2">
														<div class="col-lg-10">
															<div class="w-100">
		                            <div class="row">
		                              <div class="col-lg-6">
		                                <h6>Dumai, Head Office</h6>
		                              </div>
		                              <div class="col-lg-6">
		                                <h6>Tipe Pekerjaan: <b>Kontrak Paruh Waktu</b></h6>
		                              </div>
																	<div class="col-lg-12 mt-2">
																		<p>Ditayangkan pada 10 jam yang lalu</p>
																	</div>
		                            </div>
		                          </div>
														</div>

														<div class="col-5 mt-4">

															<div class="jobCol-action">
					                      <div class="d-flex gap-2">
																	<a href="#modal-apply" uk-toggle class="main-btn --cst">Kirim Lamaran</a>

					                        <a href="#modal-jobsBookmark" uk-toggle class="wish-btn">
																		Simpan Lamaran</a>
					                      </div>
					                    </div>

														</div>

														<div class="col-12 mt-5">
															<div class="row">
																<div class="col-12 mb-5">
																	<h4 class="font-weight-bold">Deskripsi Pekerjaan:</h4>

																	<div class="w-100 mt-2">
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
																		<ul>
			                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
			                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
			                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
			                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
			                              </ul>
																	</div>
																</div>

																<div class="col-12">
																	<h4 class="font-weight-bold">Sertifikasi:</h4>

																	<div class="w-100 mt-2">
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
																		<ul>
																			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
																			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
																			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
																			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </li>
																		</ul>
																	</div>

																	<div class="w-100 d-inline-block mt-3">
																		<a href="#" class="button btn-grey1 circle w-100 text-center btn-lg d-inline px-5">Dapatkan Pelatihan untuk memenuhi sertifikasi</a>
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



	<div id="modal-apply" uk-modal class="uk-modal uk-flex-top">
		<div class="uk-modal-dialog uk-margin-auto-vertical">
	      <button class="uk-modal-close-default" type="button" uk-close></button>
				<div class="uk-modal-body">
					<div class="w-100 text-center mt-3">
						<h4 class="font-weight-bold">Anda belum melengkapi data diri Anda!</h4>
						<h5 class="font-weight-bold">Silahkan lengkapi data diri dan pengalaman Anda untuk melanjutkan</h5>

						<div class="w-100 mt-4">
							<a href="{{route('user.profile')}}" class="button primary circle w-100 text-center d-flex align-items-center justify-content-center">
								<h4 class="font-weight-bold">Lengkapi Sekarang</h4>
							</a>
						</div>
					</div>
				</div>
	  </div>
	</div>

	<div id="modal-jobsBookmark" uk-modal class="uk-modal uk-flex-top closeTimeout">
		<div class="uk-modal-dialog uk-margin-auto-vertical">
				<div class="uk-modal-body">
					<div class="w-100 text-center mt-3">
						<div class="mb-3">
							<h1><i class="icofont-check-circled text-success"></i></h1>
						</div>
						<h4 class="font-weight-bold">Lamaran Berhasil Disimpan</h4>
					</div>
				</div>
	  </div>
	</div>

@endsection
