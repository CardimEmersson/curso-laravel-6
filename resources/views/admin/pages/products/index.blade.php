@extends('admin.layouts.app')

@section('title', 'Gestão de produtos' )

@section('content')
    <h1>Exibindo os produtos</h1>
    <hr>
    <a href="{{ route('products.create') }}">Cadastrar</a>
    <hr>

    <hr>
    {{-- Include e envio de variavéis dinamicas --}}
    @include('admin.includes.alerts', ['content' => "Teste alerta"])

    <hr>

    {{-- Components --}}
    @component('admin.components.card')

        {{-- Slots --}}
        @slot('title')
            <h1>Titulo card</h1>
        @endslot
    
        Um card de exemplo
    
    @endcomponent

    
    {{-- Usando para o stack --}}
    @push('styles')
        <style>
            .last{
                background-color: #ccc;
            }
        </style> 
    @endpush

    @push('scripts')
        <script>
            document.body.style.background = '#efefef'
        </script>
    @endpush


    {{-- {{$teste}} --}}

    {{-- diretivas --}}
    @if ($teste === 123)
        É igual
    @elseif($teste === 124)
        É 124
    @else
        É diferente
    @endif

    {{--  --}}
    @unless ($teste === '123')
        
    @endunless

    {{-- Se existe --}}
    @isset($teste)
        Existe
    @else
        Não existe
    @endisset

    {{-- Se está vazio --}}
    @empty($teste)
        Está vazio
    @endempty

    {{-- Autenticação --}}
    {{-- @auth

    @else
        
    @endauth --}}

    {{-- Se não estiver autenticado --}}
    {{-- @guest
        
    @endguest --}}

    {{--  --}}
    {{-- @switch($type)
        @case(1)
            
            @break
        @case(2)
                        
            @break
        @default
            
    @endswitch --}}

    {{-- Estruturas de repetição --}}
    {{-- @foreach ($collection as $item) --}}
        
        {{-- Se for o ultimo elemento --}}
        {{-- @if ($loop->last)
            ...
        @endif

    @endforeach --}}

    {{-- verifica se existe --}}
    {{-- @forelse ($collection as $item)
        
    @empty
        
    @endforelse --}}

@endsection
