@extends('auth.layout.layout')

@section('title')
    Cadastrar-se
@endsection

@section('form')
@include('auth.layout.register-form', [
    'route' => url('/register')
])    
@endsection