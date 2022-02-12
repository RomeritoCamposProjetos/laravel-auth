@extends('auth.layout.layout')

@section('form')
@include('auth.layout.login-form', [
    'route' =>  url('/login'),
    'register' =>  url('/register') 
])    
@endsection