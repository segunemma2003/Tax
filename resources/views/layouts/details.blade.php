<!--main content start-->
@extends('layouts.app')
@section('title', 'EasyTax')
@section('content')
<div class="container">
<div style="margin:0 auto;">

        <div class="panel panel-default">
            <div class="row panel-heading">
                <div class="col-md-2"><b><label>Subject:</label></b></div>
                    <div class=col-md-6> {{$message->subject}}</div>
            </div>

    <div class="row panel-body">
            <div class="col-md-2"><b><label>Message:</label></b></div>
                   <div class=col-md-6> {{$message->message}}</div>
        </div>


    <div class="row panel-body">
        <div class="col-md-2"><b><label>Company Name:</label></b></div>
               <div class=col-md-6> {{$message->user->company_name}}</div>
               </div>
               


    </div>


<div class='text-center'>
            <form class="col-md-9"  method="post">
                        @csrf
                        
                          <div class="form-group">
       
                                <a href="{{URL('layouts/messaging') }}" class="btn btn-success">Reply Message</a>
                                <a href="{{URL('layouts/view_messages') }}" class="btn btn-success">Back</a>
                       
                            </div> 
              </form>
  </div>
@endsection