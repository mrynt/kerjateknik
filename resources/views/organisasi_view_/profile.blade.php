@extends('layouts.AppOrganisasiLayout')

@section('content')
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-content">
					<h4 class="main-title">Profile <i class="icofont-pen-alt-1"></i></h4>
					<div class="row merged20 mb-4">
						<div class="col-lg-4">
							<div class="d-widget text-center">
								<div class="user-avatar-edit">
									<figure><img src="{{ asset('style/images/resources/user.jpg') }}" alt=""></figure>
									<div class="fileupload">
										<span class="btn-text">edit</span>
										<input type="file" class="upload">
									</div>
								</div>
								<div class="user-dp-edit">
									<figure>
										<img src="{{ asset('style/images/resources/user.jpg') }}" alt="">
											<div class="fileupload">
											<span class="btn-text"><i class="icofont-camera"></i></span>
											<input type="file" class="upload">
										</div>
									</figure>
									<div class="users-name">
										<h5>{{Auth::user()->organisasiprofile->nama_perusahaan}}</h5>
										<span>{{Auth::user()->organisasiprofile->tipe}}</span>
									</div>
								</div>
								<ul class="folowerss">
									<li><span>Job Posts</span> <i>345</i></li>
									<li><span>Followers</span> <i>256</i></li>
								</ul>
								<a class="button primary circle" href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a>
								<a class="button primary circle	danger" href="#" title=""><i class="icofont-ban"></i> Block</a>
							</div>	
							
						</div>
						<div class="col-lg-8">
							<nav class="responsive-tab style1">
								<ul data-submenu-title="compounents" uk-switcher="connect: #picturez ;animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium" class="uk-grid uk-sticky" uk-sticky="offset:50;media : @m" style="">
									<li class="uk-active"><a href="#" aria-expanded="true">Profile Umum</a></li>
									<li><a href="#" aria-expanded="false">Profile Khusus</a></li>
								
								</ul><div class="uk-sticky-placeholder" style="height: 21px; margin: 0px 0px 0px -40px;" hidden=""></div>
							</nav>
							<ul class="uk-switcher" id="picturez" style="touch-action: pan-y pinch-zoom;">
								 <li class="uk-active">
								 <form>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputEmail4">Nama Perusahaan</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputEmail4">Tanggal Berdiri</label>
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress">Alamat Kantor</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
							
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">Provinsi</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Kota</label>
											<select id="inputState" class="form-control">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										
										
									</div>

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">Kecamatan</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Jalan</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										
										
									</div>

									<div class="form-group">
										<label for="inputAddress">Alamat Email Kantor</label>
										<input type="text" class="form-control">
									</div>

									<div class="form-group">
										<label for="inputAddress">Website Kantor</label>
										<input type="text" class="form-control">
									</div>

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">Nama Depan PIC</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Nama Belakang PIC</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
									</div>


									<div class="form-group">
										<label for="inputAddress">Email PIC</label>
										<input type="text" class="form-control">
									</div>


									<div class="form-group">
										<label for="inputAddress">Link Profile Kerjateknik</label>
										<input type="text" class="form-control">
									</div>

									<a href="#" title="" class="button primary circle mt-5">Save Changes</a>
									
									</form>
								 </li>
								 <li>
								 	@include('organisasi_view.partial_profile_khusus.accosiation')
								 </li>
								 
								
								
							</ul>
							
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

@endsection()