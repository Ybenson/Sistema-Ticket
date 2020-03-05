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
            <h4 class="btn-secondary text-center">Visualização Ticket de: {{ $ticket->cliente->nome_cliente }} </h4>
        </div>

    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $ticket->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero do Ticket:</strong>
                {{ $ticket->numero_do_ticket }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero do Pedido:</strong>
                {{ $ticket->numero_do_pedido }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Cliente:</strong>
                {{ $ticket->cliente->email_cliente }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $ticket->titulo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conteúdo:</strong>
                {{ $ticket->conteudo }}
            </div>
        </div>
    </div>
@endsection