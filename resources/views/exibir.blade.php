@extends('layout')

@section('conteudo')
    
    <h3 class="text-center mt-4">Contato</h3>
<hr>
        <div class="d-flex justify-content-center">
            <div class="card mt-3" style="width: 30rem">
                <div class="card-body">
                  <h5 class="card-header bg-dark text-white px-4"><i class="bi bi-person-circle fs-1"></i> {{ $contato->nome}} {{$contato->sobrenome}}</h5>
                  <p class="card-text mt-3">CPF: {{ $contato->cpf }}</p>
                  <p class="card-text">Email: {{ $contato->email }}</p>
                  <p class="card-text">Email reserva: {{ $contato->email2 }}</p>
                  <p class="card-text">Celular: {{ $contato->celular }}</p>
                  <p class="card-text">Telefone: {{ $contato->telefone }}</p>
                </div>

                <div class="d-flex justify-content-between px-2 mb-2">
                <form action="{{ url('/contatos/'.$contato->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Deletar contato">
                        <i class="bi bi-trash"></i>
                        Deletar
                    </button>
                </form>
                <a href="{{ url('/editar/'.$contato->id) }}" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar contato">
                    <i class="bi bi-pencil-square"></i>
                    Editar
                </a>
                </div>
              </div>
        </div>








@endsection