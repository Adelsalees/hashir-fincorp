@extends('front.emails.user-mail')
@section('preText')
    {{$enquiry['name']}} - {{$enquiry['service']}} - Service Enquiry,
@endsection
@section('body')
Hi ,<br/>
 We have received a new inquiry from our website. The details are as follows.<br/>
Name : {{$enquiry['name']}}<br/>
Email : {{$enquiry['email']}}<br/>
Phone : {{$enquiry['phone']}}<br/>
Organization : {{$enquiry['organization']}} <br>
City : {{$enquiry['city']}} <br>
State : {{$enquiry['country-state']}} <br>
Service :{{$enquiry['service']}} 
@endsection