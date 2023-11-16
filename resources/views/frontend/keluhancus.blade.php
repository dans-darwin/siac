@extends('layout-frontend')
@section('content')

<div class="container">
	<div class="card" style="margin-top: 150px">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12" style="margin-left: 25px;">
					<h2>{{ Auth::guard('customers')->user()->nama_lengkap }}</h2>
					<h5>{{ Auth::guard('customers')->user()->email }}</h5>
					<h5>{{ Auth::guard('customers')->user()->no_telpon }}</h5>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
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
		<div class="col-md-9 col-lg-9 pull-right" style="margin-bottom: 10px; margin-top: 20px">
			<h2>Keluhan</h2>
			<hr>
			<div class="card">
				<div class="card-body">
					<h4>Tambah Keluhan Anda Tentang Masalah AC Disini !</h4>
					<a href="" style="margin-bottom: 8px;" data-toggle="modal" data-target="#myModal2" class="btn btn-success">Add</a>
					<!-- notif -->
					@if(session('message'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button> 
						<strong>{{ session('message') }}</strong>
					</div>
					{{ session()->forget('message') }}
					@endif
					<div class="table-responsive">
						<table id="example" class="table table-bordered" style="width: 100%; cellspacing: 0;">
							<thead>
								<tr>
									<th>No</th>
									<th>Keluhan</th>
									<th>Action</th>
								</tr>
							</thead>
							<?php $n = 1; ?>
							@foreach($k as $c)
							@if(Auth::guard('customers')->user()->id == $c->id_customers)
							<tbody>
								<tr>
									<td>{{ $n++ }}</td>
									<td>{{ $c->keluhan }}</td>
									<td><a href="" data-toggle="modal" data-target="#myModal1{{$c->id}}" class="btn btn-primary">Edit</a>
										<!-- |
										<a class="btn btn-danger" href="{{ url('cs/keluhan/delete/'.$c->id) }}" onclick="return confirm('Are you sure, You Want to delete this?')
										">Delete</a> -->
									</td>
									<div class="modal fade" id="myModal1{{ $c->id }}" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body">
													<h4>Ganti Keluhan</h4>
													<form method="post" action="{{ url('cs/keluhan/update/'.$c->id) }}">
														@csrf
														<textarea name="kel" class="form-control">{{$c->keluhan}}</textarea>
														<br>
														<input type="submit" class="btn btn-success" value="Confirm" />
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</tr>
							</tbody>
							@endif
							@endforeach
						</table>
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<h4>Tambah Keluhan</h4>
										<form method="post" action="{{ route('store.kel') }}">
											@csrf
											<textarea name="kel" class="form-control"></textarea>
											<input type="hidden" name="ic" value="{{ Auth::guard('customers')->user()->id }}">
											<br>
											<input type="submit" class="btn btn-success" value="Confirm" />
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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


@endsection

