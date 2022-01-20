@extends('auth.layout.layout')

@section('title')
    Login Administrativo    
@endsection

@section('form')

@include('auth.layout.login-form', [
    'route' => route('admin.login'),
])
    
@endsection