@extends('layouts.default')

@section('content')
<div class="container">
@include('layouts.messages')
    <h1 class="mb-4">Cadastrar Cliente</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.update',['id' => $cliente->id]) }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value= "{{$cliente->nome}}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="apelido" class="form-label">Apelido:</label>
                    <input type="text" class="form-control" id="apelido" name="apelido" value= "{{$cliente->apelido}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value= "{{$cliente->endereco}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" value= "{{$cliente->telefone}}">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">ATUALIZAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
