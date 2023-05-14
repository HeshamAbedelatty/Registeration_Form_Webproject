@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Customer Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Name</b></label>
			<div class="col-sm-10">
				{{ $customer->customer_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Email</b></label>
			<div class="col-sm-10">
				{{ $customer->customer_email }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Address</b></label>
			<div class="col-sm-10">
				{{ $customer->cutomer_address }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Phone</b></label>
			<div class="col-sm-10">
				{{ $customer->cutomer_phone }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Username</b></label>
			<div class="col-sm-10">
				{{ $customer-> cutomer_username}}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer Password</b></label>
			<div class="col-sm-10">
				{{ $customer-> cutomer_password}}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Customer BirthDate</b></label>
			<div class="col-sm-10">
				{{ $customer-> birthdate}}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>customer Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $customer->customer_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')