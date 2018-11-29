<!--main content start-->
@extends('layouts.app')
@section('title', 'EasyTax')
@section('content')
<table class="table table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Company Name</th>
            <th>subject</th>
            <th>Date created</th>
            <th>Details</th>
            <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach($message as $messages)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$messages->user->company_name}}</td>
                    <td>{{$messages->subject}}</td>
                    <td>{{$messages->created_at->diffForhumans}}</td>
            
                                <td><a href="{{URL('layouts/details', $messages->id) }}" class="btn btn-success">Details</a></td>
                                <td><a href="{{route('delete', $messages->id) }}" class="btn btn-danger">Delete </a></td>
                        
                    </tr>
                    @endforeach
                    </tbody>

                    </table>
                    @endsection