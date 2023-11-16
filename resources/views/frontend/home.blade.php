@extends('layout-frontend')
@section('content')
		<div class="home">
			<div class="home_slider_container">

				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<div class="owl-item">
						<!-- Background image artist https://unsplash.com/@benwhitephotography -->
						<div class="home_slider_background" style="background-image:url('{{ asset('siac_img/dashboard.jpg') }}')"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content text-center">
											<div class="home_logo"></div>
											<div class="home_text">
												<div class="home_title">Tukiman Teknik</div>
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
		<!-- Services -->
		<div class="join">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="section_title text-center"><h2>Layanan Kami</h2></div>
						<div class="section_subtitle">Kami mengerti betapa frustrasinya mencari teknisi yang dekat anda, yang bisa datang ke rumah sesuai jadwal sibuk anda. Perkenalkan Tukiman Teknik, penyedia jasa untuk rumah dan kantor. Layanan yang kami tawarkan adalah: Servis AC/Reparasi AC , serta perbaikan elektronik. Tersedia di Depok dan sekitarnya.  Jadi, anda bisa bersantai sambil Teknisi Kami bisa memberbaiki semua kesusahan anda. AC Anda punya masalah? Tukiman Teknik perbaiki! Pesan sekarang! </div>
					</div>
				</div>
			</div>
		</div>

		<!-- Milestones -->

		<div class="milestones">
			<!-- Background image artis https://unsplash.com/@thepootphotographer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('template/images/milestones.jpg') }}" data-speed="0.8"></div>
			<div class="container">
				<div class="row milestones_container">

					<!-- Milestone -->
					<div class="col-lg-6 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="{{ URL::asset('template/images/milestone_1.svg') }}" alt=""></div>
							<div class="milestone_counter" data-end-value="{{ $cc }}">0</div>
							<div class="milestone_text">Pelanggan</div>
						</div>
					</div>
					<div class="col-lg-6 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="{{ URL::asset('template/images/milestone_2.svg') }}" alt=""></div>
							<div class="milestone_counter" data-end-value="{{ $co }}">0</div>
							<div class="milestone_text">Transaksi</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Sections -->

		<div class="grouped_sections">
			<div class="container">
				<div class="row">

					<!-- Why Choose Us -->

					<div class="col-lg-12 grouped_col">
						<div class="grouped_title"><center>Kenapa Harus Memilih Kami ?</center></div>
						<div class="accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center active"><div>Teknisi Berpengalaman</div></div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Peralatan teknisi lengkap</div></div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Garansi 30 hari untuk Reparasi AC dan 14 hari untuk Bongkar Pasang AC</div></div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Garansi HANYA berlaku untuk pemesanan melalui website Tukiman Teknik</div></div>
							</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Join -->

		<div class="join">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="section_title text-center"><h2>Ayo Bergabung Bersama Kami !</h2></div>
					</div>
				</div>
			</div>
			<div class="button join_button"><a href="{{ url('cs/register') }}">daftar sekarang !<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
		</div>
@endsection	