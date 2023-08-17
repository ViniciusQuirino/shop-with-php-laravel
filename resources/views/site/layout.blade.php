<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- @stack('style') --}}
    <title>@yield('title')</title>
</head>

<body>

    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriasMenu as $categoriaM)
            <li><a href="{{ route('site.categoria', $categoriaM->id) }}">{{ $categoriaM->nome }}</a></li>
        @endforeach
    </ul>

    <nav class='red'>
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">CursoLaravel</a>
            <ul id="nav-mobile" class="left">
                <li><a href="/">Home</a></li>

                <li><a href="#" class="dropdown-trigget" data-target='dropdown1'>Categorias <i
                            class="material-icons right">expand_more</i></a></li>

                <li><a href="{{ route('site.carrinho') }}">Carrinho <span class="new badge red"
                            data-badge-caption="">{{ \Cart::getContent()->count() }}</span></a></li>
            </ul>
        </div>
    </nav>

    @yield('conteudo')

    {{-- @stack('script') --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        var elemDrop = document.querySelectorAll('.dropdown-trigget');
        var instanceDrop = M.Dropdown.init(elemDrop, {
            coverTrigger: false,
            constrainWidth: false
        });
    </script>
</body>

</html>
