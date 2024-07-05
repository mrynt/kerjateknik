@extends('layouts.applayout')
@section('content')

<div class="theme-layout">
	
	<div class="authtication bluesh ">
		<div class="bg-image" style="background-image: url({{ asset('style/images/loginbg.png') }})"></div>
		
	</div>
	<div class="auth-login">
		
		
		<div class="verticle-center">
		    <div class="row logoform media">
				<img class="align-self-center mr-3"  src="{{ asset('style/images/logo.png') }}" alt="">
			</div>	
			<div class="register-form b-10 ">
				<p class="text-center font-weight-bold"> Lengkapi data diri anda untuk <br>bergabung dengan kerjateknik.com</p>
			
					<form method="post" class="c-form" action="{{route('organisasi.register')}}">
					@csrf
					<div class="row">
						<div class="col-6">
							<input name="nama_depan" type="text" class="form-control" placeholder="Nama Depan">
						</div>
						<div class="col-6">
							<input  name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang">
						</div>
					</div>

					<div class="form-group">
						<input name="email" type="email" class="form-control"  placeholder="Email Perusahaan">
					</div>

					<div class="form-group">
						<input name="password" type="password" class="form-control"  placeholder="Password">
					</div>

					<div class="form-group">
						<input name="Password" type="Password" class="form-control"  placeholder="Re Password">
					</div>

				

					<div class="form-group">
						<input name="no_telp" type="text" class="form-control"  placeholder="No Telp">
					</div>

					<div class="form-group">
						<input name="nama_organisasi_perusahaan" type="text" class="form-control"  placeholder="Nama Perusahaan / Organisasi">
					</div>

					
					<div class="form-group">
						<textarea name="alamat" class="form-control"  placeholder="Alamat"></textarea>
					</div>

					<select name="tipe" class="uk-select">
						<option> Tipe Organisasi / Perusahaan </option>
						<option value="kampus_universitas"> Kampus / Universitas </option>
						<option value="badan_usaha"> Badan Usaha</option>
						<option value="association"> Association </option>
						<option value="lembaga_pemerintahan"> Lembaga Pemerintah </option>
					</select>

				
						<button  class="main-btn" type="submit">Daftar</button>
					</form>
					

				
			</div>
		</div>
		<div class="mockup right"><img src="images/star-shape.png" alt=""></div>
	</div>
	
</div>

@endsection('content')