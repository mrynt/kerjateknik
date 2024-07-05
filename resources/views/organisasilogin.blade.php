@extends('layouts.applayout')
@section('content')

<div class="theme-layout">

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

				<form method="post" class="c-form" action="{{ route('organisasi.actionlogin') }}">
					@csrf
					<input name="email" type="text" placeholder="Email atau Handphone">
					<input name="password" type="password" placeholder="Password">
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

				<button onclick="location.href='{{route('organisasi.daftar')}}'" class="main-btn-daftar" type="submit">Daftar</button>
			</div>
		</div>
		<div class="mockup right"><img src="images/star-shape.png" alt=""></div>
	</div>

</div>

@endsection('content')
