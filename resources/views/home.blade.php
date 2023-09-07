@extends('layouts.default')

@section('content')
<main class="container mt-4">
    <div>
        <h1>Acesso rápido</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <section class="sections">
                <a href="{{route('clientes')}}">
                <span id="clients" class="material-icons-outlined text-primary">
                    group
                </span>
                <h2>Clientes</h2>
                </a>
            </section>
        </div>
        <div class="col-md-3">
            <section class="sections">
                <a href="#">
                    <span id="inventory" class="material-icons-outlined text-primary">
                        inventory_2
                    </span>
                    <h2>Estoque</h2>
                </a>
            </section>
        </div>
        <div class="col-md-3">
            <section class="sections">
                <a href="#">
                    <span id="sales" class="material-icons-outlined text-primary">
                        payments
                    </span>
                    <h2>Vendas</h2>
                </a>
            </section>
        </div>
        <div class="col-md-3">
            <a href="#">
                <section class="sections">
                    <span id="pending" class="material-icons-outlined text-primary">
                        receipt
                    </span>
                    <h2>Pendências</h2>
            </a>
            </section>
        </div>
    </div>
</main>
@endsection
