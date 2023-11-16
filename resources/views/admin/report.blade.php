@extends('layout-admin')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="{{ url('nimda/report_pdf') }}" method="post" autocomplete="off">
					{{ csrf_field()}}
					<h4>Cetak Laporan :</h4>            
					<select name="mn">                
						<option value="">Pilih</option>                
						<option value="01">Januari</option>                
						<option value="02">Februari</option>                
						<option value="03">Maret</option>                
						<option value="04">April</option>                
						<option value="05">Mei</option>                
						<option value="06">Juni</option>                
						<option value="07">Juli</option>                
						<option value="08">Agustus</option>                
						<option value="09">September</option>                
						<option value="10">Oktober</option>                
						<option value="11">November</option>                
						<option value="12">Desember</option>            
					</select>
					<input type="text" placeholder="Tahun" name="yr">
					<button type="submit">Submit</button>
				</form>
				<h3>
					List Orders
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
								<th>Keluhan</th>
								<th>Status</th>
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
								@if($c->kel != NULL)
								<td>{{ $c->kel }}</td>
								@else
								<td>Tidak ada keluhan</td>
								@endif
								<td>{{ $c->status }}</td>
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
