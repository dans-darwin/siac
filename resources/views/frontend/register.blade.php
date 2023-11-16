@extends('layout-frontend')
@section('content')

<div class="container login-container" style="margin-top: 150px">
	<div class="row">
		<div class="col-md-6 login-form-1">
			<form action="{{ route('cs.regist') }}" method="POST" autocomplete="off">
				@csrf
				<h3>Register</h3>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nama Lengkap *" name="nama" required="required" />
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email *" name="email" required="required" />
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="No Telpon *" name="notel" required="required" />
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Your Password *" name="password" required="required" />
				</div>
				<div class="form-group">
					<center><button type="submit" class="btnSubmit">Submit</button></center>
				</div>
				<div class="form-group">
					<center><a href="{{ url('cs/login') }}" class="btnForgetPwd">Back</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection