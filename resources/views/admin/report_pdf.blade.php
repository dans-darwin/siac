<DOCTYPE html>
	<html>
	<head>
		<style type="text/css">
			table tr td,
			table tr th{
				font-size: 9pt;
			}
			
		</style>
		<link href="{{ public_path('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body>

		<center>
			<img src="{{ public_path('template/images/logo-tukiman.png') }}" alt="" width="110" height="80">
			<h3>Tukiman Teknik</h3>
			<p>JASA SERVIS AC</p>
			<p>KP. JATIJAJAR II RT. 09/RW. 09 NO.32</p>
		</center>
		<hr>

		<table class="table table-bordered">
			<thead>
				<tr>
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
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $c)
				<tr>
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
					<td>{{ $c->kel }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</body>
	</html>