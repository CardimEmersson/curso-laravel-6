@extends('admin.layouts.app')

@section('title', 'Detalhes do produto' )

@section('content')

    <h1> Produto {{$products->name}}</h1>

    <ul>
        <li><strong>Nome: </strong>{{ $products->name }}</li>
        <li><strong>Descrition: </strong>{{ $producs->price }}</li>
        <li><strong>Price: </strong>{{ $products->description }}</li>
    </ul>

@endsection