@extends('site.layout')
@section('title', 'Pagina HOME')
@section('conteudo')

    {{-- Verificando se existe com ternario --}}
    {{-- {{isset($nome) ? 'existe': 'nao existe'}} --}}

    {{-- Caso exista, renderiza o valor caso não exista renderiza o padrão --}}
    {{-- {{ $nome ?? 'padrão'}} --}}

    {{-- If else --}}
    {{-- @if ($nome == 'Vinicius')
        true
    @else
        false
    @endif --}}

    {{-- Inverso do If else --}}
    {{-- @unless ($nome == 'vinicius')
        true
    @else
        false
    @endunless --}}

    {{-- @switch($idade)
        @case(25)
            idade está ok
            @break
        @case(28)
            idade está errada
            @break
        @default
            se não atender nenhuma condição, cai aqui!
    @endswitch --}}

    {{-- veririficar se existe --}}
    {{-- @isset($nome)
        existe
    @endisset --}}

    {{-- virificar se está vazia --}}
    {{-- @empty($nome)
        está vazia
    @endempty --}}

    {{-- verificar se está autenticado --}}
    {{-- @auth
     está autenticado   
    @endauth --}}

    {{-- inverso de @auth --}}
    {{-- @guest
        Não está autenticado   
    @endguest --}}

    {{-- @for ($i = 0; $i < $idade; $i++)
        looping: {{$i}} <br>
    @endfor --}}

    {{-- while --}}
    {{-- @php $i = 0; @endphp
    @while ($i <= 10)
        looping com while: {{$i}} <br>
        @php $i++; @endphp
    @endwhile --}}

    {{-- foreach -> se tiver valores --}}
    {{-- @foreach ($frutas as $fruta)
        {{$fruta}} <br>
    @endforeach --}}

    {{-- forelse -> caso possa estar vazio o array --}}
    {{-- @forelse ($frutas as $fruta)
        {{$fruta}} <br>
    @empty
            array está vazio
    @endforelse --}}

    {{-- trabalhando com include --}}
    {{-- @include('includes.mensagem', ['titulo' => "mensagem de sucesso!"]) --}}

    {{-- trabalhando com component --}}
    {{-- @component('components.sidebar')
        @slot('paragrafo')
            texto qualquer vindo do slot
        @endslot
    @endcomponent --}}

    {{-- @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    @endpush --}}

    {{-- @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @endpush --}}

    <div class="row container">
        @foreach ($produtos as $produto)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $produto->imagem }}">
                        <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ Str::limit($produto->nome, 20) }}</span>
                        <p>{{ Str::limit($produto->descricao, 70) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row center">
        {{ $produtos->links('custom/pagination') }}
    </div>
@endsection
