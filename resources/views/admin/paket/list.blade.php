@extends('layout-admin')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3>
					List Paket Harga Jasa Servis
				</h3>
				<a href="" style="margin-bottom: 25px" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Tambah Paket</a>
				<div class="modal fade" id="myModal2" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<h4>Tambah Paket</h4>
								<form method="post" action="{{ route('store.paket') }}" autocomplete="off">
									@csrf
									<div class="form-group">
										<input type="text" name="nm" class="form-control" placeholder="Nama Paket">
									</div>
									<div class="form-group">
										<input type="text" name="hr" class="form-control" placeholder="Harga">
									</div>
									<div class="form-group">
										<input type="text" name="jn" class="form-control" placeholder="Jenis">
									</div>
									<input type="submit" class="btn btn-success" value="Confirm" />
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Paket</th>
								<th>Harga</th>
								<th>Jenis</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $n = 1; ?>
						@foreach($ca as $c)
						<tbody>
							<tr>
								<td>{{ $n++ }}</td>
								<td>{{ $c->nama_paket }}</td>
								<td>{{ $c->harga }}</td>
								<td>{{ $c->jenis }}</td>
								<td><a href="" data-toggle="modal" data-target="#myModal1{{$c->id}}"><span class="glyphicon glyphicon-edit"></span></a>
									|
									<a href="{{ url('nimda/paket/delete/'.$c->id) }}" onclick="return confirm('Are you sure, You Want to delete this?')
									"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
								<div class="modal fade" id="myModal1{{$c->id}}" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												<h4>Update Paket</h4>
												<form method="post" action="{{ url('nimda/paket/update/'.$c->id) }}" autocomplete="off">
													@csrf
													<div class="form-group">
														<input type="text" name="nm" class="form-control" value="{{ $c->nama_paket}}">
													</div>
													<div class="form-group">
														<input type="text" name="hr" class="form-control" value="{{ $c->harga }}">
													</div>
													<div class="form-group">
														<input type="text" name="jn" class="form-control" value="{{ $c->jenis }}">
													</div>
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
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
