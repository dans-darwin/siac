@extends('layout-admin')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3>
					List Orders Cuci AC
				</h3>
				<div class="table-responsive">
					<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Transaksi</th>
								<th>Jenis Jasa</th>
								<th>Info</th>
								<th>Jumlah AC</th>
								<th>Merk AC</th>
								<th>Jenis Bangunan</th>
								<th>Tanggal Pesan</th>
								<th>Waktu Pesan</th>
								<th>Pemesan</th>
								<th>Alamat Rumah</th>
								<th>Harga</th>
								<th>Status</th>
								<th>Bukti Pembayaran</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $n = 1; ?>
						@foreach($ca as $c)
						<tbody>
							<tr>
								<td>{{ $n++ }}</td>
								<td>{{ $c->kode_transaksi }}</td>
								<td>{{ $c->jenis_jasa }}</td>
								<td>{{ $c->info }}</td>
								<td>{{ $c->jumlah_ac }}</td>
								<td>{{ $c->merk_ac }}</td>
								<td>{{ $c->jenis_bangunan }}</td>
								<td>{{ $c->tanggal }}</td>
								<td>{{ $c->waktu }}</td>
								<td>{{ $c->name }}</td>
								<td>{{ $c->alamat_rumah }}</td>
								<td>{{ $c->harga }}</td>
								<td>{{ $c->status }}</td>
								@if($c->bukti_transfer != NULL)
								<td><a href="{{ URL::asset('siac_img/bukti_transfer/'.$c->bukti_transfer)}}">{{ $c->bukti_transfer }}</a></td>
								@else
								<td>Belum Ada Bukti Transfer</td>
								@endif
								<td><a href="" data-toggle="modal" data-target="#myModal1{{$c->id}}"><span class="glyphicon glyphicon-edit"></span></a>
									|
									<a href="{{ url('nimda/orders/delete/'.$c->id) }}" onclick="return confirm('Are you sure, You Want to delete this?')
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
												<h4>Ganti Status</h4>
												<form method="post" action="{{ url('nimda/orders/change_status/'.$c->id) }}">
													@csrf
													<input type="text" name="status" class="form-control" value="{{ $c->status }}">
													<p style="color: red; font-size: 11px">*Ganti Status "On Going" apabila servis sedang dalam pengerjaan & ganti status "Finish" apabila sudah melakukan servis</p>
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

		<div class="panel panel-default">
			<div class="panel-body">
				<h3>
					List Orders Reparasi AC
				</h3>
				<div class="table-responsive">
					<table id="example1" class="display table" style="width: 100%; cellspacing: 0;">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Transaksi</th>
								<th>Jenis Jasa</th>
								<th>Info</th>
								<th>Jumlah AC</th>
								<th>Merk AC</th>
								<th>Jenis PK</th>
								<th>Jenis Bangunan</th>
								<th>Tanggal Pesan</th>
								<th>Waktu Pesan</th>
								<th>Pemesan</th>
								<th>Alamat Rumah</th>
								<th>Harga</th>
								<th>Status</th>
								<th>Bukti Pembayaran</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $n = 1; ?>
						@foreach($ra as $r)
						<tbody>
							<tr>
								<td>{{ $n++ }}</td>
								<td>{{ $r->kode_transaksi }}</td>
								<td>{{ $r->jenis_jasa }}</td>
								<td>{{ $r->info }}</td>
								<td>{{ $r->jumlah_ac }}</td>
								<td>{{ $r->merk_ac }}</td>
								<td>{{ $r->jenis_pk }}</td>
								<td>{{ $r->jenis_bangunan }}</td>
								<td>{{ $r->tanggal }}</td>
								<td>{{ $r->waktu }}</td>
								<td>{{ $r->name }}</td>
								<td>{{ $r->alamat_rumah }}</td>
								<td>{{ $r->harga }}</td>
								<td>{{ $r->status }}</td>
								@if($c->bukti_transfer != NULL)
								<td><a href="{{ URL::asset('siac_img/bukti_transfer/'.$r->bukti_transfer)}}">{{ $r->bukti_transfer }}</a></td>
								@else
								<td>Belum Ada Bukti Transfer</td>
								@endif
								<td><a href="" data-toggle="modal" data-target="#myModal2{{$r->id}}"><span class="glyphicon glyphicon-edit"></span></a>
									|
									<a href="{{ url('nimda/orders/delete/'.$r->id) }}" onclick="return confirm('Are you sure, You Want to delete this?')
									"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
								<div class="modal fade" id="myModal2{{$r->id}}" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												<h4>Ganti Status</h4>
												<form method="post" action="{{ url('nimda/orders/change_status/'.$r->id) }}">
													@csrf
													<input type="text" name="status" class="form-control" value="{{ $r->status }}">
													<p style="color: red; font-size: 11px">*Ganti Status "On Going" apabila servis sedang dalam pengerjaan & ganti status "Finish" apabila sudah melakukan servis</p>
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

		<div class="panel panel-default">
			<div class="panel-body">
				<h3>
					List Orders Bongkar Pasang AC
				</h3>
				<div class="table-responsive">
					<table id="example2" class="display table" style="width: 100%; cellspacing: 0;">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Transaksi</th>
								<th>Jenis Jasa</th>
								<th>Info</th>
								<th>Jumlah AC</th>
								<th>Merk AC</th>
								<th>Jenis PK</th>
								<th>Jenis Bangunan</th>
								<th>Tanggal Pesan</th>
								<th>Waktu Pesan</th>
								<th>Pemesan</th>
								<th>Alamat Rumah</th>
								<th>Harga</th>
								<th>Status</th>
								<th>Bukti Pembayaran</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $n = 1; ?>
						@foreach($ba as $b)
						<tbody>
							<tr>
								<td>{{ $n++ }}</td>
								<td>{{ $b->kode_transaksi }}</td>
								<td>{{ $b->jenis_jasa }}</td>
								<td>{{ $b->info }}</td>
								<td>{{ $b->jumlah_ac }}</td>
								<td>{{ $b->merk_ac }}</td>
								<td>{{ $b->jenis_pk }}</td>
								<td>{{ $b->jenis_bangunan }}</td>
								<td>{{ $b->tanggal }}</td>
								<td>{{ $b->waktu }}</td>
								<td>{{ $b->name }}</td>
								<td>{{ $b->alamat_rumah }}</td>
								<td>{{ $b->harga }}</td>
								<td>{{ $b->status }}</td>
								@if($c->bukti_transfer != NULL)
								<td><a href="{{ URL::asset('siac_img/bukti_transfer/'.$b->bukti_transfer)}}">{{ $b->bukti_transfer }}</a></td>
								@else
								<td>Belum Ada Bukti Transfer</td>
								@endif
								<td><a href="" data-toggle="modal" data-target="#myModal3{{$b->id}}"><span class="glyphicon glyphicon-edit"></span></a>
									|
									<a href="{{ url('nimda/orders/delete/'.$b->id) }}" onclick="return confirm('Are you sure, You Want to delete this?')
									"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
								<div class="modal fade" id="myModal3{{$b->id}}" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												<h4>Ganti Status</h4>
												<form method="post" action="{{ url('nimda/orders/change_status/'.$b->id) }}">
													@csrf
													<input type="text" name="status" class="form-control" value="{{ $b->status }}">
													<p style="color: red; font-size: 11px">*Ganti Status "On Going" apabila servis sedang dalam pengerjaan & ganti status "Finish" apabila sudah melakukan servis</p>
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
