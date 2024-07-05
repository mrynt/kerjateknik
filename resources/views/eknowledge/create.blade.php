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
									<h2>Tambahkan E-Knowledge Baru</h2>
									<p>Isi data dengan lengkap untuk menambahkan Eknowledge</p>


									<div class="form-warp mt-3">
										<form class="" action="index.html" method="post">
											<div class="row">

												<div class="mb-4 col-lg-12">
													<input class="uk-input" type="text" placeholder="Judul Eknowledge">
												</div>
                        <div class="mb-4 col-lg-12">
													<textarea placeholder="Deskripsi Eknowledge" rows="4" class="uk-textarea"></textarea>
												</div>
												<div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Tipe E-Knowledge</option>
														<option value="Journal">Journal</option>
														<option value="Report">Report</option>
													</select>
												</div>
												<div class="col-lg-6 mb-4">
                          <input class="uk-input" type="text" placeholder="Harga (Rp)">
												</div>
												<div class="col-lg-6 mb-4">
                          <input class="uk-input" type="text" placeholder="Nama Penulis">
												</div>
                        <div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Tipe Penulis</option>
														<option value="Company">Company</option>
														<option value="Univ.">Univ.</option>
														<option value="Lembaga">Lembaga</option>
													</select>
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
													</select>
												</div>
                        <div class="col-lg-6 mb-4">
													<select class="uk-select select-search">
														<option value="">Industrial Sector</option>
														<option value="Power Generation – Conventional">Power Generation – Conventional</option>
														<option value="Power Generation – Renewable">Power Generation – Renewable</option>
														<option value="Oil & Gas">Oil & Gas</option>
														<option value="Tambang & Mineral Processing">Tambang & Mineral Processing</option>
														<option value="Chemical & Petrochemical">Chemical & Petrochemical</option>
														<option value="Oleochemical">Oleochemical</option>
														<option value="Automotive">Automotive</option>
														<option value="Fabrication & Manufacturing">Fabrication & Manufacturing</option>
													</select>
												</div>
                        <div class="col-lg-12 mb-4">
                          <select class="uk-select select-search">
                            <option value="">Topic</option>
                            <option value="Business">Business</option>
                            <option value="Project Management">Project Management</option>
                            <option value="Engineering & Design">Engineering & Design</option>
                            <option value="Construction">Construction</option>
                            <option value="Pre-commissioning & Commissioning">Pre-commissioning & Commissioning</option>
                            <option value="Fabrication & Manufacturing">Fabrication & Manufacturing</option>
                            <option value="Procurement & Import">Procurement & Import</option>
                          </select>
                        </div>

												<div class="mt-2 col-lg-12">
													<label for="">Upload E-Knowledge</label>
													<div class="dropzone" action="/upload-target">
														<div class="fallback">
															<input name="file" type="file" />
														</div>
													</div>
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
													<button type="submit" class="button primary circle btn-big">Post E-Knowledge</button>
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
