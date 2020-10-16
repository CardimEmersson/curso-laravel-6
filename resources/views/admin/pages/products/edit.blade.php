@extends('admin.layouts.app')

@section('title', 'Editar Novo Produto')

@section('content')

    <h1>Editar produto {{$id}}</h1>    

    {{-- action passando valor do id para o update --}}
    <form action="{{ route('products.update', $id) }}" method="post">

        @csrf
        {{-- Enviando pelo metodo put --}}
        @method('PUT')

        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nome:">
            
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="Descrição:">

        </div>
        <div class="form-group">
            <button class="form-control" class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>

@endsection

