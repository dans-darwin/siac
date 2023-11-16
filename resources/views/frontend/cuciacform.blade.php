@extends('layout-frontend')
@section('content')
<div class="row" style="margin: 85px">
	<div class="col-md-8" style="margin-top:25px;">
		<div class="card">
			<div class="card-header">
				Form Cuci Ac
			</div>
			<div class="card-body">
				<form action="{{ route('bc') }}" method="POST" autocomplete="off">
					@csrf
					<h3>Jenis Bangunan Anda</h3>
					<hr>
					<div class="form-group">
						<select class="form-control" name="jenis_bangunan" id="jb" onchange="getpaket(this)">
							<option></option>
							@foreach($hr as $h)
							@if($h->jenis == "Cuci")
							<option value="{{ $h->harga }}" data-paket="{{ $h->nama_paket }}">{{ $h->nama_paket }}</option>
							@endif
							@endforeach
						</select>
					</div>

					<h3>Info Cuci AC</h3>
					<hr>
					<h4>Beritahu kami masalah Anda</h4>
					<div class="form-group">
						<div class="checkbox">
							<label><input type="checkbox" name="info[]" value="AC Tidak Dingin"> AC Tidak Dingin</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="info[]" value="AC Bau Tidak Sedap"> AC Bau Tidak Sedap</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="infocb" onclick="showinfocb(this)" value=""> Lainnya</label>
						</div>
						<div id="inflain" style="display: none">
							<input type="text" name="info[]" class="form-control">
						</div>
					</div>

					<h4>Jumlah Unit AC</h4>
					<div class="form-group">
						<input type="text" name="jml" id="jml" onkeyup="cuciprice()" class="form-control" required="required">
					</div>

					<h4>Merk AC Anda</h4>
					<div class="form-group">
						<div class="checkbox">
							<label><input type="checkbox" name="merk[]" value="LG"> LG</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="merk[]" value="Panasonic"> Panasonic</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="merk[]" value="Samsung"> Samsung</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="merk[]" value="Sharp"> Sharp</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="merk[]" value="Daikin"> Daikin</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="merkcb" onclick="showmerkcb(this)" value=""> Lainnya</label>
						</div>
						<div id="merklain" style="display: none">
							<input type="text" name="merk[]" class="form-control">
						</div>
					</div>

					<h3>Kapan Anda Membutuhkan Layanan Ini?</h3>
					<hr>

					<h4>Tanggal</h4>
					<div class="form-group">
						<input type="date" id="tgl" name="tgl" min="{{ date('Y-m-d')}}" class="form-control" required="required" onchange="tanggal()">
					</div>
					<h4>Waktu</h4>
					<!-- <div class="form-group">
						<input type="text" name="waktu" class="form-control" placeholder="Contoh : 08:00" required="required">
					</div> -->
					<div class="form-group">
						<select class="form-control" name="waktu">
							@foreach(range(intval('08:00:00'),intval('16:00:00')) as $time)
							<option value="{{date('H:00', mktime($time+1))}}">
								{{date('H:00', mktime($time+1))}}
							</option>
							@endforeach
						</select>
					</div>

					<h3>Dimana Lokasi Anda ?</h3>
					<hr>
					<h4>Alamat</h4>
					<div class="form-group">
						<textarea name="alamat" required class="form-control">*Mohon menyertakan alamat lengkap</textarea>
					</div>
					<hr>
					<h3>Harga Total : <div id="showfinalprice"></div></h3>


					<input type="hidden" id="harga" name="harga">
					<input type="hidden" id="jns" name="jns">
					<button type="submit" class="btn btn-primary">Pesan !</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12 float-right" style="margin-top:25px; margin-bottom: 25px">
		<div class="card">
			<div class="card-header">
				Cuci AC
			</div>
			<div class="card-body">
				<center><img src="{{ URL::asset('siac_img/cuci.jpg')}}" style="width: 100%; height: auto"></center>
			</div>
		</div>

		<div class="card" style="margin-top: 10px">
			<div class="card-header">
				Butuh Bantuan Untuk Pesan ?
			</div>
			<div class="card-body">
				<ul style="list-style-type:disc; margin: 10px">
					<li>Email: darwinynwa86@gmail.com</li>
				</ul>
			</div>
		</div>

		<div class="card" style="margin-top: 10px">
			<div class="card-header">
				Nilai Lebih Jasa Kami
			</div>
			<div class="card-body">
				<ul>
					<p><strong>Layanan Jasa AC Terbaik di Depok</strong></p>
					<ul style="list-style-type:disc; margin: 10px">
						<li>Teknisi berpengalaman dan profesional.</li>
						<li>Peralatan teknisi lengkap.</li>
						<li>Hanya untuk jenis AC split.</li>
						<li>Garansi 30 hari untuk Reparasi AC dan 14 hari untuk Bongkar Pasang AC.</li>
						<li>Garansi HANYA berlaku untuk pemesanan melalui website Tukiman Teknik.</li>
					</ul>
					<br>
					<p><strong>Jenis Layanan</strong></p>
					<ul style="list-style-type:disc; margin: 10px">
						<li><strong>Cuci AC</strong><br>Bersihkan kumparan AC, saringan, saluran, hingga drainase pompa AC. <strong>Pengisian freon akan dikenakan biaya tambahan tergantung jenis freon.</strong></li>
						<li><strong>Bongkar Pasang AC</strong><br>Pemasangan AC baru atau pemindahan AC ke tempat lain</li>
						<li><strong>Reparasi AC</strong><br>Perbaikan masalah AC berkaitan dengan freon, saluran, sensor, termostat, drainase, modul elektronik dan remote AC</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
	<script type="text/javascript">

		function cuciprice() {
			var jm = $('#jml').val();
			var harga = $('#jb').val();

			var total = harga * jm;
			
			document.getElementById("showfinalprice").innerHTML = ("Rp. " + total);
			$('#harga').val(total);
			
		}

		function showinfocb(infocb) {
			var infl = document.getElementById("inflain");

			infl.style.display = infocb.checked ? "block" : "none";
		}

		function showmerkcb(merkcb) {
			var mcb = document.getElementById("merklain");

			mcb.style.display = merkcb.checked ? "block" : "none";
		}

		function getpaket(elem) {
			$("#jns").val($(elem).find(':selected').attr('data-paket'));
		}

	</script>
	@endsection
