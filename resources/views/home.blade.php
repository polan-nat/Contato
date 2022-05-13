@extends('layout')

@section('conteudo')
    
    <h3 class="text-center">Agenda de Contatos</h3>
        <div class="d-flex justify-content-center">
            <a href="/cadastro" class="btn btn-outline-dark">Cadastre</a>
        </div>
        @include('mensagem')
<hr>

        <form action="" method="GET">
            <div class="d-flex justify-content-end px-3">
                <div class="mb-3">
                    <input type="text" class="form-control" name="procura" id="procura" placeholder="Pesquisar"> 
                </div>
                <div class="px-2">     
                    <button type="submit" class="btn btn-outline-dark"><i class="bi bi-search"></i></button>
                </div> 
            </div>
        </form>



<div class="d-flex mx-auto w-50">
<table class="table">
    <thead>
      <tr>
        <th scope="col" class="table-active">#</th>
        <th scope="col" class="table-active">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">CPF</th>
        <th scope="col">Email</th>
        <th scope="col">Email reserva</th>
        <th scope="col">Celular</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach($contato as $contatos)
      <tr>
        <th scope="row" class="table-active"><i class="bi bi-person-circle fs-3"></i></th>
        <td class="table-active">{{ $contatos->nome }}</td>
        <td>{{ $contatos->sobrenome }}</td>
        <td>{{ $contatos->cpf }}</td>
        <td>{{ $contatos->email }}</td>
        <td>{{ $contatos->email2 }}</td>
        <td>{{ $contatos->celular }}</td>
        <td>{{ $contatos->telefone }}</td>
        <td>    
            <form action="{{ url('/contatos/'.$contatos->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Deletar contato">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
        </td>
        <td>
            <a href="{{ url('/editar/'.$contatos->id) }}" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar contato">
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
        <td>
            <a href="{{ url('/exibe/'.$contatos->id) }}" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ver contato">
                <i class="bi bi-eye"></i>
            </a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>


@endsection