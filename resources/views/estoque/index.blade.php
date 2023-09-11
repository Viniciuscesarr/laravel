@extends('layouts.default') <!-- Estende o layout padrão -->

@section('content')

<div class="container">
    @include('layouts.messages')
    <h1>Estoque</h1>
    <a href="#" class="btn btn-primary mb-3">Cadastrar Novo Produto</a>
    <a href="#" class="buttonremove">Remover Produto</a>

    <div class="card">
        <div class="card-body">
            <table id="clientes-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Quantidade:</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection