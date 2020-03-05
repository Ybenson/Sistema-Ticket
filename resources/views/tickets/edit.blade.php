@extends('tickets.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12" align="center">
                    <h1>Ferramenta simples de cadastro de tickets para o setor de atendimento ao cliente </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-lg-12 pull-right" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-secondary" href="{{ route('tickets.index') }}"> ⇐ Volta na página Home </a>
        </div>

        <div class="col-lg-12">
            <h4 class="btn-secondary text-center">Editando Ticket de: {{ $ticket->cliente->nome_cliente }} </h4>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opsss!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.update',$ticket->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="text" name="id" value="{{ $ticket->id }}" class="form-control" placeholder="ID">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Número do Pedido:</strong>
                    <input type="text" name="numero_do_pedido" value="{{ $ticket->numero_do_pedido }}" class="form-control" placeholder="Número do Pedido">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="text" name="titulo" value="{{ $ticket->titulo }}" class="form-control" placeholder="Titulo">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Conteudo:</strong>
                    <textarea class="form-control" style="height:150px" name="conteudo" placeholder="Detail">{{ $ticket->conteudo }}</textarea>
                </div>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-6">
                <button type="submit" class="btn btn-success"> Salva </button>
            </div>
        </div>

    </form>
@endsection