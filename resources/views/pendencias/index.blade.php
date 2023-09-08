@extends('layouts.default') <!-- Estende o layout padrão -->

@section('content')
<div class="container">
    @include('layouts.messages')
    <h1>Notinhas</h1>
    <a href="#" class="btn btn-primary mb-3">Cadastrar notinha</a>

    <div class="card">
        <div class="card-body">
            <table id="clientes-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Apelido:</th>
                        <th>Endereço:</th>
                        <th>Produtos:</th>
                        <th>Valor final:</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection