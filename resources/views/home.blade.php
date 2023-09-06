@extends('layouts.default')

@section('content')
<main class="container mt-4">
    <h1 class="text-center">Acesso Rápido</h1>
    <div class="row">
        <div class="col-md-3">
            <section class="quick-access">
                <a href="{{ route('clientes') }}">
                    <span class="material-icons-outlined text-primary">
                        group
                    </span>
                    <h2>Clientes</h2>
                </a>
            </section>
        </div>
        <div class="col-md-3">
            <section class="quick-access">
                <span class="material-icons-outlined text-primary">
                    inventory_2
                </span>
                <h2>Estoque</h2>
            </section>
        </div>
        <div class="col-md-3">
            <section class="quick-access">
                <span class="material-icons-outlined text-primary">
                    payments
                </span>
                <h2>Vendas</h2>
            </section>
        </div>
        <div class="col-md-3">
            <section class="quick-access">
                <span class="material-icons-outlined text-primary">
                    receipt
                </span>
                <h2>Pendências</h2>
            </section>
        </div>
    </div>
</main>
@endsection
