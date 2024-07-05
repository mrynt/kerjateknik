@extends('layouts.applayout')
@section('content')



	<section>
		<div class="">
			<div class="bg-image" style="background-color:#fcf9f2"></div>
			<div class="feature-meta">
				<h2>Dapatkan pengalaman belajar terbaik dan temukan pekerjaan impianmu</h2>
				<img src="{{ asset('style/images/bannerhomepage.png') }}" alt="">
			</div>
		</div>
	</section>

	<section>
		<div class="gap bg-white">
			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-md-12 text-center">
						<div class="w-100">
							<h2>Connect with Your scientific Community</h2>

							<ul class="tagsCloud mt-4">
								<li><a href="#" title="">Engineering</a></li>
								<li><a href="#" title="">mathamatic</a></li>
								<li><a href="#" title="">biology</a></li>
								<li><a href="#" title="">computer science</a></li>
								<li><a href="#" title="">climate</a></li>
								<li><a href="#" title="">medicine</a></li>
								<li><a href="#" title="">Physics</a></li>
								<li><a href="#" title="">sociology</a></li>
								<li><a href="#" title="">chemistry</a></li>
								<li><a href="#" title="">astrophysics</a></li>
								<li><a href="#" title="" class="tagsCloud-more">Lihat Semua</a></li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="gap">
			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-md-12 text-center">
						<div class="w-100">
							<h2>Connect with Your scientific Community</h2>

							<ul class="tagsCloud mt-4">
								<li><a href="#" title="">Engineering</a></li>
								<li><a href="#" title="">mathamatic</a></li>
								<li><a href="#" title="">biology</a></li>
								<li><a href="#" title="">computer science</a></li>
								<li><a href="#" title="">climate</a></li>
								<li><a href="#" title="">medicine</a></li>
								<li><a href="#" title="">Physics</a></li>
								<li><a href="#" title="">sociology</a></li>
								<li><a href="#" title="">chemistry</a></li>
								<li><a href="#" title="">astrophysics</a></li>
								<li><a href="#" title="" class="tagsCloud-more">Lihat Semua</a></li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="gap">
			<div class="container">
				<div class="row remove-ext30">
					<div class="col-lg-12">
						<div class="title">
							<h1>Event Terbaru</h1>
						</div>
					</div>


					<?php
						for ($i = 1; $i <= 3; $i++): ?>
					<div class="col-lg-4 col-md-6 col-sm-6 mb-2">
						<div class="blog-grid bg-white">
							<figure>
								<img src="https://www.its.ac.id/informatika/wp-content/uploads/sites/44/2021/06/webinar-18-mei-2021-768x512.png" alt="">
							</figure>
							<div class="blog-meta">
								<div class="blog-head">
									<ul class="postby">
										<li>
											<figure><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.its.ac.id%2Finformatika%2Fagenda_categories%2Fevent%2F&psig=AOvVaw3GWx4Z0i6LOQfZlV10vPGG&ust=1698383998715000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCNCg08n7koIDFQAAAAAdAAAAABAE" alt=""></figure>
											<span>Admin</span>
										</li>
										<li><i class="icofont-heart"></i><span>1.3k</span></li>
									</ul>
									<a href="#" title="" class="date">06 Aug</a>
									<h4 class="blog-title">
										<a href="#" title="">OWEBINAR KULIAH TAMU SESI 4, “PERKENALAN AWL, INC. : PENERAPAN DEEP LEARNING DALAM EDGE DEVICE DI DUNIA RETAIL”</a>
									</h4>
								</div>
							</div>
						</div>
					</div>
					<?php endfor; ?>

				</div>
			</div>
		</div>
	</section>
	@endsection('content')
