<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'jemeaproducts') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{ url('dna-assets/fontawesome-pro-5.15.3-web/css/all.css') }}" rel="stylesheet">
    <script src="{{ url('dna-assets/fontawesome-pro-5.15.3-web/js/all.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .form-control, .form-select {
            border: 2px solid #000000;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.5.0/ui/trumbowyg.min.css" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'JemeaProducts') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if(auth()->check())
        <main-header class="py-4">
            <div class="container" style="margin-top: 1.0rem;">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Menu') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <ul class="nav nav-pills">
                                    <!-- <li class="nav-item"><a href="{{ url('dna/categories') }}" class="nav-link {!! \Request::is('dna/categories*') ? 'active' : '' !!}"><i class="fa fa-list"></i> Category</a></li> -->
                                    <!-- <li class="nav-item"><a href="{{ url('dna/subcategories') }}" class="nav-link {!! \Request::is('dna/subcategories*') ? 'active' : '' !!}"><i class="fa fa-list-ol"></i> Subcategory</a></li> -->
                                    <li class="nav-item"><a href="{{ url('dna/products') }}" class="nav-link {!! \Request::is('dna/products*') ? 'active' : '' !!}"><i class="fa fa-gift"></i> Products</a></li>
                                    <!-- <li class="nav-item"><a href="{{ url('dna/contacts') }}" class="nav-link {!! \Request::is('dna/contacts*') ? 'active' : '' !!}"><i class="fa fa-envelope"></i> Contact</a></li> -->
                                </ul>

                                <!-- <i class="fa fa-user fa-2x"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main-header>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- jQuery (Déjà présent) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- LE SCRIPT BOOTSTRAP MANQUANT (À ajouter absolument) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Trumbowyg (Déjà présent) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.5.0/trumbowyg.min.js" integrity="sha256-uw+P5etc9PQJyLVaZD9Fk2CNlkJs5G0b5u3ugIK7qEQ=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $('#trumbowyg-demo').trumbowyg({
        btns: [['strong', 'em', 'del'], '|', 'insertImage',['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'], ['unorderedList', 'orderedList'], ['formatting'], 'link' ],
        autogrow: true,
        emantic: false, // Attention, petite faute de frappe ici dans ton code d'origine (c'est "semantic"), mais laisse ainsi si ça fonctionne
        svgPath: '{{url('icons.svg')}}',
    });
    </script>
</body>
</html>