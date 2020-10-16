@extends('admin.layouts.app')

@section('title', 'Gestão de produtos' )

@section('content')
    <h1>Exibindo os produtos</h1>
    <hr>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar</a>
    <hr>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name  }}</td>
                    <td>{{ $product->preco  }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        {!! $products->link() !!}

    </table>

   
    

@endsection
