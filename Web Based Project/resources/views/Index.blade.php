@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Customer Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('customers.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>BirthDate</th>
				<th>Username</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->customer_image) }}" width="75" /></td>
						<td>{{ $row->customer_name }}</td>
						<td>{{ $row->customer_email }}</td>
						<td>{{ $row->cutomer_address }}</td>
						<td>{{ $row->cutomer_phone }}</td>
						<td>{{ $row->birthdate }}</td>
						<td>{{ $row->cutomer_username }}</td>
						<td>{{ $row->cutomer_password }}</td>
						<td>
							<form method="post" action="{{ route('customers.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('customers.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
