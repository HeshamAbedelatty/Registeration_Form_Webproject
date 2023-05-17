@extends('master')

@section('content')



<div class="card">
	<div class="card-header">{{__('msg.Register')}}</div>
	<div class="card-body">
		<form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">{{__('msg.Name')}}</label>
				<div class="col-sm-10">
					<input type="text" name="customer_name" class="form-control" />
					@error('customer_name')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">{{__('msg.Email')}}</label>
				<div class="col-sm-10">
					<input type="text" name="customer_email" class="form-control" />
					@error('customer_email')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
				</div>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">{{__('msg.Address')}}</label>
				<div class="col-sm-10">
					<input type="text" name="cutomer_address" class="form-control" />
					@error('cutomer_address')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
					
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">{{__('msg.Phone')}}</label>
				<div class="col-sm-10">
					<input type="text" name="cutomer_phone" class="form-control" />
					@error('cutomer_phone')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">{{__('msg.Username')}}</label>
				<div class="col-sm-10">
					<input type="text" name="cutomer_username" class="form-control" />
					@error('cutomer_username')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">{{__('msg.Password')}}</label>
				<div class="col-sm-10">
					<input type="text" name="cutomer_password" class="form-control" />
					@error('cutomer_password')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">{{__('msg.Confirmed Password')}}</label>
				<div class="col-sm-10">
					<input type="text" name="cutomer_password_confirmation" class="form-control" />
					@error('cutomer_password_confirmation')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">{{__('msg.BirthDate')}}</label>
				<div class="col-sm-10">
					<input type="date"id='birthday' name="birthdate" class="form-control" placeholder="Birthday" />
					@error('birthdate')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
				</div>
			</div>
			
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">{{__('msg.Image')}}</label>
				<div class="col-sm-10">
					<input type="file" name="customer_image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="{{__('msg.Add')}}" />
			</div>		
			
		</form>
		<button type="button" class="API_button" onclick="callApi()">{{__('msg.Call API')}}</button>
	</div>
</div>
<script>
    function callApi() {
        var birthday = document.getElementById('birthday').value;
        var day = birthday.slice(8, 10);
        var month = birthday.slice(5, 7);
        window.location.href = "/api_ops?day=" + encodeURIComponent(day) + "&month=" + encodeURIComponent(month);

    }
</script>

@endsection('content')
@error('inpuuut')
    <div class="alert alert-danger" role="alert" style="color: red;">{{$message}} </div>
	@enderror
