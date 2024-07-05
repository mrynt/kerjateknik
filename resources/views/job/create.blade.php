@extends('layouts.AppUserLayout')

@section('content')

<section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">

							<div class="col-md-7 m-auto">
								<div class="main-wraper">
									<h2>Tambahkan Lowongan Baru</h2>
									<p>Isi data dengan lengkap untuk menambahkan pekerjaan baru</p>


									<div class="form-warp mt-3">
										<form class="" action="index.html" method="post">
											<div class="row">

												<div class="mb-4 col-lg-12">
													<input class="uk-input" type="text" placeholder="Nama Posisi Lowongan">
												</div>
												<div class="mb-4 col-lg-12">
													<textarea placeholder="Deskripsi Pekerjaan" rows="4" class="uk-textarea"></textarea>
												</div>
												<div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Tipe Lokasi</option>
														<option value="On-site">On-site</option>
														<option value="Remote">Remote</option>
														<option value="Hybrid">Hybrid</option>
													</select>
												</div>
												<div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Tipe Pekerjaan</option>
														<option value="Full time">Full time</option>
														<option value="Part time">Part time</option>
													</select>
												</div>
												<div class="mb-4 col-lg-12">
													<input class="uk-input" type="text" placeholder="Kota">
												</div>
												<div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Jenis Industri</option>
													</select>
												</div>
												<div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Divisi</option>
													</select>
												</div>
												<div class="col-lg-12 mb-4">
													<select class="uk-select select-search">
														<option value="">Level Pengalaman</option>
														<option value="Internship">Internship</option>
														<option value="Entry level">Entry level</option>
														<option value="Associate">Associate</option>
														<option value="Mid-Senior level">Mid-Senior level</option>
														<option value="Director">Director</option>
														<option value="Executive">Executive</option>
													</select>
												</div>
												<div class="mb-4 col-lg-12">
													<input class="uk-input" type="text" placeholder="Sertifikasi">
												</div>

												<div class="mt-2 col-lg-12">
													<label for="">Upload Banner</label>
													<div class="dropzone" action="/upload-target">
														<div class="fallback">
															<input name="file" type="file" />
														</div>
													</div>
												</div>

												<div class="mt-3 col-lg-12 text-right">
													<button type="submit" class="button primary circle btn-big">Post Pekerjaan</button>
												</div>
											</div>
										</form>

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
