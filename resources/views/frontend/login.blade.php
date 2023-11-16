@extends('layout-frontend')
@section('content')

<div class="container login-container" style="margin-top: 150px">
	<div class="row">
		<div class="col-md-6 login-form-1">
			@if(session('notif'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button> 
				<strong>{{ session('notif') }}</strong>
			</div>
			{{ session()->forget('notif') }}
			@endif
			@if(session('msg'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button> 
				<strong>{{ session('msg') }}</strong>
			</div>
			{{ session()->forget('msg') }}
			@endif
			<form action="{{ route('cs.login') }}" method="POST" autocomplete="off">
				@csrf
				<h3>LOGIN</h3>

				<div class="form-group">
					<input type="email" class="form-control" placeholder="Your Email *" name="email" required="required" />
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Your Password *" name="password" required="required" />
				</div>
				<div class="form-group">
					<center><button type="submit" class="btnSubmit">Login</button></center>
				</div>
				<div class="form-group">
					<center><a href="{{ url('cs/register')}}" class="btnForgetPwd">Don't have an account ?</a></center>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection