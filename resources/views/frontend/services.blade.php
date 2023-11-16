@extends('layout-frontend')
@section('content')
<br />
<br />
<div class="about">
	<div class="container">
		<div class="row about_row row-lg-eq-height">
			<div class="col-lg-6">
				<div class="about_content">
					<div class="about_title">Our Main Goal</div>
					<div class="about_text">
						<p>Membantu khalayak ramai yang kesusahan dalam perawatan barang elektronik dalam hal ini Air Conditioner</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about_image"><img src="{{ URL::asset('siac_img/vision.jpg') }}" alt=""></div>
			</div>
		</div>
		<div class="row about_row row-lg-eq-height">
			<div class="col-lg-6 order-lg-1 order-2">
				<div class="about_image"><img src="{{ URL::asset('template/images/about_1.jpg') }}" alt=""></div>
			</div>
			<div class="col-lg-6 order-lg-2 order-1">
				<div class="about_content">
					<div class="about_title">Our Vision</div>
					<div class="about_text">
						<p>Menciptkan inovasi usaha baru dalam bidang per AC an</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="teachers">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="teachers_title text-center">Layanan Kami</div>
			</div>
		</div>
		<div class="row teachers_row">

			<!-- Teacher -->
			<div class="col-lg-4 col-md-6">
				<div class="teacher">
					<div class="teacher_image"><img src="{{ URL::asset('siac_img/cuci.jpg') }}" alt="https://unsplash.com/@nickkarvounis"></div>
					<div class="teacher_body text-center">
						<div class="teacher_title"><a href="{{ url('/cuciac') }}">Cuci AC</a></div>
					</div>
				</div>
			</div>

			<!-- Teacher -->
			<div class="col-lg-4 col-md-6">
				<div class="teacher">
					<div class="teacher_image"><img src="{{ URL::asset('siac_img/service.jpg') }}" alt=""></div>
					<div class="teacher_body text-center">
						<div class="teacher_title"><a href="{{ url('/reparasiac') }}">Reparasi AC</a></div>
					</div>
				</div>
			</div>

			<!-- Teacher -->
			<div class="col-lg-4 col-md-6">
				<div class="teacher">
					<div class="teacher_image"><img src="{{ URL::asset('siac_img/bongkar-pasang.jpg') }}" alt=""></div>
					<div class="teacher_body text-center">
						<div class="teacher_title"><a href="{{ url('/bongkarpasangac') }}">Bongkar Pasang AC</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection