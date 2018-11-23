@extends('layout.adminmaster')
@section('title', 'Companies Profile')
@section('content')


<table class="table table-responsive">
    <thead>
        <tr>
            <th>Companies Name</th> 
            <th>Companies Address</th>
            <th>Companies Email</th>
            <th>Companies Website</th>
            <th>Bank Name</th>
            <th>Account Number</th>
            <th>Companies Phone Number</th>
            <th>Feedbacks</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as user)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$user->profile->user_id}}</td>
            <td>{{$user->profile->company_name}}</td>
            <td>{{$user->profile->company_address}}</td>
            <td>{{$user->profile->email}}</td>
            <td>{{$user->profile->website}}</td>
            <td>{{$user>profile->bank_name}}</td>
            <td>{{$user->profile->account_name}}</td>
            <td>{{$user->profile->phone_no}}</td>
            <td>{{$user->profile->feedback}}</td>
            <td>{{$user>profile->images}}</td>
        </tr>
    </tbody>
</table>

@endsection