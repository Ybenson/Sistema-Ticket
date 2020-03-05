@extends('tickets.layout')

@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12" align="center">
                    <h1>Ferramenta simples de cadastro de tickets para o setor de atendimento ao cliente </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- Puxa o nome do modulo na configuracção do projeto -->
                    <div class="card-header text-md">
                        <h4>Página Principal do {{ config('app.name') }}</h4>
                    </div>

                    <!-- Os icones do Menu principal do Sistema -->
                    <div class="row p-4 " align="center">
                        <div class="col-lg-6">
                            <img class=" brand-image" src="{{('images/user.svg') }}"alt="Página principal" width="60" height="70">
                            <h3>Adicionar Cliente</h3>
                            <p><a href="{{route('clientes.create') }}" class="btn btn-secondary" role="button">Clica para começar »</a></p>
                        </div>
                        <div class="col-lg-6">
                            <img class=" brand-image" src="{{('images/ticket.svg') }}"alt="Adicionar Ticket" width="60" height="70">
                            <h3>Adicionar Ticket</h3>
                            <p><a href="{{route('tickets.create') }} " class="btn btn-secondary" role="button">Clica para começar »</a></p>
                        </div>


                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Parte do relatorio do sistema -->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($tickets) > 0)
        <div class="card">
        <table class="table table-bordered">

            <div class="card-header text-md">
                <h3 class="p-3" align="center">Relatório do sistema</h3>
            </div>

            <tr>
                <th>#</th>
                <th>N°Ticket</th>
                <th>N°Pedido</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">E-mail Cliente</th>
                <th class="text-center">Data de criação</th>
                <th class="text-center" width="280px">Açoes...</th>
            </tr>
            @foreach ($tickets as $ticket)

                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $ticket->numero_do_ticket}}</td>
                    <td>{{ $ticket->numero_do_pedido}}</td>
                    <td>{{ $ticket->titulo }}</td>
                    <td>{{ $ticket->cliente->email_cliente}}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>
                        <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('tickets.show',$ticket->id) }}"> Mostrar </a>
                            <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}"> Editar </a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"> Apagar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        </div>
    @else
        <div class="alert alert-alert">Copyright © 2020 . Ybenson Augustave - Todos os direitos reservados.</div>
    @endif

    {!! $tickets->links() !!}

@endsection