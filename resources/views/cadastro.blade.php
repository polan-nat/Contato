@extends('layout')

@section('conteudo')
    <h3 class="text-center mt-4">Cadastro de Contatos</h3>
    <hr>
    <div class="d-flex justify-content-center">
        <form method="POST" action="{{ url('/cadastro/in') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" required>
              </div>

            <div class="mb-3">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" required>
              </div>

            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf">
              </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
              </div>

            <div class="mb-3">
                <label class="form-label">Email Reserva</label>
                <input type="email" class="form-control" name="email2">
              </div>

            <div class="mb-3">
                <label class="form-label">Celular</label>
                <input type="text" class="form-control" name="celular" required>
              </div>

            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone">
              </div>
              
              <button class="btn btn-outline-dark">
                Cadastre
                <i class="bi bi-person-plus"></i>
              </button>
        </form>
    </div>    




@endsection