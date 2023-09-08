@extends('layouts.default')

@section('content')
<div class="container">
        <h1 class="mb-4">Cadastrar Nova Venda</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.store') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="apelido" class="form-label">Produtos Vendidos:</label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="endereco" class="form-label">Valor Final R$:</label>
                    <input type="text" class="form-control" id="valor" name="valor">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection