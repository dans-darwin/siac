<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
     <div class="col-md-12" style="margin-top: 50px; margin-bottom: 20px;" >
      <center>
        <img src="{{ public_path('template/images/logo-tukiman.png') }}" alt="" width="110" height="80">
        <h3>Tukiman Teknik</h3>
        <p>JASA SERVIS AC</p>
        <p>KP. JATIJAJAR II RT. 09/RW. 09 NO.32</p>
      </center>

      <label for=""><strong> Kode Pemesanan</strong> : {{ $or->kode_transaksi}}  </label >
      <br>
      @if(Auth::guard('customers')->user()->id == $or->id_customers)
      <label for=""><strong> Pemesan</strong> : {{Auth::guard('customers')->user()->nama_lengkap}}</label>
      @endif
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">Ringkasan Pembayaran</div>
        <div class="panel-body">
          <p><strong>{{ $or->jenis_jasa }}</strong><label class="pull-right">Rp. {{ $or->harga }}</label></p>
          <strong>Tanggal & Waktu Membutuhkan Jasa :</strong>  {{ date("D, d M Y", strtotime($or->tanggal)) }} {{$or->waktu}}
          <br>
          <strong>Detail Pemesanan :</strong>
          <hr>
          <ul> 
            <li>Jasa : {{ $or->jenis_jasa }}</li>
            <li>Keterangan : {{ $or->info }}</li>
            <li>Jenis Bangunan : {{ $or->jenis_bangunan}}</li>
            <li>Merk AC : {{ $or->merk_ac }}</li>
            <li>Jumlah AC : {{ $or->jumlah_ac }}</li>
          </ul>
          <hr>
          <p class="pull-right"><b>Total =  Rp. {{ $or->harga }}</b></p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

