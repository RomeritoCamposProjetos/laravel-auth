@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')

<div class="flex">
    <div class="flex-row py-5" style="height: 35%;">
        <div class="d-flex justify-content-center">
            <h1 class="display-3">Autenticação com Múltiplas tabelas</h1>
        </div>        
        <div class="d-flex justify-content-center gap-3">            
            <a href="{{route('dashboard')}}" class="btn btn-primary w-25">Usuário Regular</a>
            <a href="{{route('admin.panel')}}" class="btn btn-success w-25" >Admin</a>
        </div>
    </div>
</div>
    
@endsection