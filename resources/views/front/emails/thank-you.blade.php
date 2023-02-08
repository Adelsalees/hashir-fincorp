@extends('front.emails.user-mail')
@section('preText')
   
@endsection
@section('body')
Hi {{ $enquiry['name'] }},<br/>

    Thank you for submitting your details. We will contact you soon.
@endsection
@section('wish','Team Fin-Pro') 
