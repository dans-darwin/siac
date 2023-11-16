  @extends('layout-admin')
  @section('content')
  <div class="content-wrapper">
  	<section class="content">
  		<div class="panel panel-default">
  			<div class="panel-body" style="margin-right: 15px; margin-left: 15px;">
  				<h3>
  					Create Admin
  				</h3>
  				<form autocomplete="off" class="form-horizontal" method="POST" action="{{ route('store.adm') }}" enctype="multipart/form-data">
  					{{ csrf_field()}}

  					<div class="form-group">
  						<label>Nama</label>
  						<input type="text" class="form-control" required="required" name="nama" />
  					</div>

  					<div class="form-group">
  						<label>Email</label>
  						<input type="email" class="form-control" required="required" name="email" />
  					</div>

  					<div class="form-group">
  						<label>Password</label>
  						<input type="password" class="form-control" required="required" name="password" />
  					</div>

  					<div class="form-group">
  						<button class="btn btn-primary btn-md">Tambah</button>
  					</div>
  				</div>
  			</section>
  		</div>
  	</div>
  	@endsection
