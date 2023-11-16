<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tukiman Teknik - Jasa Layanan Servis AC Terpercaya</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Elearn project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/styles/bootstrap4/bootstrap.min.css') }}">
	<link href="{{ URL::asset('template/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/plugins/OwlCarousel2-2.2.1/animate.css') }}">
	<link href="{{ URL::asset('template/plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/styles/main_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/styles/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/styles/about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/styles/about_responsive.css') }}">
	<!-- <link rel="stylesheet" href="{{ URL::asset('bower_components/select2/dist/css/select2.min.css') }}"> -->
</head>
<body>

	<div class="super_container">

		<!-- Header -->
		@include('include.partials.header')
		<div>
			@yield('content')
		</div>
		<!-- Footer -->
		@include('include.partials.footer')

		<script src="{{ URL::asset('template/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ URL::asset('template/styles/bootstrap4/popper.js') }}"></script>
		<script src="{{ URL::asset('template/styles/bootstrap4/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/greensock/TweenMax.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/greensock/TimelineMax.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/greensock/animation.gsap.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/easing/easing.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/video-js/video.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/video-js/Youtube.min.js') }}"></script>
		<script src="{{ URL::asset('template/plugins/parallax-js-master/parallax.min.js') }}"></script>
		<script src="{{ URL::asset('template/js/custom.js') }}"></script>
		<!-- <script src="{{ URL::asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				//Initialize Select2 Elements
				$('.select2').select2();
			} );
		</script> -->
	</body>
	</html>