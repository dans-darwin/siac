@extends('layout-admin')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3>
					List Admin
				</h3>
				<div class="table-responsive">
					<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Created At</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Created At</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<?php $n = 1; ?>
						@foreach($adm as $ad)
						<tbody>
							<tr>
								<td>{{ $n++ }}</td>
								<td>{{ $ad->name }}</td>
								<td>{{ $ad->email }}</td>
								<td>{{ $ad->created_at }}</td>
								<td><a href="{{ url('nimda/admin/edit',$ad->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
									|
									<a href="{{ url('nimda/admin/delete',$ad->id) }}" onclick="return confirm('Are you sure, You Want to delete this?')
									"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
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
