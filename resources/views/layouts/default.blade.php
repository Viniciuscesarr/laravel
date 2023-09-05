<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Vendas</title>

     <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
     
</head>
<body>

<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 logo">
                <img src="{{ asset('images/logo-bar2.png') }}" alt="Logo">
            </div>
            <div class="col-md-3">
                <!-- Adicione o ícone de menu (sanduíche) aqui, se necessário -->
            </div>
            <div class="col-md-3 text-right">
            <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
            </div>
        </div>
    </div>
</header>

<main class="container mt-4">
    <div>
        <h1>Acesso rápido</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <section class="sections">
                <span id="clients" class="material-icons-outlined text-primary">
                    group
                </span>
                <h2>Clientes</h2>
            </section>
        </div>
        <div class="col-md-3">
            <section class="sections">
                <span id="inventory" class="material-icons-outlined text-primary">
                    inventory_2
                </span>
                <h2>Estoque</h2>
            </section>
        </div>
        <div class="col-md-3">
            <section class="sections">
                <span id="sales" class="material-icons-outlined text-primary">
                    payments
                </span>
                <h2>Vendas</h2>
            </section>
        </div>
        <div class="col-md-3">
            <section class="sections">
                <span id="pending" class="material-icons-outlined text-primary">
                    receipt
                </span>
                <h2>Pendências</h2>
            </section>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Adicione os links para seus arquivos JavaScript aqui -->
</body>
</html>
</html>
