@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

    <div class="row container">
        <div class="col s12 m6">
            <img class="responsive-img" src="{{ $produto->imagem }}" alt="">
        </div>
        <div class="col s12 m6">
            <h4>{{ $produto->nome }}</h1>
                <h4>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h1>
                    <p>{{ $produto->descricao }}</p>
                    <p>Postado por:
                        {{ $produto->user->firstName . ' ' . $produto->user->lastName }}<br>Categoria:
                        {{ $produto->categoria->nome }}
                    </p>
                    <form action="{{ route('site.addcarrinho') }}" method='POST' enctype='multipart/form-data'>
                        {{-- gera input do tipo hidden=invisivel que vai gerar um token pra proteger a aplicação - @csrf --}}
                        @csrf
                        <input type="hidden" name='id' value='{{ $produto->id }}'>
                        <input type="hidden" name='name' value='{{ $produto->nome }}'>
                        <input type="hidden" name='price' value='{{ $produto->preco }}'>
                        <input type="number" name='qnt' value='1' min="1">
                        <input type="hidden" name='img' value='{{ $produto->imagem }}'>
                        <button class="btn orange btn-large">comprar</button>
                    </form>
        </div>
    </div>

@endsection
