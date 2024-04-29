<nav class="indigo">
    <div class="nav-wrapper container">
        {{-- menu hamburguer --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <a href="{{ route('home') }}" class="brand-logo light">Nome do Site</a>
        {{-- menu para desktop --}}
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>

        {{-- menu mobile ********** NÃO FUNCIONOU ********** --}}
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        {{-- imagem sidenav --}}
                        <img src="{{ asset('images/fundo_sidenav.jpg') }}">
                    </div>
                </div>
            </li>
            <li><a href="{{ route('home') }}"><i class="material-icons">home</i>Home</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>

    </div>
</nav>
