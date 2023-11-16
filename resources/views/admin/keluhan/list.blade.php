@extends('layout-admin')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3>
					List Keluhan Customers
				</h3>
				<div class="table-responsive">
					<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Customers</th>
								<th>Keluhan</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php $n = 1; ?>
						@foreach($k as $c)
						<tbody>
							<tr>
								<td>{{ $n++ }}</td>
								<td>{{ $c->name }}</td>
								<td>{{ $c->keluhan }}</td>
								<td><a href="" data-toggle="modal" data-target="#myModal1{{$c->id}}"><span class="glyphicon glyphicon-edit"></span></a>
									<!-- |
									<a href="{{ url('nimda/keluhan/delete/'.$c->id) }}" onclick="return confirm('Are you sure, You Want to delete this?')
									"><span class="glyphicon glyphicon-trash"></span></a> -->
								</td>
								<div class="modal fade" id="myModal1{{$c->id}}" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												<h4>Ganti Keluhan</h4>
												<form method="post" action="{{ url('cs/keluhan/update/'.$c->id) }}">
													@csrf
													<textarea name="kel" class="form-control">{{$c->keluhan}}</textarea>
													<br>
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
