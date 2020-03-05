@extends('tickets.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Adicionar Ticket</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('tickets.index') }}"> ⇐ Volta na página Home</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cliente:</strong>
                    <select class="form-control" name="cliente_id">
                        @forelse($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->email_cliente}}</option>
                        @empty

                        @endforelse
                    </select>
                    {{--{!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control']) !!}--}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Número do Ticket:</strong>
                    <input type="text" name="numero_do_ticket" class="form-control" placeholder="Número do Ticket">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Número do Pedido:</strong>
                    <input type="text" name="numero_do_pedido" class="form-control" placeholder="Número do Pedido">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo do Pedido:</strong>
                    <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Conteúdo:</strong>
                    <textarea class="form-control" style="height:150px" name="conteudo" placeholder="Conteúdo"></textarea>
                </div>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-6">
                <button type="submit" class="btn btn-primary">Cadastra Ticket</button>
            </div>
        </div>

    </form>
@endsection