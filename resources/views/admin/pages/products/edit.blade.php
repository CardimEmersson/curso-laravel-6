@extends('admin.layouts.app')

@section('title', 'Editar Novo Produto')

@section('content')

    <h1>Editar produto {{$id}}</h1>    

    {{-- action passando valor do id para o update --}}
    <form action="{{ route('products.update', $id) }}" method="post">

        @csrf
        {{-- Enviando pelo metodo put --}}
        @method('PUT')

        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>

@endsection

