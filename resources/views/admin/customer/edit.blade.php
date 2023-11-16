  @extends('layout-admin')
  @section('content')
  <div class="content-wrapper">
  	<section class="content">
  		<div class="panel panel-default">
  			<div class="panel-body" style="margin-right: 15px; margin-left: 15px;">
  				<h3>
  					Edit Customer
  				</h3>
  				<form autocomplete="off" class="form-horizontal" method="POST" action="{{ url('nimda/customer/update',$customers->id)}}" enctype="multipart/form-data">
  					{{ csrf_field()}}

  					<div class="form-group">
  						<label>Nama Lengkap</label>
  						<input type="text" class="form-control" required="required" name="nama_lengkap" value="{{ $customers->nama_lengkap}}" />
  					</div>

  					<div class="form-group">
  						<label>Nomor Telepon</label>
  						<input type="text" class="form-control" required="required" name="notel" value="{{ $customers->no_telpon}}"/>
  					</div>

  					<div class="form-group">
  						<label>Email</label>
  						<input type="email" class="form-control" required="required" name="email" value="{{ $customers->email}}" />
  					</div>

  					<div class="form-group">
  						<label>Password</label>
  						<input type="password" class="form-control" name="password" />
  					</div>

  					<div class="form-group">
  						<button class="btn btn-primary btn-md">Update</button>
  					</div>
  				</div>
  			</section>
  		</div>
  	</div>
  	@endsection
