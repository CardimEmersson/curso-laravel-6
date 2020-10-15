@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')

    <h1>Cadastrar um novo produto</h1>    

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">

        @csrf

        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <input type="file" name="foto">

        <button type="submit">Enviar</button>
    </form>

@endsection

