@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')

    <h1>Cadastrar um novo produto</h1>    

    {{-- Include de alertas --}}
    @include('admin.includes.alerts')    

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">

        @include('admin.pages._partial.form')

    </form>

@endsection

