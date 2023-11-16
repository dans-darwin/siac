<header class="header">

	<!-- Header Content -->
	<div class="header_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-row align-items-end justify-content-start">
									<div><img src="{{ URL::asset('template/images/logo-tukiman.png') }}" alt="" width="90" height="60"></div>
								</div>
							</a>
						</div>
						<nav class="main_nav_contaner ml-auto">
							<ul class="main_nav">
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><a href="{{ url('/services')}}">Layanan</a></li>
								@if(Auth::guard('customers')->user())
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::guard('customers')->user()->nama_lengkap }}
										<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="{{ url('cs/profile/'.Auth::guard('customers')->user()->id) }}">Profil</a></li>
											<li><a href="{{ url('cs/transaction') }}">Transaksi</a></li>
											<li><a href="{{ url('cs/keluhan') }}">Keluhan</a></li>
											<li><a href="{{ url('cs/logout')}}">Logout</a></li>
										</ul>
									</li>
									@else
									<li><a href="{{ url('cs/login') }}">Login</a></li>
									@endif
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="{{ url('/')}}">Home</a></li>
				<li class="menu_mm"><a href="{{ url('/services')}}">Layanan</a></li>
				@if(Auth::guard('customers')->user())
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::guard('customers')->user()->nama_lengkap }}
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('#') }}">Profil</a></li>
							<li><a href="{{ url('#') }}">Transaksi</a></li>
							<li><a href="{{ url('cs/logout')}}">Logout</a></li>
						</ul>
					</li>
					@else
					<li class="menu_mm"><a href="{{ url('cs/login') }}">Login</a></li>
					@endif
				</ul>
			</nav>
			<div class="menu_extra">
				<div class="menu_phone"><span class="menu_title">Telepon</span>(009) 35475 6688933 32</div>
				<div class="menu_social">
					<span class="menu_title">Follow Kita Di :</span>
					<ul>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>