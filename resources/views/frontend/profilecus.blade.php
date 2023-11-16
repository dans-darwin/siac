@extends('layout-frontend')
@section('content')

<div class="container">
	<div class="card" style="margin-top: 150px">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12" style="margin-left: 25px;">
					<h2>{{ $usr->nama_lengkap}}</h2>
					<h5>{{ $usr->email }}</h5>
					<h5>{{ $usr->no_telpon }}</h5>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3" style="margin-top:15px;">
			<ul class="list-group">
				<li class="list-group-item" >
					<a href="{{ url('cs/profile/'.Auth::guard('customers')->user()->id) }}">Profile</a>
				</li>
				<li class="list-group-item" >
					<a href="{{ url('cs/transaction') }}">Transaksi</a>
				</li>
				<li class="list-group-item" >
					<a href="{{ url('cs/keluhan') }}">Keluhan</a>
				</li>
				<li class="list-group-item" >
					<a href="{{URL('cs/logout')}}">Logout</a>
				</li>
			</ul>
		</div>
		<div class="col-md-9 col-lg-9 pull-right">
			<div class="panel-group">
				<div class="card" style="margin-top: 15px; margin-bottom: 15px">
					<div class="card-header clearfix"  style="
					color : black;
					">Edit Profile</div>
					<div class="card-body">
						@if(session('message'))
						<div class="alert alert-success alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button> 
							<strong>{{ session('message') }}</strong>
						</div>
						{{ session()->forget('message') }}
						@endif
						<form action="{{ url('cs/update_profile/'.$usr->id) }}" method="POST" autocomplete="off">

							{{ csrf_field() }}

							<div class="form-group">
								<label>Nama </label>
								<input type="text" class="form-control" name="nama" value="{{ $usr->nama_lengkap}}">
							</div>

							<div class="form-group">
								<label>No Telpon</label>
								<input type="text" class="form-control" name="mobilephone" value="{{ $usr->no_telpon }}">
							</div>


							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" value="{{ $usr->email }}">
							</div>
							
							<div class="form-group">
								<label>Password *Kosongi apabila tidak merubah password</label>
								<input type="password" class="form-control" name="password">
							</div>

							<button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Save</button>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

