@extends('layouts.applayout')
@section('content')

<style media="screen">
.uk-alert-danger {
	background: #fef4f6;
	color: #f0506e;
	position: relative;
	margin: 20px 0;
	padding: 15px 29px 15px 15px;
}
</style>

<div class="theme-layout d-flex">

	<div class="authtication bluesh ">
		<div class="bg-image" style="background-image: url({{ asset('style/images/loginbg.png') }})"></div>

	</div>
	<div class="auth-login">
			<div class="row logoform media">
				<img class="align-self-center"  src="{{ asset('style/images/logo.png') }}" alt="">
			</div>

		<div class="w-100">

			<div class="login-form">
				<h4>Login</h4>

				<div class="uk-alert-danger uk-alert" uk-alert="">
						<p>Login gagal, mohon periksa kembali Email atau Password yang digunakan.</p>
				</div>


				<form method="post" class="c-form" action="{{ route('user.actionlogin') }}">
					@csrf
					<input name="email" type="email" placeholder="Email" required="required">
					<input name="password" type="password" placeholder="Password" required="required">
					<div class="checkbox">
						<input type="checkbox" id="checkbox" checked>
						<label for="checkbox"><span>Ingat Saya</span></label>
					</div>

					<button  class="main-btn" type="submit">Masuk</button>
				</form>

				<div class="sign-in-form__divider left-right-divider pt-2 pb-3">
					<p class="sign-in-form__divider-text font-sans text-sm text-color-text px-2">
						Atau
					</p>
				</div>

				<div class="w-100 text-center">
					<h6>Or Sign in with social platforms</h6>

					<div class="d-flex justify-content-center gap-20 my-2">
						<button type="button" class="btn -box-sd-effect"> <i class="icofont-facebook" aria-hidden="true"></i> Sign in with Google</button>
						<button type="button" class="btn -box-sd-effect"> <i class="icofont-linkedin" aria-hidden="true"></i> Sign in with Linkedin</button>
					</div>
				</div>


				<div class="sign-in-form__divider left-right-divider pt-2 pb-3">
					<p class="sign-in-form__divider-text font-sans text-sm text-color-text px-2">
						Atau
					</p>
      	</div>

				<button onclick="location.href='{{route('user.daftar')}}'" class="main-btn-daftar" type="submit">Daftar</button>
			</div>
		</div>
		<div class="mockup right"><img src="images/star-shape.png" alt=""></div>
	</div>

</div>

@endsection('content')
