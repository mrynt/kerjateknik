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
									<h2>Tambahkan Training Baru</h2>
									<p>Isi data dengan lengkap untuk menambahkan pelatihan</p>


									<div class="form-warp mt-3">
										<form class="" action="index.html" method="post">
											<div class="row">

												<div class="mb-4 col-lg-12">
													<input class="uk-input" type="text" placeholder="Judul Traning">
												</div>
												<div class="mb-4 col-lg-12">
													<input class="uk-input" type="date" placeholder="Tanggal Traning">
												</div>
                        <div class="mb-4 col-lg-12">
													<textarea placeholder="Deskripsi Training" rows="4" class="uk-textarea"></textarea>
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
                          <input class="uk-input" type="text" placeholder="Harga (Rp)">
												</div>
                        <div class="mb-4 col-lg-12">
                          <textarea placeholder="Alamat Training (Jika Online)" rows="2" class="uk-textarea"></textarea>
                        </div>
												<div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Kategori</option>
														<option value="Kimia">Kimia</option>
														<option value="Civil">Civil</option>
														<option value="Arsitektur">Arsitektur</option>
														<option value="Mesin & Material">Mesin & Material</option>
														<option value="Electrical & Instrument">Electrical & Instrument</option>
														<option value="Tambang">Tambang</option>
														<option value="Other">Other</option>
													</select>
												</div>
												<div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Jenis Industri</option>
													</select>
												</div>
                        <div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Provider</option>
														<option value="BNSP">BNSP</option>
														<option value="KEMENAKER">KEMENAKER</option>
														<option value="MIGAS">MIGAS</option>
														<option value="ASME">ASME</option>
														<option value="API">API</option>
														<option value="NACE">NACE</option>
													</select>
												</div>
                        <div class="col-lg-6 mb-4">
                          <select class="uk-select select-search">
                            <option value="">Tipe Training</option>
                            <option value="Certification">Certification</option>
                            <option value="Non-certified">Non-certified</option>
                          </select>
                        </div>
                        <div class="col-lg-12 mb-4">
                          <select class="uk-select select-search">
                            <option value="">Training Topic</option>
                            <option value="Marketing & Business Development">Marketing & Business Development</option>
                            <option value="Project Management">Project Management</option>
                            <option value="Finance">Finance</option>
                            <option value="Engineering & Design">Engineering & Design</option>
                            <option value="Fabrication & Manufacturing">Fabrication & Manufacturing</option>
                            <option value="Inspection & Testing">Inspection & Testing</option>
                            <option value="Construction & Installation">Construction & Installation</option>
                            <option value="Operation">Operation</option>
                            <option value="Maintenance Repair Overhaul">Maintenance Repair Overhaul</option>
                            <option value="Safety">Safety</option>
                          </select>
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
													<button type="submit" class="button primary circle btn-big">Post Training</button>
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
