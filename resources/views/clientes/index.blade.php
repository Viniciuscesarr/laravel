@extends('layouts.default') <!-- Estende o layout padrão -->

@section('content')
<div class="container">
    @include('layouts.messages')
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Cliente</a>

    <div class="card">
        <div class="card-body">
            <table id="clientes-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#clientes-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('clientes.data') }}',
                type: 'GET',
            },
            columns: [
                { data: 'nome', name: 'nome' },
                { data: 'apelido', name: 'apelido' },
                { data: 'endereco', name: 'endereco' },
                { data: 'telefone', name: 'telefone' },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            language: {
            url: 'js/dataTables.pt-BR.js'
         }
        });
    });
</script>
@endsection