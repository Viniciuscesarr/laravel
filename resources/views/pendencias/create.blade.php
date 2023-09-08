@extends('layouts.default')

@section('content')
<div class="container">
        <h1 class="mb-4">Cadastrar Notinha</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.store') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="apelido" class="form-label">Produtos Comprados:</label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="endereco" class="form-label">ValorR$:</label>
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