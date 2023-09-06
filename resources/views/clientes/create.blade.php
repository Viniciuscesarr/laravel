@extends('layouts.default')

@section('content')
<div class="container">
    <h1 class="mb-4">Cadastrar Cliente</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="mb-3">
                    <label for="apelido" class="form-label">Apelido:</label>
                    <input type="text" class="form-control" id="apelido" name="apelido">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
