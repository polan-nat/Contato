@extends('layout')

@section('conteudo')
<h3 class="text-center mt-4">Editar Contato</h3>
<hr>
<div class="d-flex justify-content-center">
    <form method="POST" action="{{ url('/editar/'.$contato->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $contato->nome }}">
          </div>

        <div class="mb-3">
            <label class="form-label">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" value="{{ $contato->sobrenome }}">
          </div>

        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" value="{{ $contato->cpf }}">
          </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $contato->email }}">
          </div>

        <div class="mb-3">
            <label class="form-label">Email Reserva</label>
            <input type="email" class="form-control" name="email2" value="{{ $contato->email2 }}">
          </div>

        <div class="mb-3">
            <label class="form-label">Celular</label>
            <input type="text" class="form-control" name="celular" value="{{ $contato->celular }}">
          </div>

        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" value="{{ $contato->telefone }}">
          </div>
          
          <button class="btn btn-outline-dark">
            Altere 
            <i class="bi bi-check2-circle"></i>
          </button>
    </form>
</div>    

@endsection