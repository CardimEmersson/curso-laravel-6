@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')

    <h1>Cadastrar um novo produto</h1>    

    {{-- Bloco de verificação de erros na validação dos formularios --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">

        @csrf


        {{-- old() retorna o valor antigo do input--}}

        <input type="text" name="name" placeholder="Nome:" value="{{ old('name')}}">
        <input type="text" name="description" placeholder="Descrição:" value="{{ old('description')}}">
        <input type="file" name="foto">

        <button type="submit">Enviar</button>
    </form>

@endsection

