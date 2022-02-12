@extends('auth.layout.layout')

@section('title')
    Cadstro Administrativo    
@endsection

@section('form')

@include('auth.layout.register-form', [
    'route' => url('/register/admin'),
    'login' => url('/login/admin'),
])
    
@endsection