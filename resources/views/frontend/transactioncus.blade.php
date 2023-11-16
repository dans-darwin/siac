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
		
		<div class="col-md-9" style="margin-top: 20px;">
			<h2>Daftar Transaksi</h2>
			<hr>
			<h4>Untuk melakukan pembayaran silahkan melakukan transfer ke BRI 7202-01-006252-50-7 a/n Tukiman, lalu kirimkan bukti transfer dengan klik tombol "Konfirmasi" di Daftar Transaksi</h4>
			@foreach($or as $o)
			@if($o->id_customers == Auth::guard('customers')->user()->id)
			<div class="card-payment">
				<div class="col-md-12 bg-light" style="margin-top:30px;margin-bottom: 25px;">
					<div class="badge badge-light text-left" style="margin-left: -4px">
						Kode Transaksi : 
					</div>
					<a href="#">{{ $o->kode_transaksi }}</a>
					<br>
					<div class="badge badge-light text-left" style="margin-left: -4px">
						Tanggal & Waktu Membutuhkan Jasa : {{ date("D, d M Y", strtotime($o->tanggal)) }} {{$o->waktu}}
					</div>

					@if($o->status == "Pending")
					<span class="mt-2 mr-2 badge badge-warning float-right">{{ $o->status }}</span>
					@elseif($o->status == "On Going")
					<span class="mt-2 mr-2 badge badge-info float-right">{{ $o->status }}</span>
					@else
					<span class="mt-2 mr-2 badge badge-success float-right">{{ $o->status }}</span>
					@endif

					<div class="media">
						<div class="media-body">
							<h4 class="mt-0">{{ $o->jenis_jasa }}</h4>

							<label for="" class="float-right">Total<strong>
								<h4>Rp <strong>{{ $o->harga }}</strong></h4>
							</strong></label>
							@if($o->bukti_transfer == NULL)
							<div class="float-left" style="margin-bottom:8px; font-size:12px;">
								Konfirmasi Pembayaran
								<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Konfirmasi</button>
							</div>

							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<h4>Bukti Pembayaran</h4>
											<form method="post" action="{{ url('cs/send_bukti/'.$o->id) }}" enctype="multipart/form-data">
												@csrf
												<input type="file" name="bukti" class="form-control" accept="image/*">
												<p style="color: red; font-size: 11px">*Kami menyarankan untuk mengirim bukti transfer dalam format gambar(jpg,png,atau format gambar lain)</p>
												<input type="submit" class="btn btn-success" value="Confirm" />
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							@elseif($o->status == "On Going" && $o->bukti_transfer != NULL)
							<div class="float-left" style="margin-bottom:8px; font-size:12px;">
								Cetak Kuitansi Pembayaran
								<a href="{{ url('cs/cetak_kuitansi/'.$o->id) }}" class="btn btn-info btn-sm">Cetak</a>
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
</div>
@endsection

