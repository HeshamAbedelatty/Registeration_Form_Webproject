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
            <div class="col col-md-6"><b>{{__('msg.Customer Data')}}</b></div>
            <div class="col col-md-6">
                <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm float-end">{{__('msg.Add')}}</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>{{__('msg.Image')}}</th>
                <th>{{__('msg.Name')}}</th>
                <th>{{__('msg.Email')}}</th>
                <th>{{__('msg.Phone')}}</th>
                <th>{{__('msg.Address')}}</th>
                <th>{{__('msg.BirthDate')}}</th>
                <th>{{__('msg.Username')}}</th>
                <th>{{__('msg.Password')}}</th>
                <th>{{__('msg.Action')}}</th>
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
                        <a href="{{ route('customers.show', $row->id) }}" class="btn btn-primary btn-sm">{{__('msg.View')}}</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="{{__('msg.Delete')}}" />
                    </form>

                </td>
            </tr>

            @endforeach

            @else
            <tr>
                <td colspan="5" class="text-center">{{__('msg.No Data Found')}}</td>
            </tr>
            @endif
        </table>
        {!! $data->links() !!}
    </div>
</div>

@endsection