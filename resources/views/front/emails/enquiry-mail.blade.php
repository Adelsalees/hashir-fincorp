@extends('front.emails.user-mail')
@section('preText')
    {{$enquiry['name']}} - Contact Request,
@endsection
@section('body')
Hi ,<br/><br>
 We have received a new inquiry from our website. The details are as follows.<br/>
Name : {{$enquiry['name']}}<br/>
Email : {{$enquiry['email']}}<br/>
Phone : {{$enquiry['phone']}}<br/>
Message : {{$enquiry['message']}} <br>

@endsection